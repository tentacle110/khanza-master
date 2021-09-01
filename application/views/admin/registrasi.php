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
                        <h4>Registrasi</h4>
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
        <!-- Form pendaftaran pasien baru -->
        <div id="formTambahPasien" class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h2 class="text-blue h2">Registrasi Periksa Hari Ini</h2>
                </div>
                <div class="pull-left ml-4">
                    <button type="button" class="btn btn-outline-primary" id="btn-add-reg"><i class="fa fa-caret-down"></i> </button>
                </div>
            </div>

            <form action="<?= base_url(); ?>admin/registrasi/insert_registrasi" method="post">
                <div class="row" id="form-add-reg">
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
                        <label class="form-label mt-2">Unit/Poliklinik</label>
                        <div class="input-group-append">
                            <select class="form-select form-select-md " id="unit" name="unit" aria-label="Default select example">
                                <option selected>Pilih Unit/Poliklinik</option>
                                <?php foreach ($unit as $un) : ?>
                                    <option value="<?= $un->kd_poli; ?>"> <?= $un->kd_poli; ?> &rarr; <?= $un->nm_poli; ?>
                                        &rarr; <?= $un->registrasi; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <!-- <input type="text" class="form-control" name="unit" placeholder="Unit" readonly> -->
                            <button class="btn btn-outline-secondary" type="button" data-toggle="modal" onclick="poliklinikFunction()"><i class="icon-copy dw dw-add"></i></button>
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

        <!-- Datatable Registrawi Awal & Rujukan Internal Poli -->

        <div class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h2 class="text-blue h2">Data Pasien Rawat Jalan</h2>
                </div>
            </div>
            <div class="pd-20 card-box mb-30">

                <!-- tab navs menu -->
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Registrasi Awal</a>
                        <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Rujukan Internal Poli</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <!-- Table Registrasi Awal-->
                    <div class="tab-pane fade show active" id="nav-home" id="table-responsive-cliente" role="tabpanel" aria-labelledby="nav-home-tab">
                        <table id="DataTablesRegistrasi" class="table-responsive table table-bordered display-dataTables">
                            <thead>
                                <tr>
                                    <th scope="col">No.reg</th>
                                    <th scope="col">No.rawat</th>
                                    <th scope="col">tanggal</th>
                                    <th scope="col">jam</th>
                                    <th scope="col">kd.dokter</th>
                                    <th scope="col">Dokter Dituju</th>
                                    <th scope="col">Nomor Rm</th>
                                    <th scope="col">Pasien</th>
                                    <th scope="col">J.K</th>
                                    <th scope="col">Umur</th>
                                    <th scope="col">Poliklinik</th>
                                    <th scope="col">Jenis Bayar</th>
                                    <th scope="col">Penanggung Jawab</th>
                                    <th scope="col">Alamat PJ</th>
                                    <th scope="col">Hubungan PJ</th>
                                    <th scope="col">Biaya Registrasi</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">No. Telp</th>
                                    <th scope="col">Status Rawat</th>
                                    <th scope="col">Status Poli</th>
                                    <th scope="col">Status Bayar</th>
                                </tr>
                            </thead>
                            <tbody id="DataTablesRegistrasiBody">
                                <?php foreach ($reg_awal as $reg) : ?>
                                    <tr id="rcmenu">
                                        <td><?= $reg->no_reg; ?></td>
                                        <td id="no-rawat"><?= $reg->no_rawat; ?></td>
                                        <td><?= $reg->tgl_registrasi; ?></td>
                                        <td><?= $reg->jam_reg; ?></td>
                                        <td><?= $reg->kd_dokter; ?></td>
                                        <td><?= $reg->nm_dokter; ?></td>
                                        <td><?= $reg->no_rkm_medis; ?></td>
                                        <td><?= $reg->nm_pasien; ?></td>
                                        <td><?= $reg->jk; ?></td>
                                        <td><?= $reg->umur; ?></td>
                                        <td><?= $reg->nm_poli; ?></td>
                                        <td><?= $reg->png_jawab; ?></td>
                                        <td><?= $reg->p_jawab; ?></td>
                                        <td><?= $reg->almt_pj; ?></td>
                                        <td><?= $reg->hubunganpj; ?></td>
                                        <td><?= $reg->biaya_reg; ?></td>
                                        <td><?= $reg->stts_daftar; ?></td>
                                        <td><?= $reg->no_tlp; ?></td>
                                        <td><?= $reg->status_lanjut; ?></td>
                                        <td><?= $reg->status_poli; ?></td>
                                        <td><?= $reg->status_bayar; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>

                        </table>
                        <hr>
                        <!-- right click menu -->
                        <div id="contextMenu" class="dropdown clearfix" style="position:absolute; display:none;">
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display:block;position:static;margin-bottom:5px;">
                                <!-- sub menu -->
                                <a href="#" class="dropdown-item dropright" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label mr-5"><i class="icon-copy dw dw-tag-1"></i>Data Rekam Medis</span><i class="icon-copy dw dw-right-arrow1 ml-5"></i><span class="caret"></span></a>
                                <li class="dropdown-submenu">
                                    <ul class="dropdown-menu dropright">
                                        <a class="dropdown-item" href="#">RM Gawat Darurat</a>
                                        <a class="dropdown-item" href="#">RM Rawat Jalan</a>
                                        <a class="dropdown-item" href="#">Resume Pasien</a>
                                        <a class="dropdown-item" href="#">Diagnosa Pasien</a>
                                        <a class="dropdown-item" href="#">Riwayat Perawatan</a>
                                        <a class="dropdown-item" href="#">Deteksi Dini Corona</a>
                                        <a class="dropdown-item" href="#">Hemodialisa</a>
                                    </ul>
                                </li>
                                <!-- sub menu -->
                                <a href="#" class="dropdown-item dropright" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label mr-5"><i class="icon-copy dw dw-tag-1"></i>Permintaan</span><i class="icon-copy dw dw-right-arrow1 ml-5"></i><span class="caret"></span></a>
                                <li class="dropdown-submenu">
                                    <ul class="dropdown-menu dropright">
                                        <a class="dropdown-item" href="#">Jadwal Operasi</a>
                                        <a class="dropdown-item" href="#">Pemeriksaan Lab</a>
                                        <a class="dropdown-item" href="#">Pemeriksaan Radiologi</a>
                                        <a class="dropdown-item" href="#">Rawat Inap</a>
                                    </ul>
                                </li>
                                <a class="dropdown-item" href="#"><i class="icon-copy dw dw-tag-1"></i>Kamar Inap</a>
                                <a class="dropdown-item" href="#"><i class="icon-copy dw dw-tag-1"></i>Permintaan</a>
                                <a class="dropdown-item" href="#"><i class="icon-copy dw dw-tag-1"></i>Kamar
                                    Inap</a>
                                <a class="dropdown-item" href="#"><i class="icon-copy dw dw-tag-1"></i>Tindakan &
                                    Pemeriksaan</a>
                                <a class="dropdown-item" href="#"><i class="icon-copy dw dw-tag-1"></i>Obat</a>
                                <a class="dropdown-item" href="#"><i class="icon-copy dw dw-tag-1"></i>Biling/Pembayaran
                                    Pasien</a>
                                <a class="dropdown-item" href="#"><i class="icon-copy dw dw-tag-1"></i>Laporan</a>
                                <a class="dropdown-item" href="#"><i class="icon-copy dw dw-tag-1"></i>Grafik
                                    Analisa</a>
                                <a class="dropdown-item" href="#"><i class="icon-copy dw dw-tag-1"></i>Surat-Surat</a>
                                <a class="dropdown-item" href="#"><i class="icon-copy dw dw-tag-1"></i>Label
                                    & Barcode</a>
                                <a class="dropdown-item" href="#"><i class="icon-copy dw dw-tag-1"></i>Lembar Periksa
                                    Pasien</a>
                                <a class="dropdown-item" href="#"><i class="icon-copy dw dw-tag-1"></i>Checklist
                                    Kelengkapan
                                    Pendaftaran</a>
                                <a class="dropdown-item" href="#"><i class="icon-copy dw dw-tag-1"></i>Rujukan</a>
                                <a class="dropdown-item" href="#"><i class="icon-copy dw dw-tag-1"></i>Bridging</a>
                                <a class="dropdown-item" href="#"><i class="icon-copy dw dw-tag-1"></i>Input
                                    Data</a>
                                <a class="dropdown-item" href="#"><i class="icon-copy dw dw-tag-1"></i>Hapus
                                    & Ubah Data</a>
                            </ul>
                        </div>
                        <!-- right click menu -->
                        <!-- btn show by date & print data -->
                        <div class="row ">

                            <div class="dropdown d-flex justify-content-end">
                                <a class="btn btn-outline-secondary mr-2" href=""><i class="fa fa-print pr-2"></i>Cetak
                                    Data</a>
                                <a class="btn btn-outline-info dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown">
                                    <i class="fa fa-calendar pr-2"></i>Periode
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="m-3">
                                        <form method="POST" action="<?= base_url(); ?>admin/    /reg_awal">
                                            <div class="form-group">
                                                <label for="date_from">Dari Tanggal</label>
                                                <input type="date" class="form-control" id="date_from" name="date_from" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="date_to">Sampai Tanggal</label>
                                                <input type="date" class="form-control" id="date_to" name="date_to" required>
                                            </div>
                                            <button type="submit" class="btn btn-info">Tampilkan data</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- btn show by date & print data -->
                    </div>
                    <!-- Table Registrasi Awal-->
                    <!-- Table Rujukan POli -->
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <table id="DataTablesPoli" class="table-responsive table table-bordered hover multiple-select-row nowrap display-dataTables">
                            <thead>
                                <tr>
                                    <th scope="col">No.Rawat</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">jam</th>
                                    <th scope="col">kd.dokter</th>
                                    <th scope="col">Dokter Dituju</th>
                                    <th scope="col">Nomor Rm</th>
                                    <th scope="col">Pasien</th>
                                    <th scope="col">J.K</th>
                                    <th scope="col">Umur</th>
                                    <th scope="col">Poliklinik Rujukan</th>
                                    <th scope="col">Jenis Bayar</th>
                                    <th scope="col">Penanggung Jawab</th>
                                    <th scope="col">Alamat PJ</th>
                                    <th scope="col">Hubungan PJ</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">No. Telp</th>
                                    <th scope="col">Status Rawat</th>

                                </tr>
                            </thead>
                            <tbody id="DataTablesPoliBody">
                                <tr id="rc-menu">
                                    <?php foreach ($rujukan as $rujuk) : ?>
                                        <td id="no-rawat"><?= $rujuk->no_rawat; ?></td>
                                        <td><?= $rujuk->tgl_registrasi; ?></td>
                                        <td> <?= $rujuk->jam_reg; ?></td>
                                        <td><?= $rujuk->kd_dokter; ?></td>
                                        <td> <?= $rujuk->nm_dokter; ?></td>
                                        <td><?= $rujuk->no_rkm_medis; ?></td>
                                        <td> <?= $rujuk->nm_pasien; ?></td>
                                        <td> <?= $rujuk->jk; ?></td>
                                        <td> <?= $rujuk->umur; ?></td>
                                        <td> <?= $rujuk->nm_poli; ?></td>
                                        <td> <?= $rujuk->png_jawab; ?></td>
                                        <td> <?= $rujuk->p_jawab; ?></td>
                                        <td> <?= $rujuk->almt_pj; ?></td>
                                        <td> <?= $rujuk->hubunganpj; ?></td>
                                        <td> <?= $rujuk->stts; ?></td>
                                        <td> <?= $rujuk->no_tlp; ?></td>
                                        <td> <?= $rujuk->status_poli; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Table Rujukan POli -->
            </div>
            <!-- tab navs menu -->
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

    // $(function() {
    //
    //     var $contextMenu = $("#contextMenu");
    //
    //     $("body").on("contextmenu", "table tr", function(e) {
    //         $contextMenu.css({
    //             display: "block",
    //             left: e.pageX,
    //             top: e.pageY
    //         });
    //         debugger;
    //         return false;
    //     });
    //
    //     $('html').click(function() {
    //         $contextMenu.hide();
    //     });
    //
    //     $("#contextMenu li a").click(function(e) {
    //         var f = $(this);
    //         debugger;
    //     });
    //
    // });
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
    // fungsi untuk menampilkan Nomor Rekam Medis
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

// fungsi untuk menampilkan data Pasien berdasarkan No Rekam Medis
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
                $('#p_jawab').val(x.data.namakeluarga);
                $('#almt_pj').val(x.data.alamatpj);
                $('#hubunganpj').val(x.data.keluarga);
                $('#stts_daftar').val(x.data.stts_daftar);
            }
        });
    }
</script>

<script>
    $('.table-responsive').on('show.bs.dropdown', function() {
        $('.table-responsive').css("overflow", "inherit");
    });

$('.table-responsive').on('hide.bs.dropdown', function() {
    $('.table-responsive').css("overflow", "auto");
})

</script>

<script>
$('#form-add-reg').hide();
var btnAddReg = false;
  $('#btn-add-reg').click(function(){
    if(btnAddReg){
      $('#form-add-reg').hide();
      $(this).find('i').attr('class','fa fa-caret-down');
      btnAddReg = false;
    }else {
      $('#form-add-reg').show();
      $(this).find('i').attr('class','fa fa-caret-up');
      btnAddReg = true;
    }
  });
</script>
