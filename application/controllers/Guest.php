<?php
/**
 *
 */
class Guest extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('guest_model');
  }

  public function guestlist( $checkin = '' )
  {
    if ($checkin == '') {
      $where = '';
    }
    else {
      $where = "(MONTH(date_in) = ".$checkin.")" ;
    }
    $viewdata['judul'] = "PWEB Hotel - Guests List";
    $viewdata['guests'] = $this->guest_model->guestList( $where );
    $this->load->view('layout/header');
    $this->load->view('guestlist', $viewdata);
    $this->load->view('layout/footer');
  }
}