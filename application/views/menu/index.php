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
        <a class="nav-link active" id="v-pills-a-tab" data-toggle="pill" href="#v-pills-a" role="tab" aria-controls="v-pills-a" aria-selected="true"><span class="badge bg-info">A</span> Reistrasi, Tagihan Ranap & Ralan, Pelayanan & Billing Pasien</a>
        <a class="nav-link" id="v-pills-b-tab" data-toggle="pill" href="#v-pills-b" role="tab" aria-controls="v-pills-b" aria-selected="false"><span class="badge bg-info">B</span> Input Data Tindakan, Obat & BHP Via Barcode No.Rawat</a>
        <a class="nav-link" id="v-pills-c-tab" data-toggle="pill" href="#v-pills-c" role="tab" aria-controls="v-pills-c" aria-selected="false"><span class="badge bg-info">C</span> Presensi, Manajemen & Penggajian Pegawai Rumah Sakit</a>
        <a class="nav-link" id="v-pills-d-tab" data-toggle="pill" href="#v-pills-d" role="tab" aria-controls="v-pills-d" aria-selected="false"><span class="badge bg-info">D</span> Transaksi Inventory Obat, BHP Medis, Alat Kesehatan Pasien</a>
        <a class="nav-link" id="v-pills-e-tab" data-toggle="pill" href="#v-pills-e" role="tab" aria-controls="v-pills-e" aria-selected="false"><span class="badge bg-info">E</span> Transaksi Inventory Barang Non Medis, Alat Kesehatan Pasien</a>
        <a class="nav-link" id="v-pills-f-tab" data-toggle="pill" href="#v-pills-f" role="tab" aria-controls="v-pills-f" aria-selected="false"><span class="badge bg-info">F</span> Aset, Inventaris Barang & Instalasi Kesehatan Lingkungan</a>
        <a class="nav-link" id="v-pills-g-tab" data-toggle="pill" href="#v-pills-g" role="tab" aria-controls="v-pills-g" aria-selected="false"><span class="badge bg-info">G</span> Menejemen Parkir Kendaraan Pasien & Karyawan</a>
        <a class="nav-link" id="v-pills-h-tab" data-toggle="pill" href="#v-pills-h" role="tab" aria-controls="v-pills-h" aria-selected="false"><span class="badge bg-info">H</span> Olah Data Tagihan Rawat Inap & Rawat Jalan</a>
        <a class="nav-link" id="v-pills-i-tab" data-toggle="pill" href="#v-pills-i" role="tab" aria-controls="v-pills-i" aria-selected="false"><span class="badge bg-info">I</span> Olah Data Penyekit, Laporan DKK, Laporan RL & Laporan Internal</a>
        <a class="nav-link" id="v-pills-j-tab" data-toggle="pill" href="#v-pills-j" role="tab" aria-controls="v-pills-j" aria-selected="false"><span class="badge bg-info">J</span> Tarif Pelayanan, Menejemen Keuangan & Akutansi</a>
        <a class="nav-link" id="v-pills-k-tab" data-toggle="pill" href="#v-pills-k" role="tab" aria-controls="v-pills-k" aria-selected="false"><span class="badge bg-info">K</span> Bridging VClaim, Aplicare, PCare, INACBG, Kemenkes & Pihak ke 3</a>
        <a class="nav-link" id="v-pills-l-tab" data-toggle="pill" href="#v-pills-l" role="tab" aria-controls="v-pills-l" aria-selected="false"><span class="badge bg-info">L</span> Olah Data Pasien</a>
        <a class="nav-link" id="v-pills-m-tab" data-toggle="pill" href="#v-pills-m" role="tab" aria-controls="v-pills-m" aria-selected="false"><span class="badge bg-info">M</span> Unit Pelayanan Tranfusi Darah</a>
        <a class="nav-link" id="v-pills-n-tab" data-toggle="pill" href="#v-pills-n" role="tab" aria-controls="v-pills-n" aria-selected="false"><span class="badge bg-info">N</span> Analisa, Dashboard & Info Grafik</a>
        <a class="nav-link" id="v-pills-o-tab" data-toggle="pill" href="#v-pills-o" role="tab" aria-controls="v-pills-o" aria-selected="false"><span class="badge bg-info">O</span> Manajemen Surat Masuk & Keluar, Pengumuman E-Pasien</a>
        <a class="nav-link" id="v-pills-p-tab" data-toggle="pill" href="#v-pills-p" role="tab" aria-controls="v-pills-p" aria-selected="false"><span class="badge bg-info">P</span> Manajemen Perpustakaan & Koleksi Pustaka Digital</a>
        <a class="nav-link" id="v-pills-q-tab" data-toggle="pill" href="#v-pills-q" role="tab" aria-controls="v-pills-q" aria-selected="false"><span class="badge bg-info">Q</span> Toko / Minimarket / Koperasi</a>
        <a class="nav-link" id="v-pills-r-tab" data-toggle="pill" href="#v-pills-r" role="tab" aria-controls="v-pills-r" aria-selected="false"><span class="badge bg-info">R</span> Pengelolaan Data Filantropi, CSR, Zakat, Infaq & Shodaqoh</a>
        <a class="nav-link" id="v-pills-s-tab" data-toggle="pill" href="#v-pills-s" role="tab" aria-controls="v-pills-s" aria-selected="false"><span class="badge bg-info">S</span> Pengaturan Program Aplikasi HMS</a>
        </div>
        </div>
        <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-a" role="tabpanel" aria-labelledby="v-pills-a-tab">
          <?php $this->load->view('menu/a.php');?>
        </div>
        <div class="tab-pane fade" id="v-pills-b" role="tabpanel" aria-labelledby="v-pills-b-tab">...</div>
        <div class="tab-pane fade" id="v-pills-c" role="tabpanel" aria-labelledby="v-pills-c-tab">...</div>
        <div class="tab-pane fade" id="v-pills-d" role="tabpanel" aria-labelledby="v-pills-d-tab">...</div>
        <div class="tab-pane fade" id="v-pills-e" role="tabpanel" aria-labelledby="v-pills-e-tab">...</div>
        <div class="tab-pane fade" id="v-pills-f" role="tabpanel" aria-labelledby="v-pills-f-tab">...</div>
        <div class="tab-pane fade" id="v-pills-g" role="tabpanel" aria-labelledby="v-pills-g-tab">...</div>
        <div class="tab-pane fade" id="v-pills-h" role="tabpanel" aria-labelledby="v-pills-h-tab">...</div>
        <div class="tab-pane fade" id="v-pills-i" role="tabpanel" aria-labelledby="v-pills-i-tab">...</div>
        <div class="tab-pane fade" id="v-pills-j" role="tabpanel" aria-labelledby="v-pills-j-tab">...</div>
        <div class="tab-pane fade" id="v-pills-k" role="tabpanel" aria-labelledby="v-pills-k-tab">...</div>
        <div class="tab-pane fade" id="v-pills-l" role="tabpanel" aria-labelledby="v-pills-l-tab">...</div>
        <div class="tab-pane fade" id="v-pills-m" role="tabpanel" aria-labelledby="v-pills-m-tab">...</div>
        <div class="tab-pane fade" id="v-pills-n" role="tabpanel" aria-labelledby="v-pills-n-tab">...</div>
        <div class="tab-pane fade" id="v-pills-o" role="tabpanel" aria-labelledby="v-pills-o-tab">...</div>
        <div class="tab-pane fade" id="v-pills-p" role="tabpanel" aria-labelledby="v-pills-p-tab">...</div>
        <div class="tab-pane fade" id="v-pills-q" role="tabpanel" aria-labelledby="v-pills-q-tab">...</div>
        <div class="tab-pane fade" id="v-pills-r" role="tabpanel" aria-labelledby="v-pills-r-tab">...</div>
        <div class="tab-pane fade" id="v-pills-s" role="tabpanel" aria-labelledby="v-pills-s-tab">...</div>
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
