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
                        <h4>Tambah Kabupaten</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Kabupaten</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!--  Datatable start -->
        <div class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h2 class="text-blue h2">Tambah Data Kabupaten</h2>
                </div>
            </div>
            
            <div class="pb-20 ">
            <table id="example" class="data-table table stripe hover nowrap display-dataTables">
                    <thead>
                        <tr>
                            <th scope="col">Action</th>
                            <th scope="col">Kabupaten</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kabupaten as $kab) : ?>
                            <tr>
                            <td>
                                <a href="<?= base_url(); ?>admin/registrasi/delete_kabupaten/<?= $kab->kd_kab; ?>"><span
                                        class="badge badge-danger p-2"
                                        onclick="return confirm('Apakah anda yakin ingin menghapus !');">Hapus</span></a>
                            </td>
                                <td><?= $kab->nm_kab; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
            <form method="POST" action="<?= base_url(); ?>admin/registrasi/insert_kabupaten">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-check">
                                <label for="">Kabupaten</label>
                                <input type="text" class="form-control" id="nm_kab" name="nm_kab" required>
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