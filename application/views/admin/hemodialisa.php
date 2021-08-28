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
                        <h4>Hemodialisa</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Hemodialisa</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Form pendaftaran pasien baru -->
        <div id="formTambahPasien" class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h2 class="text-blue h2">Data Hemodialisa</h2>
                </div>
            </div>
            <form action="" method="post">
                <div class="row mt-2">
                    <div class="col-md-3">
                        <label class="form-label">No. Rawat</label>
                        <input type="text" class="form-control" name="" value="" readonly>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label"> &nbsp</label>
                        <input type="text" class="form-control" name="" value="" readonly>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label"> &nbsp</label>
                        <input type="text" class="form-control" name="" value="" readonly>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-3">
                        <label class="form-label">Tanggal</label>
                        <input type="date" class="form-control" name="" value="">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Jam</label>
                        <input type="time" class="form-control" name="" value="">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Dokter P.J.</label>
                        <input type="text" class="form-control" name="" value="" readonly>
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
                    <h6 class="mt-2">Instruksi Program</h6>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label class="form-label">Lama (Jam)</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Bikarbonat</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Penarikan Cairan (ml)</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label class="form-label">Akses</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Transfusi (Kalf/Durante HD)</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">QB</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">QD</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <h6 class="mt-2">Hasil Laboratorium</h6>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label class="form-label">Ureum</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">HbsAg</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">HIV</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label class="form-label">Hb</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Creatinin</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">HVC</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-3">
                        <label class="form-label">Lain-Lain</label>
                        <input type="text" class="form-control" name="" value="">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Diagnosa</label>
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
            </form>

        </div>
        <!-- Form pendaftaran pasien baru -->

        <div class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h2 class="text-blue h2">Data Hemodialisa</h2>
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
                            <th scope="col">No. Rawat</th>
                            <th scope="col">No. R.M</th>
                            <th scope="col">Nama Pasien</th>
                            <th scope="col">Umur</th>
                            <th scope="col">J.K.</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Lama</th>
                            <th scope="col">Akses</th>
                            <th scope="col">Dialist</th>
                            <th scope="col">Transfusi</th>
                            <th scope="col">Penarikan Cairan</th>
                            <th scope="col">QB</th>
                            <th scope="col">QD</th>
                            <th scope="col">Ureum</th>
                            <th scope="col">Hb</th>
                            <th scope="col">HbsAg</th>
                            <th scope="col">Creatinin</th>
                            <th scope="col">HIV</th>
                            <th scope="col">Lain-Lain </th>
                            <th scope="col">Dokter</th>
                            <th scope="col">ICD 10</th>
                            <th scope="col">Diagnosa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>No. Rawat</td>
                            <td>No. R.M</td>
                            <td>Nama Pasien</td>
                            <td>Umur</td>
                            <td>J.K.</td>
                            <td>Tanggal</td>
                            <td>Lama</td>
                            <td>Akses</td>
                            <td>Dialist</td>
                            <td>Transfusi</td>
                            <td>Penarikan Cairan</td>
                            <td>QB</td>
                            <td>QD</td>
                            <td>Ureum</td>
                            <td>Hb</td>
                            <td>HbsAg</td>
                            <td>Creatinin</td>
                            <td>HIV</td>
                            <td>Lain-Lain </td>
                            <td>Dokter</td>
                            <td>ICD 10</td>
                            <td>Diagnosa</td>
                        </tr>
                    </tbody>
                </table>


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
        searching: true
    });
</script>