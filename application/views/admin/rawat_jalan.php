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
                        <h4>Daftar Pasien Rawat Jalan</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Rawat Jalan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Form pendaftaran pasien baru -->
        <div id="formTambahPasien" class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h2 class="text-blue h2">Daftar Pasien Rawat Jalan</h2>
                </div>
            </div>
            <form action="">
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">No. Rawat</label>
                        <input type="text" class="form-control" name="no_rawat" placeholder="" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">No. Registrasi</label>
                        <input type="text" class="form-control" name="no_registrasi" placeholder="" required>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="form-label">No. RM</label>
                        <input type="text" class="form-control" name="no_rm" placeholder="" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nama Pasien</label>
                        <input type="text" class="form-control" name="nama_pasien" placeholder="" required>
                    </div>
                </div>
            </form>
        </div>

        <div class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h2 class="text-blue h2">Data Pasien Rawat Jalan</h2>
                </div>
            </div>
            <div class="button mb-2 d-flex justify-content-end">
                <a href="#tambahPasienBaru" class="btn btn-primary mr-2" onclick="showDiv('formTambahPasien')"><i class="icon-copy dw dw-add-user pr-2"></i>Baru</a>
                <a href="#" class="btn btn-warning"><i class="icon-copy dw dw-print pr-2"></i>Cetak</a>
            </div>
            <div class="pd-20 card-box mb-30">

                <!-- tab navs menu -->
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Registrasi Awal</a>
                        <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Rujukan Internal Poli</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <!-- Table Registrasi Awal-->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <table id="DataTablesRegistrasi" class="table-responsive table table-bordered display-dataTables">
                            <thead>
                                <tr>
                                    <th scope="col">Kd. Dokter</th>
                                    <th scope="col">Dokter Dituju</th>
                                    <th scope="col">No. RM</th>
                                    <th scope="col">Pasien</th>
                                    <th scope="col">Poliklinik</th>
                                    <th scope="col">Penanggung Jawab</th>
                                    <th scope="col">Alamat PJ</th>
                                    <th scope="col">Hubungan PJ</th>
                                    <th scope="col">Biaya Registrasi</th>
                                    <th scope="col">Jenis Bayar</th>
                                    <th scope="col">Status</th>

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
                                    <td>lorem</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Table Registrasi Awal-->
                    <!-- Table Rujukan POli -->
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <table id="DataTablesPoli" class="table-responsive table table-bordered display-dataTables">
                            <thead>
                                <tr>
                                    <th scope="col">Kd. Dokter</th>
                                    <th scope="col">Dokter Rujukan</th>
                                    <th scope="col">No. RM</th>
                                    <th scope="col">Pasien</th>
                                    <th scope="col">Poliklinik Rujukan</th>
                                    <th scope="col">Penanggung Jawab</th>
                                    <th scope="col">Alamat PJ</th>
                                    <th scope="col">Hubungan PJ</th>
                                    <th scope="col">Jenis Bayar</th>
                                    <th scope="col">Status</th>
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
                <!-- Table Rujukan POli -->
            </div>
            <!-- tab navs menu -->
        </div>
    </div>
    <div class="container-fluid">
        <div class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="row">
                    <div class="form-row align-items-center">
                        <label for="inputPassword" class=" col-form-label">Periode</label>
                        <div class="col-md-8">
                            <form method="POST" action="">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <label for="date_to">Tgl. Masuk</label>
                                            <input type="date" class="form-control" id="date_to" name="date_to" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <label for="date_from">Sampai Dengan</label>
                                            <input type="date" class="form-control" id="date_from" name="date_from" required>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="stts_periksa">Status Periksa</label>
                        <select class="form-select" id="stts_periksa">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="stts_bayar">Status Bayar</label>
                        <select class="form-select" id="stts_bayar">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="exampleFormControlInput1" class="form-label">Dokter</label>
                        <div class="input-group-append">
                            <input type="text" class="form-control" name="dokter" placeholder="Dokter" readonly>
                            <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#modalDataDokter"><i class="icon-copy dw dw-magnifying-glass"></i></button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="exampleFormControlInput1" class="form-label">Poliklinik</label>
                        <div class="input-group-append">
                            <input type="text" class="form-control" name="poliklinik" placeholder="Poliklinik" readonly>
                            <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#modalDataPoliklinik"><i class="icon-copy dw dw-magnifying-glass"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals Data Dokter -->
    <div class="modal fade" id="modalDataDokter" data-backdrop="static" tabindex="-1" aria-labelledby="modalDataPasienLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDataPasienLabel">Data Dokter</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="pd-20 card-box mb-30">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Kode Dokter</label>
                                <div class="input-group-append">
                                    <input type="text" class="form-control" name="kd_dokter" placeholder="Kode Dokter" readonly>
                                    <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#modalDataDokter"><i class="icon-copy dw dw-magnifying-glass"></i></button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="agama">Agama</label>
                                <select class="form-select" id="stts_bayar">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="stts_nikah">Stts. Nikah</label>
                                <select class="form-select" id="stts_nikah">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label for="nama_dokter">Nama Dokter</label>
                                <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" required>
                            </div>
                            <div class="col-md-6">
                                <label for="nama_dokter">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select class="form-select" id="jenis_kelamin">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="goldar">Golongan Darah</label>
                                <select class="form-select" id="goldar">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="no_telp">No. Telepon</label>
                                <input type="text" class="form-control" id="no_telp" name="no_telp" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir" required>
                            </div>
                            <div class="col-md-3">
                                <label for="spesialis">Spesialis</label>
                                <input type="text" class="form-control" id="spesialis" name="spesialis" required>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group-append mt-4">
                                    <input type="text" class="form-control" name="spesialis" placeholder="" readonly>
                                    <button class="btn btn-outline-secondary" type="button"><i class="icon-copy dw dw-magnifying-glass"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="no_ijin_praktek">No. Ijin Praktek</label>
                                <input type="text" class="form-control" id="no_ijin_praktek" name="no_ijin_praktek" required>
                            </div>
                            <div class="col-md-6">
                                <label for="alumni">Alumni</label>
                                <input type="text" class="form-control" id="alumni" name="alumni  " required>
                            </div>
                        </div>
                    </div>
                    <!-- table data Dokter -->
                    <table id="DataTables" class="table-responsive table table-bordered display-dataTables">
                        <thead>
                            <tr>
                                <th scope="col">Pilih</th>
                                <th scope="col">Kode Dokter</th>
                                <th scope="col">Nama Dokter</th>
                                <th scope="col">J.K.</th>
                                <th scope="col">Tmpt. Lahir</th>
                                <th scope="col">Tgl. Lahir</th>
                                <th scope="col">G.D.</th>
                                <th scope="col">Agama</th>
                                <th scope="col">Alamat Tinggal</th>
                                <th scope="col">No.HP/Telp</th>
                                <th scope="col">Stts.Nikah</th>
                                <th scope="col">Spesialis</th>
                                <th scope="col">Alumni</th>
                                <th scope="col">No.Izin Pektek</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="dt-checkbox">
                                        <input type="checkbox" name="select_all" value="1" id="example-select-all">
                                        <span class="dt-checkbox-label"></span>
                                    </div>
                                </td>
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
                                <td>lorem</td>
                                <td>lorem</td>
                                <td>lorem</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- end table data Dokter -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Tambahkan</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modals Data Dokter -->

    <!-- Modals Data Poliklinik -->
    <div class="modal fade" id="modalDataPoliklinik" data-backdrop="static" tabindex="-1" aria-labelledby="modalDataPasienLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDataPasienLabel">Data Poliklinik</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- table data Poliklinik -->
                    <table id="DataTables" class="table-responsive table table-bordered display-dataTables">
                        <thead>
                            <tr>
                                <th scope="col">Pilih</th>
                                <th scope="col">Kode Dokter</th>
                                <th scope="col">Nama Dokter</th>
                                <th scope="col">J.K.</th>
                                <th scope="col">Tmpt. Lahir</th>
                                <th scope="col">Tgl. Lahir</th>
                                <th scope="col">G.D.</th>
                                <th scope="col">Agama</th>
                                <th scope="col">Alamat Tinggal</th>
                                <th scope="col">No.HP/Telp</th>
                                <th scope="col">Stts.Nikah</th>
                                <th scope="col">Spesialis</th>
                                <th scope="col">Alumni</th>
                                <th scope="col">No.Izin Pektek</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="dt-checkbox">
                                        <input type="checkbox" name="select_all" value="1" id="example-select-all">
                                        <span class="dt-checkbox-label"></span>
                                    </div>
                                </td>
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
                                <td>lorem</td>
                                <td>lorem</td>
                                <td>lorem</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- end table data Poliklinik-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Tambahkan</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modals Data Poliklinik -->
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
<!-- script show form -->
<script type="text/javascript">
    function showDiv(formTambahPasien) {
        document.getElementById(formTambahPasien).style.display = 'block';
    }
</script>