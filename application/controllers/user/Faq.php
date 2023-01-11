<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Faq extends CI_Controller
{

    public function index()
    {
        $this->load->view('home/header2');
        //iterface looping faq
        $this->load->view('home/footer');
    }
}
