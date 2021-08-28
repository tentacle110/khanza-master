<div class="container-fluid">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Jadwal Praktek Dokter</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Jadwal Praktek Dokter</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!--  Datatable start -->
        <div class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h2 class="text-blue h2">Jadwal Praktek Dokter</h2>
                </div>
            </div>
            <div class="pd-20 card-box mb-30">
                <div class="clearfix mb-20">
                    <!-- <table class="table-responsive table table-bordered display-dataTables mt-4"> -->
                    <table id="example" class="data-table table stripe hover nowrap display-dataTables">
                        <thead>
                            <tr>
                                <th scope="col">Nama Dokter</th>
                                <th scope="col">Hari Kerja</th>
                                <th scope="col">Jam Mulai</th>
                                <th scope="col">Jam Selesai</th>
                                <th scope="col">Poliklinik</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($jadwal as $jadwal) : ?>
                                <tr>
                                    <td><?= $jadwal->nm_dokter; ?></td>
                                    <td><?= $jadwal->hari_kerja; ?></td>
                                    <td><?= $jadwal->jam_mulai; ?></td>
                                    <td><?= $jadwal->jam_selesai; ?></td>
                                    <td><?= $jadwal->nm_poli; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

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