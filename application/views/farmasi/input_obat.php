<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
    
        <?php
        $this->load->view('templates/admin/header');
        ?>

    <body>
        <div class="container-fluid">
            <div class="xs-pd-20-10 pd-ltr-20">
                <!-- menu -->
                <?php
                $this->load->view('templates/admin/menu');
                ?>
                <!-- menu -->
                <div class="page-header">
                    <div class="row">
                        <div class="xs-pd-20-10 pd-ltr-20">
                            <div class="title">
                                <h4>Input Penjualan Obat & BHP</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard">Beranda</a></li>
                                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>farmasi/mainData">Farmasi</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Registrasi</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div id="formTambahPasien" class="pd-20 card-box mb-30">
                    <form class="tab-wizard wizard-circle wizard">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">No. Nota</label>
                                <input type="text" class="form-control" name="nota" value="<?php echo $nota ?>" style="font-size: 12px;"/>
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
                        <div class="row mt-4">
                            <div class="col-md-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary p-2">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="pd-20 card-box mb-30">

                    <div class="pd-20 card-box mb-30">
                        <table class="table-responsive table table-bordered display-dataTables">
                            <thead>
                                <tr>
                                    <th style="font-size: 12px;">Jml</th>
                                    <th style="font-size: 12px;">Kode Brg</th>
                                    <th style="font-size: 12px;">Nama Barang</th>
                                    <th style="font-size: 12px;">Kategori</th>
                                    <th style="font-size: 12px;">Satuan</th>
                                    <th style="font-size: 12px;">Stok</th>
                                    <th style="font-size: 12px;">Kadaluarsa</th>
                                    <th style="font-size: 12px;">Harga(Rp)</th>
                                    <th style="font-size: 12px;">SubTotal(Rp)</th>
                                    <th style="font-size: 12px;">Ptg(%)</th>
                                    <th style="font-size: 12px;">Ptg(Rp)</th>
                                    <th style="font-size: 12px;">Tmb(Rp)</th>
                                    <th style="font-size: 12px;">Emb(Rp)</th>
                                    <th style="font-size: 12px;">Tsl(Rp)</th>
                                    <th style="font-size: 12px;">Total</th>
                                    <th style="font-size: 12px;">Aturan Pakai</th>
                                    <th style="font-size: 12px;">No. Batch</th>
                                    <th style="font-size: 12px;">No. Faktur</th>    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $a = 0;
                                foreach ($databarang as $databarang):
                                    $d = 0;
                                    $q = $this->db->get_where('riwayat_barang_medis', array('kode_brng' => $databarang->kode_brng))->result_array();
                                    foreach ($q as $q) {
                                        $d = $q['stok_akhir'];
                                    }
                                    if ($databarang->nama != '-' && $d != 0 && $databarang->kode_satbesar != '-'):
                                        ?>
                                        <tr>
                                            <td style="font-size: 12px;">
                                                <!--<input type="checkbox" name="obat[]" value="<?php echo $databarang->kode_brng; ?>" />-->
                                                <input type="hidden" id="<?php echo "hrg_" . $a ?>" value="<?php echo $databarang->ralan; ?>">
                                                <input type="text" id="<?php echo "jumlah_" . $a ?>" name="jumlah[]" onkeyup="lookup(this);" style="width: 30px;" required>
                                            </td>
                                            <td style="font-size: 12px;">
                                                <h5 class="font-12"><?php echo $databarang->kode_brng; ?></h5>
                                            </td>
                                            <td style="font-size: 12px;"><?php echo $databarang->nama_brng; ?></td>
                                            <td style="font-size: 12px;"><?php echo $databarang->nama; ?></td>
                                            <td style="font-size: 12px;"><?php echo $databarang->kode_satbesar; ?></td> 

                                            <td style="font-size: 12px;text-align: center;">
                                                <?php echo $d; ?>
                                            </td>
                                            <td style="font-size: 12px;"><?php echo $databarang->expire; ?></td> 
                                            <td style="font-size: 12px;text-align: right;"><?php echo number_format($databarang->ralan, 0, '', '.'); ?></td>
                                            <td style="font-size: 12px;"><input type="text" id="<?php echo "subtotal_" . $a ?>" name="subtotal[]" style="width: 50px;text-align: right;" value="0" readonly></td>
                                            <td style="font-size: 12px;"><input type="text"  id="<?php echo "ptg1_" . $a ?>" name="ptg1[]" style="width: 30px;text-align: right;" value="0" onkeyup="lookup2(this);" required></td>
                                            <td style="font-size: 12px;"><input type="text"  id="<?php echo "ptg2_" . $a ?>" name="ptg2[]" style="width: 50px;text-align: right;" value="0" onkeyup="lookup3(this);" required></td>
                                            <td style="font-size: 12px;"><input type="text" name="tmb[]" id="<?php echo "tmb_" . $a ?>" style="width: 50px;text-align: right;" value="0" onkeyup="lookup4(this);" required></td>
                                            <td style="font-size: 12px;"><input type="text" name="emb[]" id="<?php echo "emb_" . $a ?>" style="width: 50px;text-align: right;" value="0" onkeyup="lookup5(this);" required></td>
                                            <td style="font-size: 12px;"><input type="text" name="tsl[]" id="<?php echo "tsl_" . $a ?>" style="width: 50px;text-align: right;" value="0" onkeyup="lookup6(this);" required></td>
                                            <td style="font-size: 12px;"><input type="text" name="total[]" id="<?php echo "total_" . $a ?>" value="0" style="width: 50px;text-align: right;" readonly></td>
                                            <td style="font-size: 12px;"><input type="text" name="ap[]" /></td>
                                            <td style="font-size: 12px;"><input type="text" name="batch[]" /></td>
                                            <td style="font-size: 12px;"><input type="text" name="faktur[]" /></td>
                                        </tr>
                                        <?php
                                        $a++;
                                    endif;
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <script type="text/javascript">
            $('table.display-dataTables').dataTable({
                paging: true,
                searching: true,
                lengthChange: false,
                ordering: false,
            });
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
                var ptg2 = (subtotal * value) / 100;
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
                var subtotal = $("#subtotal_" + fix).val();
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
                let subtotal = parseInt($("#subtotal_" + fix).val());
                let hasil = (subtotal - ptg2) + value;
                $("#total_" + fix).val(hasil);
            }

            function lookup5(arg) {
                var id = arg.getAttribute('id');
                var detect = id.split("_");
                var fix = detect[1];
                let value = parseInt(arg.value);
                let ptg2 = parseInt($("#ptg2_" + fix).val());
                let tmb = parseInt($("#tmb_" + fix).val());
                let subtotal = parseInt($("#subtotal_" + fix).val());
                let hasil = (subtotal - ptg2) + value + tmb;
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
                let subtotal = parseInt($("#subtotal_" + fix).val());
                let hasil = (subtotal - ptg2) + value + tmb + emb;
                $("#total_" + fix).val(hasil);
            }
        </script>
    </body>
</html>