<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pegawai_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Pegawai";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pegawai'] = $this->Pegawai_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("pegawai/vw_pegawai", $data);
        $this->load->view("layout/footer");
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Pegawai";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required', ['required' => 'Nama Pegawai Wajib di isi']);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', ['required' => 'Jenis Kelamin  Wajib di isi']);
        $this->form_validation->set_rules('alamat_pegawai', 'Alamat Pegawai', 'required', ['required' => 'Alamat Pegawai  Wajib di isi']);
        $this->form_validation->set_rules('no_hp', 'No Hp', 'required', ['required' => 'No Hp Wajib di isi']);
        if ($this->form_validation->run() == false) {
        $this->load->view("layout/header", $data);
        $this->load->view("pegawai/vw_tambah_pegawai", $data);
        $this->load->view("layout/footer");
    } else {
        $data = [
            'nama_pegawai' => $this->input->post('nama_pegawai'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat_pegawai' => $this->input->post('alamat_pegawai'),
            'no_hp' => $this->input->post('no_hp'),
            ];
            $this->Pegawai_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success"role="alert">Data Pegawai Berhasil Ditambah!</div>');
            redirect('Pegawai');
        }
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Pegawai";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pegawai'] = $this->Pegawai_model->getById($id);
        $this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required', ['required' => 'Nama Pegawai Wajib di isi']);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', ['required' => 'Jenis Kelamin  Wajib di isi']);
        $this->form_validation->set_rules('alamat_pegawai', 'Alamat Pegawai', 'required', ['required' => 'Alamat Pegawai  Wajib di isi']);
        $this->form_validation->set_rules('no_hp', 'No Hp', 'required', ['required' => 'No Hp Wajib di isi']);
        if ($this->form_validation->run() == false) {
        $this->load->view("layout/header", $data);
        $this->load->view("pegawai/vw_ubah_pegawai", $data);
        $this->load->view("layout/footer",$data);
    } else {
        $data = [
            'nama_pegawai' => $this->input->post('nama_pegawai'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat_pegawai' => $this->input->post('alamat_pegawai'),
            'no_hp' => $this->input->post('no_hp'),
            ];
            $id_pegawai = $this->input->post('id_pegawai');
            $this->Pegawai_model->update(['id_pegawai' => $id_pegawai], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success"role="alert">Data Pegawai Berhasil Diubah!</div>');
            redirect('Pegawai');
        }
    }

    public function hapus($id)
    {
        $this->Pegawai_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success"role="alert">Data Pegawai Berhasil Dihapus!</div>');
        redirect('Pegawai');
    }


}
