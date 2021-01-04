<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelLogin');
    }
    public function index()
    {
        if ($this->session->userdata('username') != null) {
            redirect(base_url());
        }

        $data = array(

            "active_login" => "active",
            "title" => "Login - Tantia Tas Jakarta"
        );
        $this->load->view('home/header', $data);
        $this->load->view('home/navbar');
        $this->load->view('login/login');
        $this->load->view('home/footer');
    }
    public function proses_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($username != null && $password != null) {
            $data = $this->ModelLogin->getDataByUsername($username);
            if ($data != null) {
                $password_db = $data['password'];
                if (md5($password) == $password_db) {
                    $db_role = $data['role'];
                    if ($db_role > 0) {
                        $this->session->set_userdata('username', $data['username']);
                        $this->session->set_userdata('email', $data['email']);
                        $this->session->set_userdata('id_users', $data['id_users']);
                        $this->session->set_userdata('admin', true);
                        redirect(base_url('Dashboard'));
                    } else {
                        $this->session->set_userdata('username', $data['username']);
                        $this->session->set_userdata('email', $data['email']);
                        $this->session->set_userdata('id_users', $data['id_users']);
                        $this->session->set_userdata('admin', true);
                        redirect(base_url());
                    }
                } else {
                    $this->session->set_flashdata('type', 'danger');
                    $this->session->set_flashdata('pesan', 'Password Salah');
                    redirect(base_url('Login'));
                }
            } else {
                $this->session->set_flashdata('type', 'warning');
                $this->session->set_flashdata('pesan', 'Username Tidak Di Temukan');
                redirect(base_url('Login'));
            }
        } else {
            $this->session->set_flashdata('type', 'warning');
            $this->session->set_flashdata('pesan', 'username dan password tidak boleh kosong');
            redirect(base_url('Login'));
        }
    }

    public function proses_logout()
    {
        session_destroy();
        redirect(base_url());
    }
}
