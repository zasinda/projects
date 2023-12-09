<?php
defined('BASEPATH') OR exit('NO direct script allowed');

class pasien extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index(){
        $data['pasien']=$this->Madmin->get_all_data('pasien')->result();
        $data['dokter']=$this->Madmin->get_all_data('dokter')->result();
        $this->load->view('admin/pasien/inputpasien', $data);
        $this->load->view('admin/layout/tampil');
    }

    public function add(){
        $data['pasien']=$this->Madmin->get_all_data('pasien')->result();
        $data['dokter']=$this->Madmin->get_all_data('dokter')->result();
        $this->load->view('admin/layout/tampil');
        $this->load->view('admin/pasien/inputpasien',$data);
    }

    public function save()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'required',array('required' => 'Field %s must be filled.'));
        $this->form_validation->set_rules('jk_pasien', 'Jenis Kelamin Pasien', 'required',array('required' => 'Field %s must be filled.'));
        $this->form_validation->set_rules('alamat_pasien', 'Alamat Pasien', 'required',array('required' => 'Field %s must be filled.'));
        $this->form_validation->set_rules('riwayat_penyakit', 'Riwayat Penyakit Pasien', 'required',array('required' => 'Field %s must be filled.'));
        $this->form_validation->set_rules('nik_pasien', 'Nik Pasien', 'required',array('required' => 'Field %s must be filled.'));
        $this->form_validation->set_rules('gol_darah', 'Gol Darah Pasien', 'required',array('required' => 'Field %s must be filled.'));
        $this->form_validation->set_rules('id_dokter', 'Dokter', 'required',array('required' => 'Field %s must be filled.'));

        if ($this->form_validation->run() == FALSE) {
            $data['dokter']=$this->Madmin->get_all_data('dokter')->result();
            $this->load->view('admin/pasien/inputpasien', $data);
        } else {
            $id_dokter = $this->input->post('id_dokter');
            $nama_pasien = $this->input->post('nama_pasien');
            $jk_pasien = $this->input->post('jk_pasien');
            $alamat_pasien = $this->input->post('alamat_pasien');
            $riwayat_penyakit = $this->input->post('riwayat_penyakit');
            $nik_pasien = $this->input->post('nik_pasien');
            $gol_darah = $this->input->post('gol_darah');
    
            $dataInput = array(
                'id_dokter' => $id_dokter,
                'nama_pasien' => $nama_pasien,
                'jk_pasien' => $jk_pasien,
                'alamat_pasien' => $alamat_pasien,
                'riwayat_penyakit' => $riwayat_penyakit,
                'nik_pasien' => $nik_pasien,
                'gol_darah' => $gol_darah
            );
    
            $this->load->model('Madmin');
            $this->Madmin->insert('pasien', $dataInput);
    
            if ($this->db->error()['code']) {
                echo 'Database error: ' . $this->db->error()['message'];
            } else {
                redirect('pasien');
            }
        }
    }
    
    
    
    public function edit($id_pasien)
    {
    $this->load->model('Madmin');
    $data['pasien'] = $this->Madmin->get_by_id('pasien', array('id_pasien' => $id_pasien))->row();
    $data['dokter'] = $this->Madmin->get_all_dokter(); 
    $this->load->view('admin/pasien/editpasien', $data);
    }

    public function update($id_pasien)
{
    $data['pasien'] = $this->Madmin->get_by_id('pasien', array('id_pasien' => $id_pasien))->row();
    $data['dokter'] = $this->Madmin->get_all_data('dokter')->result();

    $this->load->library('form_validation');
    $this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'required', array('required' => 'Field %s must be filled.'));
    $this->form_validation->set_rules('jk_pasien', 'Jenis Kelamin Pasien', 'required', array('required' => 'Field %s must be filled.'));
    $this->form_validation->set_rules('alamat_pasien', 'Alamat Pasien', 'required', array('required' => 'Field %s must be filled.'));
    $this->form_validation->set_rules('riwayat_penyakit', 'Riwayat Penyakit Pasien', 'required', array('required' => 'Field %s must be filled.'));
    $this->form_validation->set_rules('nik_pasien', 'Nik Pasien', 'required', array('required' => 'Field %s must be filled.'));
    $this->form_validation->set_rules('gol_darah', 'Gol Darah Pasien', 'required', array('required' => 'Field %s must be filled.'));
    $this->form_validation->set_rules('id_dokter', 'Dokter', 'required', array('required' => 'Field %s must be filled.'));

    if ($this->form_validation->run() == FALSE) {
        $this->edit($id_pasien);
    } else {
        $id_dokter = $this->input->post('id_dokter');
        $nama_pasien = $this->input->post('nama_pasien');
        $jk_pasien = $this->input->post('jk_pasien');
        $alamat_pasien = $this->input->post('alamat_pasien');
        $riwayat_penyakit = $this->input->post('riwayat_penyakit');
        $nik_pasien = $this->input->post('nik_pasien');
        $gol_darah = $this->input->post('gol_darah');

        $dataUpdate = array(
            'id_dokter' => $id_dokter,
            'nama_pasien' => $nama_pasien,
            'jk_pasien' => $jk_pasien,
            'alamat_pasien' => $alamat_pasien,
            'riwayat_penyakit' => $riwayat_penyakit,
            'nik_pasien' => $nik_pasien,
            'gol_darah' => $gol_darah
        );

        $this->load->model('Madmin');
        $this->Madmin->update('pasien', $dataUpdate, 'id_pasien', $id_pasien);
        redirect('pasien');
    }
}




    public function delete($id){
        $this->Madmin->delete('pasien', 'id_pasien', $id);
        redirect('pasien');
    }
}