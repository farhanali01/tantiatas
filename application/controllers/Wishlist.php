<?php

class Wishlist extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelWishlist');
    }

    public function addWishlist()
    {
        $idUsers = $this->session->userdata('id_users');
        $idProduk = $this->uri->segment(3);

        if ($idUsers != null) {
            $cekWishlist = $this->ModelWishlist->cekData($idUsers, $idProduk);
            if ($cekWishlist == null) {
                $data = array(
                    'id_produk'     => $idProduk,
                    'id_user'       => $idUsers
                );

                $this->ModelWishlist->insertWishlist($data);
                $this->session->set_flashdata('type', 'success');
                $this->session->set_flashdata('pesan', 'Produk berhasil ditambahkan kedalam daftar favorite');
                $this->session->set_flashdata('title', 'Produk Berhasil ditambahkan');
            } else {
                $this->session->set_flashdata('type', 'info');
                $this->session->set_flashdata('pesan', 'Produk sudah didalam daftar favorite');
                $this->session->set_flashdata('title', 'Produk sudah ada');
            }
           
        }else{
            $this->session->set_flashdata('type', 'error');
            $this->session->set_flashdata('pesan', 'Silahkan Login terlebih dahulu !!');
            $this->session->set_flashdata('title', 'Tambah Gagal');
        }
        if ($this->uri->segment(4) != null) {
            redirect(base_url('home/kategori_tas'));
        } else {
            redirect(base_url());
        }
    }

    public function deleteWishlist()
    {
        $idUsers = $this->session->userdata('id_users');
        $idProduk = $this->uri->segment(3);

        $this->ModelWishlist->deleteWishlist($idUsers, $idProduk);
        $this->session->set_flashdata('type', 'success');
        $this->session->set_flashdata('pesan', 'Produk berhasil dihapus dari daftar favorite');
        $this->session->set_flashdata('title', 'Produk Berhasil dihapus');
        redirect(base_url('home/produk_favorite'));
    }
}
