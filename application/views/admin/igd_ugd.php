<div class="xs-pd-20-10 pd-ltr-20">
    <!-- menu -->
    <?php
    $this->load->view('templates/admin/menu');
    ?>
    <!-- menu -->
</div>
<div class="container-fluid">

    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>IGD / UGD</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">IGD / UGD</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Form pendaftaran pasien baru -->
        <div id="formTambahPasien" class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h2 class="text-blue h2">Registrasi IGD Hari Ini</h2>
                </div>
            </div>
            <?php if ($this->session->flashdata('category_success')) { ?>
                <div class="alert alert-success" role="alert">
                    <?= $this->session->flashdata('category_success') ?>
                </div>
            <?php } ?>
            <form action="<?= base_url(); ?>admin/registrasi/insert" method="post">
                <div class="row">
                    <div class="col-md-5">
                        <label class="form-label">No. Registrasi</label>
                        <input type="text" class="form-control" name="no_registrasi" value="<?= $no_registrasi; ?>" readonly>
                        <label class="form-label mt-2">No. Rawat</label>
                        <input type="text" class="form-control" name="no_rawat" value="<?= $no_rawat; ?>" placeholder="<?= $no_rawat; ?>" readonly>

                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label mt-2">Tgl. registrasi</label>
                                <input type="date" class="form-control" name="tgl_registrasi" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label mt-2">Jam. registrasi</label>
                                <input type="time" class="form-control" name="jam_registrasi" required>
                            </div>
                        </div>
                        <label class="form-label mt-2">Dokter Dituju</label>
                        <div class="input-group-append">
                            <select class="form-select form-select-md " id="dokter" name="dokter_dituju" aria-label="Default select example">
                                <option selected>Pilih Dokter</option>
                                <?php foreach ($dokter as $dok) : ?>
                                    <option value="<?= $dok->kd_dokter; ?>"> <?= $dok->kd_dokter; ?> &rarr;
                                        <?= $dok->nm_dokter; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <!-- <input type="text" class="form-control" name="dokter_dituju" placeholder="Dokter Dituju" readonly> -->
                            <button class="btn btn-outline-secondary" type="button" data-toggle="modal" onclick="dokterFunction()"><i class="icon-copy dw dw-add"></i></button>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="row">
                            <!-- -- -->
                            <div class="col-md-5">
                                <label for="exampleFormControlInput1" class="form-label">No.Rekam Medik</label>
                                <select name="no_rkm_medis" id="no_rkm_medis" class="form-select form-select-md" onchange="show_pasien(this.value)"></select>
                            </div>
                            <div class="col-md-7">
                                <label for="exampleFormControlInput1" class="form-label">Nama Pasien</label>
                                <div class="input-group-append">
                                    <input type="text" id="nm_pasien" class="form-control data-pasien" placeholder="Nama pasein" readonly>
                                    <button class="btn btn-outline-secondary" type="button" onclick="pasienFunction()"><i class="icon-copy dw dw-add"></i></button>
                                </div>
                            </div>
                            <!-- -- -->
                        </div>
                        <div class="row">
                            <div class="col-md-5 mt-2">
                                <label for="exampleFormControlInput1" class="form-label">Penanggung Jawab</label>
                                <input type="text" class="form-control" name="p_jawab" id="p_jawab" placeholder="" readonly>
                            </div>
                            <div class="col-md-7 mt-2">
                                <label for="exampleFormControlInput1" class="form-label">Hubungan</label>
                                <input type="text" class="form-control" name="hubunganpj" id="hubunganpj" placeholder="" readonly>

                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-5">

                                <label class="form-label">Alamat PJ</label>
                                <input type="text" class="form-control" name="almt_pj" id="almt_pj" placeholder="">
                            </div>
                            <div class="col-md-7">
                                <label for="exampleFormControlInput1" class="form-label">Status</label>
                                <input type="text" class="form-control" name="stts_daftar" id="stts_daftar" placeholder="" readonly>

                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label class="form-label">Jenis Bayar</label>
                                <div class="input-group-append">
                                    <select class="form-select form-select-md " id="jenisBayar" name="kd_pj" aria-label="Default select example">
                                        <option selected>Pilih data jenis bayar</option>
                                        <?php foreach ($penjab as $pen) : ?>
                                            <option value="<?= $pen->kd_pj; ?>"> <?= $pen->kd_pj; ?> &rarr;
                                                <?= $pen->png_jawab; ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                    <button class="btn btn-outline-secondary" type="button" onclick="bayarFunction()"><i class="icon-copy dw dw-add"></i></button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Nomor KA</label>
                                <div class="input-group-append">
                                    <input type="text" class="form-control" name="" placeholder="">
                                    <button class="btn btn-outline-secondary" type="button"><i class="icon-copy dw dw-magnifying-glass"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="form-label">Asal Rujukan</label>
                                <div class="input-group-append">
                                    <select class="form-select form-select-md " id="asalRujukan" name="" aria-label="Default select example">
                                        <option selected>Pilih Asal Rujukan</option>
                                        <?php foreach ($perujuk as $prj) : ?>
                                            <option value="<?= $prj->no_rujuk; ?>"> <?= $prj->perujuk; ?> &rarr;
                                                <?= $prj->alamat; ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <!-- <input type="text" class="form-control" name="asal_rujukan" placeholder=""> -->

                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary p-2">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </div>
        <!-- Form pendaftaran pasien baru -->

        <div class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h2 class="text-blue h2">Data Registrasi IGD</h2>
                </div>
            </div>
            <div class="button mb-2 d-flex justify-content-end">
                <a href="#tambahPasienBaru" class="btn btn-primary mr-2" onclick="showDiv('formTambahPasien')"><i class="icon-copy dw dw-add-user pr-2"></i>Baru</a>
                <a href="#" class="btn btn-warning"><i class="icon-copy dw dw-print pr-2"></i>Cetak</a>
            </div>
            <div class="pd-20 card-box mb-30">


                <table id="DataTablesRegistrasi" class="table-responsive table table-bordered display-dataTables">
                    <thead>
                        <tr>
                            <th scope="col">Pilih</th>
                            <th scope="col">No. Reg</th>
                            <th scope="col">No. Rawat</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Jam</th>
                            <th scope="col">Kd. Dokter</th>
                            <th scope="col">Dokter Dituju</th>
                            <th scope="col">No. RM</th>
                            <th scope="col">Pasien</th>
                            <th scope="col">J.K.</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Poliklinik</th>
                            <th scope="col">Penanggungjawab</th>
                            <th scope="col">Alamat P.J</th>
                            <th scope="col">Hubungan P.J.</th>
                            <th scope="col">Biaya Reg.</th>
                            <th scope="col">Status</th>
                            <th scope="col">Jenis Bayar</th>
                            <th scope="col">Stts. Rawat</th>
                            <th scope="col">Stts. Stts. Bayar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pilih</td>
                            <td>No. Reg</td>
                            <td>No. Rawat</td>
                            <td>Tanggal</td>
                            <td>Jam</td>
                            <td>Kd. Dokter</td>
                            <td>Dokter Dituju</td>
                            <td>No. RM</td>
                            <td>Pasien</td>
                            <td>J.K.</td>
                            <td>Umur</td>
                            <td>Poliklinik</td>
                            <td>Penanggungjawab</td>
                            <td>Alamat P.J</td>
                            <td>Hubungan P.J.</td>
                            <td>Biaya Reg.</td>
                            <td>Status</td>
                            <td>Jenis Bayar</td>
                            <td>Stts. Rawat</td>
                            <td>Stts. Stts. Bayar</td>
                        </tr>
                    </tbody>
                </table>


            </div>
        </div>
    </div>





