<?php

class Peninjau_model extends CI_Model
{


    public function getJadwalById($id)
    {
        $this->db->select('no_jadwal');
        $this->db->select('tanggal_penjadwalan');
        $this->db->select('jadwal.no_pengajuan');
        $this->db->select('pendaftaran.status_pengajuan');
        $this->db->select('pendaftaran.foto_kuitansi');
        $this->db->select('penjual.nama_penjual');
        $this->db->select('penjual.foto_ktp_penjual');
        $this->db->select('pembeli.foto_ktp_pembeli');
        $this->db->select('penjual.foto_npwp_penjual');
        $this->db->select('pembeli.foto_npwp_pembeli');
        $this->db->select('sertifikat.foto_sertifikat');
        $this->db->select('penjual.no_telpon');
        $this->db->from('jadwal');
        $this->db->join('pendaftaran', 'jadwal.no_pengajuan=pendaftaran.no_pengajuan');
        $this->db->join('penjual', 'penjual.nik_penjual=pendaftaran.nik_penjual');
        $this->db->join('pembeli', 'pembeli.nik_pembeli=pendaftaran.nik_pembeli');
        $this->db->join('sertifikat', 'sertifikat.no_sertifikat=pendaftaran.no_sertifikat');
        $this->db->where('id_petugas', $id);

        return $this->db->get()->result_array();
    }

    public function tambah_verifikasi($id)
    {
        $ktp_penjual = $this->input->post('status_ktp_penjual');
        $ktp_pembeli = $this->input->post('status_ktp_pembeli');
        $npwp_penjual = $this->input->post('status_npwp_penjual');
        $npwp_pembeli = $this->input->post('status_npwp_pembeli');
        $sertifikat = $this->input->post('status_sertifikat');
        $kuitansi = $this->input->post('status_kuitansi');
        $no_pengajuan = $this->input->post('no_pengajuan');
        $no_jadwal = $id;
        $status = "Verifikasi Berkas Berhasil";



        $data = [
            'status_ktp_penjual' => $ktp_penjual,
            'status_ktp_pembeli' => $ktp_pembeli,
            'status_npwp_penjual' => $npwp_penjual,
            'status_npwp_pembeli' => $npwp_pembeli,
            'status_sertifikat' => $sertifikat,
            'status_kuitansi' => $kuitansi,
            'no_jadwal' => $no_jadwal

        ];

        $datu =[
            'status_pengajuan' => $status
        ];
        $this->db->where('no_pengajuan',$no_pengajuan);
        $this->db->update('pendaftaran',$datu);

        $this->db->insert('verifikasi', $data);
    }

    public function notif($id){
        $sekarang = date('Y-m-d');
        $this->db->select('*');
        $this->db->from('jadwal');
        $this->db->where('tanggal_penjadwalan',$sekarang);
        $this->db->where('id_petugas',$id);
        
        return $this->db->get()->num_rows();
    }
    public function tambah_berita($id, $gambar_kasar)
    {
        $luas_tanah = $this->input->post('luas_tanah');
        $batas_utara = $this->input->post('batas_utara');
        $batas_selatan = $this->input->post('batas_selatan');
        $batas_timur = $this->input->post('batas_timur');
        $batas_barat = $this->input->post('batas_barat');
        $no_pengajuan = $this->input->post('no_pengajuan');
        $status_pengajuan = 'Pembayaran Pajak';

        $data = [
            'luas_tanah' => $luas_tanah,
            'batas_utara' => $batas_utara,
            'batas_selatan' => $batas_selatan,
            'batas_timur' => $batas_timur,
            'batas_barat' => $batas_barat,
            'gambar_kasar' => $gambar_kasar,
            'no_jadwal' => $id
        ];
        $this->db->insert('berita_acara', $data);

        $data2 = [
            'status_pengajuan' => $status_pengajuan
        ];
        $this->db->where('no_pengajuan', $no_pengajuan);
        $this->db->update('pendaftaran', $data2);
    }

    public function getJadwalByNoJadwal($id)
    {
        $this->db->select('no_jadwal');
        $this->db->select('tanggal_penjadwalan');
        $this->db->select('jadwal.no_pengajuan');
        $this->db->select('pendaftaran.foto_kuitansi');
        $this->db->select('penjual.nama_penjual');
        $this->db->select('penjual.foto_ktp_penjual');
        $this->db->select('pembeli.foto_ktp_pembeli');
        $this->db->select('penjual.foto_npwp_penjual');
        $this->db->select('pembeli.foto_npwp_pembeli');
        $this->db->select('sertifikat.foto_sertifikat');
        $this->db->select('penjual.no_telpon');
        $this->db->from('jadwal');
        $this->db->join('pendaftaran', 'jadwal.no_pengajuan=pendaftaran.no_pengajuan');
        $this->db->join('penjual', 'penjual.nik_penjual=pendaftaran.nik_penjual');
        $this->db->join('pembeli', 'pembeli.nik_pembeli=pendaftaran.nik_pembeli');
        $this->db->join('sertifikat', 'sertifikat.no_sertifikat=pendaftaran.no_sertifikat');
        $this->db->where('no_jadwal', $id);

        return $this->db->get()->result_array();
    }

