<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
    }


    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $akun = $this->db->get_where('akun', ['username' => $username])->row_array();
        $bio = $this->db->get_where('petugas', ['id_petugas' => $username])->row_array();
        //jika nip sudah sama
        if ($akun) {
            if ($password == $akun['password']) {

                $data = [
                    'id_akun' => $akun['id_akun'],
                    'username' => $akun['username'],
                    'nama_petugas' => $bio['nama_petugas'],
                    'role' => $akun['role']
                ];
                $this->session->set_userdata($data);

                if ($akun['role'] == "penjual") {
                    redirect('penjual');
                } else if ($akun['role'] == "petugas") {
                    redirect('peninjau');
                } else {
                    redirect('ppat');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Password Salah 
          </div>');
                redirect('pengajuan');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Akun Tidak Terdaftar
          </div>');
            redirect('pengajuan');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('nip');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('role');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Logout
      </div>');
        redirect('pengajuan');
    }
}
