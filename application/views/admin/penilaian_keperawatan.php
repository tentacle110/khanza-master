<div class="xs-pd-20-10 pd-ltr-20">
    <!-- menu -->
    <?php
    $this->load->view('templates/admin/menu');
    ?>
    <!-- menu -->
    <!-- toasts -->
    <div>
        <?php
        $this->load->view('alert');
        ?>
    </div>
    <!-- toasts -->
</div>
<div class="container-fluid">

    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Penilaian Keperawatan Rawat Jalan</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Registrasi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h2 class="text-blue h2">Penilaian Awal Keperawatan Rawat Jalan</h2>
                </div>
            </div>

            <div class="pd-20 card-box mb-30">

                <!-- tab navs menu -->
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Input Penilaian</a>
                        <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Data Penilaian</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <!-- Input Penilaian-->
                    <div class="tab-pane fade show active" id="nav-home" id="table-responsive-cliente" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <label class="form-label">No. Rawat</label>
                                <input type="text" class="form-control" name="" value="" readonly>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label"> &nbsp</label>
                                <input type="text" class="form-control" name="" value="" readonly>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label"> &nbsp</label>
                                <input type="text" class="form-control" name="" value="" readonly>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="" value="" readonly>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Jenis Kelamin</label>
                                <input type="text" class="form-control" name="" value="" readonly>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <label class="form-label">Petugas</label>
                                <input type="text" class="form-control" name="" value="">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">&nbsp</label>
                                <div class="input-group-append">
                                    <input type="text" class="form-control" name="" value="">
                                    <button class="btn btn-outline-secondary" type="button" data-toggle="modal" onclick=""><i class="icon-copy dw dw-add"></i></button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Tanggal</label>
                                <input type="date" class="form-control" name="" value="">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Jam</label>
                                <input type="time" class="form-control" name="" value="">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Informasi didapat dari</label>
                                <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                    <option selected>Open this select menu</option>
                                    <option value="Autoanamnesis">Autoanamnesis</option>
                                    <option value="Alloanamnesis">Alloanamnesis</option>
                                </select>
                            </div>
                        </div>
                        <hr class="mt-2 mb-2">
                        <h5>I. KEADAAN UMUM</h5>
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <label class="form-label">TD (mmHg)</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">Nadi (x/menit)</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">RR (x/menit)</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">Suhu (Celcius)</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">GCS(E,V,M)</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                            </div>
                        </div>
                        <hr class="mt-2 mb-2">
                        <h5>II. STATUS NUTRISI</h5>
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <label class="form-label">BB (KG)</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">TB (CM)</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">BMI (Kg/m2)</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                            </div>
                        </div>
                        <hr class="mt-2 mb-2">
                        <h5>III. RIWAYAT KESEHATAN</h5>
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <label for="exampleFormControlTextarea1" class="form-label">Keluhan Utama</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleFormControlTextarea1" class="form-label">Riwayat Penyakit Keluarga</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <label for="exampleFormControlTextarea1" class="form-label">Riwayat Penyakit Dahulu</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleFormControlTextarea1" class="form-label">Riwayat Pengobatan</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <label class="form-label">Riwayat Alergi</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                            </div>
                        </div>
                        <hr class="mt-2 mb-2">
                        <h5>IV. FUNGSIONAL</h5>
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <label class="form-label">Alat Bantu</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="Tidak">Tidak</option>
                                        <option value="Ya">Ya</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">&nbsp</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Prothesa</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="Tidak">Tidak</option>
                                        <option value="Ya">Ya</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">&nbsp</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <label class="form-label">Cacat fisik</label>
                                    <input type="text" class="form-control" name="" value="" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Aktivitas Kehidupan Sehari-hari (ADL)</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="Mandiri">Mandiri</option>
                                        <option value="Dibantu">Dibantu</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-2 mb-2">
                        <h5>V. RIWAYAT PSIKO-SOSIAL, SPIRITUAL & BUDAYA</h5>
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <label class="form-label">Status Psikologi</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="Tenang">Tenang</option>
                                        <option value="Takut">Takut</option>
                                        <option value="Cemas">Cemas</option>
                                        <option value="Depresi">Depresi</option>
                                        <option value="Lain-lain">Lain-lain</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">&nbsp</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Bahasa Sehari-hari</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label class="form-label">Hub. Pasien dengan Anggota Keluarga</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Tidak Baik">Tidak Baik</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Tinggal Dengan</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="Sendiri">Sendiri</option>
                                        <option value="Orangtua">Orangtua</option>
                                        <option value="Suami / Istri">Suami / Istri</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">&nbsp</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Ekonomi</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Cukup">Cukup</option>
                                        <option value="Kurang">Kurang</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <label class="form-label">Kepercayaan / Budaya / Nilai-Nilai Khusus yang Perlu Diperhatikan</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="Tidak Ada">Tidak Ada</option>
                                        <option value="Ada">Ada</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">&nbsp</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <label class="form-label">Agama</label>
                                    <input type="text" class="form-control" name="" value="" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Edukasi Diberikan Kepada</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="Pasien">Pasien</option>
                                        <option value="Keluarga">Keluarga</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">&nbsp</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                            </div>
                        </div>
                        <hr class="mt-2 mb-2">
                        <h5>VI. PENILAIAN RESIKO JATUH</h5>
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <label class="form-label">Tidak seimbang / sempoyongan / limbung</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="Tidak">Tidak</option>
                                        <option value="Ya">Ya</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Jalan Menggunakan Alat Bantu (kruk,tripot,kursi roda,orang lain)</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="Tidak">Tidak</option>
                                        <option value="Ya">Ya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <label class="form-label">Menopang Saat Akan Duduk, Tampak Memegang Pinggiran Kursi/Meja/Benda Lain Sebagai Penompang</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="Tidak">Tidak</option>
                                        <option value="Ya">Ya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <label class="form-label">Hasil</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="Tidak Beresiko (tidak ditemukan A dan B)">Tidak Beresiko (tidak ditemukan A dan B)</option>
                                        <option value="Resiko Rendah (Ditemukan A/B)">Resiko Rendah (Ditemukan A/B)</option>
                                        <option value="Resiko Tinggi (Ditemukan A dan B">Resiko Tinggi (Ditemukan A dan B</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Dilaporkan Kepada</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="Tidak">Tidak</option>
                                        <option value="Ya">Ya</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Jam Dilaporkan</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>

                            </div>
                        </div>
                        <hr class="mt-2 mb-2">
                        <h5>VII. SKRINING GIZI</h5>
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <label class="form-label">Apakah Ada Penurunan Berat Badan yang Tidak Diinginkan Selama 6 Bulan Terakhir?</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="Tidak">Tidak</option>
                                        <option value="Tidak Yakin">Tidak Yakin</option>
                                        <option value="Ya, 1-5Kg">Ya, 1-5Kg</option>
                                        <option value="Ya, 6-10Kg">Ya, 6-10Kg</option>
                                        <option value="Ya, 11-15Kg">Ya, 11-15Kg</option>
                                        <option value="Ya, >15Kg">Ya, >15Kg</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Nilai</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <label class="form-label">Apakah Nafsu Anda Berkurang Karena Tidak Nafsu Makan?</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="Tidak">Tidak</option>
                                        <option value="Ya">Ya</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Nilai</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-2 mb-2">
                        <h5>VIII. PENILAIAN TINGKAT NYERI</h5>
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <img src="<?= base_url(); ?>assets/img/main/nyeri.png" class="img-fluid" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-4">
                                    <label class="form-label">Tingkat Nyeri</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="Tidak Ada Nyeri">Tidak Ada Nyeri</option>
                                        <option value="Nyeri Akut">Nyeri Akut</option>
                                        <option value="Nyeri Kronis">Nyeri Kronis</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Penyebab</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="Proses Penyakit">Proses Penyakit</option>
                                        <option value="Benturan">Benturan</option>
                                        <option value="Lain-Lain">Lain-Lain</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">&nbsp</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-4">
                                    <label class="form-label">Kualitas</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="Seperti Tertusuk">Seperti Tertusuk</option>
                                        <option value="Berdenyut">Berdenyut</option>
                                        <option value="Teriris">Teriris</option>
                                        <option value="Tertindih">Tertindih</option>
                                        <option value="Tertiban">Tertiban</option>
                                        <option value="Lain-Lain">Lain-Lain</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">&nbsp</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-4">
                                    <label class="form-label">Lokasi</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Menyebar</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="Tidak">Tidak</option>
                                        <option value="Iya">Iya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-4">
                                    <label class="form-label">Skala Nyeri</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Durasi (/menit)</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <label class="form-label">Nyeri Hilang Saat</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="Istirahat">Istirahat</option>
                                        <option value="Mendengar Musik">Mendengar Musik</option>
                                        <option value="Minum Obat">Minum Obat</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">&nbsp</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Diberitahukan Pada Dokter</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="Tidak">Tidak</option>
                                        <option value="Iya">Iya</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Jam</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Input Penilaian-->
                    <!-- Data Penilaian -->
                    <div class="tab-pane fade mt-3" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <table id="example" class="table-responsive table table-bordered display-dataTables">
                            <thead>
                                <tr>
                                    <th scope="col">No.Rawat</th>
                                    <th scope="col">No. RM</th>
                                    <th scope="col">Nama Pasien</th>
                                    <th scope="col">J.K</th>
                                    <th scope="col">Agama</th>
                                    <th scope="col">Bahasa</th>
                                    <th scope="col">Cacat Fisik</th>
                                    <th scope="col">Tgl. Lahir</th>
                                    <th scope="col">Tgl. Asuhan</th>
                                    <th scope="col">Informasi</th>
                                    <th scope="col">TD</th>
                                    <th scope="col">Nadi</th>
                                    <th scope="col">RR</th>
                                    <th scope="col">Suhu</th>
                                    <th scope="col">GCS</th>
                                    <th scope="col">BB</th>
                                    <th scope="col">TB</th>
                                    <th scope="col">BMI</th>
                                    <th scope="col">Keluhan Utama</th>
                                    <th scope="col">Riwayat Penyakit Dahulu</th>
                                    <th scope="col">Riwayat Penyakit Keluarga</th>
                                    <th scope="col">Riwayat Pengobatan</th>
                                    <th scope="col">Alergi</th>
                                    <th scope="col">Alat Bantu</th>
                                    <th scope="col">Ket. Alat Bantu</th>
                                    <th scope="col">Prothesa</th>
                                    <th scope="col">Ket. Prothesa</th>
                                    <th scope="col">ADL</th>
                                    <th scope="col">Stts. Psikologi</th>
                                    <th scope="col">Ket. Psikologi</th>
                                    <th scope="col">Hubungan Keluarga</th>
                                    <th scope="col">Tinggal Dengan</th>
                                    <th scope="col">Ket. Tinggal</th>
                                    <th scope="col">Ekonomi</th>
                                    <th scope="col">Budaya</th>
                                    <th scope="col">Ket. Budaya</th>
                                    <th scope="col">Edukasi</th>
                                    <th scope="col">Ket. Edukasi</th>
                                    <th scope="col">Cara Berjalan A</th>
                                    <th scope="col">Cara Berjalan B</th>
                                    <th scope="col">Cara Berjalan C</th>
                                    <th scope="col">Hasil Penilaian Resiko Jatuh</th>
                                    <th scope="col">Lapor Dokter</th>
                                    <th scope="col">Ket. Lapor</th>
                                    <th scope="col">Skrining Gizi 1</th>
                                    <th scope="col">Nilai 1</th>
                                    <th scope="col">Skrining Gizi 2</th>
                                    <th scope="col">Nilai 2</th>
                                    <th scope="col">Total Skor</th>
                                    <th scope="col">Tingkat Nyeri</th>
                                    <th scope="col">PRovokes</th>
                                    <th scope="col">Ket. Provokes</th>
                                    <th scope="col">Kualitas</th>
                                    <th scope="col">Ket. Kualitas</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Menyebar</th>
                                    <th scope="col">Skala Nyeri</th>
                                    <th scope="col">Durasi</th>
                                    <th scope="col">Nyeri Hilang</th>
                                    <th scope="col">Ket. Hilang Nyeri</th>
                                    <th scope="col">Lapor ke Dokter</th>
                                    <th scope="col">Jam Lapor</th>
                                    <th scope="col">Rencana</th>
                                    <th scope="col">NIP</th>
                                    <th scope="col">Nama Petugas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($keperawatan as $rawat) : ?>
                                    <tr>
                                        <td><?= $rawat->no_rawat; ?></td>
                                        <td><?= $rawat->no_rkm_medis; ?></td>
                                        <td><?= $rawat->nm_pasien; ?></td>
                                        <td><?= $rawat->jk; ?></td>
                                        <td><?= $rawat->agama; ?></td>
                                        <td><?= $rawat->bahasa_pasien; ?></td>
                                        <td><?= $rawat->cacat_fisik; ?></td>
                                        <td><?= $rawat->tgl_lahir; ?></td>
                                        <td><?= $rawat->tanggal; ?></td>
                                        <td><?= $rawat->informasi; ?></td>
                                        <td><?= $rawat->td; ?></td>
                                        <td><?= $rawat->nadi; ?></td>
                                        <td><?= $rawat->rr; ?></td>
                                        <td><?= $rawat->suhu; ?></td>
                                        <td><?= $rawat->gcs; ?></td>
                                        <td><?= $rawat->bb; ?></td>
                                        <td><?= $rawat->tb; ?></td>
                                        <td><?= $rawat->bmi; ?></td>
                                        <td><?= $rawat->keluhan_utama; ?></td>
                                        <td><?= $rawat->rpd; ?></td>
                                        <td><?= $rawat->rpk; ?></td>
                                        <td><?= $rawat->rpo; ?></td>
                                        <td><?= $rawat->alergi; ?></td>
                                        <td><?= $rawat->alat_bantu; ?></td>
                                        <td><?= $rawat->ket_bantu; ?></td>
                                        <td><?= $rawat->prothesa; ?></td>
                                        <td><?= $rawat->ket_pro; ?></td>
                                        <td><?= $rawat->adl; ?></td>
                                        <td><?= $rawat->status_psiko; ?></td>
                                        <td><?= $rawat->ket_psiko; ?></td>
                                        <td><?= $rawat->hub_keluarga; ?></td>
                                        <td><?= $rawat->tinggal_dengan; ?></td>
                                        <td><?= $rawat->ket_tinggal; ?></td>
                                        <td><?= $rawat->ekonomi; ?></td>
                                        <td><?= $rawat->budaya; ?></td>
                                        <td><?= $rawat->ket_budaya; ?></td>
                                        <td><?= $rawat->edukasi; ?></td>
                                        <td><?= $rawat->ket_edukasi; ?></td>
                                        <td><?= $rawat->berjalan_a; ?></td>
                                        <td><?= $rawat->berjalan_b; ?></td>
                                        <td><?= $rawat->berjalan_c; ?></td>
                                        <td><?= $rawat->hasil; ?></td>
                                        <td><?= $rawat->lapor; ?></td>
                                        <td><?= $rawat->ket_lapor; ?></td>
                                        <td><?= $rawat->sg1; ?></td>
                                        <td><?= $rawat->nilai1; ?></td>
                                        <td><?= $rawat->sg2; ?></td>
                                        <td><?= $rawat->nilai2; ?></td>
                                        <td><?= $rawat->total_hasil; ?></td>
                                        <td><?= $rawat->nyeri; ?></td>
                                        <td><?= $rawat->provokes; ?></td>
                                        <td><?= $rawat->ket_provokes; ?></td>
                                        <td><?= $rawat->quality; ?></td>
                                        <td><?= $rawat->ket_quality; ?></td>
                                        <td><?= $rawat->lokasi; ?></td>
                                        <td><?= $rawat->menyebar; ?></td>
                                        <td><?= $rawat->skala_nyeri; ?></td>
                                        <td><?= $rawat->durasi; ?></td>
                                        <td><?= $rawat->nyeri_hilang; ?></td>
                                        <td><?= $rawat->ket_nyeri; ?></td>
                                        <td><?= $rawat->pada_dokter; ?></td>
                                        <td><?= $rawat->ket_dokter; ?></td>
                                        <td><?= $rawat->rencana; ?></td>
                                        <td><?= $rawat->nip; ?></td>
                                        <td><?= $rawat->nama; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Data Penilaian -->
            </div>
            <!-- tab navs menu -->
        </div>


        <!-- tab navs menu -->
    </div>


</div>



<!-- copyright -->
<?php
$this->load->view('templates/admin/copyright');
?>
<!-- copyright -->
<!-- script show form -->
<script>
    $('table.display-dataTables').dataTable({
        paging: true,
        searching: true,
    });
</script>