</div>
<!-- Modals Data Dokter Dituju -->
<div class="modal fade" id="modalDataDokterDituju" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalDataPasienLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDataPasienLabel">Data Dokter Dituju</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="pd-20 card-box mb-30">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="exampleFormControlInput1" class="form-label">Kode Dokter</label>
                            <div class="input-group-append">
                                <input type="text" class="form-control" name="kd_dokter" placeholder="Kode Dokter" readonly>
                                <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#modalKodeDokter"><i class="icon-copy dw dw-magnifying-glass"></i></button>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <label for="agama">Agama</label>
                            <select class="form-select" id="stts_bayar">
                                <option selected>Choose...</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Kong Hu Chu">Kong Hu Chu</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="stts_nikah">Stts. Nikah</label>
                            <select class="form-select" id="stts_nikah">
                                <option selected>Choose...</option>
                                <option value="Menikah">Menikah</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Janda">Janda</option>
                                <option value="Duda">Duda</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label for="nama_dokter">Nama Dokter</label>
                            <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" required>
                        </div>

                        <div class="col-md-6">
                            <label for="nama_dokter">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-select" id="jenis_kelamin">
                                <option selected>Choose...</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="goldar">Golongan Darah</label>
                            <select class="form-select" id="goldar">
                                <option selected>Choose...</option>
                                <option value="AB">AB</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="O">O</option>
                                <option value="-">-</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="no_telp">No. Telepon</label>
                            <input type="text" class="form-control" id="no_telp" name="no_telp" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir" required>
                        </div>
                        <div class="col-md-6 mt-1">
                            <label class="form-label">Spesialis</label>
                            <div class="input-group-append">
                                <select class="form-select form-select-md " id="spesialis" name="spesialis" aria-label="Default select example">
                                    <option selected>Pilih Spesialis</option>
                                    <?php foreach ($spesialis as $sps) : ?>
                                        <option value="<?= $sps->kd_sps; ?>"> <?= $sps->kd_sps; ?> &rarr;
                                            <?= $sps->nm_sps; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <button class="btn btn-outline-secondary" type="button" onclick="spesialisFunction()"><i class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-6">
                            <label for="no_ijin_praktek">No. Ijin Praktek</label>
                            <input type="text" class="form-control" id="no_ijin_praktek" name="no_ijin_praktek" required>
                        </div>
                        <div class="col-md-6">
                            <label for="alumni">Alumni</label>
                            <input type="text" class="form-control" id="alumni" name="alumni  " required>
                        </div>
                    </div>
                </div>
                <!-- table data Dokter -->
                <table id="DataTables" class="table-responsive table table-bordered display-dataTables">
                    <thead>
                        <tr>
                            <th scope="col">Pilih</th>
                            <th scope="col">Kode Dokter</th>
                            <th scope="col">Nama Dokter</th>
                            <th scope="col">J.K.</th>
                            <th scope="col">Tmpt. Lahir</th>
                            <th scope="col">Tgl. Lahir</th>
                            <th scope="col">G.D.</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Alamat Tinggal</th>
                            <th scope="col">No.HP/Telp</th>
                            <th scope="col">Stts.Nikah</th>
                            <th scope="col">Spesialis</th>
                            <th scope="col">Alumni</th>
                            <th scope="col">No.Izin Pektek</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dokter as $dk) : ?>
                            <tr>
                                <td>
                                    <div class="dt-checkbox">
                                        <input type="checkbox" name="select_all" value="1" id="example-select-all">
                                        <span class="dt-checkbox-label"></span>
                                    </div>
                                </td>
                                <td><?= $dk->kd_dokter; ?></td>
                                <td><?= $dk->nm_dokter; ?></td>
                                <td><?= $dk->jk; ?></td>
                                <td><?= $dk->tmp_lahir; ?></td>
                                <td><?= $dk->tgl_lahir; ?></td>
                                <td><?= $dk->gol_drh; ?></td>
                                <td><?= $dk->agama; ?></td>
                                <td><?= $dk->almt_tgl; ?></td>
                                <td><?= $dk->no_telp; ?></td>
                                <td><?= $dk->stts_nikah; ?></td>
                                <td><?= $dk->kd_sps; ?></td>
                                <td><?= $dk->alumni; ?></td>
                                <td><?= $dk->no_ijn_praktek; ?></td>
                                <td><?= $dk->status; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- end table data Dokter -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Tambahkan</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modals Data Dokter Dituju-->

