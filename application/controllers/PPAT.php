<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PPAT extends CI_Controller 
{
 
  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('url','download'));   
    $this->load->model('ppat_model');
    $this->load->model('penjual_model');
    $this->load->model('pengajuan_model');
    $this->load->library('form_validation');
  }
 
  public function index()
  {
    $data['jad'] = $this->ppat_model->getNotif();
    
    $data['val'] = $this->ppat_model->getValidasi();
    $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();

    $this->load->view('header/header');
    $this->load->view('header/topbar');
    $this->load->view('header/navppat', $data);
    $this->load->view('ppat/index', $data);
    $this->load->view('header/footer');
  }

  public function pendaftaran()
  {

    $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['pengajuan'] = $this->ppat_model->getDaftar();
    $this->load->view('header/header');
    $this->load->view('header/topbar');
    $this->load->view('header/navppat', $data);
    $this->load->view('ppat/datapendaftaran', $data);
    $this->load->view('header/footer');
  }
  public function pendaftaran2()
  {
    $status = $this->input->post('status_pengajuan');
    $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['pengajuan'] = $this->ppat_model->getDaftar2($status);
    $this->load->view('header/header');
    $this->load->view('header/topbar');
    $this->load->view('header/navppat', $data);
    $this->load->view('ppat/datapendaftaran', $data);
    $this->load->view('header/footer');
  }

  public function detail($id)
  {
    $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['pengajuan'] = $this->ppat_model->getDaftarById($id);

    $this->form_validation->set_rules('status_pengajuan', 'Status Pengajuan', 'required');


    if ($this->form_validation->run() == false) {
      $this->load->view('header/header');
      $this->load->view('header/topbar');
      $this->load->view('header/navppat', $data);
      $this->load->view('ppat/detailpendaftaran', $data);
      $this->load->view('header/footer');
    } else {
      $this->ppat_model->editpendaftaran();
      $this->email($id);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Verifikasi Berhasil Disimpan
      </div>');
      redirect('ppat/pendaftaran');
    }
  }

  public function datapetugas()
  {
    $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['pengajuan'] = $this->ppat_model->getPetugas();
    $this->load->view('header/header');
    $this->load->view('header/topbar');
    $this->load->view('header/navppat', $data);
    $this->load->view('ppat/datapetugas', $data);
    $this->load->view('header/footer');
  }

  public function tambahpetugas()
  {
    $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();


    $this->form_validation->set_rules('id_petugas', 'NIP', 'required');
    $this->form_validation->set_rules('nama_petugas', 'Nama', 'required');
    $this->form_validation->set_rules('no_telpon', 'No HP', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');


    if ($this->form_validation->run() == false) {
      $this->load->view('header/header');
      $this->load->view('header/topbar');
      $this->load->view('header/navppat', $data);
      $this->load->view('ppat/tambahpetugas', $data);
      $this->load->view('header/footer');
    } else {
      $this->ppat_model->tambah_petugas();
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Petugas Berhasil Ditambahkan
      </div>');
      redirect('ppat/datapetugas');
    }
  }

  public function editpetugas($id)
  {
    $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['petugas'] = $this->ppat_model->getPetugasById($id);


    $this->form_validation->set_rules('nama_petugas', 'Nama', 'required');
    $this->form_validation->set_rules('no_telpon', 'No HP', 'required');



    if ($this->form_validation->run() == false) {
      $this->load->view('header/header');
      $this->load->view('header/topbar');
      $this->load->view('header/navppat', $data);
      $this->load->view('ppat/editpetugas', $data);
      $this->load->view('header/footer');
    } else {
      $this->ppat_model->edit_petugas();
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Petugas Berhasil Diubah
      </div>');
      redirect('ppat/datapetugas');
    }
  }

  public function dataakun()
  {
    $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['akun'] = $this->ppat_model->getAkun();
    $this->load->view('header/header');
    $this->load->view('header/topbar');
    $this->load->view('header/navppat', $data);
    $this->load->view('ppat/dataakun', $data);
    $this->load->view('header/footer');
  }
 
  public function peninjauan()
  {

    $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['jadwal'] = $this->ppat_model->getJadwal();
    $this->load->view('header/header');
    $this->load->view('header/topbar');
    $this->load->view('header/navppat', $data);
    $this->load->view('ppat/datapeninjauan', $data);
    $this->load->view('header/footer');
  }


  public function tambahpeninjauan()
  {
    $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['no_pen'] = $this->ppat_model->getPendaftaran();
    $data['petugas'] = $this->ppat_model->getPetugas();


    $this->form_validation->set_rules('tanggal_penjadwalan', 'Tanggal', 'required');
    $this->form_validation->set_rules('no_pengajuan', 'No Pengajuan', 'required');
    $this->form_validation->set_rules('id_petugas', 'Petugas', 'required');



    if ($this->form_validation->run() == false) {
      $this->load->view('header/header');
      $this->load->view('header/topbar');
      $this->load->view('header/navppat', $data);
      $this->load->view('ppat/tambahpeninjauan', $data);
      $this->load->view('header/footer');
    } else {
      $no_pengajuan = $this->input->post('no_pengajuan');
      $cekjadwal = $this->ppat_model->cekjadwal();
      if ($cekjadwal==1) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Jadwal Peninjauan Sudah Terisi, Silahkan Ganti Tanggal atau Petugas
        </div>');
        redirect('ppat/peninjauan');
      }else{

        $this->ppat_model->tambah_peninjauan();
        $this->email($no_pengajuan);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Peninjauan Berhasil Ditambahkan
        </div>');
        redirect('ppat/peninjauan');
      }
    }
  }
  public function editpeninjauan($id)
  {
    $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['jadwal'] = $this->ppat_model->getJadwalById($id);
    $data['petugas'] = $this->ppat_model->getPetugas();


    $this->form_validation->set_rules('tanggal_penjadwalan', 'Tanggal', 'required');
    $this->form_validation->set_rules('no_pengajuan', 'No Pengajuan', 'required');
    $this->form_validation->set_rules('id_petugas', 'Petugas', 'required');



    if ($this->form_validation->run() == false) {
      $this->load->view('header/header');
      $this->load->view('header/topbar');
      $this->load->view('header/navppat', $data);
      $this->load->view('ppat/editpeninjauan', $data);
      $this->load->view('header/footer');
    } else {
      $cekjadwal = $this->ppat_model->cekjadwal();
      if ($cekjadwal==1) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Jadwal Peninjauan Sudah Terisi, Silahkan Ganti Tanggal atau Petugas
        </div>');
        redirect('ppat/peninjauan');
      }else{

        $this->ppat_model->edit_peninjauan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Peninjauan Berhasil Diubah
        </div>');
        redirect('ppat/peninjauan');
      }
    }
  }

  public function hasilpeninjauan($id)
  {
    $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['verifikasi'] = $this->ppat_model->getVerifikasiById($id);
    $data['berita'] = $this->ppat_model->getBeritaById($id);

    $this->load->view('header/header');
    $this->load->view('header/topbar');
    $this->load->view('header/navppat', $data);
    $this->load->view('ppat/datahasilpeninjauan', $data);
    $this->load->view('header/footer');
  }


  public function pajak()
  {
    $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['pajak'] = $this->ppat_model->getPajak();
    $this->load->view('header/header');
    $this->load->view('header/topbar');
    $this->load->view('header/navppat', $data);
    $this->load->view('ppat/datapajak', $data);
    $this->load->view('header/footer');
  }

  public function tambahpajak()
  { 
    
$data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
$data['pajak'] = $this->penjual_model->getNoPengajuanPajak($data['pen']['id_akun']);
    $this->form_validation->set_rules('billing_pajak', 'No Bill', 'required');
    $this->form_validation->set_rules('nominal_pajak', 'Nama', 'required');

 

    if ($this->form_validation->run() == false) {
      $this->load->view('header/header');
      $this->load->view('header/topbar');
      $this->load->view('header/navppat', $data);
      $this->load->view('ppat/tambahpajak', $data);
      $this->load->view('header/footer');
    } else {
      $no_pengajuan = $this->input->post('no_pengajuan');
      $bukti_transfer = $_FILES['bukti_transfer'];
      if ($bukti_transfer = '') {
      } else {
        $config['upload_path'] = './assets/foto';
        $config['allowed_types'] = 'jpg|jpeg|png|pdf';
        $config['max_size'] = 2086;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('bukti_transfer')) {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Bukti Transfer Penjual harus bentuk jpg atau maks ukuran 2 MB
        </div>');
          redirect('ppat/tambahpajak');
        } else {
          $bukti_transfer = $this->upload->data('file_name');
        }
      }

      $this->penjual_model->tambah_pajak($no_pengajuan, $bukti_transfer);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Pembayaran Pajak Berhasil Ditambahkan
      </div>');
      redirect('ppat/pajak');
    }
  }

  public function validasipajak($id)
  {
    $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['pengajuan'] = $this->ppat_model->getPengajuanPajak($id);



    $this->form_validation->set_rules('status_pengajuan', 'Status', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('header/header');
      $this->load->view('header/topbar');
      $this->load->view('header/navppat', $data);
      $this->load->view('ppat/validasipajak', $data);
      $this->load->view('header/footer');
    } else {
      $this->ppat_model->validasi_pajak($id);
      $no_pengajuan = $this->input->post('no_pengajuan');
      $this->email($no_pengajuan);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Pajak Berhasil Divalidasi
      </div>');
      redirect('ppat/pajak');
    }
  }

  public function pengambilan()
  {
    $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['pengambilan'] = $this->ppat_model->getPengambilan();
    $this->load->view('header/header');
    $this->load->view('header/topbar');
    $this->load->view('header/navppat', $data);
    $this->load->view('ppat/datapengambilan', $data);
    $this->load->view('header/footer');
  }

  public function tambahpengambilan()
  {
    $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['pengajuan'] = $this->ppat_model->getDaftarVerifikasi();



    $this->form_validation->set_rules('tanggal_pengambilan', 'Tanggal', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('header/header');
      $this->load->view('header/topbar');
      $this->load->view('header/navppat', $data);
      $this->load->view('ppat/tambahpengambilan', $data);
      $this->load->view('header/footer');
    } else {
      $this->ppat_model->tambah_pengambilan();
      $no_pengajuan = $this->input->post('no_pengajuan');
      $this->email($no_pengajuan);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Pengambilan Berhasil Ditambahkan
      </div>'); 
      redirect('ppat/pengambilan');
    }
  }

  public function pengambil($id){
    $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['pengambilan'] = $this->ppat_model->getPengambilanById($id);
    

    $this->form_validation->set_rules('no_hp_pengambil', 'Tanggal', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('header/header');
      $this->load->view('header/topbar');
      $this->load->view('header/navppat', $data);
      $this->load->view('ppat/tambahpengambil', $data);
      $this->load->view('header/footer');
    } else {    
      $foto = $_FILES['foto'];
      if ($foto = '') {
      } else {
        $config['upload_path'] = './assets/foto';
        $config['allowed_types'] = 'jpg|jpeg|png|pdf';
        $config['max_size'] = 2086;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Bukti Transfer Penjual harus bentuk jpg atau maks ukuran 2 MB
        </div>');
          redirect('ppat/pengambilan');
        } else {
          $foto = $this->upload->data('file_name');
        }
      }

      $this->ppat_model->tambah_pengambil($id, $foto);
      $no_pengajuan = $this->input->post('no_pengajuan');
      $this->email($no_pengajuan);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Pengambil Berhasil Ditambahkan
      </div>');
      redirect('ppat/pengambilan');
    }

  }

  public function datapengambil($id){
    $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['pengambil'] = $this->ppat_model->getPengambilById($id);

    $this->load->view('header/header');
    $this->load->view('header/topbar');
    $this->load->view('header/navppat', $data);
    $this->load->view('ppat/datapengambil', $data);
    $this->load->view('header/footer');
  }

  public function arsipajb(){
    $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['pengajuan'] = $this->ppat_model->getArsip();
    
    $this->load->view('header/header');
    $this->load->view('header/topbar');
    $this->load->view('header/navppat', $data);
    $this->load->view('ppat/arsipajb', $data);
    $this->load->view('header/footer');
  }

  public function tambaharsip(){
    
    $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['pengajuan'] = $this->ppat_model->getPengajuanSelesai();

    $this->form_validation->set_rules('no_pengajuan', 'salinan', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('header/header');
      $this->load->view('header/topbar');
      $this->load->view('header/navppat', $data);
      $this->load->view('ppat/tambaharsip', $data);
      $this->load->view('header/footer');
    } else {    
      $arsip = $_FILES['salinan'];
      if ($arsip = '') {
      } else {
        $config['upload_path'] = './assets/salinan';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 3086;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('salinan')) {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Maksimal Ukuran File Arsip AJB 2 MB
        </div>');
          redirect('ppat/arsipajb');
        } else {
          $arsip = $this->upload->data('file_name');
        }
      }

      $this->ppat_model->tambah_arsip($arsip);
      
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Arsip Berhasil Ditambahkan
      </div>');
      redirect('ppat/arsipajb');
    }

  }
  public function downloadajb($id){
    
    force_download('assets/salinan/'.$id,NULL);
  }

  public function tambahpendaftaran(){
    $data['jad'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $this->form_validation->set_rules('nik_penjual', 'NIK Penjual', 'required|min_length[16]');
    

    if ($this->form_validation->run() == false) {
      $this->load->view('header/header');
      $this->load->view('header/topbar');
      $this->load->view('header/navppat', $data);
      $this->load->view('ppat/tambahpendaftaran', $data);
      $this->load->view('header/footer');
    } else {
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
        redirect('ppat/pendaftaran');
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
        redirect('ppat/pendaftaran');
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
        redirect('ppat/pendaftaran');
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
        redirect('ppat/pendaftaran');
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
        redirect('ppat/pendaftaran');
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
        redirect('ppat/pendaftaran');
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
    redirect('ppat/pendaftaran');
  }
    }
    public function email($id)
    {
      $data['pengajuan'] = $this->ppat_model->getDaftarEmailById($id);
      // Konfigurasi email
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'agisabhi28@gmail.com',  // Email gmail
            'smtp_pass'   => 'Agara081908084933',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('agisabhi28@gmail.com','Kecamatan Cibiru');

        // Email penerima
        $this->email->to($data['pengajuan']['username']); // Ganti dengan email tujuan

        // Lampiran email, isi dengan url/path file
        //$this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');

        // Subject email
        $this->email->subject('Pengajuan AJB');

        // Isi email
        $this->email->message('Pengajuan AJB dengan Nomor '.$id.' Status Pengajuannya : <b>'.$data['pengajuan']['status_pengajuan'].'</b>');

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            echo "<script>alert('Error! email Berhasil dikirim.');</script>";
        } else {
            echo "<script>alert('Error! email tidak dapat dikirim.');</script>";
        }
    }
  }


