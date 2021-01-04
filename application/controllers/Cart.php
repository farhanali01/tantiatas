<?php

class Cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelCart');
    }

    public function tambah_cart()
    {
        $id_produk = $this->uri->segment(3);
        $id_users = $this->session->userdata('id_users');
        $cekproduk = $this->ModelCart->getDataCartByUsers($id_produk, $id_users);

        if ($id_users != null) {
            $statusCart = $cekproduk['status'];
            if ($cekproduk != null && $statusCart == 0) {

                $qtybefore = $cekproduk['qty'];
                $qtyafter = $qtybefore + 1;
                $id_cart = $cekproduk['id_card'];

                $data = array(

                    "id_users" => $id_users,
                    "id_produk" => $id_produk,
                    "qty" => $qtyafter
                );

                $this->ModelCart->updatecart($data, $id_cart);
                $this->session->set_flashdata('pesan', 'berhasil ditambahkan ke cart');
                $this->session->set_flashdata('type', 'success');
                $this->session->set_flashdata('title', 'Berhasil');
                redirect(base_url());
            } else {
                $data = array(

                    "id_users" => $id_users,
                    "id_produk" => $id_produk,
                    "qty" => 1
                );

                $this->ModelCart->insertcart($data);
                $this->session->set_flashdata('pesan', 'berhasil ditambahkan ke cart');
                $this->session->set_flashdata('type', 'info');
                $this->session->set_flashdata('title', 'Berhasil');
                redirect(base_url());
            }
        } else {
            $this->session->set_flashdata('pesan', 'Harus Login Dahulu');
            $this->session->set_flashdata('type', 'error');
            $this->session->set_flashdata('title', 'Failed');
            redirect(base_url());
        }
    }
    public function delete_cart()
    {
        $id_card = $this->uri->segment(3);

        $this->ModelCart->deleteDataCart($id_card);
        $this->session->set_flashdata('type', 'success');
        $this->session->set_flashdata('pesan', 'Berhasil Delete Cart !!!');
        redirect(base_url('Home/dataCart'));
    }
    public function updateCart()
    {
        $id_card = $this->input->post('id_card');
        $qty = $this->input->post('qty');
        for ($i = 0; $i < count($id_card); $i++) {
            $data = array([
                'id_card' => $id_card[$i],
                'qty'      => $qty[$i]
            ]);

            $this->db->update_batch('tbl_card', $data, 'id_card');
        }
        redirect(base_url('home/dataCart'));
        $this->session->set_flashdata('type', 'success');
        $this->session->set_flashdata('pesan', 'Berhasil Update Cart !!!');
        $this->session->set_flashdata('title', 'Success');
    }
}