<!-- Modals Data Unit/Poliklinik -->
<div class="modal fade" id="modalDataUnit" data-backdrop="static" tabindex="-1" aria-labelledby="modalDataPasienLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDataPasienLabel">Data Unit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix mb-20">
                        <form method="POST" action="">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-check">
                                        <label for="date_to">Nama Unit</label>
                                        <input type="text" class="form-control" id="kd_poli" name="kd_poli" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <label for="date_to">Kode Unit</label>
                                        <input type="text" class="form-control" id="nm_poli" name="nm_poli" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <label for="date_from">Registrasi Baru</label>
                                        <input type="text" class="form-control" id="registrasi" name="registrasi" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <label for="date_from">Registrasi Lama</label>
                                        <input type="text" class="form-control" id="registrasilama" name="registrasilama" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary p-2">Simpan</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>


                <!-- table data Unit -->
                <table id="DataTables" class="table-responsive table table-bordered display-dataTables">
                    <thead>
                        <tr>
                            <th scope="col">Pilih</th>
                            <th scope="col">Kode Unit</th>
                            <th scope="col">Nama Unit</th>
                            <th scope="col">Registrasi Baru</th>
                            <th scope="col">Registrasi Lama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($unit as $u) : ?>
                            <tr>
                                <td>
                                    <div class="dt-checkbox">
                                        <input type="checkbox" name="select_all" value="1" id="example-select-all">
                                        <span class="dt-checkbox-label"></span>
                                    </div>
                                </td>
                                <td><?= $u->kd_poli; ?></td>
                                <td><?= $u->nm_poli; ?></td>
                                <td><?= $u->registrasi; ?></td>
                                <td><?= $u->registrasilama; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- end table data Dokter -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary" onclick="unitFunction()">Tambahkan</button> -->
            </div>
        </div>
    </div>
