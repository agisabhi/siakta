<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller{

public function __construct(){
	parent::__construct();
	$this->load->model('Laporan_model');
}

public function ajb(){ 
    
	if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user
           if($filter == '2'){ // Jika filter nya 2 (per bulan)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                
                $ket = 'Data Akta Jual Beli Bulan '.$nama_bulan[$bulan].' '.$tahun;
                $total_rows = $this->Laporan_model->view_by_month($bulan,$tahun);
                $url_cetak = 'laporan/cetak?filter=2&bulan='.$bulan.'&tahun='.$tahun;
                $transaks = $this->Laporan_model->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di TransaksiModel
            }else{ // Jika filter nya 3 (per tahun)
                $tahun = $_GET['tahun'];
                
                $ket = 'Data Akta Jual Beli Tahun '.$tahun;
                $total_rows = $this->Laporan_model->view_by_year($tahun);
                $url_cetak = 'laporan/cetak?filter=3&tahun='.$tahun;
                $transaks = $this->Laporan_model->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di TransaksiModel
            }
        }else{ // Jika user tidak mengklik tombol tampilkan
            $ket = 'Semua Data Akta Jual Beli';
            $url_cetak = 'laporan/cetak';
            $total_rows = $this->Laporan_model->view_all();
            $transaks = $this->Laporan_model->view_all(); // Panggil fungsi view_all yang ada di TransaksiModel
        }
        
    $data['ket'] = $ket;
    $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['url_cetak'] = base_url($url_cetak);
    $data['transaksi'] = $transaks;
    $data['option_tahun'] = $this->Laporan_model->option_tahun();
    $this->load->view('header/header', $data);
    $this->load->view('header/topbar');
    $this->load->view('header/navppat', $data);
    $this->load->view('laporan/ajb', $data);
    $this->load->view('header/footer_lap', $data);
    
  }
  
  public function cetak(){
        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user
            if($filter == '2'){ // Jika filter nya 2 (per bulan)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                
                $ket = 'Data Akta Jual Beli Bulan '.$nama_bulan[$bulan].' '.$tahun;
                $transaksi = $this->Laporan_model->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di TransaksiModel
            }else{ // Jika filter nya 3 (per tahun)
                $tahun = $_GET['tahun'];
                
                $ket = 'Data Akta Jual Beli Tahun '.$tahun;
                $transaksi = $this->Laporan_model->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di TransaksiModel
            }
        }else{ // Jika user tidak mengklik tombol tampilkan
            $ket = 'Semua Data Akta Jual Beli';
            $transaksi = $this->Laporan_model->view_all(); // Panggil fungsi view_all yang ada di TransaksiModel
        }
        
        $data['ket'] = $ket;
        $data['transaksi'] = $transaksi;
        
        ob_start();
        
        $this->load->view('laporan/ajbprint', $data);
        $html = ob_get_contents();
        ob_end_clean();
        
        require './vendor/autoload.php'; // Load plugin html2pdfnya
        $pdf = new \Mpdf\Mpdf([
	'mode' => 'c',
	'orientation' => 'L',
	'margin_left' => 32,
	'margin_right' => 25,
	'margin_top' => 47,
	'margin_bottom' => 47,
	'margin_header' => 10,
	'margin_footer' => 10,
    'format' => 'A3-L'
]);

$header = '
<table width="100%"><tr>
<td width="33%" align="right"><img src="assets/images/logo.png" width="120px" /></td>
<td width="200%" align="center"><h1 align="center">Laporan Pengajuan Akta Jual Beli<br>Kantor Kecamatan Cibiru</h1></td>
</tr>
</table><hr class="line-block">';


$pdf->SetHTMLHeader($header);
$pdf->showImageErrors = true;
        $pdf->WriteHTML($html);
        $pdf->Output('Register AJB.pdf', 'D');

    }
    
    
    
}
