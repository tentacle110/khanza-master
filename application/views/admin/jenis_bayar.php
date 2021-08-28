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
                        <h4>Tambah Jenis Bayar</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Jenis Bayar</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!--  Datatable start -->
        <div class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h2 class="text-blue h2">Tambah Data Jenis Bayar</h2>
                </div>
            </div>
            <form action="<?= base_url(); ?>admin/registrasi/insert_penanggung_pasien" method="POST">
                <div class="pb-20 ">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label">Kode Asuransi</label>
                            <input type="text" class="form-control" name="kd_pj" required>
                            <?= form_error('kd_pj', '<small class="text-danger ">', '</small>'); ?>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label">Nama Asuransi</label>
                            <input type="text" class="form-control" name="nama" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Telepon</label>
                            <input type="text" class="form-control" name="no_telp" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="form-label">Perusahaan Asuransi</label>
                            <input type="text" class="form-control" name="nama_perusahaan" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">ATTN</label>
                            <input type="text" class="form-control" name="attn" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <label class="form-label">Alamat Asuransi</label>
                            <input type="text" class="form-control" name="alamat_asuransi" required>
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
    <?php if (isset($penjabById)) { ?>
    <div id="ubah" class="pd-20 card-box mb-30">
        <div class="clearfix mb-20">
            <div class="pull-left">
                <h2 class="text-blue h2">Ubah Data Jenis Bayar</h2>
            </div>
        </div>
        <form action="<?= base_url(); ?>admin/registrasi/update_jenis_bayar/<?= $penjabById->kd_pj; ?>" method="POST">
            <div class="pb-20 ">
                <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Kode Asuransi</label>
                        <input type="text" class="form-control" name="kd_pj" value="<?= $penjabById->kd_pj; ?>" required readonly>
                        <?= form_error('kd_pj', '<small class="text-danger ">', '</small>'); ?>
                    </div>
                    <div class="col-md-5">
                        <label class="form-label">Nama Asuransi</label>
                        <input type="text" class="form-control" name="nama" value="<?= $penjabById->png_jawab; ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Telepon</label>
                        <input type="text" class="form-control" name="no_telp" value="<?= $penjabById->no_telp; ?>" required>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="form-label">Perusahaan Asuransi</label>
                        <input type="text" class="form-control" name="nama_perusahaan" value="<?= $penjabById->nama_perusahaan; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">ATTN</label>
                        <input type="text" class="form-control" name="attn" value="<?= $penjabById->attn; ?>" required>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <label class="form-label">Alamat Asuransi</label>
                        <input type="text" class="form-control" name="alamat_asuransi" value="<?= $penjabById->alamat_asuransi; ?>" required>
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
        <div class="clearfix mb-20">
            <!-- table data penanggungjawab -->
            <table id="DataTablePenanggungJawab" class="table-responsive table table-bordered display-dataTables mt-3">
                <thead>
                    <tr>
                        <th scope="col">Aksi</th>
                        <th scope="col">Kode Asuransi</th>
                        <th scope="col">Nama Asuransi</th>
                        <th scope="col">Perusahaan Asuransi</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No. Telepon</th>
                        <th scope="col">ATTN</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($penjab as $pjb) : ?>
                    <tr>
                        <td>
                            <a href="<?= base_url(); ?>admin/registrasi/get_update_jenis_bayar/<?= $pjb->kd_pj; ?>#ubah"><span
                                    class="badge badge-warning p-2">Ubah</span></a>
                            <a href="<?= base_url(); ?>admin/registrasi/delete_jenis_bayar/<?= $pjb->kd_pj; ?>"><span
                                    class="badge badge-danger p-2"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus !');">Hapus</span></a>
                        </td>
                        <td><?= $pjb->kd_pj; ?></td>
                        <td><?= $pjb->png_jawab; ?></td>
                        <td><?= $pjb->nama_perusahaan; ?></td>
                        <td><?= $pjb->alamat_asuransi; ?></td>
                        <td><?= $pjb->no_telp; ?></td>
                        <td><?= $pjb->attn; ?></td>

                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- end table data penanggungjawb -->
        </div>


    </div>


<script>
$('table.display-dataTables').dataTable({
    scrollY: "300px",
    scrollX: true,
    paging: true,
    searching: true,
});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#DataTablePenanggungjawab').dataTable();

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