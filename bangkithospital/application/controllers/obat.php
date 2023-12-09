<?php
defined('BASEPATH') OR exit('NO direct script allowed');

class obat extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index(){
        $data['obat']=$this->Madmin->get_all_data('obat')->result();
        $this->load->view('admin/obat/inputobat', $data);
        $this->load->view('admin/layout/tampil');
    }

    public function add(){
        $this->load->view('admin/layout/tampil');
        $this->load->view('admin/obat/inputobat');
    }
    public function save()
{
    $this->load->library('form_validation');

    $this->form_validation->set_rules('Nama_obat', 'Nama obat', 'required');
    $this->form_validation->set_rules('Deskripsi_obat', 'Deskripsi obat', 'required');
    $this->form_validation->set_rules('Harga_obat', 'Harga obat', 'required');
    $this->form_validation->set_rules('Stok', 'Stok', 'required');
    $this->form_validation->set_rules('Manufaktur', 'Manufaktur', 'required');

    if ($this->form_validation->run() == FALSE) {
        $this->load->model('Madmin');
        $data['obat'] = $this->Madmin->get_all_obat();
        $this->load->view('admin/obat/inputobat', $data);
        $this->load->view('admin/layout/tampil');
    } else {
    
        $Nama_obat = trim(htmlspecialchars($this->input->post('Nama_obat')));
        $Deskripsi_obat = trim(htmlspecialchars($this->input->post('Deskripsi_obat')));
        $Harga_obat = trim(htmlspecialchars($this->input->post('Harga_obat')));
        $Stok = trim(htmlspecialchars($this->input->post('Stok')));
        $Manufaktur = trim(htmlspecialchars($this->input->post('Manufaktur')));

        $dataInput = array(
            'Nama_obat' => $Nama_obat,
            'Deskripsi_obat' => $Deskripsi_obat,
            'Harga_obat' => $Harga_obat,
            'Stok' => $Stok,
            'Manufaktur' => $Manufaktur
        );

        $this->load->model('Madmin');
        $this->Madmin->insert('obat', $dataInput);

        if ($this->db->error()['code']) {
            echo 'Database error: ' . $this->db->error()['message'];
            
        } else {
            redirect('obat');
        }
    }
}
public function get_by_id($id_obat) {
    $this->load->model('Madmin');
    $data['obat'] = $this->Madmin->get_by_id('obat', array('id_obat' => $id_obat))->row();
    $this->load->view('admin/obat/editobat', $data);
}

public function edit($id) {
    $this->load->library('form_validation');

    $id = $this->input->post('id');
    $Nama_obat = $this->input->post('Nama_obat');
    $Deskripsi_obat = $this->input->post('Deskripsi_obat');
    $Harga_obat = $this->input->post('Harga_obat');
    $Stok = $this->input->post('Stok');
    $Manufaktur = $this->input->post('Manufaktur');

    $this->form_validation->set_rules('Nama_obat', 'Nama obat', 'required');
    $this->form_validation->set_rules('Deskripsi_obat', 'Deskripsi obat', 'required');
    $this->form_validation->set_rules('Harga_obat', 'Harga obat', 'required');
    $this->form_validation->set_rules('Stok', 'Stok', 'required');
    $this->form_validation->set_rules('Manufaktur', 'Manufaktur', 'required');

    if ($this->form_validation->run() == FALSE) {
       
        $data['obat'] = $this->Madmin->get_by_id('obat', array('id_obat' => $id))->row();
        $this->load->view('admin/obat/editobat', $data);
    } else {
        $dataUpdate = array(
            'Nama_obat' => $Nama_obat,
            'Deskripsi_obat' => $Deskripsi_obat,
            'Harga_obat' => $Harga_obat,
            'Stok' => $Stok,
            'Manufaktur' => $Manufaktur
        );

        
        $this->Madmin->update('obat', $dataUpdate, 'id_obat', $id);
        redirect('obat');
    }
}


    public function delete($id){
        $this->Madmin->delete('obat', 'id_obat', $id);
        redirect('obat');
    }
}