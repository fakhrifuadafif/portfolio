<?php

class Info extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('info/index');
        $this->load->view('templates/footer');
    }
}