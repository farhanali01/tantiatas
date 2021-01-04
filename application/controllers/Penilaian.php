<?php

    class Penilaian extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('ModelPenilaian');
        }

        public function addPenilaian(){
            $id_produk = $this->input->post('id_produk');
            $harga = $this->input->post('harga');
            $berat = $this->input->post('berat');
            $bahan = $this->input->post('bahan');

            $data = array(
                'harga'     => $harga,
                'berat'     => $berat,
                'bahan'     => $bahan,
                'id_produk' => $id_produk
            );
            $this->ModelPenilaian->addPenilaian($data);
            redirect(base_url('dashboard/data_penilaian'));
        }
    }