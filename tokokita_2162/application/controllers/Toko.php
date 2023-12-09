<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index()
    {

        $id = $this->session->userdata('idKonsumen');
        $datawhere = array('idKonsumen'=>$id);
        $data['toko']=$this->Madmin->get_by_id('tbl_toko',$datawhere)->result();
        $this->load->view('home/layout/header');
        $this->load->view('home/toko/index', $data);
        $this->load->view('home/layout/footer');
    }
    
    public function add(){
        $this->load->view('home/layout/header');
        $this->load->view('home/toko/form_tambah');
        $this->load->view('home/layout/footer');
    }

    public function save()
    {
        $id = $this->session->userdata('idKonsumen');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('namaToko', 'Nama Toko', 'required',array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required',array('required' => '%s Harus diisi'));

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('home/layout/header');
            $this->load->view('home/toko/form_tambah');
            $this->load->view('home/layout/footer');
        } else {
            $nama_toko = $this->input->post('namaToko');
            $deskripsi = $this->input->post('deskripsi');
            $config['upload_path'] = './assets/logo_toko/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('logo')) {
                $data_file = $this->upload->data();
                $data_insert = array(
                    'idKonsumen' => $id,
                    'namaToko' => $nama_toko,
                    'logo' => $data_file['file_name'],
                    'deskripsi' => $deskripsi,
                    'statusAktif' => 'Y'
                );
                $this->Madmin->insert('tbl_toko', $data_insert);
                redirect('toko');
            } else {
                redirect('toko/add');
            }
        }
    }

    public function edit($id)
    {
        $dataWhere = array('idToko' => $id);
        $data['toko'] = $this->Madmin->get_by_id('tbl_toko', $dataWhere)->row_object();
        $this->load->view('home/layout/header');
        $this->load->view('home/toko/form_edit', $data);
        $this->load->view('home/layout/footer');
    }

    public function save_edit()
    {
        $id = $this->input->post('id');
        $nama_toko = $this->input->post('namaToko');
        $deskripsi = $this->input->post('deskripsi');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('namaToko', 'Nama Toko', 'required',array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required',array('required' => '%s Harus diisi'));

        if ($this->form_validation->run() == FALSE) {
            
            $data['toko'] = $this->Madmin->get_by_id('tbl_toko', array('idToko' => $id))->row();
            $this->load->view('home/layout/header');
            $this->load->view('home/toko/form_edit', $data);
            $this->load->view('home/layout/footer');
        } else {
            if (isset($_FILES['logo']) && $_FILES['logo']['error'] != UPLOAD_ERR_NO_FILE) {
                $config['upload_path'] = './assets/logo_toko/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('logo')) {
                    $data_file = $this->upload->data();
                    $data_update = array(
                        'namaToko' => $nama_toko,
                        'logo' => $data_file['file_name'],
                        'deskripsi' => $deskripsi
                    );
                    $this->Madmin->update('tbl_toko', $data_update, 'idToko', $id);
                    redirect('toko');
                } else {
                    redirect('toko/edit/' . $id);
                }
            } else {
                $data_update = array(
                    'namaToko' => $nama_toko,
                    'deskripsi' => $deskripsi
                );
                $this->Madmin->update('tbl_toko', $data_update, 'idToko', $id);
                redirect('toko');
            }
        }
}

    public function delete($id){
        $this->Madmin->delete('tbl_toko', 'idToko', $id);
        redirect('toko');
    }
}