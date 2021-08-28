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
                        <h4>Triase IGD</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Registrasi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h2 class="text-blue h2">Data Triase IGD</h2>
                </div>
            </div>

            <!-- tab navs menu -->
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                        aria-controls="nav-home" aria-selected="true">Input Triase</a>
                    <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                        aria-controls="nav-profile" aria-selected="false">Data Triase</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <!-- Input Triase-->
                <div class="tab-pane fade show active" id="nav-home" id="table-responsive-cliente" role="tabpanel"
                    aria-labelledby="nav-home-tab">
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <label class="form-label">No.Rekam Medis</label>
                            <select name="no_rkm_medis" id="no_rkm_medis" class="form-select form-select-md"
                                onchange="show_pasien(this.value)"></select>
                            <!-- <input type="text" class="form-control" name="no_registrasi" value="" readonly> -->
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">No.Rawat</label>
                            <input type="text" class="form-control" id="no_rawat" name="no_rawat" value="" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Nama Pasien</label>
                            <input type="text" class="form-control" id="nm_pasien" name="nm_pasien" value="" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Transportasi</label>
                            <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                <option value="-" selected>Pilih</option>
                                <option value="-">-</option>
                                <option value="AGD">AGD</option>
                                <option value="SENDIRI">SENDIRI</option>
                                <option value="SWASTA">SWASTA</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label class="form-label">Tanggal Kunjungan</label>
                            <input type="date" class="form-control" name="no_registrasi" value="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Jam Kunjungan</label>
                            <input type="time" class="form-control" name="no_registrasi" value="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Cara Masuk</label>
                            <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                <option value="-" selected>Pilih</option>
                                <option value="Jalan">Jalan</option>
                                <option value="Brankar">Brankar</option>
                                <option value="Kursi Roda">Kursi Roda</option>
                                <option value="Digendong">Digendong</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Alasan Kedatangan</label>
                            <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                <option value="-" selected>Pilih</option>
                                <option value="Datang Sendiri">Datang Sendiri</option>
                                <option value="Polisi">Polisi</option>
                                <option value="Rujukan">Rujukan</option>
                                <option value="-">-</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="form-label">&nbsp</label>
                            <div class="input-group-append">
                                <select class="form-select form-select-md " id="macamKasus" name="macam_kasus"
                                    aria-label="Default select example">
                                    <option value="-" selected>Pilih Macam Kasus</option>
                                    <?php foreach ($macam_kasus as $mk) : ?>
                                    <option value="<?= $mk->kode_kasus; ?>"> <?= $mk->kode_kasus; ?> &rarr;
                                        <?= $mk->macam_kasus; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <button class="btn btn-outline-secondary" type="button" data-toggle="modal"
                                    onclick="kasusFunction()"><i class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Keterangan</label>
                            <input type="text" class="form-control" name="no_registrasi" value="">
                        </div>
                    </div>
                </div>
                <!-- Input Triase-->
                <!-- Data Triase -->

                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <table id="example" class="table-responsive table table-bordered display-dataTables">
                        <thead>
                            <tr>
                                <th scope="col">Action</th>
                                <th scope="col">No.Rawat</th>
                                <th scope="col">No. RM</th>
                                <th scope="col">Nama Pasien</th>
                                <th scope="col">Tgl. Kunjungan</th>
                                <th scope="col">Cara Masuk</th>
                                <th scope="col">Transportasi</th>
                                <th scope="col">Alasan Kedatangan</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Macam Kasus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($triase as $trs) : ?>
                            <tr>
                                <td>
                                    <a href="<?= base_url(); ?>admin/registrasi/get_detail"><span
                                            class="badge badge-info p-2">Detail</span></a>
                                    <a href="<?= base_url(); ?>admin/registrasi/get_update_pasien/#ubah"><span
                                            class="badge badge-warning p-2">Ubah</span></a>
                                    <a href="<?= base_url(); ?>admin/registrasi/delete_pasien"><span
                                            class="badge badge-danger p-2"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus !');">Hapus</span></a>
                                </td>
                                <td><?= $trs->no_rawat; ?></td>
                                <td><?= $trs->no_rkm_medis; ?></td>
                                <td><?= $trs->nm_pasien; ?></td>
                                <td><?= $trs->tgl_kunjungan; ?></td>
                                <td><?= $trs->cara_masuk; ?></td>
                                <td><?= $trs->alat_transportasi; ?></td>
                                <td><?= $trs->alasan_kedatangan; ?></td>
                                <td><?= $trs->keterangan_kedatangan; ?></td>
                                <td><?= $trs->macam_kasus; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Data Triase -->
            <!-- tab navs menu -->
        </div>

        <div class="pd-20 card-box mb-30">

            <!-- tab navs menu -->
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active" id="nav-primer-tab" data-toggle="tab" href="#nav-primer" role="tab"
                        aria-controls="nav-primer" aria-selected="true">Triase Primer</a>
                    <a class="nav-link" id="nav-sekunder-tab" data-toggle="tab" href="#nav-sekunder" role="tab"
                        aria-controls="nav-sekunder" aria-selected="false">Triase Sekunder</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <!--Triase Primer-->
                <div class="tab-pane fade show active" id="nav-primer" id="table-responsive-cliente" role="tabpanel"
                    aria-labelledby="nav-primer-tab">
                    <div class="row mt-2">

                        <div class="col-md-6">
                            <label for="exampleFormControlTextarea1" class="form-label">Keluhan Utama</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <label class="form-label">Suhu (C)</label>
                                <input type="text" class="form-control" name="" value="">
                                <label class="form-label mt-2">Tensi</label>
                                <input type="text" class="form-control" name="" value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Nyeri</label>
                            <input type="text" class="form-control" name="" value="">
                            <label class="form-label">Nadi (/menit)</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4">

                            <label class="form-label">Saturasi</label>
                            <input type="text" class="form-control" name="" value="">

                        </div>
                        <div class="col-md-4">

                            <label class="form-label">Respirasi</label>
                            <input type="text" class="form-control" name="" value="">

                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Kebutuhan Khusus</label>
                            <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                <option selected>Open this select menu</option>
                                <option value="-">-</option>
                                <option value="UPPA">UPPA</option>
                                <option value="Airborne">Airbone</option>
                                <option value="Dekontaminan">Dekontaminan</option>
                            </select>
                        </div>
                    </div>
                    <!-- pemeriksaan -->
                    <div class="row mt-2 mb-2">
                        <div class="col-3">
                            <div class="pd-20 card-box" >
                                <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                                        role="tab" aria-controls="v-pills-home" aria-selected="true">Lorem1</a>
                                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                                        role="tab" aria-controls="v-pills-profile" aria-selected="false">Lorem2</a>
                                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                                        role="tab" aria-controls="v-pills-messages" aria-selected="false">Lorem3</a>
                                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                                        role="tab" aria-controls="v-pills-settings" aria-selected="false">Lorem4</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab">
                                    <!-- table skala -->
                                    <div class="pd-20 card-box">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                                    role="tab" aria-controls="home" aria-selected="true">Skala 1</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                                    role="tab" aria-controls="profile" aria-selected="false">Skala 2</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                                aria-labelledby="home-tab">
                                                <table id="example-1" class="table table-bordered display-dataTables" style="color:#FF4C29;">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Pilih</th>
                                                            <th scope="col">Immediate/Segera</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value=""
                                                                        id="defaultCheck1">
                                                                </div>
    
                                                            </td>
                                                            <td>lorem</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="profile" role="tabpanel"
                                                aria-labelledby="profile-tab">
                                                <table id="example-2"
                                                    class="table table-bordered display-dataTables text-danger">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Pilih</th>
                                                            <th scope="col">Emmergensi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value=""
                                                                        id="defaultCheck1">
                                                                </div>
    
                                                            </td>
                                                            <td>lorem</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
    
    
                                    </div>
                                    <!-- table skala -->
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab">
                                <!-- table skala -->
                                <div class="pd-20 card-box">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                                    role="tab" aria-controls="home" aria-selected="true">Skala 1</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                                    role="tab" aria-controls="profile" aria-selected="false">Skala 2</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                                aria-labelledby="home-tab">
                                                <table id="example-1" class="table table-bordered display-dataTables" style="color:#FF4C29;">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Pilih</th>
                                                            <th scope="col">Immediate/Segera</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value=""
                                                                        id="defaultCheck1">
                                                                </div>
    
                                                            </td>
                                                            <td>lorem</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="profile" role="tabpanel"
                                                aria-labelledby="profile-tab">
                                                <table id="example-2"
                                                    class="table table-bordered display-dataTables text-danger">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Pilih</th>
                                                            <th scope="col">Emmergensi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value=""
                                                                        id="defaultCheck1">
                                                                </div>
    
                                                            </td>
                                                            <td>lorem</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
    
    
                                    </div>
                                    <!-- table skala -->
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                    aria-labelledby="v-pills-messages-tab">
                                <!-- table skala -->
                                <div class="pd-20 card-box">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                                    role="tab" aria-controls="home" aria-selected="true">Skala 1</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                                    role="tab" aria-controls="profile" aria-selected="false">Skala 2</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                                aria-labelledby="home-tab">
                                                <table id="example-1" class="table table-bordered display-dataTables" style="color:#FF4C29;">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Pilih</th>
                                                            <th scope="col">Immediate/Segera</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value=""
                                                                        id="defaultCheck1">
                                                                </div>
    
                                                            </td>
                                                            <td>lorem</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="profile" role="tabpanel"
                                                aria-labelledby="profile-tab">
                                                <table id="example-2"
                                                    class="table table-bordered display-dataTables text-danger">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Pilih</th>
                                                            <th scope="col">Emmergensi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value=""
                                                                        id="defaultCheck1">
                                                                </div>
    
                                                            </td>
                                                            <td>lorem</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
    
    
                                    </div>
                                    <!-- table skala -->
                                </div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                    aria-labelledby="v-pills-settings-tab">
                                <!-- table skala -->
                                <div class="pd-20 card-box">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                                    role="tab" aria-controls="home" aria-selected="true">Skala 1</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                                    role="tab" aria-controls="profile" aria-selected="false">Skala 2</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                                aria-labelledby="home-tab">
                                                <table id="example-1" class="table table-bordered display-dataTables" style="color:#FF4C29;">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Pilih</th>
                                                            <th scope="col">Immediate/Segera</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value=""
                                                                        id="defaultCheck1">
                                                                </div>
    
                                                            </td>
                                                            <td>lorem</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="profile" role="tabpanel"
                                                aria-labelledby="profile-tab">
                                                <table id="example-2"
                                                    class="table table-bordered display-dataTables text-danger">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Pilih</th>
                                                            <th scope="col">Emmergensi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value=""
                                                                        id="defaultCheck1">
                                                                </div>
    
                                                            </td>
                                                            <td>lorem</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
    
    
                                    </div>
                                    <!-- table skala -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- pemeriksaan -->
                    <!-- <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="pd-20 card-box">
                                <table id="example" class="table table-bordered display-dataTables">
                                    <thead>
                                        <tr>
                                            <th scope="col">Pilih</th>
                                            <th scope="col">Pemeriksaan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                </div>

                                            </td>
                                            <td>lorem</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="pd-20 card-box">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                            role="tab" aria-controls="home" aria-selected="true">Skala 1</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                            role="tab" aria-controls="profile" aria-selected="false">Skala 2</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <table id="example-1" class="table table-bordered display-dataTables">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Pilih</th>
                                                    <th scope="col">Immediate/Segera</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="defaultCheck1">
                                                        </div>

                                                    </td>
                                                    <td>lorem</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                        <table id="example-2"
                                            class="table table-bordered display-dataTables text-danger">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Pilih</th>
                                                    <th scope="col">Emmergensi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="defaultCheck1">
                                                        </div>

                                                    </td>
                                                    <td>lorem</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div> -->

                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="form-label">Catatan</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Plan/Keputusan</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Ruang Resusitasi
                                </label>

                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Ruang Kritis
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label class="form-label">Tanggal Triase</label>
                            <input type="date" class="form-control" name="no_registrasi" value="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Jam Triase</label>
                            <input type="time" class="form-control" name="no_registrasi" value="">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Dokter IGD</label>
                            <div class="input-group-append">
                                <select class="form-select form-select-md " id="dokter" name="dokter_dituju"
                                    aria-label="Default select example">
                                    <option selected>Pilih Dokter</option>
                                    <?php foreach ($dokter as $dok) : ?>
                                    <option value="<?= $dok->kd_dokter; ?>"> <?= $dok->kd_dokter; ?> &rarr;
                                        <?= $dok->nm_dokter; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <input type="text" class="form-control" name="dokter_dituju" placeholder="Dokter Dituju" readonly> -->
                                <button class="btn btn-outline-secondary" type="button" data-toggle="modal"
                                    onclick="dokterFunction()"><i class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="tab-pane fade" id="nav-sekunder" role="tabpanel" aria-labelledby="nav-sekunder-tab">
                    <div class="row mt-2">

                        <div class="col-md-6">
                            <label for="exampleFormControlTextarea1" class="form-label">Anamnesa Singkat</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <label class="form-label">Suhu (C)</label>
                                <input type="text" class="form-control" name="" value="">

                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Nyeri</label>
                            <input type="text" class="form-control" name="" value="">

                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4">

                            <label class="form-label">Saturasi</label>
                            <input type="text" class="form-control" name="" value="">

                        </div>
                        <div class="col-md-4">

                            <label class="form-label">Respirasi</label>
                            <input type="text" class="form-control" name="" value="">

                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Tensi</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Nadi</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-3">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <input type="text" name="" id="" class="nav-link active" id="v-pills-home-tab"
                                    data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true" readonly value="Home">

                            </div>
                        </div>
                        <div class="col-9">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab">...</div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab">...</div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                    aria-labelledby="v-pills-messages-tab">...</div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                    aria-labelledby="v-pills-settings-tab">...</div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="form-label">Catatan</label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Plan/Keputusan</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Zona Kuning
                                </label>

                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Zona Hijau
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label class="form-label">Tanggal Triase</label>
                            <input type="date" class="form-control" name="no_registrasi" value="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Jam Triase</label>
                            <input type="time" class="form-control" name="no_registrasi" value="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Dokter IGD</label>
                            <input type="text" class="form-control" name="no_registrasi" value="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">&nbsp</label>
                            <div class="input-group-append">
                                <input type="text" class="form-control" name="no_registrasi" value="">
                                <button class="btn btn-outline-secondary" type="button" data-toggle="modal"
                                    onclick="dokterFunction()"><i class="icon-copy dw dw-add"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Triase Primer-->

        </div>
        <!-- tab navs menu -->
    </div>


