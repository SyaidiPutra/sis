<?php

class Databases extends Config{

    protected $host, $username,$password,$database,$port;

    // ==================================

    protected $isGET = false;

    protected $table_ = '';
    protected $where_ = '';
    protected $first_ = '';


    private function con()
    {
        $con = $this->config('Databases');
        $mysql = mysqli_connect($con['host'], $con['user'], $con['pass'], $con['name'], $con['port']);
        if(mysqli_connect_errno()){
            echo("Error Connection MYSQL : " . mysqli_connect_error());
            exit;
        }
        return $mysql;
    }
    private function excet($query)
    {

        // die($query);

        $sql = $this->con();
        $query = mysqli_query($sql,$query);
        if(empty(mysqli_errno($sql))){
            if($this->isGET == true){
                $results = mysqli_fetch_all($query, MYSQLI_ASSOC);
                if($this->first_ !== ''){
                    return $results[0];
                }else{
                    return $results;
                }
            }else{
                return true;
            }
        }else{
            die("Databases Excet Error : " . mysqli_error($sql));
        }
    }
    public function first()
    {
        $this->first_ = "LIMIT 1";
        return $this;
    }
    public function table($tbl)
    {
        $this->table_ = $tbl;
        return $this;
    }
    public function get($gt = "*")
    {
        $this->isGET = true;
        $query = "SELECT {$gt} FROM {$this->table_} {$this->where_} {$this->first_}";
        return $this->excet($query);
    }
    public function query($query)
    {
        return $this->excet($query);
    }
    public function where($key, $val)
    {
        $this->where_ = "WHERE {$key} = {$val}";
        return $this;
    }
    public function insert(array $data)
    {
        foreach($data as $key => $val){
            $col[] = $key;
            $input[] = "'" . $val . "'";
        }
        $col = implode(",", $col);
        $input = implode(",", $input);

        return $this->excet("INSERT INTO {$this->table_} ({$col}) VALUES ({$input})");
    }
    public function update(array $data)
    {
        foreach($data as $key => $val){
            $input[] = $key .  "='" . $val . "'";
        }
        $input = implode(',', $input);

        return $this->excet("UPDATE {$this->table_} SET {$input} {$this->where_}");
    }
    public function delete()
    {
        return $this->excet("DELETE FROM {$this->table_} {$this->where_}");
    }
}