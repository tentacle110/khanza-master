
var isiText = "";
$('#DataTablesRegistrasiBody').find("tr").contextmenu(function(){
  isiText = $(this).find('#no-rawat').text();
});

$(document).ready(function(){

  contex.init({preventDoubleContext: false});

  contex.attach('#DataTablesRegistrasiBody', [

    {text: 'Data Rekam Medis', subMenu: [
            {text: 'RM Gawat Darurat', subMenu: [
                    {text: 'Triase Gawat Darurat', href: 'http://lab.jakiestfu.com/contextjs/context.js', target:'_blank', action: function(e){
                      _gaq.push(['_trackEvent', 'ContextJS Download', this.pathname, this.innerHTML]);
                    }}
            ]},
            {text: 'RM Rawat Jalan', subMenu: [
                    {text: 'Penilaian Awal Keperawatan', href: 'http://lab.jakiestfu.com/contextjs/context.js', target:'_blank', action: function(e){
                      _gaq.push(['_trackEvent', 'ContextJS Download', this.pathname, this.innerHTML]);
                    }},
                    {text: 'Penilaian Awal Keperawatan Gigi & Mulut', href: 'http://lab.jakiestfu.com/contextjs/context.js', target:'_blank', action: function(e){
                      _gaq.push(['_trackEvent', 'ContextJS Download', this.pathname, this.innerHTML]);
                    }},
                    {text: 'Penilaian Awal Kebidanan & Kandungan', href: 'http://lab.jakiestfu.com/contextjs/context.js', target:'_blank', action: function(e){
                      _gaq.push(['_trackEvent', 'ContextJS Download', this.pathname, this.innerHTML]);
                    }},
                    {text: 'Penilaian Awal Keperawatan Bayi / Anak', href: 'http://lab.jakiestfu.com/contextjs/context.js', target:'_blank', action: function(e){
                      _gaq.push(['_trackEvent', 'ContextJS Download', this.pathname, this.innerHTML]);
                    }}
            ]},
            {text: 'Resume Pasien', href: 'http://lab.jakiestfu.com/contextjs/context.js', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Diagnosa Pasien', href: 'http://lab.jakiestfu.com/contextjs/context.js', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Riwayat Perawatan', href: 'http://lab.jakiestfu.com/contextjs/context.js', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Deteksi Dini Corona', href: 'http://lab.jakiestfu.com/contextjs/context.js', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Hemodialisa', href: 'http://lab.jakiestfu.com/contextjs/context.js', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Download', this.pathname, this.innerHTML]);
            }}
    ]},
    {text: 'Permintaan', subMenu: [
            {text: 'Jadwal Operasi', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Pemeriksaan Lab', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Pemeriksaan Radiologi', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Rawat Inap', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }}
    ]},
    {text: 'Kamar Inap', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
      _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
    }},
    {text: 'Tindakan Dan Pemeriksaan', subMenu: [
            {text: 'Tagihan / Tindakan Rawat Jalan', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Periksa Laborat PK', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Periksa Laborat PA', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Periksa Radiologi', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Tagihan Operasi / VK', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }}
    ]},
    {text: 'Obat', subMenu: [
            {text: 'Pemberian Obat / BHP', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Input No.Resep', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Input Resep Dokter', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }}
    ]},
    {text: 'Billing / Pembayaran Pasien', subMenu: [
            {text: 'Billing Parsial', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Billing Total', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }}
    ]},
    {divider: true},
    {text: 'Laporan', subMenu: [
            {text: 'Laporan Rekap Kunjungan Per Poli', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Laporan Rekap Kunjungan Per Dokter', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Laporan RL 315 Cara Bayar', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Laporan 32 Rawat Darurat', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Laporan RL 51', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Laporan RL 52', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Laporan Frekuensi Penyakit Ralan', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Laporan Rekap Perperujuk', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }}
    ]},
    {text: 'Grafik Analisa', subMenu: [
            {text: 'Grafik Plot Kunjungan Per Poli', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Grafik Pie Kunjungan Per Poli', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Grafik Batang Kunjungan Per Poli', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Grafik Plot Kunjungan Per Dokter', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Grafik Pie Kunjungan Per Dokter', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Grafik Batang Kunjungan Per Dokter', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Grafik Plot Kunjungan Per Jenis Kelamin', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Grafik Plot Kunjungan Per Pekerjaan', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Grafik Plot Kunjungan Per Agama', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Grafik Plot Kunjungan Per Tahun', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Grafik Plot Kunjungan Per Bulan', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Grafik Plot Kunjungan Per Tanggal', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Demografi Pendaftaran', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }}
    ]},
    {text: 'Surat - Surat', subMenu: [
            {text: 'Surat Kontrol', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Surat Keterangan Sehat 1', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Surat Keterangan Sehat 2', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Surat Keterangan Sehat 3', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Surat Keterangan Bebas Narkoba', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Surat Cuti Sakit', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Surat Cuti Sakit Pihak Ke 2', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Surat Keterangan Rawat Inap', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Surat Keterangan Hamil / Tidak Hamil', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Surat Cuti Hamil', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Surat Keterangan Covid', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Bukti Register 1', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Bukti Register 2', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Bukti Register 3', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Persetujuan Medis', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Surat Jaminan & Bukti Pelayanan Ralan', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Lembar Casemix 1', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Lembar Casemix 2', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Lembar Casemix 3', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Surat BuktiP elayanan Kesehatan (SBPK) 1', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Surat BuktiP elayanan Kesehatan (SBPK) 2', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Surat Bukti Tindakan', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Surat Jaminan Kesehatan Nasional (JKRA) Rawat Jalan', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Lembar Rawat Jalan', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Blanko Resep', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Surat Jaminan Pelayanan', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Lembar Masuk Keluar', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }}
    ]},
    {text: 'Check List Kelengkapan Pendaftaran', subMenu: [
            {text: 'Check List Kelengkapan Pendaftaran Kanan', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Check List Kelengkapan Pendaftaran Kiri', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Check List Kelengkapan Pendaftaran Kanan + Tracker', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Check List Kelengkapan Pendaftaran Kiri + Tracker', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }}
     ]},
    {text: 'Lembar Periksa Pasien', subMenu: [
            {text: 'Lembar Periksa Pasien Kanan', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Lembar Periksa Pasien Kiri', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Lembar Periksa Pasien Kanan 2', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Lembar Periksa Pasien Kiri 2', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }}
    ]},
    {text: 'Label & Barcode', subMenu: [
            {text: 'Label Tracker 1', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Label Tracker 2', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Label Tracker 3', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Label Tracker 4', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Barcode Perawatan 1', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Barcode Perawatan 1', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Barcode RM', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Label Rekam Medis 10', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Gelang Pasien 1', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Gelang Pasien 2', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Gelang Pasien 3', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Gelang Pasien 4', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Gelang Pasien 5', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Gelang Pasien 6', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Gelang Pasien 7', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }}
    ]},
    {divider: true},
    {text: 'Rujukan', subMenu: [
            {text: 'Masuk', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Keluar', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Poli Internal', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }}
    ]},
    {text: 'Bridging', subMenu: [
            {text: 'SEP BPJS', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Rencana Kontrol BPJS', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Perintah Rawat Inap BPJS', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'SJP Inhealt', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Data PCare', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Rujuk Keluar Via Sisrute', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Pasien Corona Kemenkes', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Perawatan Pasien Corona INACBG', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Terindetifikasi TB Kemenkes', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }}
    ]},
    {text: 'Input Data', subMenu: [
            {text: 'Catatan UNtuk Pasien', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Berkas Digital Perawatan', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Insiden Keselamatan Pasien', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }}
    ]},
    // {text: 'Urutkan Data Bedasarkan', subMenu: [
    //   			{text: 'No. Rawat Descending', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
    //     			_gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
    // 				}},
    // 				{text: 'No. Rawat Ascending', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
    //     			_gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
    // 				}},
    // 				{text: 'Tanggal Descending', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
    //     			_gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
    // 				}},
    // 				{text: 'Tanggal Ascending', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
    //     			_gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
    // 				}},
    // 				{text: 'No. ', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
    //     			_gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
    // 				}},
    // 				{text: 'No. ', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
    //     			_gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
    // 				}},
    // 				{text: 'No. ', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
    //     			_gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
    // 				}},
    // 				{text: 'No. ', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
    //     			_gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
    // 				}},
    // 				{text: 'No. ', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
    //     			_gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
    // 				}},
    // 				{text: 'No. ', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
    //     			_gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
    // 				}},
    // 				{text: 'No. ', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
    //     			_gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
    // 				}},
    // 				{text: 'No. ', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
    //     			_gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
    // 				}},
    // 				{text: 'No. ', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
    //     			_gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
    // 				}},
    // 				{text: 'No. ', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
    //     			_gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
    // 				}},
    // 				{text: 'No. ', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
    //     			_gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
    // 				}},
    // 				{text: 'No. ', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
    //     			_gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
    // 				}}
    // ]},
    {text: 'Hapus & Ubah Data', subMenu: [
            {text: 'Hapus Tagihan Operasi', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Hapus Obat Operasi', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Gabung No.Rawat', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Set Status', subMenu: [
                    {text: 'Berkas RM Diterima', href: 'http://lab.jakiestfu.com/contextjs/context.js', target:'_blank', action: function(e){
                      _gaq.push(['_trackEvent', 'ContextJS Download', this.pathname, this.innerHTML]);
                    }},
                    {text: 'Sudah Periksa', href: 'http://lab.jakiestfu.com/contextjs/context.js', target:'_blank', action: function(e){
                      _gaq.push(['_trackEvent', 'ContextJS Download', this.pathname, this.innerHTML]);
                    }},
                    {text: 'Belum Periksa', href: 'http://lab.jakiestfu.com/contextjs/context.js', target:'_blank', action: function(e){
                      _gaq.push(['_trackEvent', 'ContextJS Download', this.pathname, this.innerHTML]);
                    }},
                    {text: 'Batal Periksa', href: 'http://lab.jakiestfu.com/contextjs/context.js', target:'_blank', action: function(e){
                      _gaq.push(['_trackEvent', 'ContextJS Download', this.pathname, this.innerHTML]);
                    }},
                    {text: 'Dirujuk', href: 'http://lab.jakiestfu.com/contextjs/context.js', target:'_blank', action: function(e){
                      _gaq.push(['_trackEvent', 'ContextJS Download', this.pathname, this.innerHTML]);
                    }},
                    {text: 'Dirawat', href: 'http://lab.jakiestfu.com/contextjs/context.js', target:'_blank', action: function(e){
                      _gaq.push(['_trackEvent', 'ContextJS Download', this.pathname, this.innerHTML]);
                    }},
                    {text: 'Meninggal', href: 'http://lab.jakiestfu.com/contextjs/context.js', target:'_blank', action: function(e){
                      _gaq.push(['_trackEvent', 'ContextJS Download', this.pathname, this.innerHTML]);
                    }},
                    {text: 'Pulang Periksa', href: 'http://lab.jakiestfu.com/contextjs/context.js', target:'_blank', action: function(e){
                      _gaq.push(['_trackEvent', 'ContextJS Download', this.pathname, this.innerHTML]);
                    }},
                    {text: 'Status Poli', subMenu: [
                            {text: 'Status Poli Baru', href: 'http://lab.jakiestfu.com/contextjs/context.js', target:'_blank', action: function(e){
                              _gaq.push(['_trackEvent', 'ContextJS Download', this.pathname, this.innerHTML]);
                            }},
                            {text: 'Status Poli Lama', href: 'http://lab.jakiestfu.com/contextjs/context.js', target:'_blank', action: function(e){
                              _gaq.push(['_trackEvent', 'ContextJS Download', this.pathname, this.innerHTML]);
                            }}
                    ]}
                ]}

           ]},



  ]);

});



