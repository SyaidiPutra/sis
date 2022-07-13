<?php require_once('head.php') ?>
<?php 
  $config = json_decode($_SESSION['config'], true);
  $db = $config['db'];
  $user = $config['account'];
?>
<div class="row">
  <div class="col-md-4 d-sm-block d-none">gambar</div>
  <div class="col-md">
    <h3>Confirmasi</h3>
    <h5>Database</h5>
      <table class="table table-sm table-borderless">
        <tbody>
          <tr>
            <td>Host</td>
            <th> : <?= $db['data']['host'] . ":" . $db['data']['port'] ?></th>
          </tr>
          <tr>
            <td>Username</td>
            <th> : <?= $db['data']['username'] ?></th>
          </tr>
          <tr>
            <td>Password</td>
            <th> : <?= ($db['data']['password'] == '')? 'Kosong' : "********" ?></th>
          </tr>
          <tr>
            <td>Databases</td>
            <th> : <?= $db['data']['name'] ?></th>
          </tr>
        </tbody>
      </table>
    <h5>Useradmin</h5>
    <table class="table table-sm table-borderless">
        <tbody>
          <tr>
            <td>Usernmae</td>
            <th> : <?= $user['username'] ?></th>
          </tr>
          <tr>
            <td>Email</td>
            <th> : <?= $user['email'] ?></th>
          </tr>
        </tbody>
      </table>
    <div class="text-end mt-3">
      <a href="install/nextpage" class="btn btn-success">Install Now</a>
    </div>
  </div>
</div>
<?php require_once('foot.php') ?>