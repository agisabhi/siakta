<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Email extends CI_Controller
{
    

    /**
     * Kirim email dengan SMTP Gmail.
     *
     */
    public function email()
    {
      // Konfigurasi email
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'email@gmail.com',  // Email gmail
            'smtp_pass'   => 'passwordgmail',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('agisabhi28@mahasiswa.unikom.ac.id', 'PPAT Kec. Cibiru');

        // Email penerima
        $this->email->to('penerima@domain.com'); // Ganti dengan email tujuan

        // Lampiran email, isi dengan url/path file
        //$this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');

        // Subject email
        $this->email->subject('Pengajuan AJB');

        // Isi email
        $this->email->message("Pengajuan AJB dengan Nomor .<br> ");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
    }
}
