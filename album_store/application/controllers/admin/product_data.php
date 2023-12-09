<?php

class Product_data extends CI_Controller{

    public function __construct(){
        parent::__construct();
            if($this->session->userdata('role_id') != '1'){
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Your are not logged!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
              redirect('auth/login');
            }
    }

    public function index(){
        $data['produk'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('templates_admin/footer');
        $this->load->view('admin/product_data', $data);
    }

    public function tambah_aksi(){
        $productname = $this->input->post('nama');
        $kategori = $this->input->post('kategori');
        $price = $this->input->post('harga');
        $stock = $this->input->post('stok');
        $desc = $this->input->post('detail');
        $foto = $_FILES['foto'];
		if ($foto='') {
		} else {
			$config['upload_path']   = './uploads/';
			$config['allowed_types'] = 'jpg|jpeg|png|webp';

            $this->load->library('upload');
            $this->upload->initialize($config);
			if (!$this->upload->do_upload('foto')) {
				echo "foto gagal diupload !"; die();
			} else {
				$foto = $this->upload->data('file_name');
			}
		}
		$data = array (
            'nama'   => $productname,
			'harga'  => $price,
            'kategori' => $kategori,
			'stok'   => $stock,
			'detail' => $desc,
			'foto'   => $foto,
		);
		$this->model_barang->tambah_barang($data, 'produkstore');
		redirect('admin/product_data/index');
	}

    public function edit($kd){
        $where = array('kode' => $kd);
        $data['produk'] = $this->model_barang->edit_produk($where, 'produkstore')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('templates_admin/footer');
        $this->load->view('admin/edit_produk', $data);
    }
    public function update(){
        $kd = $this->input->post('kode');
        $productname = $this->input->post('nama');
        $kategori = $this->input->post('kategori');
        $price = $this->input->post('harga');
        $stock = $this->input->post('stok');
        $desc = $this->input->post('detail');
        $foto = $_FILES['foto'];
        if ($foto = '') {
		} else {
			$config['upload_path']   = './uploads/';
			$config['allowed_types'] ='jpg|jpeg|png|webp';

			$this->load->library('upload');
            $this->upload->initialize($config);
			if (!$this->upload->do_upload('foto')) {
				echo "Foto gagal diupload !"; die();
			} else {
				$foto = $this->upload->data('file_name');
			}
		}

        $data = array (
            'nama'   => $productname,
			'harga'  => $price,
            'kategori' => $kategori,
			'stok'   => $stock,
			'detail' => $desc,
			'foto'   => $foto,
		);

        $where = array(
            'kode' => $kd
        );

        $this->model_barang->update_data($where, $data, 'produkstore');
        redirect('admin/product_data/index');
    }
    public function delete ($kd){
        $where = array('kode' => $kd);
        $this->model_barang->hapus_data($where, 'produkstore');
        redirect('admin/product_data/index');
    }
}