<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
    <head>
        <?php
        $this->load->view('templates/admin/header');
        ?>
    </head>
    <body>
        <div class="xs-pd-20-10 pd-ltr-20">
            <!-- menu -->
            <?php
            $this->load->view('templates/admin/menu');
            ?>
            <!-- menu -->
        </div>
        <div class="container-fluid mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-3 col-md-3 col-sm-12 mb-30">
                    <a href="<?php echo site_url('farmasi/obat/input') ?>">
                        <div class="card-box pd-30 height-50-p">
                            <div class="progress-box text-center">
                                <img src="<?= base_url() ?>./assets/img/icon/iconfinder_cleaning-door-knob-object-hygiene_5728178.png"
                                     class="img-fluid" alt="...">
                                <div class="d-block mt-4">Input Penjualan Obat & BHP</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 mb-30">
                    <a href="">
                        <div class="card-box pd-30 height-50-p">
                            <div class="progress-box text-center">
                                <img src="<?= base_url() ?>./assets/img/icon/informasidokter.png" class="img-fluid" alt="...">
                                <div class="d-block mt-4">Input Penjualan Obat & BHP</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 mb-30">
                    <a href="">
                        <div class="card-box pd-30 height-50-p">
                            <div class="progress-box text-center">
                                <img src="<?= base_url() ?>./assets/img/icon/checklist.png" class="img-fluid" alt="...">
                                <div class="d-block mt-4">Data Penyerahan Darah</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 mb-30">
                    <a href="">
                        <div class="card-box pd-30 height-50-p">
                            <div class="progress-box text-center">
                                <img src="<?= base_url() ?>./assets/img/icon/if_website_-_address_book_3440827.png"
                                     class="img-fluid" alt="...">
                                <div class="d-block mt-4">Daftar Resep Dokter</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 mb-30">
                    <a href="">
                        <div class="card-box pd-30 height-50-p">
                            <div class="progress-box text-center">
                                <img src="<?= base_url() ?>./assets/img/icon/Icon-Booking.png" class="img-fluid" alt="...">
                                <div class="d-block mt-4">No. Resep</div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
        <?php $this->load->view('templates/admin/footer'); ?>
    </body>
</html>