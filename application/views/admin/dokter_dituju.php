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
                        <h4>Tambah Dokter Dituju</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Dokter Dituju</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!--  Datatable start -->
        <div class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h2 class="text-blue h2">Tambah Data Dokter Dituju</h2>
                </div>
            </div>
            <?= form_error('nik', '<div class="alert alert-danger" role="alert">Maaf, Gagal menyimpan data, Kemungkinan ada kode Dokter yang sama di masukan sebelumnya..! &rarr; ', '</div>'); ?>

            <form action="<?= base_url() ?>admin/registrasi/insert_dokter_dituju" method="POST">
                <div class="pb-20 ">

                    <div class="row">
                        <div class="col-md-6">
                            <label for="exampleFormControlInput1" class="form-label">Kode Dokter</label>
                            <!-- <div class="input-group-append"> -->
                            <select name="nik" id="nik" class="form-select form-select-md"
                                onchange="show_pegawai(this.value)"></select>
                            <!-- <input type="text" class="form-control" name="kd_dokter" placeholder="Kode Dokter" > -->
                            <!-- <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#modalKodeDokter"><i class="icon-copy dw dw-magnifying-glass"></i></button> -->
                            <!-- </div> -->

                        </div>
                        <div class="col-md-3">
                            <label for="agama">Agama</label>
                            <select class="form-select" id="agama" name="agama">
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
                            <select class="form-select" id="stts_nikah" name="stts_nikah">
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
                            <input type="text" class="form-control" id="nama" name="nama" required readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="nama_dokter">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-select" id="jk" name="jk">
                                <option selected>Choose...</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="goldar">Golongan Darah</label>
                            <select class="form-select" id="goldar" name="goldar">
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
                            <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" required>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                        </div>
                        <div class="col-md-6 mt-1">
                            <label class="form-label">Spesialis</label>
                            <div class="input-group-append">
                                <select class="form-select form-select-md " id="spesialis" name="spesialis"
                                    aria-label="Default select example">
                                    <option selected>Pilih Spesialis</option>
                                    <?php foreach ($spesialis as $sps) : ?>
                                    <option value="<?= $sps->kd_sps; ?>"> <?= $sps->kd_sps; ?> &rarr;
                                        <?= $sps->nm_sps; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <button class="btn btn-outline-secondary" type="button" onclick="spesialisFunction()"><i
                                        class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label for="no_ijin_praktek">No. Ijin Praktek</label>
                            <input type="text" class="form-control" id="no_ijin_praktek" name="no_ijin_praktek"
                                required>
                        </div>
                        <div class="col-md-6">
                            <label for="alumni">Alumni</label>
                            <input type="text" class="form-control" id="alumni" name="alumni" required>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary p-2">Simpan</button>
                        </div>
                    </div>
            </form>
        </div>
        </form>


    </div>

    <!-- Ubah data dokter -->
    <?php if (isset($dokterById)) { ?>
    <div id="ubah" class="pd-20 card-box mb-30">
        <div class="clearfix mb-20">
            <div class="pull-left">
                <h2 class="text-blue h2">Ubah Data Dokter Dituju</h2>
            </div>
        </div>
        <?= form_error('nik', '<div class="alert alert-danger" role="alert">Maaf, Gagal menyimpan data, Kemungkinan ada kode Dokter yang sama di masukan sebelumnya..! &rarr; ', '</div>'); ?>

        <form action="<?= base_url() ?>admin/registrasi/update_dokter_dituju/<?= $dokterById->kd_dokter; ?>"
            method="POST">
            <div class="pb-20 ">

                <div class="row">
                    <div class="col-md-6">
                        <label for="exampleFormControlInput1" class="form-label">Kode Dokter</label>
                        <!-- <div class="input-group-append"> -->
                        <!-- <select name="nik" id="nik" class="form-select form-select-md"
                            onchange="show_pegawai(this.value)"></select> -->
                        <input type="text" class="form-control" name="nik" value="<?= $dokterById->kd_dokter; ?>"
                            readonly>
                        <!-- <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#modalKodeDokter"><i class="icon-copy dw dw-magnifying-glass"></i></button> -->
                        <!-- </div> -->

                    </div>
                    <div class="col-md-3">
                        <label for="agama">Agama</label>
                        <select class="form-select" id="agama" name="agama">
                            <option value="<?= $dokterById->agama; ?>" selected><?= $dokterById->agama; ?></option>
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
                        <select class="form-select" id="stts_nikah" name="stts_nikah">
                            <option value="<?= $dokterById->stts_nikah; ?>" selected><?= $dokterById->stts_nikah; ?>
                            </option>
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
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="<?= $dokterById->nm_dokter; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="nama_dokter">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat"
                            value="<?= $dokterById->almt_tgl; ?>" required>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-3">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-select" id="jk" name="jk" required>
                            <option value="<?= $dokterById->jk; ?>" selected><?= $dokterById->jk; ?></option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="goldar">Golongan Darah</label>
                        <select class="form-select" id="goldar" name="goldar">
                            <option value="<?= $dokterById->gol_drh; ?>" selected><?= $dokterById->gol_drh; ?></option>
                            <option value="AB">AB</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="O">O</option>
                            <option value="-">-</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="no_telp">No. Telepon</label>
                        <input type="text" class="form-control" id="no_telp" name="no_telp"
                            value="<?= $dokterById->no_telp; ?>" required>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-3">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir"
                            value="<?= $dokterById->tmp_lahir; ?>" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                            value="<?= $dokterById->tgl_lahir; ?>" required>
                    </div>
                    <div class="col-md-6 mt-1">
                        <label class="form-label">Spesialis</label>
                        <div class="input-group-append">
                            <select class="form-select form-select-md " id="spesialis" name="spesialis"
                                aria-label="Default select example">
                                <option value="" selected>Pilih Spesialis</option>
                                <?php foreach ($spesialis as $sps) : ?>
                                <option value="<?= $sps->kd_sps; ?>"> <?= $sps->kd_sps; ?> &rarr;
                                    <?= $sps->nm_sps; ?> </option>
                                <?php endforeach; ?>
                            </select>
                            <button class="btn btn-outline-secondary" type="button" onclick="spesialisFunction()"><i
                                    class="icon-copy dw dw-add"></i></button>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="no_ijin_praktek">No. Ijin Praktek</label>
                        <input type="text" class="form-control" id="no_ijin_praktek" name="no_ijin_praktek" required>
                    </div>
                    <div class="col-md-6">
                        <label for="alumni">Alumni</label>
                        <input type="text" class="form-control" id="alumni" name="alumni" required>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary p-2">Simpan</button>
                    </div>
                </div>
        </form>
    </div>
    </form>
    </div>
    <?php } else { echo ""; } ?>
