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
                        <h4>Rawat Inap</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Rawat Inap</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!--  Datatable start -->
        <div class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h2 class="text-blue h2">Daftar Pasien Rawat Inap</h2>
                </div>
                <div class="d-flex justify-content-end">
                    <a type="button" data-toggle="modal" data-target="#modalsMasuk" class="btn btn-outline-info"
                        href=""><i class="icon-copy dw dw-enter pr-2"></i>Pasien Masuk</a>
                    <a class="btn btn-outline-secondary ml-2" href=""><i class="icon-copy dw dw-print pr-2"></i>Cetak
                        Data</a>
                </div>
            </div>
            <div class="pb-20 ">
                <table id="example" class="table-responsive table table-bordered display-dataTables">
                    <thead>
                        <tr>
                            <th scope="col">Action</th>
                            <th scope="col">No. Rawat</th>
                            <th scope="col">No. RM</th>
                            <th scope="col">Nama Pasien</th>
                            <th scope="col">Alamat Pasien</th>
                            <th scope="col">Penanggungjawab</th>
                            <th scope="col">Hubungan PJ</th>
                            <th scope="col">Jenis Bayar</th>
                            <th scope="col">Kamar</th>
                            <th scope="col">Tarif Kamar</th>
                            <th scope="col">Diagnosa Awal</th>
                            <th scope="col">Diagnosa Akhir</th>
                            <th scope="col">Tgl. Masuk</th>
                            <th scope="col">Jam Masuk</th>
                            <th scope="col">Tgl. Keluar</th>
                            <th scope="col">Jam Keluar</th>
                            <th scope="col">Ttl. Biaya</th>
                            <th scope="col">Stts. Pulang</th>
                            <th scope="col">Lama </th>
                            <th scope="col">Dokter P.J.</th>
                            <th scope="col">Status Bayar</th>
                            <th scope="col">Agama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($ranap as $ranap) : ?>
                        <?php if ($ranap->tgl_keluar == 0000 - 00 - 00 && $ranap->stts_pulang == "-" && $ranap->status_lanjut == "Ranap" && $ranap->lama == '1') {
                            ?>
                        <tr>
                            <td>
                                <a
                                    href="<?= base_url(); ?>admin/RawatInap/pulang/<?= $ranap->no_rkm_medis; ?>#pasienPulang"><span
                                        class="badge badge-success p-2 mb-1"><i
                                            class="icon-copy dw dw-logout1 pr-2"></i>Pulang</span></a>
                                <a type="button" data-toggle="modal" data-target="#modalsPindah" href=""><span
                                        class="badge badge-warning p-2"><i
                                            class="icon-copy dw dw-move pr-2"></i>Pindah</span></a>
                            </td>
                            <td><?= $ranap->no_rawat; ?></td>
                            <td><?= $ranap->no_rkm_medis; ?></td>
                            <td><?= $ranap->nm_pasien; ?></td>
                            <td><?= $ranap->alamat; ?></td>
                            <td><?= $ranap->p_jawab; ?></td>
                            <td><?= $ranap->hubunganpj; ?></td>
                            <td><?= $ranap->png_jawab; ?></td>
                            <td><?= $ranap->nm_bangsal; ?></td>
                            <td><?= $ranap->trf_kamar; ?></td>
                            <td><?= $ranap->diagnosa_awal; ?></td>
                            <td><?= $ranap->diagnosa_akhir; ?></td>
                            <td><?= $ranap->tgl_masuk; ?></td>
                            <td><?= $ranap->jam_masuk; ?></td>
                            <td><?= $ranap->tgl_keluar; ?></td>
                            <td><?= $ranap->jam_keluar; ?></td>
                            <td><?= $ranap->ttl_biaya; ?></td>
                            <td><?= $ranap->stts_pulang; ?></td>
                            <td><?= $ranap->lama; ?></td>
                            <td><?= $ranap->nm_dokter; ?></td>
                            <td><?= $ranap->status_bayar; ?></td>
                            <td><?= $ranap->agama; ?></td>
                        </tr>

                        <?php
                            }
                            ?>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- Modals Pasien Masuk -->
            <div class="modal fade" id="modalsMasuk" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Input Kamar Inap Pasien</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">No.Rekam Medis</label>
                                    <select name="no_rkm_medis" id="no_rkm_medis" class="form-select form-select-md"
                                        onchange="show_pasien(this.value)"></select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">No.Rawat</label>
                                    <input type="text" class="form-control" id="no_rawat" name="no_rawat" value=""
                                        readonly>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Nama Pasien</label>
                                    <input type="text" class="form-control" id="nm_pasien" name="nm_pasien" value=""
                                        readonly>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Kamar</label>
                                    <div class="input-group-append">
                                        <select class="form-select form-select-md " id="macamKasus" name="macam_kasus"
                                            aria-label="Default select example">
                                            <option value="-" selected>Pilih</option>

                                        </select>
                                        <button class="btn btn-outline-secondary" type="button" data-toggle="modal"
                                            onclick="kasusFunction()"><i class="icon-copy dw dw-add"></i></button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Tanggal</label>
                                    <input type="date" class="form-control" id="no_rawat" name="no_rawat" value="">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Jam</label>
                                    <input type="time" class="form-control" id="nm_pasien" name="nm_pasien" value="">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Diagnosa Awal Masuk</label>
                                    <input type="text" class="form-control" id="nm_pasien" name="nm_pasien" value="">
                                </div>
                                <!-- -->
                                <div class="form-row align-items-center">
                                    <div class="col-md-3">
                                        <label class="form-label">Biaya</label>
                                        <input type="text" class="form-control" id="nm_pasien" name="nm_pasien"
                                            value="">
                                    </div>
                                    <div class="col-1">
                                        <div class="form-check mb-2">
                                            <label class="form-check-label" for="autoSizingCheck">
                                                x
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">Tarif Kamar</label>
                                        <input type="text" class="form-control" id="nm_pasien" name="nm_pasien"
                                            value="">
                                    </div>
                                    <div class="col-1">
                                        <div class="form-check mb-2">
                                            <label class="form-check-label" for="autoSizingCheck">
                                                =
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Total</label>
                                        <input type="text" class="form-control" id="nm_pasien" name="nm_pasien"
                                            value="">
                                    </div>
                                </div>
                                <!-- -->
                                <div class="form-row align-items-center mt-3">
                                    <div class="col-5">
                                        <div class="form-check mb-2">
                                            <label class="form-check-label" for="autoSizingCheck">
                                                Proses: Masuk/CheckIn
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modals Pasien Masuk -->

            <!-- modals pindah -->
            <div class="modal fade" id="modalsPindah" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Pindah Kamar Inap Pasien</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">No.Rekam Medis</label>
                                    <input type="text" class="form-control" id="no_rkm_medis" name="no_rkm_medis"
                                        value="" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">No.Rawat</label>
                                    <input type="text" class="form-control" id="no_rawat" name="no_rawat" value=""
                                        readonly>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Nama Pasien</label>
                                    <input type="text" class="form-control" id="nm_pasien" name="nm_pasien" value=""
                                        readonly>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Kamar</label>
                                    <select name="no_rkm_medis" id="no_rkm_medis" class="form-select form-select-md"
                                        onchange="show_pasien(this.value)"></select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Tanggal</label>
                                    <input type="date" class="form-control" id="no_rawat" name="no_rawat" value="">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Jam</label>
                                    <input type="time" class="form-control" id="nm_pasien" name="nm_pasien" value="">
                                </div>

                                <!-- -->
                                <div class="form-row align-items-center">
                                    <div class="col-md-3">
                                        <label class="form-label">Biaya</label>
                                        <input type="text" class="form-control" id="nm_pasien" name="nm_pasien"
                                            value="">
                                    </div>
                                    <div class="col-1">
                                        <div class="form-check mb-2">
                                            <label class="form-check-label" for="autoSizingCheck">
                                                x
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">Tarif Kamar</label>
                                        <input type="text" class="form-control" id="nm_pasien" name="nm_pasien"
                                            value="">
                                    </div>
                                    <div class="col-1">
                                        <div class="form-check mb-2">
                                            <label class="form-check-label" for="autoSizingCheck">
                                                =
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Total</label>
                                        <input type="text" class="form-control" id="nm_pasien" name="nm_pasien"
                                            value="">
                                    </div>
                                </div>
                                <!-- -->
                                <div class="form-row align-items-center mt-2">
                                    <div class="col-2">
                                        <div class="form-check mb-2">
                                            <label class="form-check-label" for="autoSizingCheck">
                                                Pilihan:
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                1. Kamar Inap sebelumnya dihapus dan pasien dihitung
                                                menginap mulai saat
                                                ini (Kamar Inap lama dihapus dari biling)

                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                2. Kamar Inap sebelumnya di ganti kamarnya dengan kamar Inap
                                                terbaru dan
                                                harga kamar menyesuaikan harga kamar baru
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                3. Kamar Inap sebelumnya distatuskan pindah, lama inap di
                                                hitung dan
                                                pasien di masukkan ke kamar inap yang baru

                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                4. Seperti nomer 3, Kamar Inap sebelumnya mengikuti harga
                                                tertinggi
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modals pindah -->


        </div>
    </div>
    <!--  Datatable End -->
    <!-- pasien pulang -->
    <?php if (isset($ranapById)) { ?>
    <div id="pasienPulang" class="pd-20 card-box mb-30">
        <div class="row">
            <div class="pull-left">
                <h2 class="text-blue h2">Input Kamar Inap Pasien</h2>
            </div>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label class="form-label">No.Rawat</label>
                <input type="text" class="form-control" id="no_rawat" name="no_rawat"
                    value="<?= $ranapById->no_rawat; ?>" readonly>
            </div>
            <div class="col-md-3">
                <label class="form-label">No.Rekam Medis</label>
                <input type="text" class="form-control" id="no_rkm_medis" name="no_rkm_medis"
                    value="<?= $ranapById->no_rkm_medis; ?>" readonly>
            </div>
            <div class="col-md-5">
                <label class="form-label">Nama Pasien</label>
                <input type="text" class="form-control" id="nm_pasien" name="nm_pasien"
                    value="<?= $ranapById->nm_pasien; ?>" readonly>
            </div>
            <div class="col-md-9">
                <label class="form-label">Kamar</label>
                <select class="form-select form-select-md" aria-label=".form-select-sm example">
                    <option value="<?= $ranapById->kd_kamar; ?>" selected>
                        <?= $ranapById->kd_kamar; ?> &rarr; <?= $ranapById->kd_bangsal; ?>
                        &rarr; <?= $ranapById->nm_bangsal; ?></option>

                </select>
            </div>
            <div class="col-md-3">
                <label class="form-label">Stts Kamar</label>
                <input type="text" class="form-control" id="stts_kamar" name="stts_kamar"
                    value="<?= $ranapById->status; ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal_pulang" name="tanggal_pulang" value="">
            </div>
            <div class="col-md-6">
                <label class="form-label">Jam</label>
                <input type="time" class="form-control" id="jam_pulang" name="jam_pulang" value="">
            </div>
            <div class="col-md-12">
                <label class="form-label">Diagnosa Awal Masuk</label>
                <input type="text" class="form-control" id="diagnosa_awal" name="diagnosa_awal"
                    value="<?= $ranapById->diagnosa_awal; ?>">
            </div>
            <div class="row mt-2 mb-2">
                <hr>
                <label class="form-label">Diagnosa Akhir Keluar</label>
                <div class="col-md-12 mb-2">
                    <div class="card-box pd-10">
                        <label class="form-label">Table Diagnosa</label>
                        <!-- table data Diagnosa -->
                        <table id="DataTableDiagnosa" class="display table table-bordered  mt-3"  style="width:100%">
                            <thead>
                                <tr>
                                    <!-- <th scope="col">Pilih</th> -->
                                    <th scope="col">Kode</th>
                                    <th scope="col">Nama Penyakit</th>
                                    <th scope="col">Ciri2 Penyakit</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Ktg Penyakit</th>
                                    <th scope="col">Ciri2 Umum</th>
                                </tr>
                            </thead>
                            <!-- <tbody>
                                <?php foreach($penyakit as $pkt) : ?>
                                   <tr>
                                       <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                       </td>
                                       <td><?= $pkt->kd_penyakit; ?></td>
                                       <td><?= $pkt->nm_penyakit; ?></td>
                                       <td><?= $pkt->ciri_ciri; ?></td>
                                       <td><?= $pkt->keterangan; ?></td>
                                       <td><?= $pkt->nm_kategori; ?></td>
                                       <td><?= $pkt->ciri_umum; ?></td>
                                   </tr>
                                   <?php endforeach; ?>
                            </tbody> -->
                        </table>
                        <!-- end table data Diagnosa -->
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="card-box pd-10">
                        <label class="form-label">Table Prosedur</label>
                        <!-- table data Prosedur -->
                        <table  id="DataTableProsedur"
                            class="display table table-bordered  mt-3"  style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">Pilih</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Deskripsi Panjang</th>
                                    <th scope="col">Deskripsi Pendek</th>

                                </tr>
                            </thead>
                            <!-- <tbody>
                                <?php foreach($icd as $ic) : ?>
                                   <tr>
                                       <td class="text-center">
                                       <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                       </td>
                                       <td><?= $ic->kode; ?></td>
                                       <td><?= $ic->deskripsi_panjang; ?></td>
                                       <td><?= $ic->deskripsi_pendek; ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                            </tbody> -->
                        </table>
                        <!-- end table data Prosedur -->
                    </div>
                </div>
                <hr>
            </div>
            <!-- -->
            <div class="form-row align-items-center">
                <div class="col-md-3">
                    <label class="form-label">Biaya</label>
                    <input type="text" class="form-control" id="nm_pasien" name="nm_pasien" value="">
                </div>
                <div class="col-1">
                    <div class="form-check mb-2">
                        <label class="form-check-label" for="autoSizingCheck">
                            x
                        </label>
                    </div>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Tarif Kamar</label>
                    <input type="text" class="form-control" id="nm_pasien" name="nm_pasien" value="">
                </div>
                <div class="col-1">
                    <div class="form-check mb-2">
                        <label class="form-check-label" for="autoSizingCheck">
                            =
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Total</label>
                    <input type="text" class="form-control" id="nm_pasien" name="nm_pasien" value="">
                </div>
            </div>
            <!-- -->
            <div class="form-row align-items-center">
                <div class="col-5">
                    <div class="form-check mb-2">
                        <label class="form-check-label" for="autoSizingCheck">
                            Proses: Pulang/Checkout
                        </label>
                    </div>
                </div>
                <div class="col-md-7">
                    <label class="form-label">Status Pulang atau Keluar</label>
                    <select class="form-select form-select-md" aria-label=".form-select-sm example" name="stts_pulang">
                        <option value="-" selected>Pilih</option>
                        <option value="-">-</option>
                        <option value="Membaik">Membaik</option>
                        <option value="Pulang Paksa">Pulang Paksa</option>
                        <option value="Pindah Kamar">Pindah Kamar</option>
                        <option value="Status Belum Lengkap">Status Belum Lengkap
                        </option>
                        <option value="Atas Persetujuan Dokter">Atas Persetujuan Dokter
                        </option>
                        <option value="Atas Permintaan Sendiri">Atas Permintaan Sendiri
                        </option>
                        <option value="Lain-Lain">Lain-Lain</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <?php } else { echo ""; } ?>
    <!-- pasien pulang -->

