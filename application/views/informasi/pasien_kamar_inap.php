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
                        <h4>Pasien Kamar Inap</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pasien Kamar Inap</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!--  Datatable start -->
        <div class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h2 class="text-blue h2">Informasi Kamar Inap Pasien</h2>
                </div>
            </div>
            <div class="pb-20 ">
            <table id="example" class="data-table table stripe hover nowrap display-dataTables">
                    <thead>
                        <tr>
                            <th scope="col">No. Rawat</th>
                            <th scope="col">No. RM</th>
                            <th scope="col">Nama Pasien</th>
                            <th scope="col">Alamat Pasien</th>
                            <th scope="col">Jenis Bayar</th>
                            <th scope="col">Kamar</th>
                            <th scope="col">Tgl. Masuk</th>
                            <th scope="col">Jam Masuk</th>
                            <th scope="col">Tgl. Keluar</th>
                            <th scope="col">Jam Keluar</th>
                            <th scope="col">Stts. Pulang</th>
                            <th scope="col">Lama Rawat</th>
                            <th scope="col">Dokter P.J.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($ranap as $ranap) : ?>
                            <tr>
                            
                                <td><?= $ranap->no_rawat; ?></td>
                                <td><?= $ranap->no_rkm_medis; ?></td>
                                <td><?= $ranap->nm_pasien; ?></td>
                                <td><?= $ranap->alamat; ?></td>
                                <td>jenis bayar</td>
                                <td><?= $ranap->nm_bangsal; ?></td>
                                <td><?= $ranap->tgl_registrasi; ?></td>
                                <td><?= $ranap->jam_reg; ?></td>
                                <td><?= $ranap->jam_reg; ?></td>
                                <td><?= $ranap->jam_reg; ?></td>
                              
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <script>
                $(document).ready(function() {
                    $('#example').DataTable();
                });
            </script>
            <!-- <div class="collapse collapse-box" id="basic-table">
                <div class="code-box">
                    <div class="clearfix">
                        <a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
                        <a href="#basic-table" class="btn btn-primary btn-sm pull-right" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
                    </div>

                </div> -->
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