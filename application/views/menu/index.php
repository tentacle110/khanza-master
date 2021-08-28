<div class="xs-pd-20-10 pd-ltr-20">
    <!-- menu -->
    <?php
    $this->load->view('templates/admin/menu');
    ?>
    <!-- menu -->
</div>
<div class="container-fluid mt-5">
  <div class="row">
    <div class="row">
        <div class="col-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
        </div>
        </div>
        <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
          <div class="row d-flex justify-content-center">
              <div class="col-lg-3 col-md-3 col-sm-12 mb-30">
                  <a href="">
                      <div class="card-box pd-30 height-50-p">
                          <div class="progress-box text-center">
                              <img src="<?= base_url() ?>./assets/img/icon/iconfinder_cleaning-door-knob-object-hygiene_5728178.png" class="img-fluid" alt="...">

                              <div class="d-block mt-4">Informasi Kamar</div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 mb-30">
                  <a href="<?= base_url() ?>informasi/jadwal_praktek_dokter">
                      <div class="card-box pd-30 height-50-p">
                          <div class="progress-box text-center">
                              <img src="<?= base_url() ?>./assets/img/icon/informasidokter.png" class="img-fluid" alt="...">
                              <div class="d-block mt-4">Jadwal Praktek</div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 mb-30">
                  <a href="<?= base_url() ?>admin/registrasi">
                      <div class=" card-box pd-30 height-50-p">
                          <div class="progress-box text-center">
                              <img src="<?= base_url() ?>./assets/img/icon/checklist.png" class="img-fluid" alt="...">
                              <div class="d-block mt-4">Registrasi</div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 mb-30">
                  <a href="">
                      <div class="card-box pd-30 height-50-p">
                          <div class="progress-box text-center">
                              <img src="<?= base_url() ?>./assets/img/icon/if_website_-_address_book_3440827.png" class="img-fluid" alt="...">
                              <div class="d-block mt-4">Booking Periksa</div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 mb-30">
                  <a href="">
                      <div class="card-box pd-30 height-50-p">
                          <div class="progress-box text-center">
                              <img src="<?= base_url() ?>./assets/img/icon/Icon-Booking.png" class="img-fluid" alt="...">
                              <div class="d-block mt-4">Booking Registrasi</div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 mb-30">
                  <a href="">
                      <div class="card-box pd-20 height-50-p">
                          <div class="progress-box text-center">
                              <img src="<?= base_url() ?>./assets/img/icon/iconigd.png" class="img-fluid" alt="...">
                              <div class="d-block mt-4">IGD / UGD</div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class=" col-lg-3 col-md-3 col-sm-12 mb-30">
                  <a href="">
                      <div class="card-box pd-30 height-50-p">
                          <div class="progress-box text-center">
                              <img src="<?= base_url() ?>./assets/img/icon/icon-tindakan-rajal.png" class="img-fluid" alt="...">
                              <div class="d-block mt-4">Tindakan Ralan</div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 mb-30">
                  <a href="">
                      <div class="card-box pd-30 height-50-p">
                          <div class="progress-box text-center">
                              <img src="<?= base_url() ?>./assets/img/icon/tindakanranap.png" class="img-fluid" alt="...">
                              <div class="d-block mt-4">Permintaan Rawat Inap</div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 mb-30">
                  <div class="card-box pd-30 height-50-p">
                      <a href="">
                          <div class="progress-box text-center">
                              <img src="<?= base_url() ?>./assets/img/icon/home.png" class="img-fluid" alt="...">
                              <div class="d-block mt-4">Rawat Inap</div>
                          </div>
                  </div>
                  </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 mb-30">
                  <a href="">
                      <div class="card-box pd-30 height-50-p">
                          <div class="progress-box text-center">
                              <img src="<?= base_url() ?>./assets/img/icon/JadwalOperasi.png" class="img-fluid" alt="...">
                              <div class="d-block mt-4">Jadwal Operasi</div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 mb-30">
                  <a href="">
                      <div class="card-box pd-30 height-50-p">
                          <div class="progress-box text-center">
                              <img src="<?= base_url() ?>./assets/img/icon/if_laboratory_44676.png" class="img-fluid" alt="...">
                              <div class="d-block mt-4">Permintaan Lab PK</div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 mb-30">
                  <a href="">
                      <div class="card-box pd-30 height-50-p">
                          <div class="progress-box text-center">
                              <img src="<?= base_url() ?>./assets/img/icon/if_laboratory_44676.png" class="img-fluid" alt="...">
                              <div class="d-block mt-4">Permintaan Lab Pa</div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 mb-30">
                  <a href="">
                      <div class="card-box pd-30 height-50-p">
                          <div class="progress-box text-center">
                              <img src="<?= base_url() ?>./assets/img/icon/radiologi.png" class="img-fluid" alt="..." style="width:45px;">

                              <div class="d-block mt-4">Permintaan Radiologi</div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 mb-30">
                  <a href="">
                      <div class="card-box pd-30 height-50-p">
                          <div class="progress-box text-center">
                              <img src="<?= base_url() ?>./assets/img/icon/doctor2.png" class="img-fluid" alt="...">
                              <div class="d-block mt-4">DPJP Ranap</div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 mb-30">
                  <a href="">
                      <div class="card-box pd-30 height-50-p">
                          <div class="progress-box text-center">
                              <img src="<?= base_url() ?>./assets/img/icon/tindakanranap.png" class="img-fluid" alt="...">
                              <div class="d-block mt-4">Tindakan Ranap</div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 mb-30">
                  <a href="">
                      <div class="card-box pd-30 height-50-p">
                          <div class="progress-box text-center">
                              <img src="<?= base_url() ?>./assets/img/icon/if_surgeon_45573.png" class="img-fluid" alt="...">
                              <div class="d-block mt-4">Operasi / VK</div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 mb-30">
                  <a href="">
                      <div class="card-box pd-30 height-50-p">
                          <div class="progress-box text-center">
                              <img src="<?= base_url() ?>./assets/img/icon/if_doctor_128404.png" class="img-fluid" alt="...">

                              <div class="d-block mt-4">Rujukan Keluar</div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 mb-30">
                  <a href="">
                      <div class="card-box pd-30 height-50-p">
                          <div class="progress-box text-center">
                              <img src="<?= base_url() ?>./assets/img/icon/if_vector_65_13_473800.png" class="img-fluid" alt="...">
                              <div class="d-block mt-4">Rujukan Masuk</div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 mb-30">
                  <a href="">
                      <div class="card-box pd-30 height-50-p">
                          <div class="progress-box text-center">
                              <img src="<?= base_url() ?>./assets/img/icon/first_aid_kit.png" class="img-fluid" alt="...">
                              <div class="d-block mt-4">Beri Obat / BHP</div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 mb-30">
                  <a href="">
                      <div class="card-box pd-30 height-50-p">
                          <div class="progress-box text-center">
                              <img src="<?= base_url() ?>./assets/img/icon/IconResepPulang.png" class="img-fluid" alt="...">
                              <div class="d-block mt-4">Resep Pulang</div>
                          </div>
                      </div>
                  </a>
              </div>

          </div>
        </div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
        </div>
        </div>
        </div>

  </div>

</div>
<!-- copyright -->
<?php
$this->load->view('templates/admin/copyright');
?>
<!-- copyright -->
