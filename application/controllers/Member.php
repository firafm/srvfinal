<?php
/**
 *
 */
class Member extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('member_model');
  }

  public function memberlist( $negara = '' )
  {
    if ($negara == '') {
      $where = '';
    }
    else {
      $where = "CC LIKE '".$negara."' " ;
    }
    $viewdata['judul'] = "PWEB Hotel - Member List";
    $viewdata['members'] = $this->member_model->memberList( $where );
    $this->load->view('layout/header');
    $this->load->view('memberlist', $viewdata);
    $this->load->view('layout/footer');
  }

  public function login($stat = 0)
  {
    $data = ['stat' => $stat];
    $this->load->view('layout/header');
    $this->load->view('loginform', $data );
    $this->load->view('layout/footer');
  }

  public function auth()
  {
    $data = [
              'username' => $this->input->post('username'),
              'userpass' => md5($this->input->post('password'))
            ];

    $member = $this->member_model->memberOk($data);
    if ( count($member)>0 ) {
      setcookie('member_ID', $member['member_ID']);
      setcookie('member_name', $member['nama']);
      redirect('/');
    } else {
      redirect('/login/1');
    }
  }

  public function logout()
  {
    setcookie('member_ID');
    setcookie('member_name');
    redirect('/');
  }
}