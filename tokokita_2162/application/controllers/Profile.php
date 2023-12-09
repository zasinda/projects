<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller{

    public function __construct() { //sebuah method khusus yang dijalankan pertama  kali  secara otomatis pada saat sebuah objek dibuat, yaitu ketika perintah “new” dijalankan. 
        parent::__construct();
        $this->load->model('Madmin');
    } 

    public function index(){
        $id = $this->session->userdata('idKonsumen'); //untuk berhubungan dengan inisialisasi library session.
        $dataWhere = array('idKonsumen'=>$id);
        $data['profile']=$this->Madmin->get_by_id('tbl_member',$dataWhere)->row();
        $this->load->view('home/layout/header'); //View bisa kita load dari controller dgn ini
        $this->load->view('home/profile/index', $data);
        $this->load->view('home/layout/footer');
    }

    public function edit(){
        $id = $this->session->userdata('idKonsumen');
        $dataWhere = array('idKonsumen'=>$id);
        $data['profile']=$this->Madmin->get_by_id('tbl_member',$dataWhere)->row();
        $this->load->view('home/layout/header');
        $this->load->view('home/profile/profileedit', $data);
        $this->load->view('home/layout/footer');
    }

    public function update(){
    
        $profile = $this->Madmin->get_by_id('tbl_member', $dataWhere)->row();
        $id = $this->session->userdata('idKonsumen');
        $dataWhere = array('idKonsumen' => $id);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required',array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('namaKonsumen', 'Nama Konsumen', 'required',array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required',array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('tlpn', 'Telepon', 'required',array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email',array('required' => '%s Harus diisi'));

        if ($this->form_validation->run() == FALSE) {
            $$this->load->view('home/layout/header');
            $this->load->view('home/profile/profileedit', $dataWhere);
            $this->load->view('home/layout/footer');
        } 
        else {
            $data = array(
                'username' => $this->input->post('username'),
                'namaKonsumen' => $this->input->post('namaKonsumen'),
                'alamat' => $this->input->post('alamat'),
                'tlpn' => $this->input->post('tlpn'),
                'email' => $this->input->post('email')
            );
            $this->Madmin->update('tbl_member', $data, 'idKonsumen', $id);
            redirect('profile');
        } 
    }
}