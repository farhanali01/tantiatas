<?php

class ModelKategoriTas extends CI_Model{

    public function insertData($data,$nama_kategori)
    {
        return $this->db->insert('tbl_kategori', $data, array('nama_kategori' => $nama_kategori))->row_array();
    }
    
}