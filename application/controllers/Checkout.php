<?php

  class Checkout extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('ModelUsers');
        $this->load->model('ModelCheckout');
        $this->load->model('ModelCart');

    }

    public function proses_checkout(){
        $id_users = $this->session->userdata('id_users');
       
        
        
        $kota = $this->input->post('kota');
        $alamat = $this->input->post('alamat');
        $hp = $this->input->post('hp');
        $kode_pos = $this->input->post('kode_pos');
        $id_card = $this->input->post('id_card');
        $total = $this->input->post('total');
      

        if($kota != null && $alamat != null && $hp != null && $kode_pos != null ){
            $data = array(
               
                
                
                'kota' => $kota,
                'alamat' => $alamat,
                'hp' => $hp,
                'kode_pos' => $kode_pos
            );
            $this->ModelUsers->updateData($data,$id_users);
            $id_transaksi = "TRN". date('ymdHms');
            foreach ($id_card as $key => $value){
                $dataTransaksi = array([
                    'id_transaksi' => $id_transaksi,
                    'id_card' => $id_card[$key],
                    'tanggal' => date('y-m-d'),
                    'total_harga' => $total
                ]);
                $this->ModelCheckout->insertTransaksi($dataTransaksi);
                $dataStatus = array(
                    'status' => 1
                );
                $this->ModelCart->updateStatus($dataStatus,$id_users);

            }
            redirect(base_url('home/confirm/'.$id_transaksi));
        }else{
            $this->session->set_flashdata('pesan', 'Data Tidak Boleh Kosong');
            $this->session->set_flashdata('type', 'error');
            $this->session->set_flashdata('title', 'Failed');
            redirect(base_url('home/checkout'));
        }

    }
}