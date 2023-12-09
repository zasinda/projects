<?php
defined('BASEPATH') OR exit('NO direct script allowed');

class dokter extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index()
    {
    $data['spesialis']=$this->Madmin->get_all_data_dokter('spesialis')->result();
    $data['dokter']=$this->Madmin->get_all_data_dokter('dokter')->result();
    $this->load->view('admin/dokter/inputdokter', $data);
    $this->load->view('admin/layout/tampil');
    }


    public function add(){
        $data['spesialis']=$this->Madmin->get_all_data_dokter('spesialis')->result();
        $data['dokter']=$this->Madmin->get_all_data_dokter('dokter')->result();
        $this->load->view('admin/layout/tampil');
        $this->load->view('admin/dokter/inputdokter', $data);
    }

    public function save()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('Nama_dokter', 'Nama Dokter', 'required',array('required' => 'Field %s must be filled.'));
        $this->form_validation->set_rules('id_spesialis', 'Spesialis Dokter', 'required',array('required' => 'Field %s must be filled.'));
        $this->form_validation->set_rules('Alamat_dokter', 'Alamat Dokter', 'required',array('required' => 'Field %s must be filled.'));
        $this->form_validation->set_rules('Pengalaman_dokter', 'Pengalaman Dokter', 'required',array('required' => 'Field %s must be filled.'));
        $this->form_validation->set_rules('Alumni_dokter', 'Alumni Dokter', 'required',array('required' => 'Field %s must be filled.'));

        if ($this->form_validation->run() == FALSE) {
            $data['dokter']=$this->Madmin->get_all_data('dokter')->result();
            $data['spesialis']=$this->Madmin->get_all_data('spesialis')->result();
            $this->load->view('admin/dokter/inputdokter', $data);
            $this->load->view('admin/layout/tampil');
        } else {
            $Nama_dokter = trim(htmlspecialchars($this->input->post('Nama_dokter')));
            $id_spesialis = trim(htmlspecialchars($this->input->post('id_spesialis')));
            $Alamat_dokter = trim(htmlspecialchars($this->input->post('Alamat_dokter')));
            $Alumni_dokter = trim(htmlspecialchars($this->input->post('Alumni_dokter')));
            $Pengalaman_dokter = trim(htmlspecialchars($this->input->post('Pengalaman_dokter')));
            $config['upload_path'] = './assets/dokter/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $data_file = $this->upload->data();
                $data_insert = array(
                    'Nama_dokter' => $Nama_dokter,
                    'id_spesialis' => $id_spesialis,
                    'Alamat_dokter' => $Alamat_dokter,
                    'Alumni_dokter' => $Alumni_dokter,
                    'Pengalaman_dokter' => $Pengalaman_dokter,
                    'gambar' => $data_file['file_name'],
                );
                $this->Madmin->insert('dokter', $data_insert);
                redirect('dokter');
            } else {
                redirect('toko/inputdokter');
            }
        }
    }

    public function edit($id_dokter) {
        $this->load->model('Madmin');
        $data['dokter'] = $this->Madmin->get_by_id('dokter', array('id_dokter' => $id_dokter))->row();
        $this->load->view('admin/dokter/editdokter', $data);
    }
    
    public function update($id_dokter)
    {
        $data['dokter'] = $this->Madmin->get_by_id('dokter', array('id_dokter' => $id_dokter))->row();
        $gambar = $data['dokter']->gambar;

        if (!empty($_FILES['gambar']['name'])) {
            $config['upload_path'] = './assets/gambar_produk/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $this->load->library('upload', $config);
    
            if ($this->upload->do_upload('gambar')) {
                $data_file = $this->upload->data();
                $gambar = $data_file['file_name'];
            } else {
                redirect('dokter/edit/' . $id_dokter, 'refresh');
            }
        }
    
        $Nama_dokter = trim(htmlspecialchars($this->input->post('Nama_dokter')));
        $Alamat_dokter = trim(htmlspecialchars($this->input->post('Alamat_dokter')));
        $Pengalaman_dokter = trim(htmlspecialchars($this->input->post('Pengalaman_dokter')));
        $Alumni_dokter = trim(htmlspecialchars($this->input->post('Alumni_dokter')));
    
        $data_update = array(
            'Nama_dokter' => $Nama_dokter,
            'Alamat_dokter' => $Alamat_dokter,
            'Pengalaman_dokter' => $Pengalaman_dokter,
            'Alumni_dokter' => $Alumni_dokter,
            'gambar' => $gambar
        );
    
        $this->Madmin->update('dokter', $data_update, 'id_dokter', $id_dokter);
        redirect('dokter/index/');
    }


    public function delete($id){
        $this->Madmin->delete('dokter', 'id_dokter', $id);
        redirect('dokter');
    }
}