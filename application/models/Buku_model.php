<?php

class Buku_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  public function daftarbuku()
  {
    $this->db->select('*');
    $this->db->from('buku');
	
    $query = $this->db->get();
    return $query->result();
  }
}