</div>
</div>
<!-- copyright -->
<?php
$this->load->view('templates/admin/copyright');
?>
<!-- copyright -->
<script>
// $('table.display-dataTables').dataTable({
//     paging: true,
//     searching: true,
// });
// $('#DataTableDiagnosa').dataTable({
//     paging: true,
//     searching: true,
//     info: false
// });
// $('#DataTableProsedur').dataTable({
//     paging: true,
//     searching: true,
//     info:false
// });


$(document).ready(function() {
    // Setup datatables
    $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings) {
        return {
            "iStart": oSettings._iDisplayStart,
            "iEnd": oSettings.fnDisplayEnd(),
            "iLength": oSettings._iDisplayLength,
            "iTotal": oSettings.fnRecordsTotal(),
            "iFilteredTotal": oSettings.fnRecordsDisplay(),
            "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
            "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
        };
    };

    var table = $("#DataTableProsedur").dataTable({
        
        processing: true,
        serverSide: true,
        order: [],
        ajax: {
            "url": "<?= base_url('admin/RawatInap/icd9_json'); ?>",
            "type": "POST"
        },
        columns: [{
                "data": "kode",
                "orderable": false,
                "searchable": true
            },
            {
                "data": "deskripsi_pendek",
                "orderable": false,
                "searchable": true
            },
            {
                "data": "deskripsi_panjang",
                "orderable": false,
                "searchable": true
            },
            
        ],
        //Set column definition initialisation properties.
       
        rowCallback: function(row, data, iDisplayIndex) {
            var info = this.fnPagingInfo();
            var page = info.iPage;
            var length = info.iLength;
            $('td:eq(0)', row).html();
        }
        

    });
    // end setup datatables
    var table = $("#DataTableDiagnosa").dataTable({
        initComplete: function() {
            var api = this.api();
            $('#DataTableDiagnosa_filter input')
                .off('.DT')
                .on('input.DT', function() {
                    api.search(this.value).draw();
                });
        },
        oLanguage: {
            sProcessing: ""
        },
        processing: true,
        serverSide: true,
        ajax: {
            "url": "<?= base_url('admin/RawatInap/penyakit_json'); ?>",
            "type": "POST"
        },
        columns: [{
                "data": "kd_penyakit"
            },
            {
                "data": "nm_penyakit"
            },
            {
                "data": "ciri_ciri"
            },
            {
                "data": "keterangan"
            },
            {
                "data": "nm_kategori"
            },
            {
                "data": "ciri_umum"
            },
            
        ],
        order: [
           
        ],
        rowCallback: function(row, data, iDisplayIndex) {
            var info = this.fnPagingInfo();
            var page = info.iPage;
            var length = info.iLength;
            $('td:eq(0)', row).html();
        }

    });
    // end setup datatables

});
</script>