</div>
<!-- End Modals Data Unit/Poliklinik -->

<!-- Modals Jenis Bayar -->
<div class="modal fade" id="modalJenisBayar" data-backdrop="static" tabindex="-1" aria-labelledby="modalJenisBayar" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDataPasienLabel">Jenis Bayar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- form Tambah penanggungjawab -->
                <form action="">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label">Kode Asuransi</label>
                            <input type="text" class="form-control" name="kd_pj" required>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label">Nama Asuransi</label>
                            <input type="text" class="form-control" name="png_jawab" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Telepon</label>
                            <input type="text" class="form-control" name="no_telp" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">Perusahaan Asuransi</label>
                            <input type="text" class="form-control" name="nama_perusahaan" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">ATTN</label>
                            <input type="text" class="form-control" name="attn" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-label">Alamat Asuransi</label>
                            <input type="text" class="form-control" name="alamat_asuransi" required>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary p-2">Simpan</button>
                        </div>
                    </div>

                </form>
                <!-- end form Tambah penanggungjawab -->
                <!-- table data penanggungjawab -->
                <table id="DataTablesPenanggungJawab" class="table-responsive table table-bordered display-dataTables mt-3">
                    <thead>
                        <tr>
                            <th scope="col">Pilih</th>
                            <th scope="col">Kode Asuransi</th>
                            <th scope="col">Nama Asuransi</th>
                            <th scope="col">Perusahaan Asuransi</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No. Telepon</th>
                            <th scope="col">ATTN</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($penjab as $pjb) : ?>
                            <tr>
                                <td>
                                    <div class="dt-checkbox">
                                        <input type="checkbox" name="select_all" value="1" id="example-select-all">
                                        <span class="dt-checkbox-label"></span>
                                    </div>
                                </td>
                                <td><?= $pjb->kd_pj; ?></td>
                                <td><?= $pjb->png_jawab; ?></td>
                                <td><?= $pjb->nama_perusahaan; ?></td>
                                <td><?= $pjb->alamat_asuransi; ?></td>
                                <td><?= $pjb->no_telp; ?></td>
                                <td><?= $pjb->attn; ?></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- end table data pasien lama -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- End Modals Jenis Bayar -->

