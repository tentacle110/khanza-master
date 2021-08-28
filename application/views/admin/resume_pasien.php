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
                        <h4>Resume Pasien</h4>
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
                    <h2 class="text-blue h2">Data Resume Medis Pasien</h2>
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
                    <div class="col-md-4">
                        <label class="form-label">Dokter PJ</label>
                        <input type="text" class="form-control" name="" value="" readonly>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label"> &nbsp</label>
                        <div class="input-group-append">
                            <input type="text" class="form-control" name="" value="">
                            <button class="btn btn-outline-secondary" type="button" data-toggle="modal" onclick=""><i class="icon-copy dw dw-add"></i></button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Kondisi Pasien Pulang </label>
                        <select class="form-select form-select-md" aria-label=".form-select-sm example">
                            <option selected>Open this select menu</option>
                            <option value="Hidup">Hidup</option>
                            <option value="Meninggal">Meninggal</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="exampleFormControlTextarea1" class="form-label">Keluhan Utama Riwayat Penyakit yang Positif</label>
                        <div class="input-group-append">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            <button class="btn btn-outline-secondary" type="button" data-toggle="modal" onclick=""><i class="icon-copy dw dw-add"></i></button>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="exampleFormControlTextarea1" class="form-label">Jalannya Penyakit Selama Perawatan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="exampleFormControlTextarea1" class="form-label">Pemeriksaan Penunjang yang Positif</label>
                        <div class="input-group-append">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            <button class="btn btn-outline-secondary" type="button" data-toggle="modal" onclick=""><i class="icon-copy dw dw-add"></i></button>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="exampleFormControlTextarea1" class="form-label">Hasil Laboratorium yang Positif</label>
                        <div class="input-group-append">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            <button class="btn btn-outline-secondary" type="button" data-toggle="modal" onclick=""><i class="icon-copy dw dw-add"></i></button>
                        </div>
                    </div>
                </div>

                <h5 class="mt-2">Diagnosa Akhir</h5>
                <div class="col">
                    <div class="row mt-2">
                        <div class="col-md-9">
                            <label class="form-label">Diagnosa Utama</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Kode ICD</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-9">
                            <label class="form-label">Diagnosa Sekunder 1</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Kode ICD</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-9">
                            <label class="form-label">Diagnosa Sekunder 2</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Kode ICD</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-9">
                            <label class="form-label">Diagnosa Sekunder 3</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Kode ICD</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-9">
                            <label class="form-label">Diagnosa Sekunder 4</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Kode ICD</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-9">
                            <label class="form-label">Diagnosa Sekunder 4</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Kode ICD</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-9">
                            <label class="form-label">Prosedur Utama</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Kode ICD</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-9">
                            <label class="form-label">Prosedur Sekunder 1</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Kode ICD</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-9">
                            <label class="form-label">Diagnosa Sekunder 2</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Kode ICD</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-9">
                            <label class="form-label">Diagnosa Sekunder 3</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Kode ICD</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <label for="exampleFormControlTextarea1" class="form-label">Obat-Obatan Waktu Pulang/Nasihat</label>
                        <div class="input-group-append">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            <button class="btn btn-outline-secondary" type="button" data-toggle="modal" onclick=""><i class="icon-copy dw dw-add"></i></button>
                        </div>
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