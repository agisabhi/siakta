<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('pengajuan_model');
    $this->load->library('form_validation');
  }

  public function index()
  {
    

    $this->load->view('header/header');
    $this->load->view('header/topbar');
    $this->load->view('penjual/pengajuan');
    $this->load->view('header/footer');
  }


  public function daftarakun()
  {
    $this->form_validation->set_rules('username', 'Email', 'required|valid_email'); 
    if($this->form_validation->run()==false){
    $this->load->view('header/header');
    $this->load->view('header/topbar');
    $this->load->view('penjual/pengajuan');
    $this->load->view('header/footer');
    }else{

      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $role = 'penjual';
      
      $data = [
        'username' => $username,
        'password' => $password,
        
      ];
      $this->pengajuan_model->daftar_akun($data, $username);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Pendaftaran Berhasil
      </div>');
      redirect('pengajuan');
    }
  }

  public function pendaftaran()
  {
    $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $akun = $data['pen']['id_akun'];
    $date = date('Y-m-d');
    $dariDB = $this->pengajuan_model->cekNoPengajuan(); 
    $kodeJabatanSekarang = $dariDB+1;
    $data['no_pengajuan'] = sprintf("%04s",$kodeJabatanSekarang);

    $p ='P';
    $date = date('Ym');

    $no_pendaftaran = $p.$date.$data['no_pengajuan'];
    $nik_penjual = $this->input->post('nik_penjual');
    $nama_penjual = $this->input->post('nama_penjual');
    $alamat_penjual = $this->input->post('alamat_penjual');
    $no_telpon = $this->input->post('no_telpon');
    $npwp_penjual =  $this->input->post('npwp_penjual');
    $foto_ktp_penjual = $_FILES['foto_ktp_penjual'];
    $foto_npwp_penjual = $_FILES['foto_npwp_penjual'];
    $nik_pembeli = $this->input->post('nik_pembeli');
    $nama_pembeli = $this->input->post('nama_pembeli');
    $alamat_pembeli = $this->input->post('alamat_pembeli');
    $npwp_pembeli =  $this->input->post('npwp_pembeli');
    $foto_ktp_pembeli = $_FILES['foto_ktp_pembeli'];
    $foto_npwp_pembeli = $_FILES['foto_npwp_pembeli'];
    $no_sertifikat = $this->input->post('no_sertifikat');
    $nama_pemilik = $this->input->post('nama_pemilik');
    $alamat_tanah = $this->input->post('alamat_tanah');
    $luas_tanah = $this->input->post('luas_tanah');
    $foto_sertifikat = $_FILES['foto_sertifikat'];
    $harga_transaksi = $this->input->post('harga_transaksi');
    $foto_kuitansi = $this->input->post('foto_kuitansi');
    $status_pengajuan = 'Menunggu Respon';


    if ($foto_ktp_penjual = '') {
    } else {
      $config['upload_path'] = './assets/foto';
      $config['allowed_types'] = 'jpg|jpeg|png|pdf';
      $config['max_size'] = 2086;

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('foto_ktp_penjual')) {
        $error = array('error' => $this->upload->display_errors());
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			' . $error . '
      </div>');
        redirect('penjual/pendaftaran');
      } else {
        $foto_ktp_penjual = $this->upload->data('file_name');
      }
    }

    if ($foto_ktp_pembeli = '') {
    } else {
      $config['upload_path'] = './assets/foto';
      $config['allowed_types'] = 'jpg|jpeg|png|pdf';
      $config['max_size'] = 2086;

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('foto_ktp_pembeli')) {
        $error = array('error' => $this->upload->display_errors());
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        ' . $error . '
      </div>');
        redirect('penjual/pendaftaran');
      } else {
        $foto_ktp_pembeli = $this->upload->data('file_name');
      }
    }


    if ($foto_npwp_pembeli = '') {
    } else {
      $config['upload_path'] = './assets/foto';
      $config['allowed_types'] = 'jpg|jpeg|png|pdf';
      $config['max_size'] = 2086;

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('foto_npwp_pembeli')) {
        $error = array('error' => $this->upload->display_errors());
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        ' . $error . '
      </div>');
        redirect('penjual/pendaftaran');
      } else {
        $foto_npwp_pembeli = $this->upload->data('file_name');
      }
    }


    if ($foto_npwp_penjual = '') {
    } else {
      $config['upload_path'] = './assets/foto';
      $config['allowed_types'] = 'jpg|jpeg|png|pdf';
      $config['max_size'] = 2086;

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('foto_npwp_penjual')) {
        $error = array('error' => $this->upload->display_errors());
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        ' . $error . '
      </div>');
        redirect('penjual/pendaftaran');
      } else {
        $foto_npwp_penjual = $this->upload->data('file_name');
      }
    }


    if ($foto_sertifikat = '') {
    } else {
      $config['upload_path'] = './assets/foto';
      $config['allowed_types'] = 'jpg|jpeg|png|pdf';
      $config['max_size'] = 2086;

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('foto_sertifikat')) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        ' . $error . '
      </div>');
        redirect('penjual/pendaftaran');
      } else {
        $foto_sertifikat = $this->upload->data('file_name');
      }
    }

    if ($foto_kuitansi = '') {
    } else {
      $config['upload_path'] = './assets/foto';
      $config['allowed_types'] = 'jpg|jpeg|png|pdf';
      $config['max_size'] = 2086;

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('foto_kuitansi')) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        ' . $error . '
      </div>');
        redirect('penjual/pendaftaran');
      } else {
        $foto_kuitansi = $this->upload->data('file_name');
      }
    }
