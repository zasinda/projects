<?php

class Kategori extends CI_Controller{
    public function ipop(){
        $data['ipop'] = $this->model_kategori->data_ipop()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('ipop', $data);
        $this->load->view('templates/footer');
    }
    public function western(){
        $data['western'] = $this->model_kategori->data_western()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('western', $data);
        $this->load->view('templates/footer');
    }
        public function kpop(){
            $data['kpop'] = $this->model_kategori->data_kpop()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('kpop', $data);
            $this->load->view('templates/footer');
        }
        public function jpop(){
            $data['jpop'] = $this->model_kategori->data_jpop()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('jpop', $data);
            $this->load->view('templates/footer');
        }
        public function cpop(){
            $data['cpop'] = $this->model_kategori->data_cpop()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('cpop', $data);
            $this->load->view('templates/footer');
        }
}