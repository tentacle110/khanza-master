<div class="xs-pd-20-10 pd-ltr-20">
    <!-- menu -->
    <?php
    $this->load->view('templates/admin/menu');
    ?>
    <!-- menu -->
    <!-- toasts -->
    <div>
        <?php $this->load->view('alert');?>
    </div>
    <!-- toasts -->
</div>
<div class="container-fluid">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Tambah Pasien</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Pasien</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Tambah Data Pasien -->
        <div class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h2 class="text-blue h2">Tambah Data Pasien</h2>
                </div>
            </div>
            <form action="<?= base_url() ?>admin/registrasi/insert_pasien_baru" method="POST">
                <div class="pb-20 ">

                    <div class="row mt-1">
                        <div class="col-md-6">
                            <label class="form-label">No. Rekam Medis</label>
                            <input type="text" class="form-control" name="no_rkm_medis" value="<?= $no_rekam_medik; ?>"
                                placeholder="<?= $no_rekam_medik; ?>" readonly>
                        </div>
                        <div class="col-md-3">
                            <label for="agama">Agama</label>
                            <select class="form-select select2" id="agama" name="agama">
                                <option value="-" selected>Pilih Agama</option>
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
                            <select class="form-select select2" id="status_nikah" name="status_nikah">
                                <option value="-" selected>Pilih Status</option>
                                <option value="Islam">Menikah</option>
                                <option value="Kristen">Belum Menikah</option>
                                <option value="Katolik">Duda</option>
                                <option value="Hindu">Janda</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-1">

                        <div class="col-md-6">
                            <label class="form-label">Nama Pasien</label>
                            <input type="text" class="form-control" name="nama_pasien" placeholder="">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Asuransi / Askes</label>
                            <div class="input-group-append">
                                <select class="form-select select2 form-select-md " id="asuransi" name="asuransi"
                                    aria-label="Default select example">
                                    <option selected>Pilih Asuransi / Askes</option>
                                    <?php foreach ($penjab as $pen) : ?>
                                    <option value="<?= $pen->kd_pj; ?>"> <?= $pen->kd_pj; ?> &rarr;
                                        <?= $pen->png_jawab; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                <button class="btn btn-outline-secondary" type="button" onclick="bayarFunction()"><i
                                        class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-select select2" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="-" selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="goldar">Golongan Darah</label>
                            <select class="form-select select2" id="goldar" name="goldar">
                                <option value="-" selected>Pilih Golongan Darah</option>
                                <option value="AB">AB</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="O">O</option>
                                <option value="-">-</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">No. Peserta</label>
                            <input type="text" class="form-control" name="no_peserta" placeholder="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="">
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
                            <input type="text" class="form-control" name="no_telpon" placeholder="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Pertama Daftar</label>
                            <input type="date" class="form-control" name="pertama_daftar" placeholder="">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-1">
                            <label class="form-label">Umur</label>
                            <input type="text" class="form-control" name="Tahun" placeholder="Thn">
                        </div>
                        <div class="col-md-1">
                            <label class="form-label">Umur</label>
                            <input type="text" class="form-control" name="Bulan" placeholder="Bln">
                        </div>
                        <div class="col-md-1">
                            <label class="form-label">Umur</label>
                            <input type="text" class="form-control" name="Hari" placeholder="Hri">
                        </div>
                        <div class="col-md-3">
                            <label for="goldar">Pendidikan</label>
                            <select class="form-select select2" id="pendidikan" name="pendidikan">
                                <option value="-" selected>Pilih Pendidikan</option>
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
                            <input type="text" class="form-control" name="identitas" placeholder="">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-6">
                            <label class="form-label">Nama Ibu</label>
                            <input type="text" class="form-control" name="ibu" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Alamat Pasien</label>
                            <input type="text" class="form-control" name="alamat_pasien" placeholder="">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-6">
                            <label for="">Penanggung Jawab</label>
                            <select class="form-select select2" id="penjab" name="penjab">
                                <option Value="-" selected>pilih Penanggung Jawab</option>
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
                                <select class="form-select select2 form-select-md " id="kelurahan" name="kelurahan"
                                    aria-label="Default select example">
                                    <option value="-" selected>Pilih Kelurahan</option>
                                    <?php foreach ($kelurahan as $kel) : ?>
                                    <option value="<?= $kel->kd_kel; ?>"> <?= $kel->kd_kel; ?> &rarr;
                                        <?= $kel->nm_kel; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                <button class="btn btn-outline-secondary" onclick="kelurahanFunction()" type="button"><i
                                        class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="">Kecamatan</label>
                            <div class="input-group-append">
                                <select class="form-select select2 form-select-md " id="kecamatan" name="kecamatan"
                                    aria-label="Default select example">
                                    <option value="-" selected>Pilih Kecamatan</option>
                                    <?php foreach ($kecamatan as $kec) : ?>
                                    <option value="<?= $kec->kd_kec; ?>"> <?= $kec->kd_kec; ?> &rarr;
                                        <?= $kec->nm_kec; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                <button class="btn btn-outline-secondary" type="button" onclick="kecamatanFunction()"><i
                                        class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-6"></div>
                        <div class="col-md-3">
                            <label for="">Kabupaten</label>
                            <div class="input-group-append">
                                <select class="form-select select2 form-select-md " id="kabupaten" name="kabupaten"
                                    aria-label="Default select example">
                                    <option selected>Pilih Kabupaten</option>
                                    <?php foreach ($kabupaten as $kab) : ?>
                                    <option value="<?= $kab->kd_kab; ?>"> <?= $kab->kd_kab; ?> &rarr;
                                        <?= $kab->nm_kab; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                <button class="btn btn-outline-secondary" type="button" onclick="kabupatenFunction()"><i
                                        class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="">Provinsi </label>
                            <div class="input-group-append">
                                <select class="form-select select2 form-select-md " id="provinsi" name="provinsi"
                                    aria-label="Default select example">
                                    <option value="-" selected>Pilih Provinsi</option>
                                    <?php foreach ($propinsi as $prop) : ?>
                                    <option value="<?= $prop->kd_prop; ?>"> <?= $prop->kd_prop; ?> &rarr;
                                        <?= $prop->nm_prop; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                <button class="btn btn-outline-secondary" type="button" onclick="provinsiFunction()"><i
                                        class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-6">
                            <label class="form-label">Penanggung Jawab</label>
                            <input type="text" class="form-control" name="nama_penjab" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Alamat Penanggung Jawab</label>
                            <input type="text" class="form-control" name="alamat_penjab" placeholder="">
                        </div>
                    </div>
                    <div class="row mt-1">

                        <div class="col-md-6">
                            <label class="form-label">Pekerjaan Penanggung Jawab</label>
                            <input type="text" class="form-control" name="pekerjaan_penjab" placeholder="">
                        </div>

                        <div class="col-md-3">
                            <label for="">Kelurahan</label>
                            <div class="input-group-append">
                                <select class="form-select select2 form-select-md " id="kelurahan_penjab"
                                    name="kelurahan_penjab" aria-label="Default select example">
                                    <option value="-" selected>Pilih Kelurahan</option>
                                    <?php foreach ($kelurahan as $kel) : ?>
                                    <option value="<?= $kel->kd_kel; ?>"> <?= $kel->kd_kel; ?> &rarr;
                                        <?= $kel->nm_kel; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                <button class="btn btn-outline-secondary" type="button" onclick="kelurahanFunction()"><i
                                        class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="">Kecamatan</label>
                            <div class="input-group-append">
                                <select class="form-select select2 form-select-md " id="kecamatan_penjab"
                                    name="kecamatan_penjab" aria-label="Default select example">
                                    <option value="-" selected>Pilih Kecamatan</option>
                                    <?php foreach ($kabupaten as $kab) : ?>
                                    <option value="<?= $kab->kd_kab; ?>"> <?= $kab->kd_kab; ?> &rarr;
                                        <?= $kab->nm_kab; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                <button class="btn btn-outline-secondary" type="button" onclick="kecamatanFunction()"><i
                                        class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-6">
                            <label for="">Suku Bangsa</label>
                            <div class="input-group-append">
                            <select class="form-select select2 form-select-md " id="suku" name="suku"
                                    aria-label="Default select example">
                                    <option value="-" selected>Pilih Suku Bangsa</option>
                                    <?php foreach ($suku as $suku) : ?>
                                    <option value="<?= $suku->id; ?>"> <?= $suku->nama_suku_bangsa; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                <button class="btn btn-outline-secondary" onclick="sukuFunction()" type="button"><i
                                        class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="">Kabupaten</label>
                            <div class="input-group-append">
                                <select class="form-select select2 form-select-md " id="kabupaten_penjab"
                                    name="kabupaten_penjab" aria-label="Default select example">
                                    <option value="-" selected>Pilih Kabupaten</option>
                                    <?php foreach ($kabupaten as $kab) : ?>
                                    <option value="<?= $kab->kd_kab; ?>"> <?= $kab->kd_kab; ?> &rarr;
                                        <?= $kab->nm_kab; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                <button class="btn btn-outline-secondary" type="button" onclick="kabupatenFunction()"><i
                                        class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="">Provinsi </label>
                            <div class="input-group-append">
                                <select class="form-select select2 form-select-md " id="provinsi_penjab"
                                    name="provinsi_penjab" aria-label="Default select example">
                                    <option value="-" selected>Pilih Provinsi</option>
                                    <?php foreach ($propinsi as $prop) : ?>
                                    <option value="<?= $prop->nm_prop; ?>"> <?= $prop->kd_prop; ?> &rarr;
                                        <?= $prop->nm_prop; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                <button class="btn btn-outline-secondary" type="button" onclick="provinsiFunction()"><i
                                        class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-6">
                            <label for="">Bahasa Dipakai</label>
                            <div class="input-group-append">
                                <select class="form-select select2 form-select-md " id="bahasa" name="bahasa"
                                    aria-label="Default select example">
                                    <option value="-" selected>Pilih Bahasa</option>
                                    <?php foreach ($bahasa as $bhs) : ?>
                                    <option value="<?= $bhs->id; ?>"> <?= $bhs->nama_bahasa; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                <button class="btn btn-outline-secondary" onclick="bahasaFunction()" type="button"><i
                                        class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="">Instansi Pasien</label>
                            <div class="input-group-append">
                                <select class="form-select select2 form-select-md " id="instansi" name="instansi"
                                    aria-label="Default select example">
                                    <option value="-" selected>Pilih Instansi</option>
                                    <?php foreach ($perusahaan as $peru) : ?>
                                    <option value="<?= $peru->kode_perusahaan; ?>"> <?= $peru->nama_perusahaan; ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                <button class="btn btn-outline-secondary" onclick="instansiFunction()" type="button"><i
                                        class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">NIP/NRP</label>
                            <input type="text" class="form-control" name="nip" placeholder="">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-6">
                            <label for="">Cacat Fisik</label>
                            <div class="input-group-append">
                                <select class="form-select  form-select-md " id="cacat_fisik" name="cacat_fisik"
                                    aria-label="Default select example">
                                    <option value="-" selected>Pilih Cacat Fisik</option>
                                    <?php foreach ($cacat as $cct) : ?>
                                    <option value="<?= $cct->id; ?>"> <?= $cct->nama_cacat; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                <button class="btn btn-outline-secondary" type="button" onclick="cacatFunction()"><i
                                        class="icon-copy dw dw-add"></i></button>
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
        <!-- End Tambah Data Pasien -->
        
        <!-- Ubah data Pasien -->
        <?php if (isset($pasienById)) { ?>
        <div id="ubah" class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h2 class="text-blue h2">Ubah Data Pasien</h2>
                </div>
            </div>
            <form action="<?= base_url() ?>admin/registrasi/update_pasien_baru" method="POST">
                <div class="pb-20 ">

                    <div class="row mt-1">
                        <div class="col-md-6">
                            <label class="form-label">No. Rekam Medis</label>
                            <input type="text" class="form-control" name="no_rkm_medis" value="<?= $pasienById->no_rkm_medis; ?>" readonly>
                        </div>
                        <div class="col-md-3">
                            <label for="agama">Agama</label>
                            <select class="form-select select2" id="agama" name="agama">
                                <option value="<?= $pasienById->agama; ?>" selected><?= $pasienById->agama; ?></option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Kong Hu Chu">Kong Hu Chu</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="stts_nikah">Status Nikah</label>
                            <select class="form-select select2" id="status_nikah" name="status_nikah">
                                <option value="<?= $pasienById->stts_nikah; ?>" selected><?= $pasienById->stts_nikah; ?></option>
                                <option value="Islam">Menikah</option>
                                <option value="Kristen">Belum Menikah</option>
                                <option value="Katolik">Duda</option>
                                <option value="Hindu">Janda</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-1">

                        <div class="col-md-6">
                            <label class="form-label">Nama Pasien</label>
                            <input type="text" class="form-control" name="nama_pasien" value="<?= $pasienById->nm_pasien; ?>">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Asuransi / Askes</label>
                            <div class="input-group-append">
                                <select class="form-select select2 form-select-md " id="asuransi" name="asuransi"
                                    aria-label="Default select example">
                                    <option value="<?= $pasienById->kd_pj; ?>" selected><?= $pasienById->kd_pj; ?> &rarr; <?= $pen->png_jawab; ?></option>
                                    <?php foreach ($penjab as $pen) : ?>
                                    <option value="<?= $pen->kd_pj; ?>"> <?= $pen->kd_pj; ?> &rarr;
                                        <?= $pen->png_jawab; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                <button class="btn btn-outline-secondary" type="button" onclick="bayarFunction()"><i
                                        class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-select select2" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="<?= $pasienById->jk; ?>" selected><?= $pasienById->jk; ?></option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="goldar">Golongan Darah</label>
                            <select class="form-select select2" id="goldar" name="goldar">
                                <option value="<?= $pasienById->gol_darah; ?>" selected><?= $pasienById->gol_darah; ?></option>
                                <option value="AB">AB</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="O">O</option>
                                <option value="-">-</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">No. Peserta</label>
                            <input type="text" class="form-control" name="no_peserta" value="<?= $pasienById->no_peserta; ?>">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="<?= $pasienById->email; ?>">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $pasienById->tmp_lahir; ?>" required>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir" value="<?= $pasienById->tgl_lahir; ?>" required>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">No. Telepon</label>
                            <input type="text" class="form-control" name="no_telpon" value="<?= $pasienById->no_tlp; ?>" required>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Pertama Daftar</label>
                            <input type="date" class="form-control" name="pertama_daftar" value="<?= $pasienById->tgl_daftar; ?>" required>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-1">
                            <label class="form-label">Umur</label>
                            <input type="text" class="form-control" name="Tahun" placeholder="Thn" value="<?= $pasienById->umur; ?>">
                        </div>
                        <div class="col-md-1">
                            <label class="form-label">Umur</label>
                            <input type="text" class="form-control" name="Bulan" placeholder="Bln">
                        </div>
                        <div class="col-md-1">
                            <label class="form-label">Umur</label>
                            <input type="text" class="form-control" name="Hari" placeholder="Hri">
                        </div>
                        <div class="col-md-3">
                            <label for="goldar">Pendidikan</label>
                            <select class="form-select select2" id="pendidikan" name="pendidikan">
                                <option value="<?= $pasienById->pnd; ?>" selected><?= $pasienById->pnd; ?></option>
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
                            <input type="text" class="form-control" name="pekerjaan" value="<?= $pasienById->pekerjaan; ?>" placeholder="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">No. KTP / SIM</label>
                            <input type="text" class="form-control" name="identitas" value="<?= $pasienById->no_ktp; ?>" placeholder="">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-6">
                            <label class="form-label">Nama Ibu</label>
                            <input type="text" class="form-control" name="ibu" placeholder="" value="<?= $pasienById->nm_ibu; ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Alamat Pasien</label>
                            <input type="text" class="form-control" name="alamat_pasien" placeholder="" value="<?= $pasienById->alamat; ?>">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-6">
                            <label for="">Penanggung Jawab</label>
                            <select class="form-select select2" id="penjab" name="penjab">
                                <option Value="<?= $pasienById->keluarga; ?>" selected><?= $pasienById->keluarga; ?></option>
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
                                <select class="form-select select2 form-select-md " id="kelurahan" name="kelurahan"
                                    aria-label="Default select example">
                                    <option value="-" selected>Pilih Kelurahan</option>
                                    <?php foreach ($kelurahan as $kel) : ?>
                                    <option value="<?= $kel->kd_kel; ?>"> <?= $kel->kd_kel; ?> &rarr;
                                        <?= $kel->nm_kel; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                <button class="btn btn-outline-secondary" onclick="kelurahanFunction()" type="button"><i
                                        class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="">Kecamatan</label>
                            <div class="input-group-append">
                                <select class="form-select select2 form-select-md " id="kecamatan" name="kecamatan"
                                    aria-label="Default select example">
                                    <option value="-" selected>Pilih Kecamatan</option>
                                    <?php foreach ($kecamatan as $kec) : ?>
                                    <option value="<?= $kec->kd_kec; ?>"> <?= $kec->kd_kec; ?> &rarr;
                                        <?= $kec->nm_kec; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                <button class="btn btn-outline-secondary" type="button" onclick="kecamatanFunction()"><i
                                        class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-6"></div>
                        <div class="col-md-3">
                            <label for="">Kabupaten</label>
                            <div class="input-group-append">
                                <select class="form-select select2 form-select-md " id="kabupaten" name="kabupaten"
                                    aria-label="Default select example">
                                    <option selected>Pilih Kabupaten</option>
                                    <?php foreach ($kabupaten as $kab) : ?>
                                    <option value="<?= $kab->kd_kab; ?>"> <?= $kab->kd_kab; ?> &rarr;
                                        <?= $kab->nm_kab; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                <button class="btn btn-outline-secondary" type="button" onclick="kabupatenFunction()"><i
                                        class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="">Provinsi </label>
                            <div class="input-group-append">
                                <select class="form-select select2 form-select-md " id="provinsi" name="provinsi"
                                    aria-label="Default select example">
                                    <option value="-" selected>Pilih Provinsi</option>
                                    <?php foreach ($propinsi as $prop) : ?>
                                    <option value="<?= $prop->kd_prop; ?>"> <?= $prop->kd_prop; ?> &rarr;
                                        <?= $prop->nm_prop; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                <button class="btn btn-outline-secondary" type="button" onclick="provinsiFunction()"><i
                                        class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-6">
                            <label class="form-label">Penanggung Jawab</label>
                            <input type="text" class="form-control" name="nama_penjab" placeholder="" value="<?= $pasienById->namakeluarga; ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Alamat Penanggung Jawab</label>
                            <input type="text" class="form-control" name="alamat_penjab" placeholder="" value="<?= $pasienById->alamatpj; ?>">
                        </div>
                    </div>
                    <div class="row mt-1">

                        <div class="col-md-6">
                            <label class="form-label">Pekerjaan Penanggung Jawab</label>
                            <input type="text" class="form-control" name="pekerjaan_penjab" placeholder="" value="<?= $pasienById->pekerjaanpj; ?>">
                        </div>

                        <div class="col-md-3">
                            <label for="">Kelurahan</label>
                            <div class="input-group-append">
                                <select class="form-select select2 form-select-md " id="kelurahan_penjab"
                                    name="kelurahan_penjab" aria-label="Default select example">
                                    <option value="-" selected>Pilih Kelurahan</option>
                                    <?php foreach ($kelurahan as $kel) : ?>
                                    <option value="<?= $kel->kd_kel; ?>"> <?= $kel->kd_kel; ?> &rarr;
                                        <?= $kel->nm_kel; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                <button class="btn btn-outline-secondary" type="button" onclick="kelurahanFunction()"><i
                                        class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="">Kecamatan</label>
                            <div class="input-group-append">
                                <select class="form-select select2 form-select-md " id="kecamatan_penjab"
                                    name="kecamatan_penjab" aria-label="Default select example">
                                    <option value="-" selected>Pilih Kecamatan</option>
                                    <?php foreach ($kabupaten as $kab) : ?>
                                    <option value="<?= $kab->kd_kab; ?>"> <?= $kab->kd_kab; ?> &rarr;
                                        <?= $kab->nm_kab; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                <button class="btn btn-outline-secondary" type="button" onclick="kecamatanFunction()"><i
                                        class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-6">
                            <label for="">Suku Bangsa</label>
                            <div class="input-group-append">
                                <select class="form-select select2 form-select-md " id="suku" name="suku"
                                    aria-label="Default select example">
                                    <option value="-" selected>Pilih Suku Bangsa</option>
                                    <?php foreach ($suku as $sku) : ?>
                                    <option value="<?= $sku->id; ?>"> <?= $sku->nama_suku_bangsa; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                <button class="btn btn-outline-secondary" onclick="sukuFunction()" type="button"><i
                                        class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>

                    
                        
                        <div class="col-md-3">
                            <label for="">Kabupaten</label>
                            <div class="input-group-append">
                                <select class="form-select select2 form-select-md " id="kabupaten_penjab"
                                    name="kabupaten_penjab" aria-label="Default select example">
                                    <option value="-" selected>Pilih Kabupaten</option>
                                    <?php foreach ($kabupaten as $kab) : ?>
                                    <option value="<?= $kab->kd_kab; ?>"> <?= $kab->kd_kab; ?> &rarr;
                                        <?= $kab->nm_kab; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                <button class="btn btn-outline-secondary" type="button" onclick="kabupatenFunction()"><i
                                        class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="">Provinsi </label>
                            <div class="input-group-append">
                                <select class="form-select select2 form-select-md " id="provinsi_penjab"
                                    name="provinsi_penjab" aria-label="Default select example">
                                    <option value="-" selected>Pilih Provinsi</option>
                                    <?php foreach ($propinsi as $prop) : ?>
                                    <option value="<?= $prop->nm_prop; ?>"> <?= $prop->kd_prop; ?> &rarr;
                                        <?= $prop->nm_prop; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                <button class="btn btn-outline-secondary" type="button" onclick="provinsiFunction()"><i
                                        class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-6">
                            <label for="">Bahasa Dipakai</label>
                            <div class="input-group-append">
                                <select class="form-select select2 form-select-md " id="bahasa" name="bahasa"
                                    aria-label="Default select example">
                                    <option value="-" selected>Pilih Bahasa</option>
                                    <?php foreach ($bahasa as $bhs) : ?>
                                    <option value="<?= $bhs->id; ?>"> <?= $bhs->nama_bahasa; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                <button class="btn btn-outline-secondary" onclick="bahasaFunction()" type="button"><i
                                        class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="">Instansi Pasien</label>
                            <div class="input-group-append">
                                <select class="form-select select2 form-select-md " id="instansi" name="instansi"
                                    aria-label="Default select example">
                                    <option value="-" selected>Pilih Instansi</option>
                                    <?php foreach ($perusahaan as $peru) : ?>
                                    <option value="<?= $peru->kode_perusahaan; ?>"> <?= $peru->nama_perusahaan; ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                <button class="btn btn-outline-secondary" onclick="instansiFunction()" type="button"><i
                                        class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">NIP/NRP</label>
                            <input type="text" class="form-control" name="nip" placeholder="">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-6">
                            <label for="">Cacat Fisik</label>
                            <div class="input-group-append">
                                <select class="form-select  form-select-md " id="cacat_fisik" name="cacat_fisik"
                                    aria-label="Default select example">
                                    <option value="-" selected>Pilih Cacat Fisik</option>
                                    <?php foreach ($cacat as $cct) : ?>
                                    <option value="<?= $cct->id; ?>"> <?= $cct->nama_cacat; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <input type="text" class="form-control" name="unit" placeholder=""> -->
                                <button class="btn btn-outline-secondary" type="button" onclick="cacatFunction()"><i
                                        class="icon-copy dw dw-add"></i></button>
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
        <?php } else { echo ""; } ?>
        <!-- End Ubah data Pasien -->


    </div>
