<?php

class Pustakawan_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  public function daftarpustakawan()
  {
    $this->db->select('*');
    $this->db->from('Pustakawan');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function guestlist1()
  {
    $this->db->select('gs.member_ID, gs.date_in, gs.date_out, gs.room, mm.nama, mm.kota, mm.alamat, mm.kodepos, cc.Country, mm.telepon, mm.hp');
    $this->db->from('guests gs');
    $this->db->join('members mm' , 'gs.member_ID = mm.member_ID');
    $this->db->join('country cc' , 'mm.negara=cc.CC');
    $this->db->where('date_out IS NULL');
    $query = $this->db->get();
    return $query->result();
  }



}
