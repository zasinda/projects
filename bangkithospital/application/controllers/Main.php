<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Madmin');
        $this->load->helper('security');
        $this->load->library('encryption');
    }    

    public function register()
    {
        $this->load->view('member/register');
    }

    public function register_process()
    {
        $this->load->helper('security');
        
        $data = array(
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'usr_member' => $this->input->post('usr_member'),
            'ps_member' => md5($this->input->post('ps_member')) // Hash the password using MD5
        );
        
        $this->Madmin->insert('member', $data);
        redirect('main');
    }
    
    public function login()
    {
        $this->load->view('member/login');
    }

    public function login_process()
    {
    $this->load->helper('security');

    $username = $this->input->post('username');
    $password = md5($this->input->post('password')); // Hash the input password using MD5

    $result = $this->Madmin->cek_login($username, $password);

    if ($result->num_rows() == 1) {
        $user_data = $result->row();
        $this->session->set_userdata('user_id', $user_data->id_member);
        redirect('main');
    } else {
        $this->session->set_flashdata('error', 'Username atau Password salah');
        redirect('main/login');
    }
    }

    public function index()
    {
        $data['dokter'] = $this->Madmin->get_all_data('dokter')->result();
        $this->load->view('member/layout/header', $data);
        $this->load->view('member/home', $data);
        $this->load->view('member/layout/footer');
    }

    public function spesialis() 
    {
    if ($this->session->userdata('user_id')) {
        $data['dokter'] = $this->Madmin->get_all_data('dokter')->result();
        $user_id = $this->session->userdata('user_id');
        $user_data = $this->Madmin->get_user_by_id($user_id)->row();
        $nama_lengkap = $user_data->nama_lengkap;
        $this->load->view('member/layout/header', $data);
        $this->load->view('member/spesialis', $data);
        $this->load->view('member/layout/footer');
    } else {
        redirect('main/login');
    }
    }

    public function listdokter_by_spesialis($id_spesialis)
    {   
    if ($this->session->userdata('user_id')) {
        $data['dokter'] = $this->Madmin->get_all_dokter_by_spesialis($id_spesialis);
        $user_id = $this->session->userdata('user_id');
        $user_data = $this->Madmin->get_user_by_id($user_id)->row();
        $nama_lengkap = $user_data->nama_lengkap;
        $this->load->view('member/layout/header', $data);
        $this->load->view('member/listdokter', $data);
        $this->load->view('member/layout/footer');
    } else {
        redirect('main/login');
    }
    }

    public function detail_data_dokter($id_dokter)
    {
        if ($this->session->userdata('user_id')) {
            $data['dokter'] = $this->Madmin->get_dokter_by_id($id_dokter);
            $user_id = $this->session->userdata('user_id');
            $user_data = $this->Madmin->get_user_by_id($user_id)->row();
            $data['user'] = $this->Madmin->get_user_by_id($user_id)->row();
            $data['nama_lengkap'] = $user_data->nama_lengkap;
            $data['id_member'] = $user_data->id_member;
            $this->load->view('member/layout/header', $data);
            $this->load->view('member/dokterprofile', $data);
            $this->load->view('member/layout/footer');
        } else {
            redirect('main/login');
        }
    }
    
    public function save_temujanji()
    {
    $tanggal = $this->input->post('tanggal');
    $dayOfWeek = date('l', strtotime($tanggal));
    if ($dayOfWeek !== 'Monday' && $dayOfWeek !== 'Wednesday' && $dayOfWeek !== 'Friday') {
        $this->session->set_flashdata('error', 'Pilih Tanggal dan hari pada hari Senin, Rabu, Jumat!');
        $id_dokter = $this->input->post('id_dokter');
        redirect('main/detail_data_dokter/' . $id_dokter);
    }
    $id_member = $this->input->post('id_member');
    $id_dokter = $this->input->post('id_dokter');
    $tanggal = $this->input->post('tanggal');
    $sesi = $this->input->post('id_sesi');
    if ($this->Madmin->check_duplicate_temujanji($id_member, $id_dokter, $tanggal, $sesi)) {
        $this->session->set_flashdata('error', 'Anda sudah memiliki jadwal temu janji dengan dokter ini pada tanggal dan sesi yang sama.');
        redirect('main/detail_data_dokter/' . $id_dokter);
    }

    $data = array(
        'id_member' => $id_member,
        'id_dokter' => $id_dokter,
        'no_hp' => $this->input->post('no_hp'),
        'sesi' => $this->input->post('id_sesi'),
        'keluhan' => $this->input->post('keluhan'),
        'harga' => $this->input->post('harga'),
        'tanggal' => $tanggal
    );
    $this->Madmin->insert('temujanji', $data);
    redirect('main');
    }

    public function detail_temujanji()
    {
    if ($this->session->userdata('user_id')) {
        $user_id = $this->session->userdata('user_id');
        $user_data = $this->Madmin->get_user_by_id($user_id)->row();
        $data['nama_lengkap'] = $user_data->nama_lengkap;
        $data['id_member'] = $user_data->id_member;
        $data['temujanji'] = $this->Madmin->get_temujanji_by_member_id($user_data->id_member);
        $this->load->view('member/layout/header', $data);
        $this->load->view('member/janjimember', $data);
        $this->load->view('member/layout/footer');
    } else {
        redirect('main/login');
    }
    }

    public function cancel_temujanji($id_temujanji)
    {
        $this->Madmin->delete('temujanji', 'id_temujanji', $id_temujanji);
        redirect('main');
    }

    public function detailprofile()
    {
        if ($this->session->userdata('user_id')) {
            $data['dokter'] = $this->Madmin->get_all_data('dokter')->result();
            $user_id = $this->session->userdata('user_id');
            $user_data = $this->Madmin->get_user_by_id($user_id)->row();
            $data['user'] = $this->Madmin->get_user_by_id($user_id)->row();
            $nama_lengkap = $user_data->nama_lengkap;
            $this->load->view('member/layout/header', $data);
            $this->load->view('member/detailprofile', $data);
            $this->load->view('member/layout/footer');
        } else {
            redirect('main/login');
        }
    }
    
    public function update_profile()
    {
    $this->load->helper('security');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
    $this->form_validation->set_rules('email_member', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('nohp_member', 'No Handphone', 'trim|required|numeric');
    $this->form_validation->set_rules('alamat_member', 'Alamat', 'trim|required');
    $this->form_validation->set_rules('nik_member', 'NIK', 'trim|required|numeric');
    $this->form_validation->set_rules('jk_member', 'Jenis Kelamin', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
        $this->load->view('edit_profile');
    } else {
        $nama_lengkap = $this->input->post('nama_lengkap');
        $email_member = $this->input->post('email_member');
        $nohp_member = $this->input->post('nohp_member');
        $alamat_member = $this->input->post('alamat_member');
        $nik_member = $this->input->post('nik_member');
        $jk_member = $this->input->post('jk_member');
        $data = array(
            'nama_lengkap' => $nama_lengkap,
            'email_member' => $email_member,
            'nohp_member' => $nohp_member,
            'alamat_member' => $alamat_member,
            'nik_member' => $nik_member,
            'jk_member' => $jk_member
        );
        $user_id = $this->session->userdata('user_id');
        $result = $this->Madmin->update('member', $data, 'id_member', $user_id);

        if ($result) {
            $this->session->set_flashdata('success', 'Profil berhasil diperbarui.');
            redirect('main');
        } else {
            $this->session->set_flashdata('error', 'Gagal memperbarui profil. Silakan coba lagi.');
            $this->load->view('main/detailprofile');
        }
    }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('main/login');
    }


}