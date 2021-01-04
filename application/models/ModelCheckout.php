<?php

 class ModelCheckout extends CI_Model
 {
     public function insertTransaksi($dataTransaksi){
         return $this->db->insert_batch('tbl_transaksi',$dataTransaksi);
     }
 }