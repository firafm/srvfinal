<?php
use Restserver\libraries\REST_Controller;

/**
 *
 */
class Pinjaman extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Pinjaman_model');
  }

  public function Pinjaman_get()
  {
    $data = $this->Pinjaman_model->daftarpinjaman();
    $this->response( [ 'pinjaman' => $data ], 200 );
  }

  public function PinjamanMahasiswa_get()
  {
    $data = $this->Pinjaman_model->pinjaman();
    $this->response( [ 'pinjaman' => $data ], 200 );
  }
}
  ?>