<?php

class ModelUsers extends CI_Model
{
    public function addData($data)
    {
        return $this->db->insert('tbl_users', $data);
    }

    public function getDataByUsername($username)
    {
        return $this->db->get_where('tbl_users', array('username' => $username))->row_array();
    }
    public function getDataDetailUsers($id_users)
    {
        // $sql = "SELECT * FROM tbl_users,tbl_detail_user WHERE
        //         tbl_detail_user.id_users = tbl_users.id_users AND
        //         tbl_users.id_users = ?";
        $sql = "SELECT * FROM tbl_users
                    JOIN tbl_detail_user ON tbl_users.id_users = tbl_detail_user.id_users
                 WHERE tbl_users.id_users = ?";
        return $this->db->query($sql, $id_users)->row_array();
    }
   
    public function updateData($data, $id_users)
    {
        return $this->db->update('tbl_detail_user', $data, array('id_users' => $id_users));
    }

    public function updateProfile($data,$id_users){
        return $this->db->update('tbl_users',$data,array('id_users'=>$id_users));
    }

    public function getDataUsername($username)
    {
        return $this->db->get_where('tbl_users', array('username' => $username))->row_array();
    }

    public function getDataAllUsers()
    {
        $sql = "SELECT * FROM tbl_users,tbl_detail_user WHERE
                    tbl_users.id_users = tbl_detail_user.id_users AND
                    role = 0";
        return $this->db->query($sql)->result_array();
    }

    public function insertDetail($insertDetail)
    {
        return $this->db->insert('tbl_detail_user', $insertDetail);
    }
    public function getDataProfile($id_users)
    {
        $sql = "SELECT * FROM tbl_users,tbl_detail_user WHERE
                    tbl_users.id_users = tbl_detail_user.id_users AND
                    tbl_users.id_users = ?";
        return $this->db->query($sql,$id_users)->result_array();
    }
    public function getDataProfileSingle($id_users)
    {
        $sql = "SELECT * FROM tbl_users,tbl_detail_user WHERE
                    tbl_users.id_users = tbl_detail_user.id_users AND
                    tbl_users.id_users = ?";
        return $this->db->query($sql,$id_users)->row_array();
    }
}
