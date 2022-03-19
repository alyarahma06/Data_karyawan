<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        
    }

  public function login()
  {
    $this->load->view('Auth/login');
  }

  public function dataKaryawan()
  {
    $this->load->view('Admin/datakaryawan');
  }

  public function inputDataKaryawan()
  {
    $this->load->view('Auth/login');
  }

  public function cekuser()
  {
  $this->load->model('MLogin');
     if (isset($_POST['login'])) {
                  $user = $_POST['username'];
                  $pass = $_POST['password'];
                   
                   
                  $this->db->where('username',$user);
                  $this->db->where('password',$pass);
                  $data = $this->db->get('tbl_login')->result();
                     // var_dump($cek);die;
                    if (!empty($data)) {
                      $_SESSION['userweb']=$data;
                      $this->leveling();
                    }else{
                      ?><script type="text/javascript">alert("Username / Password Salah");</script><?php
                    }
                }
  }

  public function leveling()
  {
    // var_dump($_SESSION['userweb'][0]);
    if ($_SESSION['userweb'][0]->level == 'admin') {
      redirect('Admin/dataKaryawan');
    }
    if ($_SESSION['userweb']->level == 'operator') {
      redirect('');
    }

  }

}
