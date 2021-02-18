<?php

class Pinjaman_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

   public function daftarpinjaman()
  {
    $this->db->select('*');
    $this->db->from('pinjaman');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function pinjaman($where = '')
  {
    $this->db->select('mhs.nim, mhs.nama, bk.judulbuku, pj.TPinjam, pj.TKembali, pj.TDikembalikan');
    $this->db->join('mahasiswa mhs', 'mhs.nim = pj.nim');
    $this->db->join('buku bk', 'bk.nobuku = pj.id');

    if($where != '') $this->db->where($where);

    $query = $this->db->get('pinjaman pj');
    return $query->result_array();
  }
}
?>