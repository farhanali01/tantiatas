<?php

    class Kategori extends CI_Controller
    {
        public function __construct()
        {
            parent:: __construct();
            $this->load->model('ModelKategori');
        }

        public function tambah_kategori()
        {
        $nama_kategori = $this->input->post('nama_kategori');
        if($nama_kategori != null){
        $data = array(

            "nama_kategori" => $nama_kategori
        );
        $this->ModelKategori->insertData($data);
        $this->session->set_flashdata('type','success');
        $this->session->set_flashdata('pesan','Berhasil Tambah Data Kategori !!!');
        redirect(base_url('Dashboard/datakategori'));
    }else{
        $this->session->set_flashdata('type','warning');
        $this->session->set_flashdata('pesan','Data tidak boleh kosong !!!');
        redirect(base_url('Dashboard/datakategori'));
    }
}

        public function update_kategori()
        {
            $id_kategori = $this->input->post('id_kategori');
            $nama_kategori = $this->input->post('nama_kategori');
            if($id_kategori != null && $nama_kategori != null){
            $data = array(

                "nama_kategori" => $nama_kategori
            );
            $this->ModelKategori->updateData($data,$id_kategori);
            $this->session->set_flashdata('type','success');
            $this->session->set_flashdata('pesan','Berhasil Update Data Kategori !!!');
            redirect(base_url('Dashboard/datakategori'));
        }else{
            $this->session->set_flashdata('type','warning');
            $this->session->set_flashdata('pesan','Data tidak boleh kosong !!!');
            redirect(base_url('Dashboard/datakategori'));
        }
    }
        
        public function delete_kategori()
        {
            $id_kategori = $this->uri->segment(3);

            $this->ModelKategori->deleteData($id_kategori);
            $this->session->set_flashdata('type','success');
            $this->session->set_flashdata('pesan','Berhasil Delete Data Kategori !!!');
            redirect(base_url('Dashboard/datakategori'));
        }
    
    }