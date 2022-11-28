<?php

class Penjual_model extends CI_Model
{
    public function getDaftar($no)
    {
        $this->db->select('no_pengajuan');
        $this->db->select('pendaftaran.nik_penjual');
        $this->db->select('tanggal_pendaftaran');
        $this->db->select('nama_penjual');
        $this->db->select('alamat_penjual'); 
        $this->db->select('no_telpon');
        $this->db->select('npwp_penjual');
        $this->db->select('foto_ktp_penjual');
        $this->db->select('foto_npwp_penjual');
        $this->db->select('pendaftaran.nik_pembeli');
        $this->db->select('nama_pembeli');
        $this->db->select('alamat_pembeli');
        $this->db->select('npwp_pembeli');
        $this->db->select('foto_ktp_pembeli');
        $this->db->select('foto_npwp_pembeli');
        $this->db->select('pendaftaran.no_sertifikat');
        $this->db->select('nama_pemilik');
        $this->db->select('luas_tanah');
        $this->db->select('alamat_tanah');
        $this->db->select('foto_sertifikat');
        $this->db->select('harga_transaksi');
        $this->db->select('foto_kuitansi');
        $this->db->select('status_pengajuan');
        $this->db->select('alasan');
        $this->db->from('pendaftaran');
        $this->db->join('penjual', 'pendaftaran.nik_penjual=penjual.nik_penjual');
        $this->db->join('pembeli', 'pendaftaran.nik_pembeli=pembeli.nik_pembeli');
        $this->db->join('sertifikat', 'pendaftaran.no_sertifikat=sertifikat.no_sertifikat');
        $this->db->where('id_akun', $no);

        return $this->db->get()->result_array();
    }
    public function getDetail($no)
    {
        $this->db->select('no_pengajuan');
        $this->db->select('pendaftaran.nik_penjual');
        $this->db->select('tanggal_pendaftaran');
        $this->db->select('nama_penjual');
        $this->db->select('alamat_penjual');
        $this->db->select('no_telpon');
        $this->db->select('npwp_penjual');
        $this->db->select('foto_ktp_penjual');
        $this->db->select('foto_npwp_penjual');
        $this->db->select('pendaftaran.nik_pembeli');
        $this->db->select('nama_pembeli');
        $this->db->select('alamat_pembeli');
        $this->db->select('npwp_pembeli');
        $this->db->select('foto_ktp_pembeli');
        $this->db->select('foto_npwp_pembeli');
        $this->db->select('pendaftaran.no_sertifikat');
        $this->db->select('nama_pemilik');
        $this->db->select('luas_tanah');
        $this->db->select('alamat_tanah');
        $this->db->select('foto_sertifikat');
        $this->db->select('harga_transaksi');
        $this->db->select('foto_kuitansi');
        $this->db->select('status_pengajuan');
        $this->db->select('alasan');
        $this->db->from('pendaftaran');
        $this->db->join('penjual', 'pendaftaran.nik_penjual=penjual.nik_penjual');
        $this->db->join('pembeli', 'pendaftaran.nik_pembeli=pembeli.nik_pembeli');
        $this->db->join('sertifikat', 'pendaftaran.no_sertifikat=sertifikat.no_sertifikat');
        $this->db->where('no_pengajuan', $no);

        return $this->db->get()->result_array();
    }



    public function getPenjualById($id)
    {
        $this->db->select('*');
        $this->db->from('penjual');
        $this->db->where('nik_penjual', $id);

        return $this->db->get()->result_array();
    }
    public function getPembeliById($id)
    {
        $this->db->select('*');
        $this->db->from('pembeli');
        $this->db->where('nik_pembeli', $id);

        return $this->db->get()->result_array();
    }
    public function getSertifikatById($no)
    {

        $this->db->select('*');
        $this->db->from('sertifikat');
        $this->db->where('no_sertifikat', $no);

        return $this->db->get()->result_array();
    }
    public function getJBById($id)
    {
        $this->db->select('*');
        $this->db->from('pendaftaran');
        $this->db->where('no_pengajuan', $id);

        return $this->db->get()->result_array();
    }

