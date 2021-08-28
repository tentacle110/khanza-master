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
                        <h4>Tambah Unit / Poliklinik</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Unit / Poliklinik</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!--  Datatable start -->
        <div class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h2 class="text-blue h2">Tambah Data Unit / Poliklinik</h2>
                </div>
            </div>
            <form action="<?= base_url(); ?>admin/registrasi/insert_poliklinik" method="POST">
                <div class="pb-20">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-check">
                                <label for="date_to">Nama Unit</label>
                                <input type="text" class="form-control" id="nm_poli" name="nm_poli" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <div class="form-check">
                                <label for="date_to">Kode Unit</label>
                                <input type="text" class="form-control" id="kd_poli" name="kd_poli" required>
                                <?= form_error('kd_poli', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check">
                                <label for="date_from">Registrasi Baru</label>
                                <input type="text" class="form-control" id="registrasi_baru" name="registrasi_baru"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check">
                                <label for="date_from">Registrasi Lama</label>
                                <input type="text" class="form-control" id="registrasi_lama" name="registrasi_lama"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary p-2">Simpan</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    <?php if (isset($poliById)) { ?>
    <div id="ubah" class="pd-20 card-box mb-30">
        <div class="clearfix mb-20">
            <div class="pull-left">
                <h2 class="text-blue h2">Ubah Data Unit / Poliklinik</h2>
            </div>
        </div>
        <form action="<?= base_url(); ?>admin/registrasi/update_poli/<?= $poliById->kd_poli; ?>" method="POST">
            <div class="pb-20">
                <div class="row">
                    <div class="col-md-9">
                        <div class="form-check">
                            <label for="date_to">Nama Unit</label>
                            <input type="text" class="form-control" id="nm_poli" name="nm_poli" value="<?= $poliById->nm_poli; ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-md-3">
                        <div class="form-check">
                            <label for="date_to">Kode Unit</label>
                            <input type="text" class="form-control" id="kd_poli" name="kd_poli" value="<?= $poliById->kd_poli; ?>" required readonly>
                            <?= form_error('kd_poli', '<small class="text-danger ">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <label for="date_from">Registrasi Baru</label>
                            <input type="text" class="form-control" id="registrasi_baru" value="<?= $poliById->registrasi; ?>" name="registrasi_baru"
                                required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <label for="date_from">Registrasi Lama</label>
                            <input type="text" class="form-control" id="registrasi_lama" name="registrasi_lama" value="<?= $poliById->registrasilama; ?>"
                                required>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary p-2">Simpan</button>
                    </div>
                </div>
        </form>
    </div>
    <?php } else { echo ""; } ?>
</div>
<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <!-- table data poliklinik -->
        <table id="DataTables" class="table-responsive table table-bordered display-dataTables">
            <thead>
                <tr>
                    <th scope="col">Action</th>
                    <th scope="col">Kode Unit</th>
                    <th scope="col">Nama Unit</th>
                    <th scope="col">Registrasi Baru</th>
                    <th scope="col">Registrasi Lama</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($unit as $u) : ?>
                <tr>
                    <td>
                        <a href="<?= base_url(); ?>admin/registrasi/get_update_poli/<?= $u->kd_poli; ?>#ubah"><span
                                class="badge badge-warning p-2">Ubah</span></a> .
                        <a href="<?= base_url(); ?>admin/registrasi/delete_poli/<?= $u->kd_poli; ?>"><span
                                class="badge badge-danger p-2"
                                onclick="return confirm('Apakah anda yakin ingin menghapus !');">Hapus</span></a>
                    </td>
                    <td><?= $u->kd_poli; ?></td>
                    <td><?= $u->nm_poli; ?></td>
                    <td><?= $u->registrasi; ?></td>
                    <td><?= $u->registrasilama; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- end table data poliklinik -->
    </div>


</div>


<script>
$('table.display-dataTables').dataTable({
    // scrollY: "300px",
    // scrollX: true,
    paging: true,
    searching: true,
});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#DataTablePoliklinik').dataTable();

});
</script>
<!--  Datatable End -->
<!-- copyright -->
<?php
    $this->load->view('templates/admin/copyright');
    ?>
<!-- copyright -->
</div>
</div>