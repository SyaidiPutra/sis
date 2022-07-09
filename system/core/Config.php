<?php

class Config {

    public function __construct()
    {
        $this->data = json_decode(file_get_contents('../system/config.cof'),true);
        
    }

    public function config($key)
    {
        return $this->data[$key];
    }
    public function addConfig($config, $key, $val)
    {

    }

}