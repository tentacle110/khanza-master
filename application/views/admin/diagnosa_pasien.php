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
                        <h4>Penilaian Keperawatan Rawat Jalan</h4>
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
                    <h2 class="text-blue h2">Penilaian Awal Keperawatan Rawat Jalan</h2>
                </div>
            </div>

            <div class="pd-20 card-box mb-30">

                <!-- tab navs menu -->
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Input Data</a>
                        <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Data Diagnosa</a>
                        <a class="nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Data Prosedur</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <!-- Input Data-->
                    <div class="tab-pane fade show active" id="nav-home" id="table-responsive-cliente" role="tabpanel" aria-labelledby="nav-home-tab">

                        <div class="col">
                            <div class="row mt-4">
                                <table id="example" class="table-responsive table table-bordered display-dataTables">
                                    <thead>
                                        <tr>
                                            <th scope="col">P</th>
                                            <th scope="col">Kode</th>
                                            <th scope="col">Nama Penyakit</th>
                                            <th scope="col">Ciri-Ciri Penyakit</th>
                                            <th scope="col">Keterangan</th>
                                            <th scope="col">Ktg.Penyakit</th>
                                            <th scope="col">Ciri-Ciri Umum</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>No</td>
                                            <td>Tgl/Thn</td>
                                            <td>Tempat Persalinan</td>
                                            <td>Usia Hamil</td>
                                            <td>Jenis Persalinan</td>
                                            <td>Penolong</td>
                                            <td>Penyulit</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row mt-4">
                                <table id="example" class="table-responsive table table-bordered display-dataTables">
                                    <thead>
                                        <tr>
                                            <th scope="col">P</th>
                                            <th scope="col">Kode</th>
                                            <th scope="col">Deskripsi Panjang</th>
                                            <th scope="col">Deskripsi Pendek</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>No</td>
                                            <td>Tgl/Thn</td>
                                            <td>Tempat Persalinan</td>
                                            <td>Usia Hamil</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                    <!-- Input Data-->
                    <!-- Data Diagnosa -->
                    <div class="tab-pane fade mt-3" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <table id="example" class="table-responsive table table-bordered display-dataTables">
                            <thead>
                                <tr>
                                    <th scope="col">P</th>
                                    <th scope="col">Tgl. Rawat</th>
                                    <th scope="col">No. Rawat</th>
                                    <th scope="col">No. RM</th>
                                    <th scope="col">Nama Pasien</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Nama Penyakit</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Kasus</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>P</td>
                                    <td>Tgl. Rawat</td>
                                    <td>No. Rawat</td>
                                    <td>No. RM</td>
                                    <td>Nama Pasien</td>
                                    <td>Kode</td>
                                    <td>Nama Penyakit</td>
                                    <td>Status</td>
                                    <td>Kasus</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade mt-3" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                        <table id="example" class="table-responsive table table-bordered display-dataTables">
                            <thead>
                                <tr>
                                    <th scope="col">P</th>
                                    <th scope="col">Tgl. Rawat</th>
                                    <th scope="col">No. Rawat</th>
                                    <th scope="col">No. RM</th>
                                    <th scope="col">Nama Pasien</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Nama Prosedur</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Kasus</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>P</td>
                                    <td>Tgl. Rawat</td>
                                    <td>No. Rawat</td>
                                    <td>No. RM</td>
                                    <td>Nama Pasien</td>
                                    <td>Kode</td>
                                    <td>Nama Penyakit</td>
                                    <td>Status</td>
                                    <td>Kasus</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Data Diagnosa -->
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
        searching: true,
    });
</script>