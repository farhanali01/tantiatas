<?php

    class ModelWishlist extends CI_Model{
        public function insertWishlist($data){
            return $this->db->insert('tbl_wishlist',$data);
        }

        public function cekData($idUsers,$idProduk){
            return $this->db->get_where('tbl_wishlist',array('id_user'=> $idUsers,'id_produk' => $idProduk))->row_array();
        }

        public function getDataWishlistById($id_users){
            $sql = "SELECT * FROM tbl_wishlist,tbl_produk WHERE
                        tbl_wishlist.id_produk = tbl_produk.id_produk AND
                        tbl_wishlist.id_user = ?";
            return $this->db->query($sql,$id_users)->result_array();
        }

        public function deleteWishlist($idUsers,$idProduk){
            $sql = "DELETE FROM tbl_wishlist WHERE
                        id_produk = ? AND
                        id_user = ?";
            return $this->db->query($sql,array($idProduk,$idUsers));
        }
    }