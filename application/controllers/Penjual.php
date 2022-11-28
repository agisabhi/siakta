<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penjual extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('penjual_model');
    $this->load->model('pengajuan_model');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['jad'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['pengajuan'] = $this->penjual_model->getDaftar($data['pen']['id_akun']);
    $this->load->view('header/header');
    $this->load->view('header/topbar');
    $this->load->view('header/navpenjual', $data);
    $this->load->view('penjual/index', $data);
    $this->load->view('header/footer');
  }
  
  public function pendaftaran(){
    $data['jad'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $this->form_validation->set_rules('nik_penjual', 'NIK Penjual', 'required|min_length[16]');
    

    if ($this->form_validation->run() == false) {
      $this->load->view('header/header');
      $this->load->view('header/topbar');
      $this->load->view('header/navpenjual', $data);
      $this->load->view('penjual/tambahpendaftaran', $data);
      $this->load->view('header/footer');
    } else {
      $this->pengajuan_model->pendaftaran($data['pen']['username']);
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      Data Pendaftaran berhasil Ditambahkan
      </div>');
      redirect('penjual');
    }
  }

  public function detail($id)
  {
    $data['jad'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['pen'] = $this->db->get_where('pendaftaran', ['no_pengajuan' => $this->session->userdata['username']])->row_array();
    $data['pengajuan'] = $this->penjual_model->getDetail($id);
    $this->load->view('header/header');
    $this->load->view('header/topbar');
    $this->load->view('header/navpenjual', $data);
    $this->load->view('penjual/detail', $data);
    $this->load->view('header/footer');
  }

  public function editpenjual($id,$no)
  {
    $data['jad'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['pen'] = $this->db->get_where('pendaftaran', ['no_pengajuan' => $this->session->userdata['username']])->row_array();
    $data['penjual'] = $this->penjual_model->getPenjualById($id);

    $this->form_validation->set_rules('nama_penjual', 'Nama Penjual', 'required');
    $this->form_validation->set_rules('alamat_penjual', 'Alamat', 'required');
    $this->form_validation->set_rules('no_telpon', 'No Telepon', 'required');
    $this->form_validation->set_rules('npwp_penjual', 'No NPWP', 'required');


    if ($this->form_validation->run() == false) {
      $this->load->view('header/header');
      $this->load->view('header/topbar');
      $this->load->view('header/navpenjual', $data);
      $this->load->view('penjual/editpenjual', $data);
      $this->load->view('header/footer');
    } else {

      if (isset($_POST['submit'])) {
           $file_ktp = $this->input->post('file_ktp');
        $file_npwp = $this->input->post('file_npwp');
        if (isset($_FILES['foto_ktp_penjual']['name']) && $_FILES['foto_ktp_penjual']['name'] != '' && isset($_FILES['foto_npwp_penjual']['name']) && $_FILES['foto_npwp_penjual']['name'] != '') {

          $config['upload_path'] = './assets/foto';
          $config['allowed_types'] = 'jpg|jpeg|png|pdf';
          $config['max_size'] = 2086;

          $this->load->library('upload', $config);
          if (!$this->upload->do_upload('foto_ktp_penjual')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Foto KTP harus PNG/JPG atau maks ukuran 1 MB
            </div>');
            redirect('penjual/detail/'.$no);
          } else {
            $foto_ktp_penjual = $this->upload->data('file_name');
          }

          if (!$this->upload->do_upload('foto_npwp_penjual')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Foto NPWP harus PNG/JPG atau maks ukuran 1 MB
            </div>');
            redirect('penjual/detail/'.$no);
          } else {
            $foto_npwp_penjual = $this->upload->data('file_name');
          }


          $this->penjual_model->edit_penjual($foto_ktp_penjual, $foto_npwp_penjual,$no);
          if (file_exists('./assets/foto' . $file_ktp) || file_exists('./assets/foto' . $file_npwp)) {
            unlink('./assets/foto' . $file_ktp);
            unlink('./assets/foto' . $file_npwp);
          }
        } else if (isset($_FILES['foto_ktp_penjual']['name']) && $_FILES['foto_ktp_penjual']['name'] != '') {

          $config['upload_path'] = './assets/foto';
          $config['allowed_types'] = 'jpg|jpeg|png|pdf';
          $config['max_size'] = 2086;

          $this->load->library('upload', $config);
          if (!$this->upload->do_upload('foto_ktp_penjual')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Foto Kuitansi harus PNG/JPG atau maks ukuran 1 MB
            </div>');
            redirect('penjual/detail/'.$no);
          } else {
            $foto_ktp_penjual = $this->upload->data('file_name');
          }
          $this->penjual_model->edit_penjual($foto_ktp_penjual, $file_npwp,$no);
          if (file_exists('./assets/foto' . $file_ktp) || file_exists('./assets/foto' . $file_npwp)) {
            unlink('./assets/foto' . $file_ktp);
          }
        } else if (isset($_FILES['foto_npwp_penjual']['name']) && $_FILES['foto_npwp_penjual']['name'] != '') {

          $config['upload_path'] = './assets/foto';
          $config['allowed_types'] = 'jpg|jpeg|png|pdf';
          $config['max_size'] = 2086;

          $this->load->library('upload', $config);
          if (!$this->upload->do_upload('foto_npwp_penjual')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Foto NPWP harus PNG/JPG atau maks ukuran 1 MB
            </div>');
            redirect('penjual/detail/'.$no);
          } else {
            $foto_npwp_penjual = $this->upload->data('file_name');
          }
          $this->penjual_model->edit_penjual($file_ktp, $foto_npwp_penjual,$no);
          if (file_exists('./assets/foto' . $file_ktp) || file_exists('./assets/foto' . $file_npwp)) {
            unlink('./assets/foto' . $file_npwp);
          }
        } else {
          $this->penjual_model->edit_penjual($file_ktp, $file_npwp,$no);
        }
      }


      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Penjual Berhasil Diubah
      </div>');
      redirect('penjual/detail/'.$no);
    }
  }
  public function editpembeli($id, $no)
  {
    $data['jad'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['pen'] = $this->db->get_where('pendaftaran', ['no_pengajuan' => $this->session->userdata['username']])->row_array();
    $data['penjual'] = $this->penjual_model->getPembeliById($id);

    $this->form_validation->set_rules('nama_pembeli', 'Nama Penjual', 'required');
    $this->form_validation->set_rules('alamat_pembeli', 'Alamat', 'required');
    $this->form_validation->set_rules('npwp_pembeli', 'No NPWP', 'required');


    if ($this->form_validation->run() == false) {
      $this->load->view('header/header');
      $this->load->view('header/topbar');
      $this->load->view('header/navpenjual', $data);
      $this->load->view('penjual/editpembeli', $data);
      $this->load->view('header/footer');
    } else {

      if (isset($_POST['submit'])) {
        $file_ktp = $this->input->post('file_ktp');
        $file_npwp = $this->input->post('file_npwp');
        if (isset($_FILES['foto_ktp_pembeli']['name']) && $_FILES['foto_ktp_pembeli']['name'] != '' && isset($_FILES['foto_npwp_pembeli']['name']) && $_FILES['foto_npwp_pembeli']['name'] != '') {

          $config['upload_path'] = './assets/foto';
          $config['allowed_types'] = 'jpg|jpeg|png|pdf';
          $config['max_size'] = 2086;

          $this->load->library('upload', $config);
          if (!$this->upload->do_upload('foto_ktp_pembeli')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Foto KTP harus PNG/JPG atau maks ukuran 2 MB
            </div>');
            redirect('penjual/detail/'.$no);
          } else {
            $foto_ktp_pembeli = $this->upload->data('file_name');
          }

          if (!$this->upload->do_upload('foto_npwp_pembeli')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Foto NPWP harus PNG/JPG atau maks ukuran 2 MB
            </div>');
            redirect('penjual/detail/'.$no);
          } else {
            $foto_npwp_pembeli = $this->upload->data('file_name');
          }


          $this->penjual_model->edit_pembeli($foto_ktp_pembeli, $foto_npwp_pembeli, $no);
          if (file_exists('./assets/foto' . $file_ktp) || file_exists('./assets/foto' . $file_npwp)) {
            unlink('./assets/foto' . $file_ktp);
            unlink('./assets/foto' . $file_npwp);
          }
        } else if (isset($_FILES['foto_ktp_pembeli']['name']) && $_FILES['foto_ktp_pembeli']['name'] != '') {

          $config['upload_path'] = './assets/foto';
          $config['allowed_types'] = 'jpg|jpeg|png|pdf';
          $config['max_size'] = 2086;

          $this->load->library('upload', $config);
          if (!$this->upload->do_upload('foto_ktp_pembeli')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Foto KTP harus PNG/JPG atau maks ukuran 2 MB
            </div>');
            redirect('penjual/detail/'.$no);
          } else {
            $foto_ktp_pembeli = $this->upload->data('file_name');
          }
          $this->penjual_model->edit_pembeli($foto_ktp_pembeli, $file_npwp, $no);
          if (file_exists('./assets/foto' . $file_ktp) || file_exists('./assets/foto' . $file_npwp)) {
            unlink('./assets/foto' . $file_ktp);
          }
        } else if (isset($_FILES['foto_npwp_pembeli']['name']) && $_FILES['foto_npwp_pembeli']['name'] != '') {

          $config['upload_path'] = './assets/foto';
          $config['allowed_types'] = 'jpg|jpeg|png|pdf';
          $config['max_size'] = 2086;

          $this->load->library('upload', $config);
          if (!$this->upload->do_upload('foto_npwp_pembeli')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Foto NPWP harus PNG/JPG atau maks ukuran 2 MB
            </div>');
            redirect('penjual/detail/'.$no);
          } else {
            $foto_npwp_pembeli = $this->upload->data('file_name');
          }
          $this->penjual_model->edit_pembeli($file_ktp, $foto_npwp_pembeli, $no);
          if (file_exists('./assets/foto' . $file_ktp) || file_exists('./assets/foto' . $file_npwp)) {
            unlink('./assets/foto' . $file_npwp);
          }
        } else {
          $this->penjual_model->edit_pembeli($file_ktp, $file_npwp,$no);
        }
      }


      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Pembeli Berhasil Diubah
      </div>');
      redirect('penjual/detail/'.$no);
    }
  }

  public function editsertifikat($id,$no)
  {
    $data['jad'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['pen'] = $this->db->get_where('pendaftaran', ['no_pengajuan' => $this->session->userdata['username']])->row_array();
    $data['penjual'] = $this->penjual_model->getSertifikatById($id);

    $this->form_validation->set_rules('nama_pemilik', 'Nama Pemilik', 'required');
    $this->form_validation->set_rules('alamat_tanah', 'Alamat', 'required');
    $this->form_validation->set_rules('luas_tanah', 'Luas Tanah', 'required');


    if ($this->form_validation->run() == false) {
      $this->load->view('header/header');
      $this->load->view('header/topbar');
      $this->load->view('header/navpenjual', $data);
      $this->load->view('penjual/editsertifikat', $data);
      $this->load->view('header/footer');
    } else {

      if (isset($_POST['submit'])) {
        $file_ser = $this->input->post('file_ser');

        if (isset($_FILES['foto_sertifikat']['name']) && $_FILES['foto_sertifikat']['name'] != '') {

          $config['upload_path'] = './assets/foto';
          $config['allowed_types'] = 'jpg|jpeg|png|pdf';
          $config['max_size'] = 2086;

          $this->load->library('upload', $config);
          if (!$this->upload->do_upload('foto_sertifikat')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Foto KTP harus PNG/JPG atau maks ukuran 2 MB
            </div>');
            redirect('penjual/detail/'.$no);
          } else {
            $foto_sertifikat = $this->upload->data('file_name');
          }
          $this->penjual_model->edit_sertifikat($foto_sertifikat,$no);
          if (file_exists('./assets/foto' . $file_ser)) {
            unlink('./assets/foto' . $file_ser);
          }
        } else {
          $this->penjual_model->edit_sertifikat($file_ser, $no);
        }
      }
 

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Sertifikat Berhasil Diubah
      </div>');
      redirect('penjual/detail/'.$no);
    }
  }

  public function editjualbeli($id)
  {
    $data['jad'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['pen'] = $this->db->get_where('pendaftaran', ['no_pengajuan' => $this->session->userdata['username']])->row_array();
    $data['penjual'] = $this->penjual_model->getJBById($id);

    $this->form_validation->set_rules('harga_transaksi', 'Nama Pemilik', 'required');



    if ($this->form_validation->run() == false) {
      $this->load->view('header/header');
      $this->load->view('header/topbar');
      $this->load->view('header/navpenjual', $data);
      $this->load->view('penjual/editjualbeli', $data);
      $this->load->view('header/footer');
    } else {

      if (isset($_POST['submit'])) {
        $file_kui = $this->input->post('file_kui');

        if (isset($_FILES['foto_kuitansi']['name']) && $_FILES['foto_kuitansi']['name'] != '') {

          $config['upload_path'] = './assets/foto';
          $config['allowed_types'] = 'jpg|jpeg|png|pdf';
          $config['max_size'] = 2086;

          $this->load->library('upload', $config);
          if (!$this->upload->do_upload('foto_kuitansi')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Foto KTP harus PNG/JPG atau maks ukuran 2 MB
            </div>');
            redirect('penjual/detail/'.$id);
          } else {
            $foto_sertifikat = $this->upload->data('file_name');
          }
          $this->penjual_model->edit_jualbeli($foto_sertifikat, $id);
          if (file_exists('./assets/foto' . $file_kui)) {
            unlink('./assets/foto' . $file_kui);
          }
        } else {
          $this->penjual_model->edit_jualbeli($file_kui,$id);
        }
      }


      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Jual Beli Berhasil Diubah
      </div>');
      redirect('penjual/detail/'.$id);
    }
  }
  public function peninjauan()
  {
    
    $data['jad'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['jadwal'] = $this->penjual_model->getJadwalById($data['jad']['id_akun']);

    $this->load->view('header/header');
    $this->load->view('header/topbar');
    $this->load->view('header/navpenjual',$data);
    $this->load->view('penjual/jadwalpeninjauan', $data);
    $this->load->view('header/footer');
  }

  public function bayarpajak()
  {
    $data['jad'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['pajak'] = $this->penjual_model->getPajakById($data['jad']['id_akun']);
    $this->load->view('header/header');
    $this->load->view('header/topbar');
    $this->load->view('header/navpenjual', $data);
    $this->load->view('penjual/pajak', $data);
    $this->load->view('header/footer');
  }

  public function tambahpajak()
  { 
    
$data['jad'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
$data['pajak'] = $this->penjual_model->getNoPengajuanPajak($data['jad']['id_akun']);
    $this->form_validation->set_rules('billing_pajak', 'No Bill', 'required');
    $this->form_validation->set_rules('nominal_pajak', 'Nama', 'required');

 

    if ($this->form_validation->run() == false) {
      $this->load->view('header/header');
      $this->load->view('header/topbar');
      $this->load->view('header/navpenjual', $data);
      $this->load->view('penjual/tambahpajak', $data);
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
          redirect('penjual/tambahpajak');
        } else {
          $bukti_transfer = $this->upload->data('file_name');
        }
      }

      $this->penjual_model->tambah_pajak($no_pengajuan, $bukti_transfer);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Pembayaran Pajak Berhasil Ditambahkan
      </div>');
      redirect('penjual/bayarpajak');
    }
  }

  public function pengambilan()
  {
    $data['jad'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['pengambilan'] = $this->penjual_model->getPengambilanById($data['jad']['id_akun']);
    $this->load->view('header/header');
    $this->load->view('header/topbar');
    $this->load->view('header/navpenjual', $data);
    $this->load->view('penjual/pengambilan', $data);
    $this->load->view('header/footer');
  }

  public function editpajak($id)
  {
    $data['jad'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['pen'] = $this->db->get_where('pendaftaran', ['no_pengajuan' => $this->session->userdata['username']])->row_array();
    $data['penjual'] = $this->penjual_model->getEditPajakById($id);

    $this->form_validation->set_rules('billing_pajak', 'Billing', 'required');



    if ($this->form_validation->run() == false) {
      $this->load->view('header/header');
      $this->load->view('header/topbar');
      $this->load->view('header/navpenjual', $data);
      $this->load->view('penjual/editpajak', $data);
      $this->load->view('header/footer');
    } else {

      if (isset($_POST['submit'])) {
        $file_kui = $this->input->post('file_kui');

        if (isset($_FILES['bukti_transfer']['name']) && $_FILES['bukti_transfer']['name'] != '') {

          $config['upload_path'] = './assets/foto';
          $config['allowed_types'] = 'jpg|jpeg|png|pdf';
          $config['max_size'] = 2086;

          $this->load->library('upload', $config);
          if (!$this->upload->do_upload('bukti_transfer')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Foto KTP harus PNG/JPG atau maks ukuran 2 MB
            </div>');
            redirect('penjual/detail');
          } else {
            $bukti_transfer = $this->upload->data('file_name');
          }
          $this->penjual_model->edit_pajak($id, $bukti_transfer);
          if (file_exists('./assets/foto' . $file_kui)) {
            unlink('./assets/foto' . $file_kui);
          }
        } else {
          $this->penjual_model->edit_pajak($id, $file_kui);
        }
      }


      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Pembayaran Pajak Berhasil Diubah
      </div>');
      redirect('penjual/bayarpajak');
    }
  }

  public function cetak($id)
  {
    $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
    $data['pengambilan'] = $this->penjual_model->CetakPengambilanById($id);

    $this->load->view('header/header');
    $this->load->view('penjual/cetakpengambilan', $data);
    $this->load->view('header/footer');
  }
}
