<?php

 class ModelCart extends CI_Model
 {
     public function getDataCartByUsers($id_produk,$id_users){
        $sql = "SELECT * FROM tbl_card WHERE id_produk = ? AND id_users = ? ORDER BY id_card DESC
        ";
         return $this->db->query($sql, array($id_produk,$id_users))->row_array();
     }

     public function updatecart($data,$id_cart){
         return $this->db->update('tbl_card',$data, array('id_card' => $id_cart));
     }

     public function insertcart($data){
         return $this->db->insert('tbl_card',$data);
     }
     public function getDataCart($id_users){
         $sql = "SELECT * FROM tbl_card,tbl_users,tbl_produk WHERE
         tbl_card.id_produk = tbl_produk.id_produk AND
         tbl_card.id_users  = tbl_users.id_users AND
         tbl_card.id_users  = ? AND
         tbl_card.status = 0 "; 
         return $this->db->query($sql,$id_users)->result_array();
     }
     public function updateStatus($dataStatus,$id_users){
        return $this->db->update('tbl_card',$dataStatus, array('id_users' => $id_users));
     }
    public function deleteDataCart($id_card)
    {
        return $this->db->delete('tbl_card',array('id_card' => $id_card));
    }
 }