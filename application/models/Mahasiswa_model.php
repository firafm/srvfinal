<?php

class Mahasiswa_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  public function daftarmahasiswa()
  {
    $this->db->select('*');
    $this->db->from('mahasiswa');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function memberlist1 ()
  {
    $this->db->select('mm.member_ID, mm.nama, cc.Country, mm.telepon');
    $this->db->from('members mm');
    $this->db->join('country cc' , 'ON(mm.negara=cc.CC)');
    $query = $this->db->get();
    return $query->result();
  }

  public function insertMember($data)
  {
    $this->db->insert( 'members', $data );
  }

  public function memberOk( $data )
  {
    $this->db->where($data);
    return $this->db->get('members')->row_array();
  }
}
