<?php

class Kategori_tas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelKategoriTas');
    }

    public function kategori_tas()
    {
        $id_kategori = $this->uri->segment(3);
        $nama_kategori = $this->input->post('nama_kategori');

        $data = array(
            "nama_kategori" => $nama_kategori
        );
        $this->ModelKategoriTas->insertData($data,$id_kategori);
        redirect(base_url('home/kategori_tas/kategori_tas'));
    }
}