$tanggal = date('Y-m-d');
    $daftar = [
      'no_pengajuan' => $no_pendaftaran,
      'tanggal_pendaftaran' => $tanggal,
      'nik_penjual' => $nik_penjual,
      'nik_pembeli' => $nik_pembeli,
      'no_sertifikat' => $no_sertifikat,
      'harga_transaksi' => $harga_transaksi,
      'foto_kuitansi' => $foto_kuitansi,
      'status_pengajuan' => $status_pengajuan,
      'id_akun' => $akun

    ];

    $cekPenjual = $this->db->get_where('penjual', ['nik_penjual'=>$nik_penjual])->num_rows();
    if ($cekPenjual==0) {
      # code...
      $penjual = [
        'nik_penjual' => $nik_penjual,
        'nama_penjual' => $nama_penjual,
        'alamat_penjual' => $alamat_penjual,
        'no_telpon' => $no_telpon,
        'npwp_penjual' => $npwp_penjual,
        'foto_ktp_penjual' => $foto_ktp_penjual,
        'foto_npwp_penjual' => $foto_npwp_penjual
  
      ];
      $this->pengajuan_model->penjual($penjual);
    }

    $cekPembeli = $this->db->get_where('pembeli', ['nik_pembeli'=>$nik_pembeli])->num_rows();
    if($cekPembeli==0){

      $pembeli = [
        'nik_pembeli' => $nik_pembeli,
        'nama_pembeli' => $nama_pembeli,
        'alamat_pembeli' => $alamat_pembeli,
        'npwp_pembeli' => $npwp_pembeli,
        'foto_ktp_pembeli' => $foto_ktp_pembeli,
        'foto_npwp_pembeli' => $foto_npwp_pembeli
      ];
      $this->pengajuan_model->pembeli($pembeli);
    }

    $cekSertifikat = $this->db->get_where('sertifikat', ['no_sertifikat'=>$no_sertifikat])->num_rows();
    if($cekSertifikat==0){

      $sertifikat = [
        'no_sertifikat' => $no_sertifikat,
        'nama_pemilik' => $nama_pemilik,
        'alamat_tanah' => $alamat_tanah,
        'luas_tanah' => $luas_tanah,
        'foto_sertifikat' => $foto_sertifikat
      ];
      $this->pengajuan_model->sertifikat($sertifikat);
    }



    $this->pengajuan_model->daftar($daftar);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      Data Berhasil Ditambahkan
      </div>');
    redirect('penjual');
  }
}
