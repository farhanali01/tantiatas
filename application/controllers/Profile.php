<?php

class Profile extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('ModelUsers');
   }


   public function Profile()
   {
      $this->load->view('home/header');
      $this->load->view('home/navbar');
      $this->load->view('home/profile/profile');
      $this->load->view('home/footer');
   }

   public function changeProfile()
   {
      $id_users = $this->session->userdata('id_users');
      $username = $this->input->post('username');
      $fullname = $this->input->post('nama_lengkap');
      $alamat = $this->input->post('alamat');
      $hp = $this->input->post('hp');
      $email = $this->input->post('email');
      $cekFoto = $_FILES['foto']['name'];

      if ($username != null && $fullname != null && $alamat != null && $hp != null && $email != null) {
         if ($cekFoto != null) {
            $config['upload_path']          = './assets/foto_users/';
            $config['allowed_types']        = 'gif|jpg|png';
            $this->upload->initialize($config);
            if ($this->upload->do_upload('foto')) {
               $data_file = array('upload_data' => $this->upload->data());
               $namaFoto = $data_file['upload_data']['file_name'];
            } else {
               $this->session->set_flashdata('pesan', 'Foto tidak terupload');
               $this->session->set_flashdata('type', 'warning');
               redirect(base_url('home/profile'));
            }
         } else {
            $data = $this->ModelUsers->getDataProfileSingle($id_users);
            $namaFoto =  $data['foto'];
         }

         $profile = array(
            'fullname' => $fullname,
            'email'     => $email,
            

         );
         $detail = array(
            'foto'   => $namaFoto,
            'hp'     => $hp,
            'alamat' => $alamat
         );
         $this->ModelUsers->updateData($detail, $id_users);
         $this->ModelUsers->updateProfile($profile, $id_users);
         $this->session->set_flashdata('pesan', 'Data Profile Berhasil diperbarui');
         $this->session->set_flashdata('type', 'success');
         redirect(base_url('home/profile'));
      } else {
         $this->session->set_flashdata('pesan', 'Data tidak boleh kosong');
         $this->session->set_flashdata('type', 'warning');
         redirect(base_url('home/profile'));
      }
   }
}
