<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
    <head>
        <?php
        $this->load->view('templates/admin/header');
        ?>
    </head>
    <body>
        <div class="header">

            <div class="header-right">

                <div class="user-info-dropdown">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <span class="user-icon">
                                <img src="vendors/images/photo1.jpg" alt="">
                            </span>

                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
                            <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
                            <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
                            <a class="dropdown-item" href="login.html"><i class="dw dw-logout"></i> Log Out</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php $this->load->view('farmasi/sidemenu'); ?>
        <div class="mobile-menu-overlay"></div>
        <div class="main-container">
            <form class="tab-wizard wizard-circle wizard">
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">No. Nota</label>
                        <input type="text" class="form-control" name="nota" value="<?php echo $nota ?>" />
                        <label class="form-label mt-2">Catatan</label>
                        <input type="text" class="form-control" name="catatan" />
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label mt-2">Tanggal</label>
                                <input type="date" class="form-control" name="tgl_registrasi" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label mt-2">Jenis Jual</label>
                                <select name="jj" class="custom-select">
                                    <option value="Jual Bebas">Jual Bebas</option>
                                    <option value="Karyawan">Karyawan</option>
                                    <option value="Beli Luar<">Beli Luar</option>
                                    <option value="Rawat Jalan">Rawat Jalan</option>
                                    <option value="Kelas 1">Kelas 1</option>
                                    <option value="Kelas 2">Kelas 2</option>
                                    <option value="Kelas 3">Kelas 3</option>
                                    <option value="Utama/BPJS">Utama/BPJS</option>
                                    <option value="VIP">VIP</option>
                                    <option value="VVIP">VVIP</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <!-- -- -->
                            <div class="col-md-4">
                                <label class="form-label">Pasien</label>
                                <input type="text" class="form-control" name="rekam_medik" value="000078">
                                <input type="hidden" name="rekam_medik" value="000078">
                            </div>
                            <div class="col-md-8">
                                <label for="exampleFormControlInput1" class="form-label">&nbsp;</label>
                                <div class="input-group-append">
                                    <input type="text" class="form-control" name="nama_pasien" placeholder="Nama Pasien" value="Zabidi">
                                    <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#modalDataRekamMedik"><i class="icon-copy dw dw-add"></i></button>
                                </div>
                            </div>
                            <!-- -- -->
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-2">
                                <label for="exampleFormControlInput1" class="form-label">Petugas</label>
                                <input type="text" class="form-control" name="petugas"  value="002">
                                <input type="hidden" class="form-control" name="petugas"  value="002">
                            </div>
                            <div class="col-md-8 mt-2">
                                <label for="exampleFormControlInput1" class="form-label">&nbsp;</label>
                                <input type="text" class="form-control" name="nama_petugas" value="Erna Widyastuti">

                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <label class="form-label">Lokasi</label>
                                <input type="text" class="form-control" name="kode_lokasi" value="AP">
                                <input type="hidden" class="form-control" name="kode_lokasi" value="AP">
                            </div>
                            <div class="col-md-8">
                                <label for="exampleFormControlInput1" class="form-label">&nbsp;</label>
                                <input type="text" class="form-control" name="lokasi" placeholder="" value="Apotek">
                                <input type="hidden" class="form-control" name="lokasi" value="Apotek">
                            </div>
                        </div>


                    </div>
                </div>
                <h5 style="margin-bottom: 30px;">Transaksi Penjualan Obat Umum</h5>
                <?php
                for ($a = 0; $a < $jumlah; $a++):
                    $q = $this->db->get_where('databarang', array('kode_brng' => $pembelian[$a]))->result_array();
                    foreach ($q as $q):
                        ?>
                        <section>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Kode :</label>
                                        <p><?php echo $pembelian[$a]; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Nama Obat :</label>
                                        <p><?php echo $q['nama_brng']; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Stok :</label>
                                        <?php
                                        $d = 0;
                                        $x = $this->db->get_where('riwayat_barang_medis', array('kode_brng' => $pembelian[$a]))->result_array();
                                        foreach ($x as $x) {
                                            $d = $x['stok_akhir'];
                                        }
                                        ?>
                                        <p><?php echo $d; ?></p>  
                                        <input type="hidden" id="<?php echo "stok_" . $a ?>" value="<?php echo $d; ?>">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Jumlah :</label>
                                        <input type="hidden" id="<?php echo "hrg_" . $a ?>" value="<?php echo $q['ralan']; ?>">
                                        <input type="number" class="form-control" id="<?php echo "jumlah_" . $a ?>" name="jumlah[]" onkeyup="lookup(this);" min="1" max="<?php echo $d ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>SubTotal :</label>
                                        <input type="number" class="form-control" id="<?php echo "subtotal_" . $a ?>" name="subtotal[]" readonly>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Ptg(%) :</label>
                                        <input type="number" class="form-control" id="<?php echo "ptg1_" . $a ?>" name="ptg1[]" min="0" max="100" value="0" onkeyup="lookup2(this);" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Ptg(Rp) :</label>
                                        <input type="number" class="form-control" id="<?php echo "ptg2_" . $a ?>" name="ptg2[]" value="0" onkeyup="lookup3(this);" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Tmb (Rp) :</label>
                                        <input type="number" class="form-control" name="tmb[]" id="<?php echo "tmb_" . $a ?>" value="0" onkeyup="lookup4(this);" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Emb (Rp) :</label>
                                        <input type="number" class="form-control" name="emb[]" id="<?php echo "emb_" . $a ?>" value="0" onkeyup="lookup5(this);" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Tsl (Rp) :</label>
                                        <input type="number" class="form-control" name="tsl" id="<?php echo "tsl_" . $a ?>" value="0" onkeyup="lookup6(this);" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Total (Rp) :</label>
                                        <input type="number" class="form-control" name="total[]" id="<?php echo "total_" . $a ?>" value="0" readonly>
                                    </div>
                                </div>
                            </div>
                            <hr />
                        </section>
                        <?php
                    endforeach;
                endfor;
                ?>
                <div class="row mt-4">
                    <div class="col-md-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary p-2">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- js -->
    <?php $this->load->view('templates/admin/footer'); ?>
    <script type="text/javascript">

        function lookup(arg) {
            var id = arg.getAttribute('id');
            var detect = id.split("_");
            var fix = detect[1];
            var stok = $("#stok_" + fix).val();
            var value = arg.value;
            var price = $("#hrg_" + fix).val();
            var sub = price * value;
            $("#subtotal_" + fix).val(sub);
            $("#total_" + fix).val(sub);
        }
        
        function lookup2(arg) {
            var id = arg.getAttribute('id');
            var detect = id.split("_");
            var fix = detect[1];
            var value = arg.value;
            var subtotal = $("#subtotal_" + fix).val();
            var ptg2 = (subtotal * value)/100;
            var ax = subtotal - ptg2;
            $("#ptg2_" + fix).val(ptg2);
            $("#total_" + fix).val(ax);
            
        }
        
        function lookup3(arg) {
            var id = arg.getAttribute('id');
            var detect = id.split("_");
            var fix = detect[1];
            var value = arg.value;

            var ptg2 = $("#ptg2_" + fix).val();
            var subtotal =  $("#subtotal_" + fix).val();
            var hasil = subtotal - ptg2;
            $("#ptg1_" + fix).val("0");
            $("#ptg2_" + fix).val(ptg2);
            $("#total_" + fix).val(hasil);
        }
        
        function lookup4(arg) {
            var id = arg.getAttribute('id');
            var detect = id.split("_");
            var fix = detect[1];
            let value = parseInt(arg.value);
            let ptg2 = parseInt($("#ptg2_" + fix).val());
            let subtotal =  parseInt($("#subtotal_" + fix).val());
            let hasil = (subtotal - ptg2)+value ;
            $("#total_" + fix).val(hasil);
        }
        
        function lookup5(arg) {
            var id = arg.getAttribute('id');
            var detect = id.split("_");
            var fix = detect[1];
            let value = parseInt(arg.value);
            let ptg2 = parseInt($("#ptg2_" + fix).val());
            let tmb = parseInt($("#tmb_" + fix).val());
            let subtotal =  parseInt($("#subtotal_" + fix).val());
            let hasil = (subtotal - ptg2)+value+tmb ;
            $("#total_" + fix).val(hasil);
        }
        
        function lookup6(arg) {
            var id = arg.getAttribute('id');
            var detect = id.split("_");
            var fix = detect[1];
            let value = parseInt(arg.value);
            let ptg2 = parseInt($("#ptg2_" + fix).val());
            let emb = parseInt($("#emb_" + fix).val());
            let tmb = parseInt($("#tmb_" + fix).val());
            let subtotal =  parseInt($("#subtotal_" + fix).val());
            let hasil = (subtotal - ptg2)+value+tmb+emb;
            $("#total_" + fix).val(hasil);
        }
    </script>
</body>
</html>
