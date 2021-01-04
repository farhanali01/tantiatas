<?php

    class ModelPenilaian extends CI_Model{
        public function addPenilaian($data){
            return $this->db->insert('tbl_penilaianproduk',$data);
        }

        public function getDataPenilaian(){
            $sql = "SELECT * FROM tbl_penilaianproduk,tbl_produk,tbl_kategori WHERE
                        tbl_penilaianproduk.id_produk = tbl_produk.id_produk AND
                        tbl_produk.id_kategori = tbl_kategori.id_kategori ORDER BY tbl_produk.id_produk DESC";
            return $this->db->query($sql)->result_array();
        }
        public function getDataPenilaianRekomendasi(){
            $sql = "SELECT * FROM tbl_penilaianproduk,tbl_produk,tbl_kategori WHERE
                        tbl_penilaianproduk.id_produk = tbl_produk.id_produk AND
                        tbl_produk.id_kategori = tbl_kategori.id_kategori ORDER BY tbl_produk.id_produk DESC";
            return $this->db->query($sql)->row_array();
        }

        public function ambilNilaiMaxBerdasarkanKriteria($kriteria){
            $this->db->select_max($kriteria);

            return $this->db->get('tbl_penilaianproduk')->result_array();
        }

        public function ambilNilaiMinBerdasarkanKriteria($kriteria){
            $this->db->select_min($kriteria);

            return $this->db->get('tbl_penilaianproduk')->result_array();
        }

        public function updatePenilaian($updateData,$id_produk){
            return $this->db->update('tbl_penilaianproduk',$updateData,array('id_produk' => $id_produk));
        }

        public function insertPenilaian($data){
            return $this->db->insert_batch('tbl_normalisasi_produk',$data);
        }

        public function deleteAllNormalisasi(){
            $sql = "DELETE FROM tbl_normalisasi_produk";
            return $this->db->query($sql);
        }
    }