//poli

//
var isiTextPoli = "";
$('#DataTablesPoliBody').find("tr").contextmenu(function(){
  isiTextPoli = $(this).find('#no-rawat').text();
});

$(document).ready(function(){

  contex.init({preventDoubleContext: false});

  contex.attach('#DataTablesPoliBody', [

    {text: 'Permintaan', subMenu: [
            {text: 'Jadwal Operasi', href: 'http://lab.jakiestfu.com/contextjs/context.js', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Pemeriksaan Lab', href: 'http://lab.jakiestfu.com/contextjs/context.js', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Pemeriksaan Radiologi', href: 'http://lab.jakiestfu.com/contextjs/context.js', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Download', this.pathname, this.innerHTML]);
            }}
    ]},
    {text: 'Kamar Inap', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
      _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
    }},
    {text: 'Tindakan Dan Pemeriksaan', subMenu: [
            {text: 'Tagihan / Tindakan Rawat Jalan', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Periksa Laborat PK', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Periksa Laborat PA', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Periksa Radiologi', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Tagihan Operasi / VK', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }}
    ]},
    {text: 'Obat', subMenu: [
            {text: 'Pemberian Obat / BHP', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Input No.Resep', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Input Resep Dokter', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }}
    ]},
    {text: 'Billing / Pembayaran Pasien', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
      _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
    }},
    {text: 'Input Data', subMenu: [
            {text: 'Berkas Digital Perawatan', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Insiden Keselamatan Pasien', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }},
            {text: 'Diagnosa Pasien', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
              _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
            }}
    ]},
    //urutkan berdasarkan skip
    {text: 'Riwayat Perawatan', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
      _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
    }},
    {text: 'Hapus Rujukan Poli Internal', href: 'http://lab.jakiestfu.com/contextjs/context.bootstrap.css', target:'_blank', action: function(e){
      _gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
    }},



  ]);

});
