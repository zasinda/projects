<?php
defined('BASEPATH') OR exit('NO direct script allowed');

class temujanji extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index() {
        $data['temujanji'] = $this->Madmin->get_all_temujanji('temujanji')->result();
        $this->load->view('admin/temujanji/temujanji', $data);
    }

    public function delete($id_temujanji)
    {
    $this->Madmin->delete('temujanji', 'id_temujanji', $id_temujanji);
    redirect('temujanji');
    }

}