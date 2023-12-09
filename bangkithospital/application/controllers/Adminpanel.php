<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminpanel extends CI_Controller {

function __construct(){
    parent::__construct();
    $this->load->model('Madmin');
}
public function index(){
  $this->load->view('admin/login');
    }

public function admin(){
      
      $this->load->view('admin/layout/header');
      $this->load->view('admin/layout/footer');
  }
  
public function login()
{
    $this->load->model('Madmin');
    $u = $this->input->post('username'); 
    $p = $this->input->post('password');

    $cek = $this->Madmin->cek_login_admin($u, $p)->num_rows();

    if ($cek == 1) { 
      $data_session = array(   
        'username' => $u,       
        'status' => 'login'
      );
      $this->session->set_userdata($data_session);
      redirect('adminpanel/admin');
    } else {
      $this->session->set_flashdata('error', 'Username atau password salah.');
      redirect('adminpanel');
    }
}

public function logout(){
  $this->session->sess_destroy();
  redirect('adminpanel/index');
}
}
