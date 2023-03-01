<?php

class Handphone extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Handphone_model');
        $this->load->library('form_validation');

    }

    public function index()
    {
        $data['judul'] = 'Daftar Handphone';

        $data['handphone'] = $this->Handphone_model->getAllHandphone();
        if( $this->input->post('keyword') ){
            $data['handphone'] = $this->Handphone_model->cariDataHAndphone();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('handphone/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Handphone';

        $this->form_validation->set_rules('merk', 'Merk', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        $this->form_validation->set_rules('buatan', 'Buatan', 'required');

        if( $this->form_validation->run() == FALSE ){
            $this->load->view('templates/header', $data);
            $this->load->view('handphone/tambah');
            $this->load->view('templates/footer');
            
        }else{
            $this->Handphone_model->tambahDataHandphone();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('handphone');
        }
    }

    public function hapus($id)
    {
        $this->Handphone_model->hapusDataHandphone($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('handphone');    
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Handphone';
        $data['handphone'] = $this->Handphone_model->getHandphoneById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('handphone/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Handphone';
        $data['handphone'] = $this->Handphone_model->getHandphoneById($id);
        $data['stok'] = ['Tersedia', 'Habis'];

        $this->form_validation->set_rules('merk', 'Merk', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        $this->form_validation->set_rules('buatan', 'Buatan', 'required');

        if( $this->form_validation->run() == FALSE ){
            $this->load->view('templates/header', $data);
            $this->load->view('handphone/ubah', $data);
            $this->load->view('templates/footer');
            
        }else{
            $this->Handphone_model->ubahDataHandphone();
            $this->session->set_flashdata('flash', 'DiUbah');
            redirect('handphone');
        }
    }
}