<!-- Modals Data Rekam Medik -->
<div class="modal fade" id="modalDataRekamMedik" data-backdrop="static" tabindex="-1" aria-labelledby="modalDataRekamMedikLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDataPasienLabel">Data Pasien</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- form Tambah Data pasien baru -->
                <form action="" class="mb-4">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">No. Rekam Medis</label>
                            <input type="text" class="form-control" name="" placeholder="">
                        </div>
                        <div class="col-md-3">
                            <label for="agama">Agama</label>
                            <select class="form-select" id="stts_bayar">
                                <option selected>Choose...</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Kong Hu Chu">Kong Hu Chu</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="agama">Status Nikah</label>
                            <select class="form-select" id="stts_bayar">
                                <option selected>Choose...</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Kong Hu Chu">Kong Hu Chu</option>
                            </select>
                        </div>
                        <div class="row mt-1">

                            <div class="col-md-6">
                                <label class="form-label">Nama Pasien</label>
                                <input type="text" class="form-control" name="" placeholder="">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Asuransi / Askes</label>
                                <div class="input-group-append">
                                    <select class="form-select form-select-md " id="jenisBayar" name="rekam_medik" aria-label="Default select example">
                                        <option selected>Pilih Asuransi / Askes</option>
                                        <?php foreach ($penjab as $pen) : ?>
                                            <option value="<?= $pen->kd_pj; ?>"> <?= $pen->kd_pj; ?> &rarr;
                                                <?= $pen->png_jawab; ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                    <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#modalJenisBayar"><i class="icon-copy dw dw-add"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-3">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select class="form-select" id="jenis_kelamin">
                                    <option selected>Choose...</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="goldar">Golongan Darah</label>
                                <select class="form-select" id="goldar">
                                    <option selected>Choose...</option>
                                    <option value="AB">AB</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="O">O</option>
                                    <option value="-">-</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">No. Peserta</label>
                                <input type="text" class="form-control" name="" placeholder="">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-3">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">No. Telepon</label>
                                <input type="text" class="form-control" name="" placeholder="">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Pertama Daftar</label>
                                <input type="date" class="form-control" name="" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-3">
                                <label class="form-label">Umur</label>
                                <input type="text" class="form-control" name="umur" placeholder="">
                            </div>
                            <div class="col-md-3">
                                <label for="goldar">Pendidikan</label>
                                <select class="form-select" id="pendidikan">
                                    <option selected>Choose...</option>
                                    <option value="TS">TS</option>
                                    <option value="TK">TK</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                    <option value="SLTA / SEDERAJAT">SLTA / SEDERAJAT</option>
                                    <option value="D1">D1</option>
                                    <option value="D2">D2</option>
                                    <option value="D3">D3</option>
                                    <option value="D3">D3</option>
                                    <option value="D4">D4</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Pekerjaan</label>
                                <input type="text" class="form-control" name="pekerjaan" placeholder="">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">No. KTP / SIM</label>
                                <input type="text" class="form-control" name="" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-6">
                                <label class="form-label">Nama Ibu</label>
                                <input type="text" class="form-control" name="" placeholder="">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Alamat Pasien</label>
                                <input type="text" class="form-control" name="" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-6">
                                <label for="">Penanggung Jawab</label>
                                <select class="form-select" id="">
                                    <option selected>Choose...</option>
                                    <option value="Ayah">Ayah</option>
                                    <option value="Ibu">Ibu</option>
                                    <option value="Suami">Suami</option>
                                    <option value="Istri">Istri</option>
                                    <option value="Anak">Anak</option>
                                    <option value="Saudara">Saudara</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="">Kelurahan</label>
                                <div class="input-group-append">
                                    <select class="form-select form-select-md " id="jenisBayar" name="rekam_medik" aria-label="Default select example">
                                        <option selected>Pilih Kelurahan</option>
                                        <?php foreach ($kelurahan as $kel) : ?>
                                            <option value="<?= $kel->kd_kel; ?>"> <?= $kel->kd_kel; ?> &rarr;
                                                <?= $kel->nm_kel; ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                    <button class="btn btn-outline-secondary" onclick="kelurahanFunction()" type="button"><i class="icon-copy dw dw-add"></i></button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="">Kecamatan</label>
                                <div class="input-group-append">
                                    <select class="form-select form-select-md " id="jenisBayar" name="rekam_medik" aria-label="Default select example">
                                        <option selected>Pilih Kecamatan</option>
                                        <?php foreach ($kecamatan as $kec) : ?>
                                            <option value="<?= $kec->kd_kec; ?>"> <?= $kec->kd_kec; ?> &rarr;
                                                <?= $kec->nm_kec; ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                    <button class="btn btn-outline-secondary" type="button" onclick="kecamatanFunction()"><i class="icon-copy dw dw-add"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-6"></div>
                            <div class="col-md-3">
                                <label for="">Kabupaten</label>
                                <div class="input-group-append">
                                    <select class="form-select form-select-md " id="jenisBayar" name="rekam_medik" aria-label="Default select example">
                                        <option selected>Pilih Kabupaten</option>
                                        <?php foreach ($kabupaten as $kab) : ?>
                                            <option value="<?= $kab->kd_kab; ?>"> <?= $kab->kd_kab; ?> &rarr;
                                                <?= $kab->nm_kab; ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                    <button class="btn btn-outline-secondary" type="button" onclick="kabupatenFunction()"><i class="icon-copy dw dw-add"></i></button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="">Provinsi (database notfound)</label>
                                <div class="input-group-append">
                                    <select class="form-select form-select-md " id="jenisBayar" name="rekam_medik" aria-label="Default select example">
                                        <option selected>Pilih Provinsi</option>
                                        <?php foreach ($kabupaten as $kab) : ?>
                                            <option value="<?= $kab->kd_kab; ?>"> <?= $kab->kd_kab; ?> &rarr;
                                                <?= $kab->nm_kab; ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                    <button class="btn btn-outline-secondary" type="button"><i class="icon-copy dw dw-add"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-6">
                                <label class="form-label">Penanggung Jawab</label>
                                <input type="text" class="form-control" name="" placeholder="">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Alamat Penanggung Jawab</label>
                                <input type="text" class="form-control" name="" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-1">

                            <div class="col-md-6">
                                <label class="form-label">Pekerjaan Penanggung Jawab</label>
                                <input type="text" class="form-control" name="" placeholder="">
                            </div>

                            <div class="col-md-3">
                                <label for="">Kelurahan</label>
                                <div class="input-group-append">
                                    <select class="form-select form-select-md " id="jenisBayar" name="rekam_medik" aria-label="Default select example">
                                        <option selected>Pilih Kelurahan</option>
                                        <?php foreach ($kelurahan as $kel) : ?>
                                            <option value="<?= $kel->kd_kel; ?>"> <?= $kel->kd_kel; ?> &rarr;
                                                <?= $kel->nm_kel; ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                    <button class="btn btn-outline-secondary" type="button" onclick="kelurahanFunction()"><i class="icon-copy dw dw-add"></i></button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="">Kecamatan</label>
                                <div class="input-group-append">
                                    <select class="form-select form-select-md " id="jenisBayar" name="rekam_medik" aria-label="Default select example">
                                        <option selected>Pilih Kecamatan</option>
                                        <?php foreach ($kabupaten as $kab) : ?>
                                            <option value="<?= $kab->kd_kab; ?>"> <?= $kab->kd_kab; ?> &rarr;
                                                <?= $kab->nm_kab; ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                    <button class="btn btn-outline-secondary" type="button" onclick="kecamatanFunction()"><i class="icon-copy dw dw-add"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-6">
                                <label for="">Suku Bangsa</label>
                                <div class="input-group-append">
                                    <select class="form-select form-select-md " id="jenisBayar" name="rekam_medik" aria-label="Default select example">
                                        <option selected>Pilih Suku Bangsa</option>
                                        <?php foreach ($suku as $suku) : ?>
                                            <option value="<?= $suku->id; ?>"> <?= $suku->nama_suku_bangsa; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                    <button class="btn btn-outline-secondary" onclick="sukuFunction()" type="button"><i class="icon-copy dw dw-add"></i></button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="">Kabupaten</label>
                                <div class="input-group-append">
                                    <select class="form-select form-select-md " id="jenisBayar" name="rekam_medik" aria-label="Default select example">
                                        <option selected>Pilih Kabupaten</option>
                                        <?php foreach ($kabupaten as $kab) : ?>
                                            <option value="<?= $kab->kd_kab; ?>"> <?= $kab->kd_kab; ?> &rarr;
                                                <?= $kab->nm_kab; ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                    <button class="btn btn-outline-secondary" type="button" onclick="kabupatenFunction()"><i class="icon-copy dw dw-add"></i></button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="">Provinsi (database notfound)</label>
                                <div class="input-group-append">
                                    <select class="form-select form-select-md " id="jenisBayar" name="rekam_medik" aria-label="Default select example">
                                        <option selected>Pilih Provinsi</option>
                                        <?php foreach ($kabupaten as $kab) : ?>
                                            <option value="<?= $kab->kd_kab; ?>"> <?= $kab->kd_kab; ?> &rarr;
                                                <?= $kab->nm_kab; ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                    <button class="btn btn-outline-secondary" type="button" onclick="kabupatenFunction()"><i class="icon-copy dw dw-add"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-6">
                                <label for="">Bahasa Dipakai</label>
                                <div class="input-group-append">
                                    <select class="form-select form-select-md " id="jenisBayar" name="rekam_medik" aria-label="Default select example">
                                        <option selected>Pilih Bahasa</option>
                                        <?php foreach ($bahasa as $bhs) : ?>
                                            <option value="<?= $bhs->id; ?>"> <?= $bhs->nama_bahasa; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                    <button class="btn btn-outline-secondary" onclick="bahasaFunction()" type="button"><i class="icon-copy dw dw-add"></i></button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="">Instansi Pasien (need table data)</label>
                                <div class="input-group-append">
                                    <select class="form-select form-select-md " id="jenisBayar" name="rekam_medik" aria-label="Default select example">
                                        <option selected>Pilih Instansi</option>
                                        <?php foreach ($bahasa as $bhs) : ?>
                                            <option value="<?= $bhs->id; ?>"> <?= $bhs->nama_bahasa; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                    <button class="btn btn-outline-secondary" type="button"><i class="icon-copy dw dw-add"></i></button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">NIP/NRP</label>
                                <input type="text" class="form-control" name="" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-6">
                                <label for="">Cacat Fisik</label>
                                <div class="input-group-append">
                                    <select class="form-select form-select-md " id="jenisBayar" name="rekam_medik" aria-label="Default select example">
                                        <option selected>Pilih Cacat Fisik</option>
                                        <?php foreach ($cacat as $cct) : ?>
                                            <option value="<?= $cct->id; ?>"> <?= $cct->nama_cacat; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                    <button class="btn btn-outline-secondary" type="button" onclick="cacatFunction()"><i class="icon-copy dw dw-add"></i></button>
                                </div>

                            </div>
                        </div>
                </form>
                <!-- end form Tambah Data pasien baru -->
                <!-- table data pasien lama -->
                <table class="table-responsive table table-bordered display-dataTables mt-4">
                    <thead>
                        <tr>
                            <th scope="col">Pilih</th>
                            <th scope="col">No.RM</th>
                            <th scope="col">Nama Pasien</th>
                            <th scope="col">No SIM/KTP</th>
                            <th scope="col">J.K.</th>
                            <th scope="col">Temp.Lahir</th>
                            <th scope="col">Nama Ibu</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">G.D</th>
                            <th scope="col">Pekerjaan</th>
                            <th scope="col">Stts. Nikah</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Tgl.Daftar</th>
                            <th scope="col">No.Telp/HP</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Pendidikan</th>
                            <th scope="col">Keluarga</th>
                            <th scope="col">Nama Keluarga</th>
                            <th scope="col">Asuransi/Askes</th>
                            <th scope="col">No. Peserta</th>
                            <th scope="col">Daftar</th>
                            <th scope="col">Pekerjaan P.J.</th>
                            <th scope="col">Alamat P.J.</th>
                            <th scope="col">Suku/Bangsa</th>
                            <th scope="col">Bahasa</th>
                            <th scope="col">Instansi/Perusahaan</th>
                            <th scope="col">NIP/NRP</th>
                            <th scope="col">Email</th>
                            <th scope="col">Cacat Fisik</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pasien as $pasien) : ?>
                            <tr>
                                <td>
                                    <div class="dt-checkbox">
                                        <input type="checkbox" name="select_all" value="1" id="example-select-all">
                                        <span class="dt-checkbox-label"></span>
                                    </div>
                                </td>
                                <td><?= $pasien->no_rkm_medis; ?></td>
                                <td><?= $pasien->nm_pasien; ?></td>
                                <td><?= $pasien->no_ktp; ?></td>
                                <td><?= $pasien->jk; ?></td>
                                <td><?= $pasien->tmp_lahir; ?></td>
                                <td><?= $pasien->nm_ibu; ?></td>
                                <td><?= $pasien->alamat; ?></td>
                                <td><?= $pasien->gol_darah; ?></td>
                                <td><?= $pasien->pekerjaan; ?></td>
                                <td><?= $pasien->stts_nikah; ?></td>
                                <td><?= $pasien->agama; ?></td>
                                <td><?= $pasien->tgl_daftar; ?></td>
                                <td><?= $pasien->no_tlp; ?></td>
                                <td><?= $pasien->umur; ?></td>
                                <td><?= $pasien->pnd; ?></td>
                                <td><?= $pasien->keluarga; ?></td>
                                <td><?= $pasien->namakeluarga; ?></td>
                                <!-- <td><?= $pasien->perusahaan_pasien; ?></td> -->
                                <td><?= $pasien->no_peserta; ?></td>
                                <!-- <td><?= $pasien->daftar; ?></td> -->
                                <td><?= $pasien->pekerjaanpj; ?></td>
                                <td><?= $pasien->alamatpj; ?></td>
                                <td><?= $pasien->suku_bangsa; ?></td>
                                <td><?= $pasien->bahasa_pasien; ?></td>
                                <td><?= $pasien->perusahaan_pasien; ?></td>
                                <td><?= $pasien->nip; ?></td>
                                <td><?= $pasien->email; ?></td>
                                <td><?= $pasien->cacat_fisik; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- end table data pasien lama -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
