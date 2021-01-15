<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelProduk');
        $this->load->model('ModelCart');
        $this->load->model('ModelUsers');
        $this->load->model('ModelKategori');
        $this->load->model('ModelTransaksi');
        $this->load->model('ModelRekomendasi');
        $this->load->model('ModelWishlist');
    }

    public function index()
    {

        $data = array(
            "active_home" => "active",
            "data_produk" => $this->ModelProduk->getDataProdukLimit(4),
            "slider_produk" => $this->ModelProduk->getDataProdukLimit(3),


        );
        $this->load->view('home/header', $data);
        $this->load->view('home/navbar');
        $this->load->view('home/content');
        $this->load->view('home/footer');
    }

    public function dataCart()
    {
        $id_users = $this->session->userdata('id_users');

        $data = array(
            "active_cart" => "active",
            "title" => "home - Keranjang",
            "data_cart" => $this->ModelCart->getDataCart($id_users),
            'data_detail'   => $this->ModelUsers->getDataProfileSingle($id_users)
        );
        $this->load->view('home/header', $data);
        $this->load->view('home/navbar');
        $this->load->view('home/cart/cart');
        $this->load->view('home/footer');
    }
    public function Cart()
    {
        $id_users = $this->session->userdata('id_users');
        if ($id_users == null) {
            redirect(base_url());
        }
        $data = array(
            "active_cart" => "active",
            "title" => "home - Keranjang",
            "data_cart" => $this->ModelCart->getDataCart($id_users),
            
        );
        $this->load->view('home/header', $data);
        $this->load->view('home/navbar');
        $this->load->view('home/cart/cart');
        $this->load->view('home/footer');
    }
    public function checkout()
    {
        $id_users = $this->session->userdata('id_users');
        
        if ($id_users == null) {
            redirect(base_url());
        }
        $data = array(
            "active_cart" => "active",
            "title" => "home - Checkout",
            "data_cart" => $this->ModelCart->getDataCart($id_users),
            "data_users" => $this->ModelUsers->getDataDetailUsers($id_users)
        );
        $this->load->view('home/header', $data);
        $this->load->view('home/navbar');
        $this->load->view('home/checkout/checkout');
        $this->load->view('home/footer');
    }
    public function confirm()
    {
        $id_transaksi = $this->uri->segment(3);
        $data = array(
            "data_transaksi" => $this->ModelTransaksi->getDataTransaksi($id_transaksi),
            "data_transaksi_group" => $this->ModelTransaksi->getDataTransaksiGroup($id_transaksi)
        );

        $this->load->view('home/header', $data);
        $this->load->view('home/navbar');
        $this->load->view('home/confirm/confirm');
        $this->load->view('home/footer');
    }
    public function transaksi()
    {
        $id_users = $this->session->userdata('id_users');
        if ($id_users == null) {
            redirect(base_url());
        }

        $data = array(
            "active_transaksi" => "active",
            "title" => "home - Riwayat Transaksi",
            "data_transaksi" => $this->ModelTransaksi->getDataByUser($id_users),


        );
        $this->load->view('home/header', $data);
        $this->load->view('home/navbar');
        $this->load->view('home/confirm/form_transaksi');
        $this->load->view('home/footer');
    }

    public function kategori_tas()
    {
        $data = array(
            "active_kategori" => "active",
            "title" => "home - Semua Produk",
            "data_kategori" => $this->ModelKategori->getData(),
            "data_produk" => $this->ModelProduk->getData()
        );
        $this->load->view('home/header', $data);
        $this->load->view('home/navbar');
        $this->load->view('home/kategori_tas/kategori_tas');
        $this->load->view('home/footer');
    }

    public function produk_favorite(){
        $id_users = $this->session->userdata('id_users');
        
        $data = array(
            "active_favorite" => "active",
            "title" => "home - Produk Favorite",
            "data_produk" => $this->ModelWishlist->getDataWishlistById($id_users)
        );
        $this->load->view('home/header', $data);
        $this->load->view('home/navbar');
        $this->load->view('home/kategori_tas/datafavorite');
        $this->load->view('home/footer');
    }

    public function kategori_produk(){
        $id_produk = $this->uri->segment(3);
        $data = array(
            "active_kategori" => "active",
            "title" => "home - Kategori Tas",
            "data_kategori" => $this->ModelKategori->getData(),
            "data_product" => $this->ModelKategori->getData(),
            "data_produk" => $this->ModelProduk->getDataById($id_produk)
        );
        $this->load->view('home/header', $data);
        $this->load->view('home/navbar');
        $this->load->view('home/kategori_tas/kategori_tas');
        $this->load->view('home/footer');
    }

    public function Contact()
    {
        $data = array(
            "active_tentangkami" => "active",
            "title" => "home - Tentang Kami"
        );
        $this->load->view('home/header',$data);
        $this->load->view('home/navbar');
        $this->load->view('home/contact/contact');
        $this->load->view('home/footer');
    }

    public function Profile()
    {
        $id_users = $this->session->userdata('id_users');
        $data = array(
            "active_profile" => "active",
            "title" => "home - Profile",
            "profile_users" => $this->ModelUsers->getDataProfile($id_users)
        );
        $this->load->view('home/header',$data);
        $this->load->view('home/navbar');
        $this->load->view('home/profile/profile');
        $this->load->view('home/footer');
    }

    public function Rekomendasi()
    {
        $bulan = date('m');
        $tahun = date('Y');
        $data = array(
            'active_rekomendasi' => 'active',
            'data_rekomendasi' => $this->ModelRekomendasi->getDataRekomendasiByDate($bulan,$tahun)
        );
        $this->load->view('home/header',$data);
        $this->load->view('home/navbar');
        $this->load->view('home/rekomendasi/rekomendasi');
        $this->load->view('home/footer');
    }

    public function Detail_produk()
    {
        $id_produk = $this->uri->segment(3);
        $data_produk = $this->ModelProduk->getDataProdukByIdProduk($id_produk);
        $id_kategori = $data_produk['id_kategori'];
        $data = array(
            "active_kategori" => "active",
            "title" => "home - Detail Produk",
            "detail_produk" => $this->ModelProduk->getDataDetailProduk($id_produk),
            'produk_terkait'    => $this->ModelProduk->getDataTerkait($id_kategori,$id_produk)
        );
        
        $this->load->view('home/header',$data);
        $this->load->view('home/navbar');
        $this->load->view('home/detail_produk/detail_produk');
        $this->load->view('home/footer');
    }
}
