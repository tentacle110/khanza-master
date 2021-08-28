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
                        <h4>Permintaan Operasi</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/Registrasi">Registrasi</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Permintaan Operasi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Form pendaftaran pasien baru -->
        <div id="formTambahPasien" class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h2 class="text-blue h2">Jadwal Operasi Pasien</h2>
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
                        <label class="form-label">Mulai</label>
                        <input type="time" class="form-control" name="" value="">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Sampai Dengan</label>
                        <input type="time" class="form-control" name="" value="">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Status</label>
                        <select class="form-select form-select-md" aria-label=".form-select-sm example">
                            <option selected>Open this select menu</option>
                            <option value="Menunggu">Menunggu</option>
                            <option value="Proses Operasi">Proses Operasi</option>
                            <option value="Selesai">Selesai</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">


                    <div class="col-md-3">
                        <label class="form-label">Operator</label>
                        <input type="text" class="form-control" name="" value="">
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">&nbsp</label>
                        <div class="input-group-append">
                            <input type="text" class="form-control" name="" value="">
                            <button class="btn btn-outline-secondary" type="button" data-toggle="modal" onclick=""><i class="icon-copy dw dw-add"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Operasi</label>
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
                    <h2 class="text-blue h2">Data Jadwal Operasi</h2>
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
                            <th scope="col">No.</th>
                            <th scope="col">No. Rawat</th>
                            <th scope="col">Nama Pasien</th>
                            <th scope="col">Umur</th>
                            <th scope="col">J.K.</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Mulai</th>
                            <th scope="col">Selesai</th>
                            <th scope="col">Status</th>
                            <th scope="col">Rujukan Dari</th>
                            <th scope="col">Diagnosa</th>
                            <th scope="col">Operasi</th>
                            <th scope="col">Operator</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>No.</td>
                            <td>No. Rawat</td>
                            <td>Nama Pasien</td>
                            <td>Umur</td>
                            <td>J.K.</td>
                            <td>Tanggal</td>
                            <td>Mulai</td>
                            <td>Selesai</td>
                            <td>Status</td>
                            <td>Rujukan Dari</td>
                            <td>Diagnosa</td>
                            <td>Operasi</td>
                            <td>Operator</td>
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