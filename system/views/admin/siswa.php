<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">INPUT DATA SISWA</h4>
                  <p class="card-description">
                    Masukan Data Siswa
                  </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputName1">Nama</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">NISN</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" placeholder="NISN">
                    </div>
                    <div class="form-group" data-provide="datepicker">
                      <label for="tanggal">Tanggal lahir</label>
                      <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                        <span class="input-group-addon input-group-prepend border-right">
                            <span class="icon-calendar input-group-text calendar-icon"></span>
                        </span>
                        <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Jenis Kelamin</label>
                        <select class="form-control" id="exampleSelectGender">
                          <option>Laki-laki</option>
                          <option>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Alamat</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                      <label>Foto Siswa</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>