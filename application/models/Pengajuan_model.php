<?php

class Pengajuan_model extends CI_Model
{

	public function acakno($panjang)
	{
		$karakter = '1234567890';
		$string = '';
		for ($i = 0; $i < $panjang; $i++) {
			$pos = rand(0, strlen($karakter) - 1);
			$string .= $karakter[$pos];
		}
		return $string;
	}

	public function cekNoPengajuan(){
		$query = $this->db->query('SELECT MAX(substr(no_pengajuan,8)) as no_pengajuan from pendaftaran');
        $hasil = $query->row();
        return $hasil->no_pengajuan;
	}

	public function acakpass($panjang)
	{
		$karakter = 'PASWORD1234567890';
		$string = '';
		for ($i = 0; $i < $panjang; $i++) {
			$pos = rand(0, strlen($karakter) - 1);
			$string .= $karakter[$pos];
		}
		return $string;
	}

	public function daftar($daftar)
	{
		$this->db->insert('pendaftaran', $daftar);	
	}

	public function penjual($penjual){
		$this->db->insert('penjual', $penjual);
	}
	
	public function pembeli($pembeli){
		$this->db->insert('pembeli', $pembeli);
	}

	public function sertifikat($sertifikat){
		$this->db->insert('sertifikat', $sertifikat);
	}

	public function daftar_akun($data, $username)
	{

		$sql = $this->db->query("SELECT username FROM akun where username='$username'");
		$cek_user = $sql->num_rows();
		if ($cek_user > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Username Sudah Digunakan, Silahkan Gunakan Username lain !
      </div>');
			redirect('pengajuan');
		} else {
			$this->db->insert('akun', $data);
		}
	}
}
