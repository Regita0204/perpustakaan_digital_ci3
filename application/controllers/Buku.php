<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Buku_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }
    }

    public function index() {
        $keyword = $this->input->get('keyword');
        $data['buku'] = $this->Buku_model->get_all($keyword);
        $this->load->view('buku/index', $data);
    }

    public function tambah() {
        $this->load->view('buku/form');
    }

    public function simpan() {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('penulis', 'Penulis', 'required');
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
        $this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('buku/form');
        } else {
            $data = $this->input->post();
            $this->Buku_model->insert($data);
            redirect('buku');
        }
    }

    public function edit($id) {
        $data['buku'] = $this->Buku_model->get_by_id($id);
        $this->load->view('buku/form', $data);
    }

    public function update($id) {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('penulis', 'Penulis', 'required');
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
        $this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $data['buku'] = $this->Buku_model->get_by_id($id);
            $this->load->view('buku/form', $data);
        } else {
            $data = $this->input->post();
            $this->Buku_model->update($id, $data);
            redirect('buku');
        }
    }

    public function hapus($id) {
        $this->Buku_model->delete($id);
        redirect('buku');
    }
}
