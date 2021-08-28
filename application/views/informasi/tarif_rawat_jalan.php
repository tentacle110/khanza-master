<div class="container-fluid">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Informasi Tarif Tindakan Rawat Jalan</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tindakan Rawat Jalan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!--  Datatable start -->
        <div class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h2 class="text-blue h2">Informasi Tarif Tindakan Rawat Jalan</h2>
                </div>
            </div>
            <div class="pb-20">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tindakan Dokter</a>
                        <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Tindakan Petugas</a>
                        <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Tindakan Dokter & Petugas</a>
                    </div>
                </nav>

                <div class="tab-content mt-4" id="nav-tabContent">
                    <!-- Table Tindakan Dokter-->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <table id="DataTablesTDokter" class="table-responsive table table-bordered display-dataTables">
                            <thead>
                                <tr>
                                    <th scope="col">Kode Paket</th>
                                    <th scope="col">Nama Operasi</th>
                                    <th scope="col">Tarif Operasi</th>
                                    <th scope="col">Jenis Bayar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>lorem</td>
                                    <td>lorem</td>
                                    <td>lorem</td>
                                    <td>lorem</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Table Tindakan Dokter-->

                    <!-- Table Tindakan Petugas -->
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <table id="DataTablesTPetugas" class="table-responsive table table-bordered display-dataTables">
                            <thead>
                                <tr>
                                    <th scope="col">Kode Paket</th>
                                    <th scope="col">Nama Operasi</th>
                                    <th scope="col">Tarif Operasi</th>
                                    <th scope="col">Jenis Bayar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>lorem</td>
                                    <td>lorem</td>
                                    <td>lorem</td>
                                    <td>lorem</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Table Tindakan Petugas -->
                    <!-- Table Tindakan Dokter & Petugas Petugas -->
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <table id="DataTablesTDokterPetugas" class="table-responsive table table-bordered display-dataTables">
                            <thead>
                                <tr>
                                    <th scope="col">Kode Paket</th>
                                    <th scope="col">Nama Operasi</th>
                                    <th scope="col">Tarif Operasi</th>
                                    <th scope="col">Jenis Bayar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>lorem</td>
                                    <td>lorem</td>
                                    <td>lorem</td>
                                    <td>lorem</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Table Tindakan Petugas -->
                </div>

            </div>
        </div>
        <script>
            $('table.display-dataTables').dataTable({
                paging: true,
                searching: true
            });
        </script>
        <div class="collapse collapse-box" id="basic-table">
            <div class="code-box">
                <div class="clearfix">
                    <a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
                    <a href="#basic-table" class="btn btn-primary btn-sm pull-right" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
                </div>
            </div>
        </div>
    </div>

    <!-- copyright -->
    <?php
    $this->load->view('templates/admin/copyright');
    ?>
    <!-- copyright -->
</div>
</div>