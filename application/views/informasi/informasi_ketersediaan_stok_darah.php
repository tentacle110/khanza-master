<div class="container-fluid">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Ketersediaan Stok Darah UTD</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Ketersediaan Stok Darah UTD</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!--  Datatable start -->
        <div class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h2 class="text-blue h2">Ketersediaan Stok Darah UTD</h2>
                </div>
            </div>
            <div class="pd-20 card-box mb-30">
                <div class="clearfix mb-20">
                <table id="example" class="data-table table stripe hover nowrap display-dataTables">
                        <thead>
                            <tr>
                                <th scope="col">Komponen Darah</th>
                                <th scope="col">G.D</th>
                                <th scope="col">Resus</th>
                                <th scope="col">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($stok_darah as $darah) : ?>
                                <tr>
                                    <td><?= $darah->nama; ?></td>
                                    <td><?= $darah->golongan_darah; ?></td>
                                    <td><?= $darah->resus; ?></td>
                                    <td>JUMLAH</td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>



                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $('#example').DataTable();
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
        paging: true,
        searching: true
    });
</script>