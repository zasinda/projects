<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index()
    {
        $data['produk'] = $this->Madmin->get_all_data('tbl_produk')->result();
        $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('home/layout/header', $data);
        $this->load->view('home/layanan');
        $this->load->view('home/home');
        $this->load->view('home/layout/footer');
    }

    public function register()
    {
        $data['produk'] = $this->Madmin->get_all_data('tbl_produk')->result();
        $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('home/layout/header', $data);
        $this->load->view('home/register');
        $this->load->view('home/layout/footer');
    }

    public function login()
    {
        $data['produk'] = $this->Madmin->get_all_data('tbl_produk')->result();
        $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('home/layout/header', $data);
        $this->load->view('home/login');
        $this->load->view('home/layout/footer');
    }

    
    public function saveregister() 
    {

            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $namaKonsumen = $this->input->post('namaKonsumen');
            $alamat = $this->input->post('alamat');
            $email = $this->input->post('email');
            $tlpn = $this->input->post('tlpn');
            $statusAktif =$this->input->post('statusAktif');

            $dataInput=array('username'=>$username,'password'=>$password,'namaKonsumen'=>$namaKonsumen,
            'alamat'=>$alamat,'email'=>$email,'tlpn'=>$tlpn,'statusAktif'=>$statusAktif
            );

            $this->Madmin->insert('tbl_member',$dataInput);
            redirect('main/login');
    }

    public function process_login() {
        $this->load->model('Madmin');
        $u= $this->input->post('username');
        $p= $this->input->post('password');

        $cek = $this->Madmin->cek_login_member($u, md5($p))->num_rows();
        $result = $this->Madmin->cek_login_member($u,md5($p))->row_object();

        if($cek==1){
            $data_session = array(
                'idKonsumen' => $result->idKonsumen,
                'Member' => $u,
                'status' => 'login'
            );
            $this->session->set_userdata($data_session);
            redirect('main/dashboard');
        } else {
            redirect('main/login');
        }
    }

    public function detail_produk ($idProduk){
        $dataWhere = array('idProduk'=>$idProduk);
        $data['produk'] = $this->Madmin->get_all_data('tbl_produk', $dataWhere)->row();
        $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('home/layout/header', $data);
        $this->load->view('home/detail_produk', $data);
        $this->load->view('home/layout/footer');
    }

    public function add_cart($idProduk){
        $dataWhere = array('idProduk'=>$idProduk);
        $produk = $this->Madmin->get_by_id('tbl_produk', $dataWhere)->row_object();

        //add product to the cart
        $data = array(
            'id' => $produk->idProduk,
            'qty' => 1,
            'price' => $produk->harga,
            'name' => $produk->namaProduk,
            'image' => $produk->foto
        );
        $this->cart->insert($data);
        redirect("main/cart");
    }
    public function cart(){
        $data['cartItems'] = $this->cart->contents();
        $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('home/layout/header', $data);
        $this->load->view('home/cart', $data);
        $this->load->view('home/layout/footer');
    }
    public function delete_cart($rowid){
        $remove = $this->cart->remove($rowid);
        redirect("main/cart");
    }
    public function dashboard()
    {
        $data['produk'] = $this->Madmin->get_all_data('tbl_produk')->result();
        $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('home/layout/header', $data);
        $this->load->view('home/dashboard');
        $this->load->view('home/layout/footer');
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('main/index');
    }
}