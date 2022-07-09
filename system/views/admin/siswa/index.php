<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Daftar Siswa</h4>
                  <p class="card-description">
                  <a href="<?= BASE_URL ?>/admin/siswa/create" class="btn btn-primary btn-icon-text">
                          <i class="ti-upload btn-icon-prepend"></i>                                                    
                          Tambah Data
                        </a>
                        <a type="button" class="btn btn-dark btn-icon-textt">
                          Print
                          <i class="ti-printer btn-icon-append"></i>                                                                              
                        </a>
                  </p>
                  <div class="table-responsive">
                    <table class="table siswa">
                   
                    <!-- Short One For Coding -->
                    <!-- <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Profil</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NISN</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Alat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $n = 1
                        @endphp
                        @foreach ($ as $)
                        <tr>
                            <th scope="row">{{ $n }}</th>
                            <td>{{  }}</td>
                            <td>{{  }}</td>
                            <td>{{  }}</td>
                            <td>{{  }}</td>
                            <td>{{  }}</td>
                            <td>
                                <a type="button" class="btn btn-social-icon btn-outline-facebook" title="Detail"><i class="mdi mdi-account-search"></i></a>                                                                  
                                <a type="button" class="btn btn-social-icon btn-outline-twitter" title="Edit"><i class="mdi mdi-border-color"></i></a>
                                <button type="button" class="btn btn-social-icon btn-outline-youtube" title="Hapus"><i class="mdi mdi-delete"></i></button>
                            </td>
                        </tr>
                        @php
                            $n++
                        @endphp
                        @endforeach
                    </tbody> -->
                    <!-- Short One For Coding END -->

                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Profil
                          </th>
                          <th>
                            Nama
                          </th>
                          <th>
                            NISN
                          </th>
                          <th>
                            Kelas
                          </th>
                          <th>
                            Tanggal Lahir
                          </th>
                          <th>
                            Alat
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        <td>
                            01
                          </td>
                          <td class="py-1">
                            <img src="../../images/faces/face1.jpg" alt="image"/>
                          </td>
                          <td>
                            Herman Beck
                          </td>
                          <td>
                            0000000000000000
                          </td>
                          <td>
                            9A
                          </td>
                          <td>
                            May 15, 2015
                          </td>
                          <td>
                            <button type="button" class="btn btn-social-icon btn-outline-facebook" title="Detail"><i class="mdi mdi-account-search"></i></button>                                                                  
                            <button type="button" class="btn btn-social-icon btn-outline-twitter" title="Edit"><i class="mdi mdi-border-color"></i></button>
                            <button type="button" class="btn btn-social-icon btn-outline-youtube" title="Hapus"><i class="mdi mdi-delete"></i></button>  
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>