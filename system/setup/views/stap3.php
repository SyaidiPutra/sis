<?php require_once('head.php'); $db = json_decode($_SESSION['config'], true)['db']; ?>
<div class="row">
    <div class="col-md-4 d-sm-block d-none">gambar</div>
    <div class="col-md">
        <h3><?= ($db['status'])? 'Hore, Waktunya Menyiapkan Account Admin' : 'Yah, Gagal Koneksi' ?></h3>
        <form action="install/UserCreate" method="post" class="mt-3 needs-validation" novalidate>
            <?php if($db['status'] == true): ?>
            <div class="row">
                <div class="col-md-12">
                    <label for="username" class="form-label">Port</label>
                    <div class="has-validation">
                    <input type="text" class="form-control" id="username" name="username" required>
                        <div class="invalid-feedback">
                            Mohon Masukan Username
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="col-md-6">
                    <label for="confirPasswod" class="form-label">Konfirmasi</label>
                    <input type="password" class="form-control" id="confirPasswod" name="confirPasswod" required>
                </div>
            </div>
            <p  id="notifpass" class="text-danger">Password Tidak Sama dengan Konfirmasi</p>
            <?php else: ?>
            <p>Yah Gagal Menyiapkan Databasenya silahkan cek kembali koneksinya!</p>
            <p>Error Databases : <?= $db['data']['msg'] ?></p>
            <?php endif; ?>
            <div class="text-end mt-3">
              <?php if($db['status'] == false) : ?>
              <a href="install/backpage" class="btn btn-secondary">Kembali</a>
              <?php else: ?>
              <button id="btnsave" type="submit" class="btn btn-primary">Lanjut</button>
             <?php endif; ?>
            </div>
        </form>
    </div>
</div>

<script>

var btnid = document.getElementById('btnsave')
var pass = document.getElementById('password')
var config = document.getElementById('confirPasswod')
var norif = document.getElementById('notifpass')
setInterval(function () {
  if(pass.value !== ''){
    if(pass.value == config.value){
      btnid.removeAttribute('disabled')
      norif.style.display = 'none';
    }else{
      btnid.setAttribute('disabled', true)
      if(config.value !== ""){
        norif.style.display = '';
      }else{
        norif.style.display = 'none';
      }
    }
  }else{
    btnid.setAttribute('disabled', true)
    norif.style.display = 'none';
  }
}, 1000);

    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
<?php require_once('foot.php') ?>