    public function edit_penjual($ktp, $npwp,$no)
    {
        $nik = $this->input->post('nik_penjual');
        $nama_penjual = $this->input->post('nama_penjual');
        $no_telpon = $this->input->post('no_telpon');
        $alamat_penjual = $this->input->post('alamat_penjual');
        $npwp_penjual = $this->input->post('npwp_penjual');
        $foto_npwp_penjual = $npwp;
        $foto_ktp_penjual = $ktp;
        $respon = 'Menunggu Respon';

        $data = [
            'nama_penjual' => $nama_penjual,
            'alamat_penjual' => $alamat_penjual,
            'no_telpon' => $no_telpon,
            'npwp_penjual' => $npwp_penjual,
            'foto_ktp_penjual' => $foto_ktp_penjual,
            'foto_npwp_penjual' => $foto_npwp_penjual
        ];

        $data2 = [
            'status_pengajuan' => $respon
        ];
        $this->db->where('nik_penjual', $nik);
        $this->db->update('penjual', $data);
        
        $this->db->where('no_pengajuan', $no);
        $this->db->update('pendaftaran', $data2);
        
    }

    public function edit_pembeli($ktp, $npwp, $no)
    {
        $nik = $this->input->post('nik_pembeli');
        $nama_pembeli = $this->input->post('nama_pembeli');
        $alamat_pembeli = $this->input->post('alamat_pembeli');
        $npwp_pembeli = $this->input->post('npwp_pembeli');
        $foto_npwp_pembeli = $npwp;
        $foto_ktp_pembeli = $ktp;
        $respon = 'Menunggu Respon';

        $data = [
            'nama_pembeli' => $nama_pembeli,
            'alamat_pembeli' => $alamat_pembeli,
            'npwp_pembeli' => $npwp_pembeli,
            'foto_ktp_pembeli' => $foto_ktp_pembeli,
            'foto_npwp_pembeli' => $foto_npwp_pembeli
        ];
        $data2 = [
            'status_pengajuan' => $respon
        ];

        $this->db->where('nik_pembeli', $nik);
        $this->db->update('pembeli', $data);

        $this->db->where('no_pengajuan', $no);
        $this->db->update('pendaftaran', $data2);
    }
    public function edit_sertifikat($ser,$no)
    {
        $no_ser = $this->input->post('no_sertifikat');
        $nama_pemilik = $this->input->post('nama_pemilik');
        $alamat_tanah = $this->input->post('alamat_tanah');
        $luas_tanah = $this->input->post('luas_tanah');
        $foto_sertifikat = $ser;
        $respon = 'Menunggu Respon';


        $data2 = [
            'status_pengajuan' => $respon
        ];

        $data = [
            'nama_pemilik' => $nama_pemilik,
            'alamat_tanah' => $alamat_tanah,
            'luas_tanah' => $luas_tanah,
            'foto_sertifikat' => $foto_sertifikat

        ];
        $this->db->where('no_sertifikat', $no_ser);
        $this->db->update('sertifikat', $data);

        $this->db->where('no_pengajuan', $no);
        $this->db->update('pendaftaran', $data2);
    }

    public function edit_jualbeli($kui)
    {
        $no_pengajuan = $this->input->post('no_pengajuan');
        $harga_transaksi = $this->input->post('harga_transaksi');
        $foto_kuitansi = $kui;
        $respon = 'Menunggu Respon';

        $data = [
            'harga_transaksi' => $harga_transaksi,
            'foto_kuitansi' => $foto_kuitansi,
            'status_pengajuan' => $respon
        ];
        $this->db->where('no_pengajuan', $no_pengajuan);
        $this->db->update('pendaftaran', $data);
    }

    public function hapus_cuti($id)
    {
        $this->db->where('id_cuti', $id);
        $this->db->delete('cuti');
    }

    public function getJadwalById($id)
    {
        $this->db->select('no_jadwal');
        $this->db->select('tanggal_penjadwalan');
        $this->db->select('jadwal.no_pengajuan');
        $this->db->select('pendaftaran.id_akun');
        $this->db->select('penjual.nama_penjual');
        $this->db->select('penjual.no_telpon');
        $this->db->select('petugas.nama_petugas');
        $this->db->select('petugas.no_hp');
        $this->db->from('jadwal');
        $this->db->join('petugas', 'jadwal.id_petugas=petugas.id_petugas');
        $this->db->join('pendaftaran', 'jadwal.no_pengajuan=pendaftaran.no_pengajuan');
        $this->db->join('penjual', 'penjual.nik_penjual=pendaftaran.nik_penjual');
        $this->db->where('pendaftaran.id_akun', $id);

        return $this->db->get()->result_array();
    }

