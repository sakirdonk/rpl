<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

    public function index()
    {
        $this->load->model('produk_model', 'produk');
        $data['list_produk'] = $this->produk->getAll();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/produk/index', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/produk/create');
        $this->load->view('layout/footer');
    }

    public function edit()
    {
        $id = $this->input->get('id');
        $this->load->model('produk_model', 'produk');
        $data['list_produk'] = $this->produk->findById($id);

        $this->load->view('layout/header.php');
        $this->load->view('layout/sidebar.php');
        $this->load->view('admin/produk/update', $data);
        $this->load->view('layout/footer.php');
    }

    public function save()
    {
        $this->load->model('produk_model', 'produk');

        $_id = $this->input->post('id_produk');
        $_kode = $this->input->post('kode');
        $_nama_produk = $this->input->post('nama_produk');
        $_stock = $this->input->post('stock');
        $_harga = $this->input->post('harga');
        $_deskripsi = $this->input->post('deskripsi');
        $_idedit = $this->input->post('id'); //hidden field

        if (isset($_id)) {
            $data_produk[] = $_id;
        };

        $data_produk[] = $_kode; // ? 1
        $data_produk[] = $_nama_produk; // ? 2
        $data_produk[] = $_stock; // ? 3
        $data_produk[] = $_harga; // ? 4
        $data_produk[] = $_deskripsi; // ? 5

        if (isset($_idedit)) {
            //update
            $data_produk[] = $_idedit; // ? 11
            $this->produk->update($data_produk);
            redirect(base_url('index.php/admin/produk'), 'refresh');
        } else {
            //fungsi save di mahasiswa_model
            $this->produk->create($data_produk);
            redirect(base_url('index.php/admin/produk'), 'refresh');
        };
    }

    public function view()
    {
        $id = $this->input->get('id');
        $this->load->model('produk_model', 'produk');
        $data['list_produk'] = $this->produk->findById($id);

        $this->load->view('layout/header.php');
        $this->load->view('layout/sidebar.php');
        $this->load->view('admin/produk/view', $data);
        $this->load->view('layout/footer.php');
    }


    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model('produk_model', 'produk');
        $this->produk->delete($_id);

        redirect(base_url() . 'index.php/admin/produk', 'refresh');
    }

    public function upload()
    {
        $this->load->model('produk_model', 'produk');

        $config['upload_path']          = './assets/img/produk';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 1000;
        $config['max_width']            = 2624;
        $config['max_height']           = 2468;

        $_id = $this->input->post('id');

        $array = explode('.', $_FILES['foto']['name']);
        $extension = end($array);

        $new_name = $_id . '1.' . $extension;
        $config['file_name'] = $new_name;
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
            //$this->load->view('upload_form', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            //$this->load->view('upload_success', $data);
            $data_foto[] = $new_name;
            $data_foto[] = $_id;
            $this->produk->uploadFoto($data_foto);
        }

        redirect(base_url('index.php/admin/produk/view?id=') . $_id, 'refresh');
    }

}