<!-- End Ubah data dokter -->
</div>
<div class="xs-pd-20-10 pd-ltr-20">

    <div class="pd-20 card-box mb-30">
        <div class="clearfix mb-20">
            <!-- table data Dokter -->
            <table id="DataTableDokterDituju" class="table-responsive table table-bordered display-dataTables">
                <thead>
                    <tr>
                        <th scope="col">Action</th>
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
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dokter as $dk) : ?>
                    <tr>
                        <td>
                            <a
                                href="<?= base_url(); ?>admin/registrasi/get_update_dokter_dituju/<?= $dk->kd_dokter; ?>#ubah"><span
                                    class="badge badge-warning p-2">Ubah</span></a>
                            <a href="<?= base_url(); ?>admin/registrasi/delete_dokter_dituju/<?= $dk->kd_dokter; ?>"><span
                                    class="badge badge-danger p-2"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus !');">Hapus</span></a>
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
        <div class="button mb-2 d-flex justify-content-end">
            <a href="#" class="btn btn-warning"><i class="icon-copy dw dw-print pr-2"></i>Cetak</a>
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
<script type="text/javascript">
$(document).ready(function() {
    $('#DataTableDokter').dataTable();

});
</script>
<!--  Datatable End -->
<!-- copyright -->
<?php
    $this->load->view('templates/admin/copyright');
    ?>
<!-- copyright -->
</div>
</div>

<script>
$(document).ready(function() {
    $('#nik').select2({
        placeholder: "Kode Dokter"
    });
    $('#spesialis').select2();
    show_nik();

});
// fungsi untuk menampilkan NIK/Kode Dokter
function show_nik() {
    $.ajax({
        url: "<?php echo base_url('admin/Registrasi/get_nik'); ?>",
        type: "GET",
        dataType: "JSON",
        success: function(x) {
            if (x.status == true) {
                $('#nik').html('<option value=""></option>');
                $.each(x.data, function(k, v) {
                    $('#nik').append(
                        `<option value="${v.nik}">${v.nik} &rarr; ${v.nama}</option>`
                    );
                });
            }
        }
    });
}
// fungsi untuk menampilkan dokter berdasarkan NIK/Kode Pegawai
function show_pegawai(x) {
    $.ajax({
        url: "<?php echo base_url('admin/registrasi/get_pegawai'); ?>",
        type: "GET",
        dataType: "JSON",
        data: {
            nik: x
        },
        success: function(x) {
            if (x.status == true) {
                $('#nama').val(x.data.nama);
                $('#jk').val(x.data.jk);
                $('#tmp_lahir').val(x.data.tmp_lahir);
                $('#tgl_lahir').val(x.data.tgl_lahir);
                $('#alamat').val(x.data.alamat);
            }
        }
    });
}
</script>