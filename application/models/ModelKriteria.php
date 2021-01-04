<?php

    class ModelKriteria extends CI_Model{

        public function getDataKriteria(){
            return $this->db->get_where('tbl_kriteria')->result_array();
        }

        public function addKriteria($data){
            return $this->db->insert('tbl_kriteria',$data);
        }

        public function getDataKriteriaByTipe($tipe){
            return $this->db->get_where('tbl_kriteria',array('tipe_kriteria' => $tipe))->result_array();
        }
        public function updateKriteria($data,$id_kriteria){
            return $this->db->update('tbl_kriteria',$data,array('id_kriteria' => $id_kriteria));
        }
        public function deleteData($id_kriteria){
            return $this->db->delete('tbl_kriteria', array('id_kriteria' => $id_kriteria));  
        }
    }