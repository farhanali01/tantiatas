<?php

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelUsers');
    }

    public function index()
    {

        $data = array(

            "active_register" => "active",
            "title" => "Register - Toko"
        );
        $this->load->view('home/header', $data);
        $this->load->view('home/navbar');
        $this->load->view('login/register');
        $this->load->view('home/footer');
    }

    public function proses_register()
    {
        $username = $this->input->post('username');
        $fullname = $this->input->post('fullname');
        $password = $this->input->post('password');
        $konfirmasipassword = $this->input->post('konfirmasipassword');

        if ($username != null && $fullname != null && $password != null && $konfirmasipassword != null) {
            if ($password == $konfirmasipassword) {
                $cekData = $this->ModelUsers->getDataByUsername($username);
                if ($cekData == null) {
                    $data = array(

                        'username' => $username,
                        'fullname' => $fullname,
                        'password' => md5($password)


                    );
                    $this->ModelUsers->addData($data);
                    
                    $getDataUsers = $this->ModelUsers->getDataByUsername($username);
                    $id_users = $getDataUsers['id_users'];
                    $insertDetail = array(
                        'id_users'  => $id_users
                    );

                    $this->ModelUsers->insertDetail($insertDetail);
                    $this->session->set_flashdata('type', 'success');
                    $this->session->set_flashdata('pesan', 'Sukses register silahkan login');
                    redirect(base_url('Register'));
                } else {
                    $this->session->set_flashdata('type', 'warning');
                    $this->session->set_flashdata('pesan', 'Username sudah digunakan !!!');
                    redirect(base_url('Register'));
                }

                
            } else {
                $this->session->set_flashdata('type', 'warning');
                $this->session->set_flashdata('pesan', 'password tidak sama dengan konfirmasi password');
                redirect(base_url('Register'));
            }
        } else {
            $this->session->set_flashdata('type', 'warning');
            $this->session->set_flashdata('pesan', 'Data tidak boleh kosong');
            redirect(base_url('Register'));
        }
    }
}
