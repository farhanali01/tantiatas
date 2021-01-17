<?php

class ModelTransaksi extends CI_Model
{
    public function getDataTransaksi($id_transaksi)
    {
        $sql = "SELECT * FROM tbl_transaksi,tbl_card,tbl_users,tbl_produk,tbl_detail_user WHERE
        tbl_transaksi.id_card = tbl_card.id_card AND
        tbl_card.id_users = tbl_users.id_users AND
        tbl_card.id_produk = tbl_produk.id_produk AND
        tbl_detail_user.id_users = tbl_users.id_users AND
        tbl_transaksi.id_transaksi = ?";

        return $this->db->query($sql, $id_transaksi)->result_array();
    }
    public function getDataTransaksiGroup($id_transaksi)
    {
        $sql = "SELECT * FROM tbl_transaksi,tbl_card,tbl_users,tbl_produk,tbl_detail_user WHERE
        tbl_transaksi.id_card = tbl_card.id_card AND
        tbl_card.id_users = tbl_users.id_users AND
        tbl_card.id_produk = tbl_produk.id_produk AND
        tbl_detail_user.id_users = tbl_users.id_users AND
        tbl_transaksi.id_transaksi = ? GROUP BY id_transaksi";

        return $this->db->query($sql, $id_transaksi)->row_array();
    }

    public  function getDataByUser($id_users)
    {
        $sql = "SELECT * FROM tbl_transaksi,tbl_card,tbl_users,tbl_produk,tbl_detail_user WHERE
        tbl_transaksi.id_card = tbl_card.id_card AND
        tbl_card.id_users = tbl_users.id_users AND
        tbl_card.id_produk = tbl_produk.id_produk AND
        tbl_detail_user.id_users = tbl_users.id_users AND
        tbl_card.id_users = ? GROUP BY id_transaksi";

        return $this->db->query($sql, $id_users)->result_array();
    }

    public function getAllDataPemesanan()
    {
        $sql = "SELECT * FROM tbl_transaksi,tbl_card,tbl_users,tbl_produk,tbl_detail_user WHERE
        tbl_transaksi.id_card = tbl_card.id_card AND
        tbl_card.id_users = tbl_users.id_users AND
        tbl_card.id_produk = tbl_produk.id_produk AND
        tbl_detail_user.id_users = tbl_users.id_users AND
        status_transaksi = 0 GROUP BY id_transaksi ORDER BY Number DESC";

        return $this->db->query($sql)->result_array();
    }

    public function getAllDataTransaksi()
    {
        $sql = "SELECT * FROM tbl_transaksi,tbl_card,tbl_users,tbl_produk,tbl_detail_user WHERE
        tbl_transaksi.id_card = tbl_card.id_card AND
        tbl_card.id_users = tbl_users.id_users AND
        tbl_card.id_produk = tbl_produk.id_produk AND
        tbl_detail_user.id_users = tbl_users.id_users AND
        status_transaksi > 0 GROUP BY id_transaksi ORDER BY Number DESC";

        return $this->db->query($sql)->result_array();
    }

    public function updateStatusTransaksi($data, $id_transaksi)
    {
        return $this->db->update('tbl_transaksi', $data, array('id_transaksi' => $id_transaksi));
    }

    public function updateDataTransaksi($data, $id_transaksi)
    {
        return $this->db->update('tbl_transaksi', $data, array('id_transaksi' => $id_transaksi));
    }

    public function updateProsesTransaksi($data, $id_transaksi)
    {
        return $this->db->update('tbl_transaksi', $data, array('id_transaksi' => $id_transaksi));
    }
    public function deleteData($id_transaksi)
    {
        return $this->db->delete('tbl_transaksi', array('id_transaksi' => $id_transaksi));
    }
    public function deleteDataPemesanan($id_transaksi)
    {
        return $this->db->delete('tbl_transaksi', array('id_transaksi' => $id_transaksi));
    }
    public function getDataDetail($id_transaksi)
    {
        return $this->db->get('tbl_transaksi', array('id_transaksi' => $id_transaksi));
    }

    public function getDataTransaksiByIdTransaksi($id)
    {
        $sql = "SELECT * FROM tbl_transaksi,tbl_card,tbl_users,tbl_produk,tbl_detail_user WHERE
                tbl_transaksi.id_card = tbl_card.id_card AND
                tbl_card.id_users = tbl_users.id_users AND
                tbl_card.id_produk = tbl_produk.id_produk AND
                tbl_detail_user.id_users = tbl_users.id_users AND
                id_transaksi = ?";

        return $this->db->query($sql, $id)->result_array();
    }
    public function getDataLaporan($bulan,$tahun)
    {
        $sql = "SELECT * FROM tbl_transaksi,tbl_card,tbl_users,tbl_produk,tbl_detail_user WHERE
                tbl_transaksi.id_card = tbl_card.id_card AND
                tbl_card.id_users = tbl_users.id_users AND
                tbl_card.id_produk = tbl_produk.id_produk AND
                tbl_detail_user.id_users = tbl_users.id_users AND
                MONTH(tbl_transaksi.tanggal_transaksi) = ? AND
                YEAR(tbl_transaksi.tanggal_transaksi) = ?
                ";

        return $this->db->query($sql,array($bulan,$tahun))->result_array();
    }

    public function getDataLaporanPerTahun($perTahun){
        $sql = "SELECT * FROM tbl_transaksi,tbl_card,tbl_users,tbl_produk,tbl_detail_user WHERE
                tbl_transaksi.id_card = tbl_card.id_card AND
                tbl_card.id_users = tbl_users.id_users AND
                tbl_card.id_produk = tbl_produk.id_produk AND
                tbl_detail_user.id_users = tbl_users.id_users AND
                YEAR(tbl_transaksi.tanggal_transaksi) = ?
                ";

        return $this->db->query($sql,array($perTahun))->result_array();
    }

    public function getDataPendapatan($status,$date)
    {
        $sql = "SELECT DISTINCT(id_transaksi), SUM(total_harga)as total FROM tbl_transaksi 
                WHERE status_transaksi = ?  AND
                MONTH(tanggal_transaksi) = ?";
        return $this->db->query($sql, array($status,$date))->row_array();
    }
    public function deleteStatus($id_transaksi)
    {
        return $this->db->delete('tbl_transaksi', array('id_transaksi' => $id_transaksi));
    }
}