</div>
<!-- End Modals Data Rekam Medik -->

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
<script type="text/javascript">
    $(document).ready(function() {

        $('#dokter').select2();
        $('#unit').select2();
        $('#no_rkm_medis').select2({
            placeholder: "NO. Rekmedik"
        });
        $('#asalRujukan').select2();
        $('#jenisBayar').select2();
        show_no_rkm_medis();

    });
    // fungsi untuk menampilkan NISN
    function show_no_rkm_medis() {
        $.ajax({
            url: "<?php echo base_url('admin/Registrasi/get_no_rkm_medis'); ?>",
            type: "GET",
            dataType: "JSON",
            success: function(x) {
                if (x.status == true) {
                    $('#no_rkm_medis').html('<option value=""></option>');
                    $.each(x.data, function(k, v) {
                        $('#no_rkm_medis').append(
                            `<option value="${v.no_rkm_medis}">${v.no_rkm_medis} &rarr; ${v.nm_pasien}</option>`
                        );
                    });
                }
            }
        });
    }

    // fungsi untuk menampilkan data siswa berdasarkan NISN
    function show_pasien(x) {
        $.ajax({
            url: "<?php echo base_url('admin/registrasi/get_pasien'); ?>",
            type: "GET",
            dataType: "JSON",
            data: {
                no_rkm_medis: x
            },
            success: function(x) {
                if (x.status == true) {
                    $('#nm_pasien').val(x.data.nm_pasien);
                    $('#p_jawab').val(x.data.p_jawab);
                    $('#almt_pj').val(x.data.almt_pj);
                    $('#hubunganpj').val(x.data.hubunganpj);
                    $('#stts_daftar').val(x.data.stts_daftar);
                }
            }
        });
    }
