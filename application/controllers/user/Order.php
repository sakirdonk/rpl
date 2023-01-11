<!-- create order -->

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
{

    public function index()
    {
        $this->load->view('home/header2');
        $this->load->view('home/order');
        $this->load->view('home/footer');
    }

    public function create(){
        $this->load->view('home/header2');
        $this->load->view('home/success');
        $this->load->view('home/footer');
    }

    public function delete(){

    }
}