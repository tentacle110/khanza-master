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
                        <h4>Deteksi Dini Corona</h4>
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
                    <h2 class="text-blue h2">Deteksi Dini Pasien Corona</h2>
                </div>
            </div>

            <div class="pd-20 card-box mb-30">
                <div class="row mt-2">
                    <div class="col-md-4">
                        <label class="form-label">No. Rawat</label>
                        <input type="text" class="form-control" name="" value="" readonly>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label"> &nbsp</label>
                        <input type="text" class="form-control" name="" value="" readonly>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label"> &nbsp</label>
                        <input type="text" class="form-control" name="" value="" readonly>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-3">
                        <label class="form-label">NIK</label>
                        <input type="text" class="form-control" name="" value="" readonly>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">No.Hp/Telp</label>
                        <input type="text" class="form-control" name="" value="" readonly>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" name="" value="" readonly>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="" value="" readonly>
                    </div>
                </div>
                <div class="row mt-">
                    <div class="col-md-9">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="" value="" readonly>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Tanggal Skrining</label>
                        <input type="date" class="form-control" name="" value="" readonly>
                    </div>
                </div>
                <hr class="mt-2 mb-2">
                <h5>A. GEJALA</h5>
                <div class="col">
                    <div class="row mt-2">
                        <div class="col-md-8">
                            <h6>1. Demam > 37,5 / riwayat demam</h6>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                <option selected>Open this select menu</option>
                                <option value="Tidak">Tidak</option>
                                <option value="Iya">Iya</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-8">
                            <h6>2. Batul / Pilek / Nyeri Tenggorokan</h6>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                <option selected>Open this select menu</option>
                                <option value="Tidak">Tidak</option>
                                <option value="Iya">Iya</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-8">
                            <h6>3. Sesak Nafas</h6>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                <option selected>Open this select menu</option>
                                <option value="Tidak">Tidak</option>
                                <option value="Iya">Iya</option>
                            </select>
                        </div>
                        <div class="row mt-2 ml-3">
                            <div class="col">
                                <div class="row mt-2">
                                    <div class="col-md-8">
                                        <h6>Tanggal Pertama Kali Timbul Gejala</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="date" class="form-control" name="" value="">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-8">
                                        <h6>Riwayat Sakit Sebelumnya</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="" value="">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-8">
                                        <h6>Riwayat Periksa Sebelumnya</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="" value="">
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <hr class="mt-2 mb-2">
                <h5>B. FAKTOR RESIKO</h5>
                <div class="col">
                    <div class="row mt-2">
                        <div class="col-md-8">
                            <h6>1. Riwayat perjalanan ke luar negeri atau kota-kota terjangkit di Indonesia dalam waktu 14 hari sebelum timbul gejala</h6>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                <option selected>Open this select menu</option>
                                <option value="Tidak">Tidak</option>
                                <option value="Iya">Iya</option>
                            </select>
                        </div>
                        <div class="row mt-2 ml-3">
                            <div class="col">
                                <div class="row mt-2">
                                    <div class="col-md-8">
                                        <h6>Asal Daerah Terjangkit</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="" value="">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-8">
                                        <h6>Tanggal Kedatangan di Kota Ini</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="date" class="form-control" name="" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-8">
                            <h6>2. Memiliki Riwayat Paparan Satu atau Lebih</h6>
                        </div>
                        <div class="row mt-2 ml-3">
                            <div class="col">
                                <div class="row mt-2">
                                    <div class="col-md-8">
                                        <h6>a. Riwayat Kontak Erat dengan Kasus Konfirmasi Covid-19 Atau</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                            <option selected>Open this select menu</option>
                                            <option value="Tidak">Tidak</option>
                                            <option value="Iya">Iya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-8">
                                        <h6>b. Riwayat Kontak dengan Pasien dalam Pengawasan (PDP)</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                            <option selected>Open this select menu</option>
                                            <option value="Tidak">Tidak</option>
                                            <option value="Iya">Iya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-8">
                                        <h6>c. Bekerja atau Mengunjungi Fasilitas Kesehatan yang Berhubungan dengan Pasien Konfirmasi Covid-19 atau</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                            <option selected>Open this select menu</option>
                                            <option value="Tidak">Tidak</option>
                                            <option value="Iya">Iya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-8">
                                        <h6>d. Memiliki Riwayat Perjalanan ke Luar Negeri atau Wilayah yang Terjangkit yang Telah Mengkonfirmasi Adanya Kasus Positif Covid-19</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                            <option selected>Open this select menu</option>
                                            <option value="Tidak">Tidak</option>
                                            <option value="Iya">Iya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-8">
                                        <h6>e. Dalam 14 Hari Terakhir Berkunjung di Pasar Hewan</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                            <option selected>Open this select menu</option>
                                            <option value="Tidak">Tidak</option>
                                            <option value="Iya">Iya</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mt-2">
                    <div class="col-md-3">
                        <label class="form-label">Kesimpulan</label>
                        <select class="form-select form-select-md" aria-label=".form-select-sm example">
                            <option selected>Open this select menu</option>
                            <option value="ODP">ODP</option>
                            <option value="PDP">PDP</option>
                            <option value="OTG">OTG</option>
                            <option value="Bukan Ketiganya">Bukan Ketiganya</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Tindak Lanjut </label>
                        <select class="form-select form-select-md" aria-label=".form-select-sm example">
                            <option selected>Open this select menu</option>
                            <option value="Rujuk">Rujuk</option>
                            <option value="Rawat Inap">Rawat Inap</option>
                            <option value="Rawat Jalan">Rawat Jalan</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Petugas</label>
                        <input type="text" class="form-control" name="" value="">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">&nbsp</label>
                        <div class="input-group-append">
                            <input type="text" class="form-control" name="" value="">
                            <button class="btn btn-outline-secondary" type="button" data-toggle="modal" onclick=""><i class="icon-copy dw dw-add"></i></button>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="exampleFormControlTextarea1" class="form-label">Hasil Lab</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="exampleFormControlTextarea1" class="form-label">Hasil Radiologi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
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
<!-- script show form -->
<script>
    $('table.display-dataTables').dataTable({
        paging: true,
        searching: true,
    });
</script>