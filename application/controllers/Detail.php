<!-- Interface Detail -->

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail extends CI_Controller
{

    public function index()
    {
        $id = $this->input->get('id');
        $this->load->model('produk_model', 'produk');
        $data['list_produk'] = $this->produk->findById($id);

        $this->load->model('review_model', 'review');
        $data['list_review'] = $this->review->ratingProduk($id);
        $data['avg_review'] = $this->review->rateRating($id);
        
        $this->load->view('home/header2');
        $this->load->view('home/detail', $data);
        $this->load->view('home/footer');
    }
}