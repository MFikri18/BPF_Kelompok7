<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Barang";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->Barang_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("barang/vw_barang", $data);
        $this->load->view("layout/footer", $data);
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Barang";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required', ['required' => 'Nama Barang Wajib di isi']);
        $this->form_validation->set_rules('jenis_barang', 'Jenis Barang', 'required', ['required' => 'Jenis Barang  Wajib di isi']);
        $this->form_validation->set_rules('harga', 'Harga', 'required', ['required' => 'Harga  Wajib di isi']);
        $this->form_validation->set_rules('stok', 'Stok', 'required', ['required' => 'Stok Wajib di isi']);
        if ($this->form_validation->run() == false) {
        $this->load->view("layout/header", $data);
        $this->load->view("barang/vw_tambah_barang", $data);
        $this->load->view("layout/footer",$data);
    } else {
        $data = [
        'nama_barang' => $this->input->post('nama_barang'),
        'jenis_barang' => $this->input->post('jenis_barang'),
        'harga' => $this->input->post('harga'),
        'stok' => $this->input->post('stok'),
        ];
    $this->Barang_model->insert($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Barang Berhasil Ditambah!</div>');
    redirect('Barang');
    }
    }
    
    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Barang";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->Barang_model->getById($id);
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required', ['required' => 'Nama Barang Wajib di isi']);
        $this->form_validation->set_rules('jenis_barang', 'Jenis Barang', 'required', ['required' => 'Jenis Barang  Wajib di isi']);
        $this->form_validation->set_rules('harga', 'Harga', 'required', ['required' => 'Harga  Wajib di isi']);
        $this->form_validation->set_rules('stok', 'Stok', 'required', ['required' => 'Stok Wajib di isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("barang/vw_ubah_barang", $data);
            $this->load->view("layout/footer",$data);
    } else {
        $data = [
            'nama_barang' => $this->input->post('nama_barang'),
            'jenis_barang' => $this->input->post('jenis_barang'),
            'harga' => $this->input->post('harga'),
            'stok' => $this->input->post('stok'),
            ];
            $id_barang = $this->input->post('id_barang');
            $this->Barang_model->update(['id_barang' => $id_barang], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success"role="alert">Data Barang Berhasil DiUbah!</div>');
            redirect('Barang'); 
    }
}

    public function hapus($id)
    {
        $this->Barang_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success"role="alert">Data Barang Berhasil Dihapus!</div>');
        redirect('Barang');
    }

}
