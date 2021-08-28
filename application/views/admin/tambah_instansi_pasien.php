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
                        <h4>Tambah Instansi/Perusahaan Pasien</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Instansi/Perusahaan Pasien</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!--  Datatable start -->
        <div class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h2 class="text-blue h2">Tambah Instansi/Perusahaan Pasien</h2>
                </div>
            </div>
            <form action="<?= base_url(); ?>admin/registrasi/insert_instansi_pasien" method="POST">
            <div class="pb-20 ">
                <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Kode Perusahaan</label>
                        <input type="text" class="form-control" name="kode_perusahaan" required>
                        <?= form_error('kode_perusahaan', '<small class="text-danger ">', '</small>'); ?>
                        
                    </div>
                    <div class="col-md-5">
                        <label class="form-label">Nama Perusahaan</label>
                        <input type="text" class="form-control" name="nama_perusahaan" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Telepon</label>
                        <input type="text" class="form-control" name="no_telp" required>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-4">
                        <label class="form-label">Kota</label>
                        <input type="text" class="form-control" name="kota" required>
                    </div>
                    <div class="col-md-8">
                        <label class="form-label">Alamat perusahaan</label>
                        <input type="text" class="form-control" name="alamat" required>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary p-2">Simpan</button>
                    </div>
                </div>
                </form>
            </div>
            </form>
        </div>
        <?php if (isset($instansiById)) { ?>
            <div id="ubah" class="pd-20 card-box mb-30">
                <div class="clearfix mb-20">
                    <div class="pull-left">
                        <h2 class="text-blue h2">Ubah Instansi/Perusahaan Pasien</h2>
                    </div>
                </div>
                <form action="<?= base_url(); ?>admin/registrasi/update_instansi_pasien/<?= $instansiById->kode_perusahaan; ?>" method="POST">
                <div class="pb-20 ">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label">Kode Perusahaan</label>
                            <input type="text" class="form-control" name="kode_perusahaan" value="<?= $instansiById->kode_perusahaan; ?>" required readonly>
                            <?= form_error('kode_perusahaan', '<small class="text-danger ">', '</small>'); ?>
                            
                        </div>
                        <div class="col-md-5">
                            <label class="form-label">Nama Perusahaan</label>
                            <input type="text" class="form-control" name="nama_perusahaan" value="<?= $instansiById->nama_perusahaan; ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Telepon</label>
                            <input type="text" class="form-control" name="no_telp" value="<?= $instansiById->no_telp; ?>" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <label class="form-label">Kota</label>
                            <input type="text" class="form-control" name="kota" value="<?= $instansiById->kota; ?>" required>
                        </div>
                        <div class="col-md-8">
                            <label class="form-label">Alamat perusahaan</label>
                            <input type="text" class="form-control" name="alamat" value="<?= $instansiById->alamat; ?>" required>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary p-2">Simpan</button>
                        </div>
                    </div>
                    </form>
                </div>
                </form>
            </div>
        <?php } else { echo ""; } ?>
    </div>
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <!-- table data penanggungjawab -->
                <table id="DataTablePenanggungJawab" class="table-responsive table table-bordered display-dataTables mt-3">
                    <thead>
                        <tr>
                            <th scope="col">Action</th>
                            <th scope="col">Kode</th>
                            <th scope="col">Nama Instansi/Perusahaan</th>
                            <th scope="col">Alamat Instansi/Perusahaan</th>
                            <th scope="col">Kota</th>
                            <th scope="col">No. Telepon</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($instansi as $peru) : ?>
                            <tr>
                            <td>
                            <a href="<?= base_url(); ?>admin/registrasi/get_update_instansi/<?= $peru->kode_perusahaan; ?>#ubah"><span
                                    class="badge badge-warning p-2">Ubah</span></a>
                            <a href="<?= base_url(); ?>admin/registrasi/delete_instansi/<?= $peru->kode_perusahaan; ?>"><span
                                    class="badge badge-danger p-2"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus !');">Hapus</span></a>
                        </td>
                                <td><?= $peru->kode_perusahaan; ?></td>
                                <td><?= $peru->nama_perusahaan; ?></td>
                                <td><?= $peru->alamat; ?></td>
                                <td><?= $peru->kota; ?></td>
                                <td><?= $peru->no_telp; ?></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- end table data penanggungjawb -->
            </div>


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