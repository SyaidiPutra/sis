<?php require_once('head.php') ?>
<?php 
  $config = json_decode($_SESSION['config'], true);
  $db = $config['db'];
  $user = $config['account'];
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<div class="row">
  <div class="col-md-4 d-sm-block d-none">gambar</div>
  <div class="col-md">
    <h3>Install Berlangsung</h3>
    <div style="height: 50vh;" >
        <div id="msgBox" class="text-success mt-3 fw-bold">
            <p class="m-0">Persiapan Selesai</p>
            <p class="m-0">Pemasangan Database</p>
        </div>
        <p class="fw-bold text-warning">
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            <span id="textProg"></span>
        </p>
    </div>
  </div>
</div>
<script>
    function persiapan() {
        setTimeout(() => {
            $.post('install/proses/config', function(respon){
                console.log(respon);
            })
        }, 2000);
    }
    persiapan()
    $('#msgBox').prepend('<p class="m-0">Pemasangan Database</p>')
</script>
<?php require_once('foot.php') ?>