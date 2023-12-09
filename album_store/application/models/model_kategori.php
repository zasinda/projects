<?php

class model_kategori extends CI_model{
    public function data_ipop(){
        return $this->db->get_where("produkstore",array('kategori' => 'I-POP'));
    }
    public function data_western(){
        return $this->db->get_where("produkstore",array('kategori' => 'WESTERN'));
    }
    public function data_kpop(){
        return $this->db->get_where("produkstore",array('kategori' => 'K-POP'));
    }
    public function data_jpop(){
        return $this->db->get_where("produkstore",array('kategori' => 'J-POP'));
    }
    public function data_cpop(){
        return $this->db->get_where("produkstore",array('kategori' => 'C-POP'));
    }
}