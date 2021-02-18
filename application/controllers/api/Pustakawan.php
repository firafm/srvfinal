<?php
use Restserver\libraries\REST_Controller;

/**
 *
 */
class Pustakawan extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Pustakawan_model');
  }

   public function Pustakawan_get()
  {
    $data = $this->Pustakawan_model->daftarpustakawan();
    $this->response( [ 'pustakwan' => $data ], 200 );
  }

  public function Memberlist1_get()
  {
    $data = $this->member_model->memberlist1();
    $this->response( [ 'members' => $data ], 200 );
  }

  public function newmember_post()
  {
    $data = [
      'member_ID' => $this->post('id'),
      'nama' => $this->post('nama'),
      'alamat' => $this->post('alamat'),
      'kota' => $this->post('kota'),
      'negara' => $this->post('negara')
    ];
    $this->member_model->insertMember( $data );
  }
}
  ?>