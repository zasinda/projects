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

    public function dashboard(){
        if(empty($this->session->userdata('userName'))){
            redirect('adminpanel');
        }
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/layout/footer');
    }

    
    public function resetpassword(){
      $this->load->view('admin/lupapassword');
  }
  
  public function ubah_password(){
  $this->load->library('form_validation');
  $this->form_validation->set_rules('username', 'Username', 'required');
  $username = "";
  if ($this->form_validation->run() == false) {
      $this->load->view('admin/lupapassword');
  } else {
      $username = $this->input->post('username');
      $data['username'] = $username;
      $this->load->view('admin/ubahpassword', $data);
  }
  }


  public function changepassword()
  {
      $this->load->library('form_validation');
      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');
      $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

      if ($this->form_validation->run() == false) {
          $this->load->view('admin/lupapassword');
      } else {
          $username = $this->input->post('username');
          $password = $this->input->post('password');

          $this->load->model('Madmin');

          $this->Madmin->update_password($username, $password);

          redirect('adminpanel/login');
      }
  }


    public function login()
    {
      $this->load->library('form_validation');
      $this->load->model('Madmin');
  
      $this->form_validation->set_rules('username', 'Username', 'required', array('required' => 'Kolom username harus diisi')); //required menandadakan form wajib isi
      $this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'Kolom password harus diisi'));
      // menetapkan aturan validasi
      
      if ($this->form_validation->run() == false) { //menjalankan aturan validasi dan jika gagal, formulir ditampilkan kembali dengan kesalahan validasi
        $this->load->view('admin/login');
      } else {
        $u = $this->input->post('username'); //username dan passoword didapat dari tag name yang digunakan untuk mendidentifikasi dengan database
        $p = $this->input->post('password');
  
        $cek = $this->Madmin->cek_login($u);
  
        if ($cek && $cek->password === md5($p)) { // salah satu perlindungan kepada user dalam menggunkan internet, karena sejatinya password adalah hal yang paling utama untuk bisa masuk dan mengambil seluruh data dari akun seseorang
          $data_session = array(   //data_session merupakan method yang digunakan untuk  mengambil data berdasarkan nama variable yang disimpan di dalamnya.
            'userName' => $u,       //setelah itu data_session disimpan pada variable set_userdata
            'status' => 'login'
          );
          $this->session->set_userdata($data_session);
          redirect('adminpanel/dashboard');
        } else {
          $this->session->set_flashdata('error', 'Username atau password salah.');
          redirect('adminpanel');
        }
      }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('adminpanel');
    }
}