</div>



<!-- copyright -->
<?php
$this->load->view('templates/admin/copyright');
?>
<!-- copyright -->
<!-- script show form -->
<script>
$('.display-dataTables').dataTable({
    searching: true,
    paging: false,
    info: false
});
</script>

<script type="text/javascript">
$(document).ready(function() {

    $('#no_rkm_medis').select2({
        placeholder: "Pilih No.Rekam Medis"
    });
    $('#dokter').select2({
        placeholder: "Pilih Doktor"
    });
    show_no_rkm_medis_triase();

});
// fungsi untuk menampilkan Nomor Rekam Medis
function show_no_rkm_medis_triase() {
    $.ajax({
        url: "<?php echo base_url('admin/Registrasi/get_no_rkm_medis_triase'); ?>",
        type: "GET",
        dataType: "JSON",
        success: function(x) {
            if (x.status == true) {
                $('#no_rkm_medis').html('<option value=""></option>');
                $.each(x.data, function(k, v) {
                    $('#no_rkm_medis').append(
                        `<option value="${v.no_rkm_medis}">${v.no_rkm_medis} &rarr; ${v.nm_pasien}</option>`
                    );
                });
            }
        }
    });
}

// fungsi untuk menampilkan data Pasien berdasarkan No Rekam Medis
function show_pasien(x) {
    $.ajax({
        url: "<?php echo base_url('admin/registrasi/get_pasien'); ?>",
        type: "GET",
        dataType: "JSON",
        data: {
            no_rkm_medis: x
        },
        success: function(x) {
            if (x.status == true) {
                $('#no_rawat').val(x.data.no_rawat);
                $('#nm_pasien').val(x.data.nm_pasien);
            }
        }
    });
}

function dokterFunction() {
    window.open("<?= base_url() ?>admin/registrasi/dokter_dituju", "_blank",
        "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=1000,height=1000");
}
</script>