<?php

class ModelKategori extends CI_Model
{
    public function insertData($data)
    {
        return $this->db->insert('tbl_kategori', $data);
    }
    public function getData()
    {
        return $this->db->get('tbl_kategori')->result_array();
    }

    public function updateData($data,$id_kategori){
        return $this->db->update('tbl_kategori',$data ,array('id_kategori' => $id_kategori));
}
    public function deleteData($id_kategori){
        return $this->db->delete('tbl_kategori', array('id_kategori' => $id_kategori));
        
    }
    }

