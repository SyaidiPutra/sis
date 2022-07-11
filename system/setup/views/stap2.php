<?php require_once('head.php') ?>
<div class="row">
    <div class="col-md-4 d-sm-block d-none">gambar</div>
    <div class="col-md">
        <h3>Menyiapkan Penyimpanan</h3>
        <form action="install/DBConnect" method="post" class="mt-3 needs-validation" novalidate>
            <div class="row">
                <div class="col-md-8">
                    <label for="host" class="form-label">Host</label>
                    <div class="has-validation">
                    <input type="text" class="form-control" id="host" name="host" required>
                        <div class="invalid-feedback">
                            Mohon Masukan Host
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="port" class="form-label">Port</label>
                    <div class="has-validation">
                    <input type="number" class="form-control" id="port" name="port" required>
                        <div class="invalid-feedback">
                            Mohon Masukan Port
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="username" class="form-label">Username</label>
                    <div class="has-validation">
                    <input type="text" class="form-control" id="username" name="username" required>
                        <div class="invalid-feedback">
                            Mohon Masukan Username
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label">password</label>
                    <div class="has-validation">
                    <input type="password" class="form-control" id="password" name="password">
                        <div class="invalid-feedback">
                            Mohon Masukan password
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="name" class="form-label">Nama Databases</label>
                    <div class="has-validation">
                    <input type="text" class="form-control" id="name" name="name" required>
                        <div class="invalid-feedback">
                            Mohon Masukan Nama Databases
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="text-end mt-3">
            <!-- <a href="install/backpage" class="btn btn-primary">Mulai</a> -->
                <button type="submit" class="btn btn-primary">Lanjut</button>
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