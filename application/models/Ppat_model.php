<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ppat_model extends CI_Model
{
    //Tampil datapegawai

    public function getDaftar()
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
        


        return $this->db->get()->result_array();
    }
    public function getDaftar2($status)
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
        $this->db->where('status_pengajuan',$status);
        


        return $this->db->get()->result_array();
    }

    public function getDaftarEmailById($id)
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
        $this->db->select('username');
        $this->db->select('alasan');
        $this->db->from('pendaftaran');
        $this->db->join('penjual', 'pendaftaran.nik_penjual=penjual.nik_penjual');
        $this->db->join('pembeli', 'pendaftaran.nik_pembeli=pembeli.nik_pembeli');
        $this->db->join('akun', 'pendaftaran.id_akun=akun.id_akun');
        $this->db->join('sertifikat', 'pendaftaran.no_sertifikat=sertifikat.no_sertifikat');
        $this->db->where('no_pengajuan', $id);


        return $this->db->get()->row_array();
    }
    public function getDaftarById($id)
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
        $this->db->where('no_pengajuan', $id);


        return $this->db->get()->result_array();
    }
    //verifikasi data daftar
    public function editpendaftaran()
    {
        $alasan = $this->input->post('alasan');
        $no_pengajuan = $this->input->post('no_pengajuan');
        $status_pengajuan = $this->input->post('status_pengajuan');

        $data = [
            'alasan' => $alasan,
            'status_pengajuan' => $status_pengajuan

        ];

        $this->db->where('no_pengajuan', $no_pengajuan);
        $this->db->update('pendaftaran', $data);
    }

    public function getPetugas()
    {
        $this->db->select('*');
        $this->db->from('petugas');


        return $this->db->get()->result_array();
    }

    public function tambah_petugas()
    {
        $id_petugas = $this->input->post('id_petugas');
        $nama_petugas = $this->input->post('nama_petugas');
        $no_telpon = $this->input->post('no_telpon');
        $password = $this->input->post('password');
        $role = 'petugas';

        $petugas = [
            'id_petugas' => $id_petugas,
            'nama_petugas' => $nama_petugas,
            'no_hp' => $no_telpon
        ];
        $this->db->insert('petugas', $petugas);

        $akun = [
            'username' => $id_petugas,
            'password' => $password,
            'role' => $role

        ];


        $this->db->insert('akun', $akun);
    }

    public function tambah_peninjauan()
    {
        $tanggal_penjadwalan = $this->input->post('tanggal_penjadwalan');
        $no_pengajuan = $this->input->post('no_pengajuan');
        $id_petugas = $this->input->post('id_petugas');
        $status_pengajuan = 'Peninjauan';
        $role = 'petugas';

        $jadwal = [
            'tanggal_penjadwalan' => $tanggal_penjadwalan,
            'no_pengajuan' => $no_pengajuan,
            'id_petugas' => $id_petugas
        ];

        $pengajuan = [
            'status_pengajuan' => $status_pengajuan

        ];

        $this->db->insert('jadwal', $jadwal);

        $this->db->where('no_pengajuan', $no_pengajuan);
        $this->db->update('pendaftaran', $pengajuan);
    }

    public function edit_peninjauan($id){
        $tanggal_penjadwalan = $this->input->post('tanggal_penjadwalan');
        $id_petugas = $this->input->post('id_petugas');
        $data = [
            'tanggal_penjadwalan' => $tanggal_penjadwalan,
            'id_petugas' => $id_petugas
        ];
        $this->db->where('no_jadwal',$id);
        $this->db->update('jadwal',$data);
    }

    public function cekjadwal(){
        $tanggal = $this->input->post('tanggal_penjadwalan');
        $id_petugas = $this->input->post('id_petugas');

        $this->db->select('*');
        $this->db->from('jadwal');
        $this->db->where('tanggal_penjadwalan',$tanggal);
        $this->db->where('id_petugas',$id_petugas);

        return $this->db->get()->num_rows();
    }

    public function getPendaftaran()
    {
        $acc = 'Berkas Terverifikasi';
        $this->db->select('no_pengajuan');
        $this->db->select('nama_penjual');
        $this->db->from('pendaftaran');
        $this->db->join('penjual','pendaftaran.nik_penjual=penjual.nik_penjual');
        $this->db->where('status_pengajuan', $acc);

        return $this->db->get()->result_array();
    }


    //ambil data petugas berdasarkan id
    public function getPetugasById($id)
    {
        return $this->db->get_where('petugas', ['id_petugas' => $id])->result_array();
    }


    public function getAkun()
    {
        $role = 'petugas';

        $this->db->select('username');
        $this->db->select('password');
        $this->db->select('petugas.nama_petugas');
        $this->db->from('akun');
        $this->db->join('petugas', 'akun.username=petugas.id_petugas');
        $this->db->where('role', $role);

        return $this->db->get()->result_array();
    }

    public function getJadwalById($id)
    {

        $this->db->select('no_jadwal');
        $this->db->select('tanggal_penjadwalan');
        $this->db->select('jadwal.no_pengajuan');
        $this->db->select('penjual.nama_penjual');
        $this->db->select('penjual.no_telpon');
        $this->db->select('petugas.nama_petugas');
        $this->db->select('petugas.no_hp');
        $this->db->from('jadwal');
        $this->db->join('petugas', 'jadwal.id_petugas=petugas.id_petugas');
        $this->db->join('pendaftaran', 'jadwal.no_pengajuan=pendaftaran.no_pengajuan');
        $this->db->join('penjual', 'penjual.nik_penjual=pendaftaran.nik_penjual');
        $this->db->where('jadwal.no_jadwal',$id);

        return $this->db->get()->row_array();
    }

    public function getJadwal()
    {


        $this->db->select('no_jadwal');
        $this->db->select('tanggal_penjadwalan');
        $this->db->select('jadwal.no_pengajuan');
        $this->db->select('penjual.nama_penjual');
        $this->db->select('penjual.no_telpon');
        $this->db->select('petugas.nama_petugas');
        $this->db->select('petugas.no_hp');
        $this->db->from('jadwal');
        $this->db->join('petugas', 'jadwal.id_petugas=petugas.id_petugas');
        $this->db->join('pendaftaran', 'jadwal.no_pengajuan=pendaftaran.no_pengajuan');
        $this->db->join('penjual', 'penjual.nik_penjual=pendaftaran.nik_penjual');

        return $this->db->get()->result_array();
    }

    public function getVerifikasiById($id)
    {

        $this->db->select('*');
        $this->db->from('verifikasi');
        $this->db->where('no_jadwal', $id);

        return $this->db->get()->result_array();
    }

    public function getBeritaById($id)
    {
        $this->db->select('*');
        $this->db->from('berita_acara');
        $this->db->where('no_jadwal', $id);

        return $this->db->get()->result_array();
    }

    //edit data pegawai
    public function edit_petugas()
    {
        $edit = [


            'nama_petugas' => $this->input->post('nama_petugas'),
            'no_hp' => $this->input->post('no_telpon')

        ];
        $this->db->where('id_petugas', $this->input->post('id_petugas'));
        $this->db->update('petugas', $edit);
    }



    //edit data login
    public function edit_akun($id)
    {
        $editpeg = [

            'nip' => $this->input->post('nip'),
            'password' => $this->input->post('password'),
            'role' => 'pegawai'

        ];
        $this->db->where('id', $id);
        $this->db->update('login', $editpeg);
    }



    public function getGaji($limit, $offset)
    {
        $this->db->select('nip');
        $this->db->select('nama');
        $this->db->select('jabatan.nama_jabatan');
        $this->db->select('jabatan.gaji');
        $this->db->from('pegawai');
        $this->db->join('jabatan', 'pegawai.kode_jabatan=jabatan.kode_jabatan');
        $this->db->order_by('nip', 'asc');


        return $this->db->get('', $limit, $offset)->result_array();
    }

    public function getPotongan()
    {
        $bln = date('m');
        $this->db->select_sum('status_absen');
        $this->db->select('tanggal');
        $this->db->from('absensi');
        $this->db->group_by('nip');
        $this->db->having('MONTH(tanggal)', $bln);
        $this->db->order_by('nip', 'asc');
        return $this->db->get()->result_array();
    }

    public function getPengambilan()
    {
        $this->db->select('no_pengambilan');
        $this->db->select('pengambilan.no_pengajuan');
        $this->db->select('tanggal_pengambilan');
        $this->db->select('penjual.nik_penjual');
        $this->db->select('penjual.nama_penjual');
        $this->db->select('pembeli.nik_pembeli');
        $this->db->select('pembeli.nama_pembeli');
        $this->db->select('sertifikat.no_sertifikat');
        $this->db->select('sertifikat.luas_tanah');
        $this->db->from('pengambilan');
        $this->db->join('pendaftaran', 'pengambilan.no_pengajuan=pendaftaran.no_pengajuan');
        $this->db->join('penjual', 'penjual.nik_penjual=pendaftaran.nik_penjual');
        $this->db->join('pembeli', 'pembeli.nik_pembeli=pendaftaran.nik_pembeli');
        $this->db->join('sertifikat', 'sertifikat.no_sertifikat=pendaftaran.no_sertifikat');

        return $this->db->get()->result_array();
    }
    
    public function getPengambilanById($id)
    {
        $this->db->select('no_pengambilan');
        $this->db->select('pengambilan.no_pengajuan');
        $this->db->select('tanggal_pengambilan');
        $this->db->select('penjual.nik_penjual');
        $this->db->select('penjual.nama_penjual');
        $this->db->select('pembeli.nik_pembeli');
        $this->db->select('pembeli.nama_pembeli');
        $this->db->select('sertifikat.no_sertifikat');
        $this->db->select('sertifikat.luas_tanah');
        $this->db->from('pengambilan');
        $this->db->join('pendaftaran', 'pengambilan.no_pengajuan=pendaftaran.no_pengajuan');
        $this->db->join('penjual', 'penjual.nik_penjual=pendaftaran.nik_penjual');
        $this->db->join('pembeli', 'pembeli.nik_pembeli=pendaftaran.nik_pembeli');
        $this->db->join('sertifikat', 'sertifikat.no_sertifikat=pendaftaran.no_sertifikat');
        $this->db->where('pengambilan.no_pengambilan',$id);

        return $this->db->get()->result_array();
    }
    public function getPajak()
    {
        $status = 'Menunggu Verifikasi Pajak';
        $this->db->select('billing_pajak');
        $this->db->select('nominal_pajak');
        $this->db->select('ssb');
        $this->db->select('waktu');
        $this->db->select('bukti_transfer');
        $this->db->select('pendaftaran.no_pengajuan');
        $this->db->select('penjual.nama_penjual');
        $this->db->from('pajak');
        $this->db->join('pendaftaran', 'pendaftaran.no_pengajuan=pajak.no_pengajuan');
        $this->db->join('penjual', 'penjual.nik_penjual=pendaftaran.nik_penjual');
        $this->db->where('pendaftaran.status_pengajuan', $status);

        return $this->db->get()->result_array();
    }

    public function getDaftarVerifikasi()
    {
        $sp = 'Penjadwalan Pengambilan';
        $this->db->select('no_pengajuan');
        $this->db->select('nama_penjual');
        $this->db->from('pendaftaran');
        $this->db->join('penjual','pendaftaran.nik_penjual=penjual.nik_penjual');
        $this->db->where('status_pengajuan', $sp);

        return $this->db->get()->result_array();
    }
    public function getPengajuanSelesai()
    {
        $sp = 'Pengajuan AJB Selesai';
        $this->db->select('no_pengajuan');
        $this->db->select('nama_penjual');
        $this->db->from('pendaftaran');
        $this->db->join('penjual','pendaftaran.nik_penjual=penjual.nik_penjual');
        $this->db->where('status_pengajuan', $sp);

        return $this->db->get()->result_array();
    }

    public function getNotif(){
        $stat = 'Menunggu Respon';
        
        $this->db->select('*');
        $this->db->from('pendaftaran');
        $this->db->where('status_pengajuan',$stat);
        

        return $this->db->get()->num_rows();
    }

    public function getValidasi(){
        $stat = 'Menunggu Verifikasi Pajak';
        
        $this->db->select('*');
        $this->db->from('pendaftaran');
        $this->db->where('status_pengajuan',$stat);
        

        return $this->db->get()->num_rows();
    }

    public function tambah_pengambilan()
    {
        $tanggal_pengambilan = $this->input->post('tanggal_pengambilan');
        $no_pengajuan = $this->input->post('no_pengajuan');
        $status = 'Proses Pembuatan AJB';

        $data = [
            'tanggal_pengambilan' => $tanggal_pengambilan,
            'no_pengajuan' => $no_pengajuan
        ];
        $stat = [
            'status_pengajuan' => $status
        ];
        $this->db->insert('pengambilan', $data);

        $this->db->where('no_pengajuan',$no_pengajuan);
        $this->db->update('pendaftaran',$stat);
    }

    public function tambah_pengambil($id,$foto_ktp_pengambil){
        $nama_pengambil = $this->input->post('nama_pengambil');
        $no_hp_pengambil = $this->input->post('no_hp_pengambil');
        $no_pengajuan = $this->input->post('no_pengajuan');
        $status = 'Pengajuan AJB Selesai';
        $data = [
            'nama_pengambil' => $nama_pengambil,
            'no_hp_pengambil' => $no_hp_pengambil,
            'foto_ktp_pengambil' => $foto_ktp_pengambil,
            'no_pengambilan' => $id
        ];
        $this->db->insert('pengambil',$data);

        $data2 = [
            'status_pengajuan' => $status
        ];
        $this->db->where('no_pengajuan',$no_pengajuan);
        $this->db->update('pendaftaran',$data2);
    }

    public function getMah(){

        $this->db->select('nim');
        $this->db->select('nama_mahasiswa');
        $this->db->select('nama_jurusan');
        $this->db->from('mahasiswa');
        $this->db->join('jurusan','mahasiswa.kode_jurusan=jurusan.kode_jurusan');

        return $this->db->get()->result_array();
    }
    public function getPengajuanPajak($id)
    {
        $status = 'Menunggu Verifikasi Pajak';
        $this->db->select('billing_pajak');
        $this->db->select('nominal_pajak');
        $this->db->select('ssb');
        $this->db->select('bukti_transfer');
        $this->db->select('pajak.no_pengajuan');
        $this->db->select('penjual.nama_penjual');
        $this->db->from('pajak');
        $this->db->join('pendaftaran', 'pajak.no_pengajuan=pendaftaran.no_pengajuan');
        $this->db->join('penjual', 'penjual.nik_penjual=pendaftaran.nik_penjual');
        $this->db->where('pendaftaran.status_pengajuan', $status);
        $this->db->where('pajak.no_pengajuan', $id);

        return $this->db->get()->result_array();
    }
 
    public function validasi_pajak($id)
    {
        $status_pengajuan = $this->input->post('status_pengajuan');
        $no_pengajuan = $id;
        $alasan = $this->input->post('alasan');

        $data = [
            'status_pengajuan' => $status_pengajuan,
            'alasan' => $alasan
        ];
        $this->db->where('no_pengajuan', $id);
        $this->db->update('pendaftaran', $data);
    }
    public function getPengambilById($id){
        $this->db->select('nama_pengambil');
        $this->db->select('no_hp_pengambil');
        $this->db->select('foto_ktp_pengambil');
        $this->db->select('pengambilan.no_pengajuan');
        $this->db->from('pengambil');
        $this->db->join('pengambilan', 'pengambil.no_pengambilan=pengambilan.no_pengambilan');
        $this->db->where('pengambilan.no_pengambilan',$id);

        return $this->db->get()->result_array();
    }
    public function getArsip(){
        $this->db->select('salinan');
        $this->db->select('arsip.no_pengajuan');
        $this->db->select('penjual.nama_penjual');
        $this->db->select('pembeli.nama_pembeli');
        $this->db->from('arsip');
        $this->db->join('pendaftaran','arsip.no_pengajuan=pendaftaran.no_pengajuan');
        $this->db->join('penjual','penjual.nik_penjual=pendaftaran.nik_penjual');
        $this->db->join('pembeli','pembeli.nik_pembeli=pendaftaran.nik_pembeli');
        return $this->db->get()->result_array();
    }

    public function tambah_arsip($arsip){
        $selesai = 'Selesai';
        $data = [
            'no_pengajuan' => $this->input->post('no_pengajuan'),
            'salinan' => $arsip
        ];
        $this->db->insert('arsip',$data);

        $data2 = [
            'status_pengajuan' => $selesai
        ];

        $this->db->where('no_pengajuan',$this->input->post('no_pengajuan'));
        $this->db->update('pendaftaran',$data2);
    }
}