</script>

sc

<!-- Open Windows -->
<script>
    function spesialisFunction() {
        window.open("<?= base_url() ?>admin/registrasi/tambah_spesialis", "_blank",
            "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=1000,height=1000");
    }

    function bayarFunction() {
        window.open("<?= base_url() ?>admin/registrasi/jenis_bayar", "_blank",
            "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=1000,height=1000");
    }

    function dokterFunction() {
        window.open("<?= base_url() ?>admin/registrasi/dokter_dituju", "_blank",
            "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=1000,height=1000");
    }

    function poliklinikFunction() {
        window.open("<?= base_url() ?>admin/registrasi/poliklinik", "_blank",
            "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=1000,height=1000");
    }

    function pasienFunction() {
        window.open("<?= base_url() ?>admin/registrasi/pasien", "_blank",
            "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=1000,height=1000");
    }

    function cacatFunction() {
        window.open("<?= base_url() ?>admin/registrasi/tambah_cacat_fisik", "_blank",
            "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=1000,height=1000");
    }

    function bahasaFunction() {
        window.open("<?= base_url() ?>admin/registrasi/tambah_bahasa", "_blank",
            "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=1000,height=1000");
    }

    function sukuFunction() {
        window.open("<?= base_url() ?>admin/registrasi/tambah_suku", "_blank",
            "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=1000,height=1000");
    }

    function kelurahanFunction() {
        window.open("<?= base_url() ?>admin/registrasi/tambah_kelurahan", "_blank",
            "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=1000,height=1000");
    }

    function kecamatanFunction() {
        window.open("<?= base_url() ?>admin/registrasi/tambah_kecamatan", "_blank",
            "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=1000,height=1000");
    }

    function kabupatenFunction() {
        window.open("<?= base_url() ?>admin/registrasi/tambah_kabupaten", "_blank",
            "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=1000,height=1000");
    }
</script>