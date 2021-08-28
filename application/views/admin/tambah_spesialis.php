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
                        <h4>Tambah Spesialis</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Spesialis</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!--  Datatable start -->
        <div class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h2 class="text-blue h2">Tambah Data Spesialis</h2>
                </div>
            </div>
            <div class="pb-20 ">
            <table id="example" class="data-table table stripe hover nowrap display-dataTables">
                    <thead>
                        <tr>
                            <th scope="col">Kode Spesialis</th>
                            <th scope="col">Nama Spesialis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($spesialis as $sps) : ?>
                            <tr>
                                <td><?= $sps->kd_sps; ?></td>
                                <td><?= $sps->nm_sps; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
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
        <div class="pd-20 card-box mb-30">

            <div class="clearfix mb-20">

                <form method="POST" action="">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-check">
                                <label for="">Kode Spesialis</label>
                                <input type="text" class="form-control" id="kd_sps" name="kd_sps" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check">
                                <label for="">Nama Spesialis</label>
                                <input type="text" class="form-control" id="nm_Sps" name="nm_sps" required>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary p-2">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
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