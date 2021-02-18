<?php
use Restserver\libraries\REST_Controller;

/**
 *
 */
class Mahasiswa extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Mahasiswa_model');
  }

  public function mahasiswa_get()
  {
    $data = $this->Mahasiswa_model->daftarmahasiswa();
    $this->response( [ 'mahasiswa' => $data ], 200 );
  }
}
  ?>