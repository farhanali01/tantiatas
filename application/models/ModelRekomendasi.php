<?php

    class ModelRekomendasi extends CI_Model
    {
        public function getDataRekomendasi()
        {        
            $sql = "SELECT * from tbl_normalisasi_produk,tbl_produk WHERE
            tbl_normalisasi_produk.id_produk = tbl_produk.id_produk 
            ORDER BY total_nilai DESC ";
            return $this->db->query($sql)->result_array();
        }

        public function getDataRekomendasiByDate($bulan,$tahun){
            $sql = "SELECT * from tbl_normalisasi_produk,tbl_produk WHERE
            tbl_normalisasi_produk.id_produk = tbl_produk.id_produk AND
            MONTH(tbl_produk.tanggal) = ? AND
            YEAR(tbl_produk.tanggal) = ? 
            ORDER BY total_nilai DESC ";
            return $this->db->query($sql,array($bulan,$tahun))->result_array();
        }
        public function getDataPenilaianRekomendasi($bulan,$tahun){
            $sql = "SELECT * from tbl_normalisasi_produk,tbl_produk WHERE
            tbl_normalisasi_produk.id_produk = tbl_produk.id_produk AND
            MONTH(tbl_produk.tanggal) = ? AND
            YEAR(tbl_produk.tanggal) = ? 
            ORDER BY total_nilai DESC ";
            return $this->db->query($sql,array($bulan,$tahun))->row_array();
        }
    }