<?php 

class Dashboard_admin extends CI_Controller{

    public function __contstruct(){
        parent::__contstruct();
            if($this->session->userdata('role_id') != '1'){
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Your are not logged!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
              redirect('auth/login');
            }
    }
    public function index(){
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('templates_admin/footer');
        $this->load->view('admin/dashboard');
    }
}
?>