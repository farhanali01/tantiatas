<?php

 class Contact extends CI_Controller
 {
     public function Contact ()
     {
        $this->load->view('home/header');
        $this->load->view('home/navbar');
        $this->load->view('home/contact/contact');
        $this->load->view('home/footer');
     }
 }