</div>
<div class="xs-pd-20-10 pd-ltr-20">
    <div class="pd-20 card-box mb-30">
        <div class="clearfix mb-20">
            <!-- table data pasien lama -->
            <table id="DataTablePasien" class="table-responsive table table-bordered display-dataTables mt-4">
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
                            <a href="<?= base_url(); ?>admin/registrasi/get_update_pasien/<?= $pasien->no_rkm_medis; ?>#ubah"><span
                                    class="badge badge-warning p-2">Ubah</span></a>
                            <a href="<?= base_url(); ?>admin/registrasi/delete_pasien/<?= $pasien->no_rkm_medis; ?>"><span
                                    class="badge badge-danger p-2"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus !');">Hapus</span></a>
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
                        <td><?= $pasien->png_jawab; ?></td>
                        <td><?= $pasien->no_peserta; ?></td>
                        <td><?= $pasien->pekerjaanpj; ?></td>
                        <td><?= $pasien->pekerjaanpj; ?></td>
                        <td><?= $pasien->alamatpj; ?></td>
                        <td><?= $pasien->nama_suku_bangsa; ?></td>
                        <td><?= $pasien->nama_bahasa; ?></td>
                        <td><?= $pasien->nama_perusahaan; ?></td>
                        <td><?= $pasien->nip; ?></td>
                        <td><?= $pasien->email; ?></td>
                        <td><?= $pasien->nama_cacat; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- end table data pasien lama -->
        </div>


    </div>
</div>


<script>
$('table.display-dataTables').dataTable({
    scrollY: "300px",
    scrollX: true,
    paging: true,
    searching: true,
});
</script>

<!-- copyright -->
<?php
    $this->load->view('templates/admin/copyright');
    ?>
<!-- copyright -->
</div>
</div>

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

function instansiFunction() {
    window.open("<?= base_url() ?>admin/registrasi/tambah_instansi_pasien", "_blank",
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

function provinsiFunction() {
    window.open("<?= base_url() ?>admin/registrasi/tambah_provinsi", "_blank",
        "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=1000,height=1000");
}
</script>