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
                        <h4>Penilaian Keperawatan Rawat Jalan Kebidanan & Kandungan</h4>
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
                    <h2 class="text-blue h2">Penilaian Awal Keperawatan Rawat Jalan Kebidanan & Kandungan</h2>
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
                                    <input type="date" class="form-control" name="" value="">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">Suhu (Celcius)</label>
                                    <input type="time" class="form-control" name="" value="">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">GCS(E,V,M)</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <label class="form-label">BB (Kg)</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">TB (cm)</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">LP (cm)</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">LK (cm)</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">LD (cm)</label>
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
                        <h5>III. RIWAYAT TUMBUH KEMBANG & PERINATAL CARE</h5>
                        <div class="col">
                            <div class="row mt-2">
                                <h6 class="mt-2">Riwayat Kelahiran</h6>
                                <div class="col">
                                    <div class="row mt-2">
                                        <div class="col-md-3">
                                            <label class="form-label">Anak Ke-</label>
                                            <input type="text" class="form-control" name="" value="">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">Jumlah Saudara</label>
                                            <input type="text" class="form-control" name="" value="">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">Cara Kelahiran</label>
                                            <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                                <option selected>Open this select menu</option>
                                                <option value="Spontan">Spontan</option>
                                                <option value="Sectio Caesaria">Sectio Caesaria</option>
                                                <option value="Lain-Lain">Lain-Lain</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">&nbsp</label>
                                            <input type="text" class="form-control" name="" value="">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-6">
                                            <label class="form-label">Umur Kelahiran</label>
                                            <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                                <option selected>Open this select menu</option>
                                                <option value="Cukup Bulan">Cukup Bulan</option>
                                                <option value="Kurang Bulan">Kurang Bulan</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">Kelainan Bawaan</label>
                                            <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                                <option selected>Open this select menu</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                                <option value="Ada">Ada</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">&nbsp</label>
                                            <input type="text" class="form-control" name="" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-2 mb-2">
                        <h5>IV. RIWAYAT IMUNISASI</h5>
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <table id="example" class="table-responsive table table-bordered display-dataTables">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nama Imunisasi</th>
                                                <th scope="col">Ke-1</th>
                                                <th scope="col">Ke-2</th>
                                                <th scope="col">Ke-3</th>
                                                <th scope="col">Ke-4</th>
                                                <th scope="col">Ke-5</th>
                                                <th scope="col">Ke-6</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>HIB</td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Default checkbox
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Default checkbox
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Default checkbox
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Default checkbox
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Default checkbox
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Default checkbox
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>MMR</td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Default checkbox
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Default checkbox
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Default checkbox
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Default checkbox
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Default checkbox
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Default checkbox
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <hr class="mt-2 mb-2">
                        <h5>V. RIWAYAT TUMBUH KEMBANG ANAK</h5>
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <label class="form-label">a. Tengkurap, Usia</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">b. Duduk, Usia</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">c. Berdiri, Usia</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">d. Gigi Pertama, Usia</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <label class="form-label">e. Berjalan, Usia</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">f. Bicara, Usia</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">g. Mulai Bisa Membaca, Usia</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <label class="form-label">h. Mulai Bisa Menulis, Usia</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Gangguan perkembangan mental/emosi, bila ada, jelaskan</label>
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
                                <div class="col-md-6 mt-2">
                                    <h6>1. Apakah pasien tampak kurus</h6>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="Tidak">Tidak</option>
                                        <option value="Ya">Ya</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="" value="" placeholder="0">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6 mt-2">
                                    <h6>2. Apakah terdapat penurunan berat badan selama satu bulan terakhir? (berdasarkan penilaian objektif data berat badan bila ada atau untuk bayi < 1 tahun; berat badan tidak naik selama 3 bulan terakhir</h6>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="Tidak">Tidak</option>
                                        <option value="Ya">Ya</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="" value="" placeholder="0">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6 mt-2">
                                    <h6>3. Apakah terdapat salah satu dari kondisi tersebut? Diare > 5kali/hari dan/muntah > 3kali/hari selama satu minggu terakhir; Asupan makanan berkurang selama 1 minggu terakhir</h6>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="Tidak">Tidak</option>
                                        <option value="Ya">Ya</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="" value="" placeholder="0">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6 mt-2">
                                    <h6>4. Apakah terdapat penyakit atau keadaan yang menyebabkan pasien beresiko mengalami malnutrisi?</h6>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="Tidak">Tidak</option>
                                        <option value="Ya">Ya</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="" value="" placeholder="0">
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

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label for="exampleFormControlTextarea1" class="form-label">Masalah Kebidanan</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleFormControlTextarea1" class="form-label">Tindakan</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- Input Penilaian-->
                    <!-- Data Penilaian -->
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
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
                                    <th scope="col">Riwayat Penyakit</th>
                                    <th scope="col">Ket. Riwayat Penyakit</th>
                                    <th scope="col">Riwayat Alergi</th>
                                    <th scope="col">Perawatan Gigi</th>
                                    <th scope="col">Ket. Perawatan Gigi</th>
                                    <th scope="col">Kebiasan Sikat Gigi</th>
                                    <th scope="col">Kebiasan Lain</th>
                                    <th scope="col">Ket. Kebiasan Lain</th>
                                    <th scope="col">Obat yang Diminum Saat Ini</th>
                                    <th scope="col">Alat Bantu</th>
                                    <th scope="col">Ket. Alat Bantu</th>
                                    <th scope="col">Prothesa</th>
                                    <th scope="col">Ket. Prothesa</th>
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
                                    <th scope="col">Jam Lapor</th>
                                    <th scope="col">Tingkat Nyeri</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Durasi</th>
                                    <th scope="col">Frekuensi</th>
                                    <th scope="col">Nyeri Hilang Bila</th>
                                    <th scope="col">Ket. Hilang Nyeri</th>
                                    <th scope="col">Diberitahukan Dokter</th>
                                    <th scope="col">Jam Diberitahukan</th>
                                    <th scope="col">Kebersihan Mulut</th>
                                    <th scope="col">Mukosa Mulut</th>
                                    <th scope="col">Karies</th>
                                    <th scope="col">Karang Gigi</th>
                                    <th scope="col">Gingiva</th>
                                    <th scope="col">Platum</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>No.Rawat</td\>
                                    <td>No. RM</td\>
                                    <td>Nama Pasien</td\>
                                    <td>J.K</td\>
                                    <td>Agama</td\>
                                    <td>Bahasa</td\>
                                    <td>Cacat Fisik</td\>
                                    <td>Tgl. Lahir</td\>
                                    <td>Tgl. Asuhan</td\>
                                    <td>Informasi</td\>
                                    <td>TD</td\>
                                    <td>Nadi</td\>
                                    <td>RR</td\>
                                    <td>Suhu</td\>
                                    <td>GCS</td\>
                                    <td>BB</td\>
                                    <td>TB</td\>
                                    <td>BMI</td\>
                                    <td>Keluhan Utama</td\>
                                    <td>Riwayat Penyakit</td\>
                                    <td>Ket. Riwayat Penyakit</td\>
                                    <td>Riwayat Alergi</td\>
                                    <td>Perawatan Gigi</td\>
                                    <td>Ket. Perawatan Gigi</td\>
                                    <td>Kebiasan Sikat Gigi</td\>
                                    <td>Kebiasan Lain</td\>
                                    <td>Ket. Kebiasan Lain</td\>
                                    <td>Obat yang Diminum Saat Ini</td\>
                                    <td>Alat Bantu</td\>
                                    <td>Ket. Alat Bantu</td\>
                                    <td>Protd\esa</td\>
                                    <td>Ket. Protd\esa</td\>
                                    <td>Stts. Psikologi</td\>
                                    <td>Ket. Psikologi</td\>
                                    <td>Hubungan Keluarga</td\>
                                    <td>Tinggal Dengan</td\>
                                    <td>Ket. Tinggal</td\>
                                    <td>Ekonomi</td\>
                                    <td>Budaya</td\>
                                    <td>Ket. Budaya</td\>
                                    <td>Edukasi</td\>
                                    <td>Ket. Edukasi</td\>
                                    <td>Cara Berjalan A</td\>
                                    <td>Cara Berjalan B</td\>
                                    <td>Cara Berjalan C</td\>
                                    <td>Hasil Penilaian Resiko Jatuh</td\>
                                    <td>Lapor Dokter</td\>
                                    <td>Jam Lapor</td\>
                                    <td>Tingkat Nyeri</td\>
                                    <td>Lokasi</td\>
                                    <td>Durasi</td\>
                                    <td>Frekuensi</td\>
                                    <td>Nyeri Hilang Bila</td\>
                                    <td>Ket. Hilang Nyeri</td\>
                                    <td>Diberitahukan Dokter</td\>
                                    <td>Jam Diberitahukan</td\>
                                    <td>Kebersihan Mulut</td\>
                                    <td>Mukosa Mulut</td\>
                                    <td>Karies</td\>
                                    <td>Karang Gigi</td\>
                                    <td>Gingiva</td\>
                                    <td>Platum</td\>
                                </tr>
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
        searching: true
    });
</script>