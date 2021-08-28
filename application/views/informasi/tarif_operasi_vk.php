<div class="container-fluid">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Informasi Tarif Tindakan Operasi / VK</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Informasi Tarif Tindakan Operasi / VK</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!--  Datatable start -->
        <div class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h2 class="text-blue h2">Informasi Tarif Tindakan Operasi / VK</h2>
                </div>
            </div>
            <div class="pb-20">

                <table id="example" class="data-table table stripe hover nowrap display-dataTables">
                    <thead>
                        <tr>
                            <th scope="col">Kode Paket</th>
                            <th scope="col">Nama Operasi</th>
                            <th scope="col">Tarif Operasi</th>
                            <th scope="col">Jenis Bayar</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                    <?php foreach($operasi as $operasi):?>

                        <tr>
                            <td><?=$operasi->kode_paket;?></td>
                            <td><?=$operasi->nm_perawatan;?></td>
                            <td>TARIF</td>
                            <td><?=$operasi->png_jawab;?></td>
                            
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>



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

        <!--  Datatable End -->
        <!-- copyright -->
        <?php
        $this->load->view('templates/admin/copyright');
        ?>
        <!-- copyright -->
    </div>
</div>