<?php

 class Rekomendasi extends CI_Controller
 {
     public function Rekomendasi()
     {
        $this->load->view('home/header');
        $this->load->view('home/navbar');
        $this->load->view('home/rekomendasi/rekomendasi');
        $this->load->view('home/footer');
     }
 }