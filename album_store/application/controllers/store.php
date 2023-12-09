<?php

class store extends CI_Controller{
    public function index(){
        $data['produk'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
        $this->load->view('store', $data);
    }
    public function add_to_cart($kd){
        $produk = $this->model_barang->find($kd);

        $data = array(
            'id' => $produk->kode,
            'qty' => 1,
            'price' => $produk->harga,
            'name' => $produk->nama
        );
        $this->cart->insert($data);
        redirect('store');
    }
    public function detail_cart(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
        $this->load->view('cart');
    }

    public function delete_cart(){
        $this->cart->destroy();
        redirect('store/index');
    }

    public function checkout(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
        $this->load->view('checkout');
    }

    public function proses_pesanan(){
        $this->cart->destroy();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
        $this->load->view('proses_pesanan');
    }
}