    public function getVerifikasi($id){
        $this->db->select('*');
        $this->db->from('verifikasi');
        $this->db->where('no_jadwal',$id);

        return $this->db->get()->result_array();

    }

    public function getVerifikasiById($id)
    {

        $this->db->select('verifikasi.no_jadwal');
        $this->db->select('no_verifikasi');
        $this->db->select('status_ktp_penjual');
        $this->db->select('status_ktp_pembeli');
        $this->db->select('status_npwp_pembeli');
        $this->db->select('status_npwp_penjual');
        $this->db->select('status_sertifikat');
        $this->db->select('status_kuitansi');
        $this->db->select('tanggal_penjadwalan');
        $this->db->select('jadwal.no_pengajuan');
        $this->db->select('pendaftaran.foto_kuitansi');
        $this->db->select('penjual.nama_penjual');
        $this->db->select('penjual.foto_ktp_penjual');
        $this->db->select('pembeli.foto_ktp_pembeli');
        $this->db->select('penjual.foto_npwp_penjual');
        $this->db->select('pembeli.foto_npwp_pembeli');
        $this->db->select('sertifikat.foto_sertifikat');
        $this->db->select('penjual.no_telpon');
        $this->db->from('verifikasi');
        $this->db->join('jadwal', 'verifikasi.no_jadwal=jadwal.no_jadwal');
        $this->db->join('pendaftaran', 'jadwal.no_pengajuan=pendaftaran.no_pengajuan');
        $this->db->join('penjual', 'penjual.nik_penjual=pendaftaran.nik_penjual');
        $this->db->join('pembeli', 'pembeli.nik_pembeli=pendaftaran.nik_pembeli');
        $this->db->join('sertifikat', 'sertifikat.no_sertifikat=pendaftaran.no_sertifikat');
        $this->db->where('verifikasi.no_jadwal', $id);

        return $this->db->get()->result_array();
    }

    public function getBeritaById($id)
    {
        $this->db->select('*');
        $this->db->from('berita_acara');
        $this->db->where('no_jadwal', $id);

        return $this->db->get()->result_array();
    }

    public function edit_verifikasi($id)
    {
        $ktp_penjual = $this->input->post('status_ktp_penjual');
        $ktp_pembeli = $this->input->post('status_ktp_pembeli');
        $npwp_penjual = $this->input->post('status_npwp_penjual');
        $npwp_pembeli = $this->input->post('status_npwp_pembeli');
        $sertifikat = $this->input->post('status_sertifikat');
        $kuitansi = $this->input->post('status_kuitansi');
        $no_jadwal = $this->input->post('no_verifikasi');



        $data = [
            'status_ktp_penjual' => $ktp_penjual,
            'status_ktp_pembeli' => $ktp_pembeli,
            'status_npwp_penjual' => $npwp_penjual,
            'status_npwp_pembeli' => $npwp_pembeli,
            'status_sertifikat' => $sertifikat,
            'status_kuitansi' => $kuitansi

        ];

        $this->db->where('no_verifikasi', $no_jadwal);
        $this->db->update('verifikasi', $data);
    }

    public function edit_berita($gambar_kasar, $id)
    {
        $luas_tanah = $this->input->post('luas_tanah');
        $batas_utara = $this->input->post('batas_utara');
        $batas_selatan = $this->input->post('batas_selatan');
        $batas_timur = $this->input->post('batas_timur');
        $batas_barat = $this->input->post('batas_barat');
        $no_pengajuan = $this->input->post('no_pengajuan');
        $status_pengajuan = 'Pembayaran Pajak';

        $data = [
            'luas_tanah' => $luas_tanah,
            'batas_utara' => $batas_utara,
            'batas_selatan' => $batas_selatan,
            'batas_timur' => $batas_timur,
            'batas_barat' => $batas_barat,
            'gambar_kasar' => $gambar_kasar,

        ];
        $this->db->where('no_jadwal', $id);
        $this->db->update('berita_acara', $data);
    }

    function event($id_petugas){
        $this->db->select('no_jadwal');
        $this->db->select('no_pengajuan');
        $this->db->select('tanggal_penjadwalan');
        $this->db->from('jadwal');
        $this->db->where('id_petugas',$id_petugas);
        return $this->db->get()->result_array();
    }
}