    public function getPajakById($id)
    {
        $this->db->select('id_pajak');
        $this->db->select('billing_pajak');
        $this->db->select('nominal_pajak');
        $this->db->select('ssb');
        $this->db->select('waktu');
        $this->db->select('pajak.no_pengajuan');
        $this->db->select('pendaftaran.id_akun');
        $this->db->select('bukti_transfer');
        $this->db->select('pendaftaran.status_pengajuan');
        $this->db->from('pajak');
        $this->db->join('pendaftaran','pajak.no_pengajuan=pendaftaran.no_pengajuan');
        $this->db->where('pendaftaran.id_akun', $id);

        return $this->db->get()->result_array();
    }
    public function getEditPajakById($id)
    {
        $this->db->select('id_pajak');
        $this->db->select('billing_pajak');
        $this->db->select('nominal_pajak');
        $this->db->select('ssb');
        $this->db->select('no_pengajuan');
        $this->db->select('bukti_transfer');
        $this->db->from('pajak');
        $this->db->where('id_pajak', $id);

        return $this->db->get()->result_array();
    }

    public function getNoPengajuanPajak($akun){
        $status = 'Pembayaran Pajak';
        $this->db->select('no_pengajuan');
        $this->db->select('nama_penjual');
        $this->db->from('pendaftaran');
        $this->db->join('penjual','pendaftaran.nik_penjual=penjual.nik_penjual');
        $this->db->where('id_akun',$akun);
        $this->db->where('status_pengajuan',$status);

        return $this->db->get()->result_array();
    }

    public function tambah_pajak($id,$bukti_transfer)
    {
        $billing_pajak = $this->input->post('billing_pajak');
        $nominal_pajak = $this->input->post('nominal_pajak');
        $ssb = $this->input->post('ssb');
        $transfer = $bukti_transfer;
        $no_peng = $id;
        $waktu = date("Y-m-d h:i:s");
        $status_pengajuan = 'Menunggu Verifikasi Pajak';

        $data = [
            'billing_pajak' => $billing_pajak,
            'nominal_pajak' => $nominal_pajak,
            'bukti_transfer' => $transfer,
            'no_pengajuan' => $no_peng,
            'ssb' => $ssb,
            'waktu' => $waktu
        ];

        $data2 = [
            'status_pengajuan' => $status_pengajuan
        ];


        $this->db->insert('pajak', $data);
        $this->db->where('no_pengajuan', $no_peng);
        $this->db->update('pendaftaran', $data2);
    }
    public function edit_pajak($id, $bukti_transfer)
    {
        $no_pengajuan = $this->input->post('no_pengajuan');
        $billing_pajak = $this->input->post('billing_pajak');
        $nominal_pajak = $this->input->post('nominal_pajak');
        $ssb = $this->input->post('ssb');
        $transfer = $bukti_transfer;
        $id_pajak = $id;
        $status_pengajuan = 'Menunggu Verifikasi Pajak';

        $data = [
            'billing_pajak' => $billing_pajak,
            'nominal_pajak' => $nominal_pajak,
            'ssb' => $ssb,
            'bukti_transfer' => $transfer,

        ];

        $this->db->where('id_pajak', $id_pajak);
        $this->db->update('pajak', $data);

        $data2 = [
            'status_pengajuan' => $status_pengajuan
        ];

        $this->db->where('no_pengajuan', $no_pengajuan);
        $this->db->update('pendaftaran', $data2);
    }

    public function getPengambilanById($id)
    {
        $this->db->select('tanggal_pengambilan');
        $this->db->select('pengambilan.no_pengajuan');
        $this->db->select('penjual.nama_penjual');
        $this->db->select('sertifikat.no_sertifikat');
        $this->db->select('sertifikat.luas_tanah');
        $this->db->select('pendaftaran.id_akun');
        $this->db->from('pengambilan');
        $this->db->join('pendaftaran', 'pengambilan.no_pengajuan=pendaftaran.no_pengajuan');
        $this->db->join('penjual', 'penjual.nik_penjual=pendaftaran.nik_penjual');
        $this->db->join('sertifikat', 'sertifikat.no_sertifikat=pendaftaran.no_sertifikat');
        $this->db->where('pendaftaran.id_akun', $id);

        return $this->db->get()->result_array();
    }
    public function CetakPengambilanById($id)
    {
        $this->db->select('tanggal_pengambilan');
        $this->db->select('pengambilan.no_pengajuan');
        $this->db->select('penjual.nama_penjual');
        $this->db->select('sertifikat.no_sertifikat');
        $this->db->select('sertifikat.luas_tanah');
        $this->db->select('pendaftaran.id_akun');
        $this->db->from('pengambilan');
        $this->db->join('pendaftaran', 'pengambilan.no_pengajuan=pendaftaran.no_pengajuan');
        $this->db->join('penjual', 'penjual.nik_penjual=pendaftaran.nik_penjual');
        $this->db->join('sertifikat', 'sertifikat.no_sertifikat=pendaftaran.no_sertifikat');
        $this->db->where('pengambilan.no_pengajuan', $id);

        return $this->db->get()->result_array();
    }
}
