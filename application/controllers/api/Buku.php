<?php
use Restserver\libraries\REST_Controller;

class Buku extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Buku_model');
  }

  public function buku_get()
  {
    $data = $this->Buku_model->daftarbuku();
    $this->response( [ 'Buku' => $data ], 200 );
  }

}



 ?>