<?php

class ModelProduk extends CI_Model
{
    public function insertData($data)
    {
        return $this->db->insert('tbl_produk', $data);
    }
    public function getData()
    {

        $sql = "SELECT * from tbl_produk,tbl_kategori WHERE
        tbl_produk.id_kategori = tbl_kategori.id_kategori
        ORDER BY id_produk DESC ";
        return $this->db->query($sql)->result_array();
    }

    public function getDataTerkait($id_kategori,$id_produk)
    {
        $sql = "SELECT * from tbl_produk,tbl_kategori WHERE
        tbl_produk.id_kategori = tbl_kategori.id_kategori AND
        tbl_produk.id_kategori = ? AND
        tbl_produk.id_produk != ? LIMIT 4 ";
        return $this->db->query($sql, array($id_kategori,$id_produk))->result_array();
    }

    public function getDataProdukByIdProduk($id)
    {
        return $this->db->get_where('tbl_produk', array('id_produk' => $id))->row_array();
    }

    public function getDataEnd()
    {
        $sql = "SELECT * FROM tbl_produk ORDER BY id_produk DESC ";
        return $this->db->query($sql)->row_array();
    }

    public function getDataById($id_produk)
    {
        $sql = "SELECT * from tbl_produk,tbl_kategori WHERE
                    tbl_produk.id_kategori = tbl_kategori.id_kategori AND
                    tbl_produk.id_kategori = ?
                    ORDER BY id_produk DESC ";
        return $this->db->query($sql, $id_produk)->result_array();
    }

    public function updateData($data, $id_produk)
    {
        return $this->db->update('tbl_produk', $data, array('id_produk' => $id_produk));
    }

    public function getDataProdukId($id_produk)
    {
        return $this->db->get_where('tbl_produk', array('id_produk' => $id_produk))->row_array();
    }
    public function getDataDetail($id_produk)
    {
        return $this->db->get_where('tbl_produk', array('id_produk' => $id_produk))->row_array();
    }

    public function getDataProdukLimit($limit)
    {
        $sql = "SELECT * from tbl_produk,tbl_kategori WHERE
        tbl_produk.id_kategori = tbl_kategori.id_kategori
        ORDER BY id_produk DESC LIMIT ?";
        return $this->db->query($sql, $limit)->result_array();
    }

    public function deleteData($id_produk)
    {
        return $this->db->delete('tbl_produk', array('id_produk' => $id_produk));
    }

    public function getDataDetailProduk($id_produk)
    {
        $sql = "SELECT * FROM tbl_penilaianproduk,tbl_produk,tbl_kategori WHERE
                    tbl_penilaianproduk.id_produk = tbl_produk.id_produk AND
                    tbl_produk.id_kategori = tbl_kategori.id_kategori and
                    tbl_produk.id_produk = ?";
        return $this->db->query($sql, $id_produk)->row_array();
    }
}
