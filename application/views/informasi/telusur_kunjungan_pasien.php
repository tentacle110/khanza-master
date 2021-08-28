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
                        <h4>Telusur Kunjungan Pasien</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Telusur Kunjungan Pasien</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!--  Datatable start -->
        <div class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h2 class="text-blue h2">Telusur Kunjungan Pasien</h2>
                </div>
            </div>
            <div class="pb-20">
                <div class="row">
                    <div class="col-md-4">
                        <table id="" class="table-responsive table table-bordered display-dataTables">
                            <thead>
                                <tr>
                                    <th scope="col">No.R.M</th>
                                    <th scope="col">Nama Pasien</th>
                                    <th scope="col">No.SIM/KTP</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>lorem</td>
                                    <td>lorem</td>
                                    <td>lorem</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-8">
                        <table id="" class="table-responsive table table-bordered display-dataTables">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">No. Rawat</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Jam</th>
                                    <th scope="col">Kd.Dokter</th>
                                    <th scope="col">Dokter Dituju/DPJP</th>
                                    <th scope="col">Umur</th>
                                    <th scope="col">Poliklinik/Kamar</th>
                                    <th scope="col">Jenis Bayar</th>
                                    <th scope="col">Diagnosa Utama</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>lorem</td>
                                    <td>lorem</td>
                                    <td>lorem</td>
                                    <td>lorem</td>
                                    <td>lorem</td>
                                    <td>lorem</td>
                                    <td>lorem</td>
                                    <td>lorem</td>
                                    <td>lorem</td>
                                    <td>lorem</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="collapse collapse-box" id="basic-table">
                <div class="code-box">
                    <div class="clearfix">
                        <a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
                        <a href="#basic-table" class="btn btn-primary btn-sm pull-right" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
                    </div>
                </div>
            </div>
        </div>
        <!--  Datatable End -->
        <!-- copyright -->
        <?php
        $this->load->view('templates/admin/copyright');
        ?>
        <!-- copyright -->
    </div>
</div>
<script>
    $('table.display-dataTables').dataTable({
        paging: false,
        searching: true
    });
</script>