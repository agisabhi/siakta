<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Laporan_model extends CI_Model {
  public function view_by_date($date){
      $status = 'Pengajuan AJB Selesai';
      $selesai = 'Selesai';
        $this->db->select('pendaftaran.no_pengajuan');
        $this->db->select('status_pengajuan');
        $this->db->select('tanggal_pendaftaran');
        $this->db->select('harga_transaksi');
        $this->db->select('penjual.nik_penjual');
        $this->db->select('penjual.nama_penjual');
        $this->db->select('penjual.no_telpon');
        $this->db->select('penjual.alamat_penjual');
        $this->db->select('penjual.npwp_penjual');
        $this->db->select('pembeli.nik_pembeli');
        $this->db->select('pembeli.nama_pembeli');
        $this->db->select('pembeli.alamat_pembeli');
        $this->db->select('pembeli.npwp_pembeli');
        $this->db->select('sertifikat.no_sertifikat');
        $this->db->select('sertifikat.nama_pemilik');
        $this->db->select('sertifikat.luas_tanah');
        $this->db->select('sertifikat.alamat_tanah');
        $this->db->select('pajak.billing_pajak');
        $this->db->select('pajak.nominal_pajak');
        $this->db->select('pajak.ssb');
        $this->db->from('pendaftaran');
        $this->db->join('penjual','pendaftaran.nik_penjual=penjual.nik_penjual');
        $this->db->join('pembeli','pembeli.nik_pembeli=pendaftaran.nik_pembeli');
        $this->db->join('pajak','pajak.no_pengajuan=pendaftaran.no_pengajuan');
        $this->db->join('sertifikat','sertifikat.no_sertifikat=pendaftaran.no_sertifikat');
        $this->db->where('tanggal_pendaftaran', $date); // Tambahkan where tanggal nya
        $this->db->where('status_pengajuan',$status);
        $this->db->or_where('status_pengajuan',$selesai);
        
    return $this->db->get()->result_array();// Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter
  }
  
  public function view_by_month($month, $year){
      $status = 'Pengajuan AJB Selesai';
      $selesai = 'Selesai';
  		$this->db->select('pendaftaran.no_pengajuan');
        $this->db->select('tanggal_pendaftaran');
        $this->db->select('harga_transaksi');
        $this->db->select('penjual.nik_penjual');
        $this->db->select('penjual.nama_penjual');
        $this->db->select('penjual.alamat_penjual');
        $this->db->select('penjual.npwp_penjual');
        $this->db->select('penjual.no_telpon');
        $this->db->select('pembeli.nik_pembeli');
        $this->db->select('pembeli.nama_pembeli');
        $this->db->select('pembeli.alamat_pembeli');
        $this->db->select('pembeli.npwp_pembeli');
        $this->db->select('sertifikat.no_sertifikat');
        $this->db->select('sertifikat.nama_pemilik');
        $this->db->select('sertifikat.luas_tanah');
        $this->db->select('sertifikat.alamat_tanah');
        $this->db->select('pajak.billing_pajak');
        $this->db->select('pajak.nominal_pajak');
        $this->db->select('pajak.ssb');
        $this->db->from('pendaftaran');
        $this->db->join('penjual','pendaftaran.nik_penjual=penjual.nik_penjual');
        $this->db->join('pembeli','pembeli.nik_pembeli=pendaftaran.nik_pembeli');
        $this->db->join('pajak','pajak.no_pengajuan=pendaftaran.no_pengajuan');
        $this->db->join('sertifikat','sertifikat.no_sertifikat=pendaftaran.no_sertifikat');
        $this->db->where('MONTH(tanggal_pendaftaran)', $month); // Tambahkan where tanggal nya
        $this->db->where('YEAR(tanggal_pendaftaran)', $year); // Tambahkan where tanggal nya
        $this->db->where('status_pengajuan',$status);
        $this->db->or_where('status_pengajuan',$selesai);
        $this->db->where('MONTH(tanggal_pendaftaran)', $month); // Tambahkan where tanggal nya
        $this->db->where('YEAR(tanggal_pendaftaran)', $year); // Tambahkan where tanggal nya
        
    return $this->db->get()->result_array(); // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
  }

  public function view_by_year($year){
      $status = 'Pengajuan AJB Selesai';
      $selesai = 'Selesai';
  		$this->db->select('pendaftaran.no_pengajuan');
        $this->db->select('tanggal_pendaftaran');
        $this->db->select('harga_transaksi');
        $this->db->select('penjual.nik_penjual');
        $this->db->select('penjual.nama_penjual');
        $this->db->select('penjual.alamat_penjual');
        $this->db->select('penjual.npwp_penjual');
        $this->db->select('penjual.no_telpon');
        $this->db->select('pembeli.nik_pembeli');
        $this->db->select('pembeli.nama_pembeli');
        $this->db->select('pembeli.alamat_pembeli');
        $this->db->select('pembeli.npwp_pembeli');
        $this->db->select('sertifikat.no_sertifikat');
        $this->db->select('sertifikat.nama_pemilik');
        $this->db->select('sertifikat.luas_tanah');
        $this->db->select('sertifikat.alamat_tanah');
        $this->db->select('pajak.billing_pajak');
        $this->db->select('pajak.nominal_pajak');
        $this->db->select('pajak.ssb');
        $this->db->from('pendaftaran');
        $this->db->join('penjual','pendaftaran.nik_penjual=penjual.nik_penjual');
        $this->db->join('pembeli','pembeli.nik_pembeli=pendaftaran.nik_pembeli');
        $this->db->join('pajak','pajak.no_pengajuan=pendaftaran.no_pengajuan');
        $this->db->join('sertifikat','sertifikat.no_sertifikat=pendaftaran.no_sertifikat');
        $this->db->where('YEAR(tanggal_pendaftaran)', $year); // Tambahkan where tanggal nya
        $this->db->where('status_pengajuan',$status);
        $this->db->or_where('status_pengajuan',$selesai);
        $this->db->where('YEAR(tanggal_pendaftaran)', $year); // Tambahkan where tanggal nya
        
    return $this->db->get()->result_array(); // Tampilkan data transaksi sesuai tahun yang diinput oleh user pada filter
  }

 
  public function view_all(){
      $status = 'Pengajuan AJB Selesai';
      $selesai = 'Selesai';
  		$this->db->select('pendaftaran.no_pengajuan');
        $this->db->select('tanggal_pendaftaran');
        $this->db->select('harga_transaksi');
        $this->db->select('penjual.nik_penjual');
        $this->db->select('penjual.nama_penjual');
        $this->db->select('penjual.alamat_penjual');
        $this->db->select('penjual.npwp_penjual');
        $this->db->select('pembeli.nik_pembeli');
        $this->db->select('penjual.no_telpon');
        $this->db->select('pembeli.nama_pembeli');
        $this->db->select('pembeli.alamat_pembeli');
        $this->db->select('pembeli.npwp_pembeli');
        $this->db->select('sertifikat.no_sertifikat');
        $this->db->select('sertifikat.nama_pemilik');
        $this->db->select('sertifikat.luas_tanah');
        $this->db->select('sertifikat.alamat_tanah');
        $this->db->select('pajak.billing_pajak');
        $this->db->select('pajak.nominal_pajak');
        $this->db->select('pajak.ssb');
        $this->db->from('pendaftaran');
        $this->db->join('penjual','pendaftaran.nik_penjual=penjual.nik_penjual');
        $this->db->join('pembeli','pembeli.nik_pembeli=pendaftaran.nik_pembeli');
        $this->db->join('pajak','pajak.no_pengajuan=pendaftaran.no_pengajuan');
        $this->db->join('sertifikat','sertifikat.no_sertifikat=pendaftaran.no_sertifikat');
        $this->db->where('status_pengajuan',$status);
        $this->db->or_where('status_pengajuan',$selesai);
    return $this->db->get()->result_array(); // Tampilkan semua data transaksi
  }

    
    public function option_tahun(){
        $this->db->select('YEAR(tanggal_pendaftaran) AS tahun'); // Ambil Tahun dari field tgl
        $this->db->from('pendaftaran'); // select ke tabel transaksi
        $this->db->order_by('YEAR(tanggal_pendaftaran)'); // Urutkan berdasarkan tahun secara Ascending (ASC)
        $this->db->group_by('YEAR(tanggal_pendaftaran)'); // Group berdasarkan tahun pada field tgl
        
        return $this->db->get()->result_array(); // Ambil data pada tabel transaksi sesuai kondisi diatas
    }
}