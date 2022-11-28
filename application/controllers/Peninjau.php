<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peninjau extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('peninjau_model');
        $this->load->model('ppat_model');
        $this->load->library('form_validation');
    }

    public function index()
    { 
        $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
        $data['notif'] = $this->peninjau_model->notif($data['pen']['username']);
        $dat = $this->peninjau_model->getJadwalById($data['pen']['username']);
        
        foreach ($dat as $key ) {
            $dati[]=array(
                'title' => $key['no_pengajuan']."--".$key['nama_penjual'],
                
                'start' => $key['tanggal_penjadwalan'],
                'end' => $key['tanggal_penjadwalan'],
            );
        }
        $data['jadwal'] = json_encode($dati);
   
        
        $this->load->view('header/headerpeninjau');
        $this->load->view('header/topbar');
        $this->load->view('header/navpeninjau', $data);
        $this->load->view('peninjau/index', $data);
        $this->load->view('header/footerpeninjauan');
    }

    public function jadwalpeninjauan()
    {
        $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
        $data['jadwal'] = $this->peninjau_model->getJadwalById($data['pen']['username']);
        

        $this->load->view('header/header');
        $this->load->view('header/topbar');
        $this->load->view('header/navpeninjau', $data);
        $this->load->view('peninjau/jadwalpeninjauan', $data);
        $this->load->view('header/footer');
    }

    public function verifikasi2($id)
    {
        $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
        $data['jadwal'] = $this->peninjau_model->getJadwalByNoJadwal($id);

        $this->form_validation->set_rules('status_ktp_penjual', 'KTP Penjual', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('header/header');
            $this->load->view('header/topbar');
            $this->load->view('header/navpeninjau', $data);
            $this->load->view('peninjau/validberkas', $data);
            $this->load->view('header/footer');
        } else {
            $this->peninjau_model->tambah_verifikasi($id);
            $no_pengajuan = $this->input->post('no_pengajuan');
            $this->email($no_pengajuan);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Verifikasi Berkas Berhasil Ditambahkan
      </div>');
            redirect('peninjau/jadwalpeninjauan');
        }
    }

    

    public function beritaacara($id)
    {
        $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
        $data['jadwal'] = $this->peninjau_model->getJadwalByNoJadwal($id);

        $this->form_validation->set_rules('luas_tanah', 'luas Tanah', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('header/header');
            $this->load->view('header/topbar');
            $this->load->view('header/navpeninjau', $data);
            $this->load->view('peninjau/beritaacara', $data);
            $this->load->view('header/footer');
        } else {
            $gambar_kasar = $_FILES['gambar_kasar'];
            if ($gambar_kasar = '') {
            } else {
                $config['upload_path'] = './assets/foto';
                $config['allowed_types'] = 'jpg|jpeg|png|pdf';
                $config['max_size'] = 2086;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gambar_kasar')) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
              Gambar Kasar harus bentuk JPG/PNG atau maks ukuran 2 MB
              </div>');
                    redirect('peninjau/beritaacara');
                } else {
                    $gambar_kasar = $this->upload->data('file_name');
                }
            }
            $this->peninjau_model->tambah_berita($id, $gambar_kasar);
            $no_pengajuan = $this->input->post('no_pengajuan');
            $this->email($no_pengajuan);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Verifikasi Berkas Berhasil Ditambahkan
      </div>');
            redirect('peninjau/jadwalpeninjauan');
        }
    }

    public function hasilpeninjauan($id)
    {
        $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
        $data['verifikasi'] = $this->peninjau_model->getVerifikasi($id);
        $data['berita'] = $this->peninjau_model->getBeritaById($id);

        $this->load->view('header/header');
        $this->load->view('header/topbar');
        $this->load->view('header/navpeninjau', $data);
        $this->load->view('peninjau/hasilpeninjauan', $data);
        $this->load->view('header/footer');
    }

    public function editverifikasi($id) 
    {
        $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
        $this->form_validation->set_rules('status_ktp_penjual', 'KTP Penjual', 'required');
        $data['jadwal'] = $this->peninjau_model->getVerifikasiById($id);

        if ($this->form_validation->run() == false) {
            $this->load->view('header/header');
            $this->load->view('header/topbar');
            $this->load->view('header/navpeninjau', $data);
            $this->load->view('peninjau/editverifikasi', $data);
            $this->load->view('header/footer');
        } else {
            $this->peninjau_model->edit_verifikasi($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Verifikasi Berkas Berhasil Diubah
      </div>');
            redirect('peninjau/jadwalpeninjauan');
        }
    }

    public function editberita($id)
    {
        $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
        $this->form_validation->set_rules('luas_tanah', 'luas tanah', 'required');
        $data['berita'] = $this->peninjau_model->getBeritaById($id);

        if ($this->form_validation->run() == false) {
            $this->load->view('header/header');
            $this->load->view('header/topbar');
            $this->load->view('header/navpeninjau', $data);
            $this->load->view('peninjau/editberita', $data);
            $this->load->view('header/footer');
        } else {

            if (isset($_POST['submit'])) {
                $file_kui = $this->input->post('gambar');

                if (isset($_FILES['gambar_kasar']['name']) && $_FILES['gambar_kasar']['name'] != '') {

                    $config['upload_path'] = './assets/foto';
                    $config['allowed_types'] = 'jpg|jpeg|png|pdf';
                    $config['max_size'] = 2086;

                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('gambar_kasar')) {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Gambar Kasar harus PNG/JPG atau maks ukuran 2 MB
                    </div>');
                        redirect('peninjau/jadwalpeninjauan');
                    } else {
                        $gambar_kasar = $this->upload->data('file_name');
                    }
                    $this->peninjau_model->edit_berita($gambar_kasar, $id);
                    if (file_exists('./assets/foto' . $file_kui)) {
                        unlink('./assets/foto' . $file_kui);
                    }
                } else {
                    $this->peninjau_model->edit_berita($file_kui, $id);
                }
            }

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Berita Acara Berhasil Diubah
      </div>');
            redirect('peninjau/jadwalpeninjauan');
        }
    }

    public function load(){
        $data['pen'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
        
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
        $this->email->from('agisabhi28@gmail.com','KECAMATAN CIBIRU');

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
            
        } else {
            echo "<script>alert('Error! email tidak dapat dikirim.');</script>";
        }
    }
}
