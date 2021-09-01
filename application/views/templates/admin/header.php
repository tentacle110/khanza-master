<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>SIMRS KHANZA</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url(); ?>assets/vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(); ?>assets/img/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>assets/img/logo.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/src/plugins/datatables/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendors/styles/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendors/DataTables-1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendors/select2.min.css" />
    <!-- contex.js -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/src/styles/context.standalone.css">

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script> -->
    <!-- Bootstrap 5-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendors/bootstrap-5.0.2/css/bootstrap.min.css"/>
    <script src="<?= base_url(); ?>assets/vendors/js/bootstrap-5.0.2/css/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="<?= base_url(); ?>assets/vendors/js/select2.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendors/jquery-3.6.0/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendors/DataTables-1.10.25/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/src/styles/custom.css">
</head>

<body>
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo d-flex align-items-center">
                <a href="<?= base_url(); ?>admin/dashboard">
                    <img style="width:50px;" src="<?= base_url(); ?>assets/img/logo.jpg" alt="">
                    <h3 class="pl-2">SIMRS KHANZA</h3>
                </a>
            </div>
            <div class="header-right d-flex align-items-center">
                <div class="user-info-dropdown">
                    <div class="nav-item">
                        <a class="dropdown-toggle nav-link" href="#" role="button" data-toggle="dropdown">
                            <!-- <span class="user-icon">
                            <img src="<?= base_url(); ?>assets/img/icon/1360816018_tests.png" alt="">
                        </span>  -->
                            <span class="user-name">Program</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="<?= base_url(); ?>auth/reset_password"><i class="dw dw-settings2"></i> Ubah Password</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>auth/logout"><i class="dw dw-logout"></i> Log Out</a>
                        </div>
                    </div>
                </div>
                <div class="user-info-dropdown">
                    <div class="nav-item">
                        <a class="dropdown-toggle nav-link" href="#" role="button" data-toggle="dropdown">
                            <!-- <span class="user-icon">
                            <img src="<?= base_url(); ?>assets/img/icon/1360816018_tests.png" alt="">
                        </span> -->
                            <span class="user-name">Informasi</span>
                        </a>
                        <div class=" dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="<?= base_url() ?>informasi/pasien_kamar_inap"><i class="icon-copy dw dw-magnifying-glass"></i> Pasien kamar Inap</a>
                            <a class="dropdown-item" href="<?= base_url() ?>informasi/telusur_kunjungan_pasien"><i class="icon-copy dw dw-magnifying-glass"></i> Telusur Kunjungan Pasien</a>
                            <a class="dropdown-item" href="<?= base_url() ?>informasi/penggunaan_kamar_inap"><i class="icon-copy dw dw-magnifying-glass"></i> Penggunaan Kamar Inap</a>
                            <a class="dropdown-item" href="<?= base_url() ?>informasi/informasi_ketersediaan_stok_darah"><i class="icon-copy dw dw-magnifying-glass"></i> Ketersediaan Stok Darah UTD</a>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <a class="dropdown-item" href="<?= base_url() ?>informasi/tarif_kamar"><i class="icon-copy dw dw-magnifying-glass"></i> Tarif Kamar</a>
                            <a class="dropdown-item" href="<?= base_url() ?>informasi/tarif_laboratorium"><i class="icon-copy dw dw-magnifying-glass"></i> Tarif Laboratorium</a>
                            <a class="dropdown-item" href="<?= base_url() ?>informasi/tarif_radiologi"><i class="icon-copy dw dw-magnifying-glass"></i> Tarif Radiologi</a>
                            <a class="dropdown-item" href="<?= base_url() ?>informasi/tarif_operasi_vk"><i class="icon-copy dw dw-magnifying-glass"></i> Tarif Operasi & VK</a>
                            <a class="dropdown-item" href="<?= base_url() ?>informasi/tarif_rawat_jalan"><i class="icon-copy dw dw-magnifying-glass"></i> Tarif Rawat Jalan</a>
                            <a class="dropdown-item" href="<?= base_url() ?>informasi/tarif_rawat_inap"><i class="icon-copy dw dw-magnifying-glass"></i> Tarif Rawat Inap</a>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <a class="dropdown-item" href="<?= base_url() ?>informasi/jadwal_praktek_dokter"><i class="icon-copy dw dw-magnifying-glass"></i> Jadwal Praktek Dokter</a>
                            <a class="dropdown-item" href="#"><i class="icon-copy dw dw-magnifying-glass"></i> Dashboard Info Bed 1</a>
                            <a class="dropdown-item" href="#"><i class="icon-copy dw dw-magnifying-glass"></i> Dashboard Info Bed 2</a>
                            <a class="dropdown-item" href="#"><i class="icon-copy dw dw-magnifying-glass"></i> Dashboard Info Jadwal Dokter</a>
                            <a class="dropdown-item" href="#"><i class="icon-copy dw dw-magnifying-glass"></i> Dashboard Info Bed & Jadwal Dokter</a>
                            <a class="dropdown-item" href="#"><i class="icon-copy dw dw-magnifying-glass"></i> Dashboard Register Poli</a>
                            <a class="dropdown-item" href="#"><i class="icon-copy dw dw-magnifying-glass"></i> Dashboard Jadwal Operasi</a>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <a class="dropdown-item" href="#"><i class="icon-copy dw dw-magnifying-glass"></i> Koleksi Penelitian</a>
                            <a class="dropdown-item" href="#"><i class="icon-copy dw dw-magnifying-glass"></i> Cari Koleksi E-Book</a>
                            <a class="dropdown-item" href="#"><i class="icon-copy dw dw-magnifying-glass"></i> Cari Inventaris Perpustakaan</a>
                        </div>
                    </div>
                </div>
                <div class="user-info-dropdown">
                    <div class="nav-item">
                        <a class="dropdown-toggle nav-link" href="#" role="button" data-toggle="dropdown">
                            <!-- <span class="user-icon">
                            <img src="<?= base_url(); ?>assets/img/icon/1360816018_tests.png" alt="">
                        </span> -->
                            <span class="user-name">Anjungan & Antrian</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="#"><i class="icon-copy dw dw-diagonal-arrow-16"></i> Anjungan Registrasi Mandiri</a>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <a class="dropdown-item" href="#"><i class="icon-copy dw dw-diagonal-arrow-16"></i> Antrian Loket</a>
                            <a class="dropdown-item" href="#"><i class="icon-copy dw dw-diagonal-arrow-16"></i>Antrian Unit/Poliklinik</a>
                            <a class="dropdown-item" href="#"><i class="icon-copy dw dw-diagonal-arrow-16"></i>Antrian Apotek</a>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <a class="dropdown-item" href="#"><i class="icon-copy dw dw-diagonal-arrow-16"></i>Verifikasi Digital Klaim</a>
                        </div>
                    </div>
                </div>
                <div class="user-info-dropdown">
                    <div class="nav-item">
                        <a class="dropdown-toggle nav-link" href="#" role="button" data-toggle="dropdown">
                            <!-- <span class="user-icon">
                            <img src="<?= base_url(); ?>assets/img/icon/1360816018_tests.png" alt="">
                        </span> -->
                            <span class="user-name">Tentang Program</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
