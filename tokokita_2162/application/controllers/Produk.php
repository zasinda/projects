<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Produk extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
    }
 
    public function index($idToko){
        $data['idToko'] = $idToko;
        $datawhere = array('idToko'=>$idToko);
        $data['produk'] = $this->Madmin->get_by_id('tbl_produk', $datawhere)->result();
        $this->load->view('home/layout/header');
        $this->load->view('home/produk/index', $data);
        $this->load->view('home/layout/footer');
    }
 
    public function add($idToko) {
        $data['idToko'] = $idToko;
        $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('home/layout/header');
        $this->load->view('home/produk/form_tambah', $data);
        $this->load->view('home/layout/footer');
    }
 
 
    public function save()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('kategori', 'kategori', 'required',array('required' => 'Field %s must be filled.'));
        $this->form_validation->set_rules('namaProduk', 'Nama Produk', 'required',array('required' => 'Field %s must be filled.'));
        $this->form_validation->set_rules('hargaProduk', 'Hagra Produk', 'required',array('required' => 'Field %s must be filled.'));
        $this->form_validation->set_rules('jumlahProduk', 'Jumlah Produk', 'required',array('required' => 'Field %s must be filled.'));
        $this->form_validation->set_rules('beratProduk', 'Berat Produk', 'required',array('required' => 'Field %s must be filled.'));
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required',array('required' => 'Field %s must be filled.'));
 
        if ($this->form_validation->run() == FALSE) {
            $data['idToko'] = $this->input->post('idToko');
            $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
            $this->load->view('home/layout/header');
            $this->load->view('home/produk/form_tambah', $data);
            $this->load->view('home/layout/footer');
        } else {
            $idToko = $this->input->post('idToko');
            $kategori = $this->input->post('kategori');
            $namaProduk = $this->input->post('namaProduk');
            $hargaProduk = $this->input->post('hargaProduk');
            $jumlahProduk = $this->input->post('jumlahProduk');
            $beratProduk = $this->input->post('beratProduk');
            $deskripsi = $this->input->post('deskripsi');
            $config['upload_path'] = './assets/foto_produk/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $this->load->library('upload', $config);
 
            if ($this->upload->do_upload('gambar')) {
                $data_file = $this->upload->data();
                $data_insert = array(
                    'idkat' => $kategori,
                    'idToko' => $idToko,
                    'harga' => $hargaProduk,
                    'namaProduk' => $namaProduk,
                    'stok' => $jumlahProduk,
                    'berat' => $beratProduk,
                    'foto' => $data_file['file_name'],
                    'deskripsiProduk' => $deskripsi,
                );
                $this->Madmin->insert('tbl_produk', $data_insert);
                redirect('produk/index/'.$idToko);
            } else {
                redirect('toko/add'.$idToko);
            }
        }
    }
 
    public function edit($idProduk) {
        $data['idToko'] = $this->Madmin->get_by_id('tbl_produk', array('idProduk' => $idProduk))->row()->idToko;
        $data['produk'] = $this->Madmin->get_by_id('tbl_produk', array('idProduk' => $idProduk))->row();
        $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('home/layout/header');
        $this->load->view('home/produk/form_edit', $data);
        $this->load->view('home/layout/footer');
    }
 
    public function update($idProduk)
    {
        $idToko = $this->input->post('idToko');
        $data['produk'] = $this->Madmin->get_by_id('tbl_produk', array('idProduk' => $idProduk))->row();
        $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
 
        $gambar = $data['produk']->foto;
 
        if (!empty($_FILES['gambar']['name'])) {
            $config['upload_path'] = './assets/foto_produk/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $this->load->library('upload', $config);
 
            if ($this->upload->do_upload('gambar')) {
                $data_file = $this->upload->data();
                $gambar = $data_file['file_name'];
            } else {
                redirect('produk/edit/' . $idProduk, 'refresh');
            }
        }
 
        $idKat = $this->input->post('idKat');
        $namaProduk = $this->input->post('namaProduk');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $berat = $this->input->post('berat');
        $deskripsi = $this->input->post('deskripsiProduk');
 
        $data_update = array(
            'idKat' => $idKat,
            'idToko' => $idToko,
            'harga' => $harga,
            'namaProduk' => $namaProduk,
            'stok' => $stok,
            'berat' => $berat,
            'foto' => $gambar,
            'deskripsiProduk' => $deskripsi
        );
 
        $this->Madmin->update('tbl_produk', $data_update, 'idProduk', $idProduk);
        redirect('produk/index/'.$idToko);
    }
 
 
 
    public function delete($id){
        $data = $this->Madmin->get_by_id('tbl_produk', array('idProduk' => $id))->row();
        $idToko = $data->idToko;
        $this->Madmin->delete('tbl_produk', 'idProduk', $id);
        redirect('produk/index/'.$idToko);
    }
}