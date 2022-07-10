<?php require_once('head.php'); $db = $_GET['config']['db']; ?>
<div class="row">
    <div class="col-md-4 d-sm-block d-none">gambar</div>
    <div class="col-md">
       
        <h3><?= ($db['status'] == true)? 'Hore, Waktunya Menyiapkan Account Admin' : 'Yah, Gagal Koneksi' ?></h3>
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
                    <div class="has-validation">
                    <input type="text" class="form-control" id="password" name="password" required>
                        <div class="invalid-feedback">
                            Mohon Masukan Password
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="confirPasswod" class="form-label">Konfirmasi</label>
                    <div class="has-validation">
                    <input type="password" class="form-control" id="confirPasswod" name="confirPasswod" required>
                        <div class="invalid-feedback">
                            Mohon Masukan Konfirmasi
                        </div>
                    </div>
                </div>
            </div>
            <?php else: ?>
            <p>Yah Gagal Menyiapkan Databasenya silahkan cek kembali koneksinya!</p>
            <?php endif; ?>
            <div class="text-end mt-3">
              <?php if($db['status'] == false) : ?>
              <a href="install/backpage" class="btn btn-Secondary">Kembali</a>
              <?php else: ?>
              <button type="submit" class="btn btn-primary">Lanjut</button>
             <?php endif; ?>
            </div>
        </form>
    </div>
</div>

<script>
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
