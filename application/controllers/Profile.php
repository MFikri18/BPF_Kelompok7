<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'userrole');
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Profile";
        $data['user'] = $this->userrole->getBy();
        $this->load->view("layout/header", $data);
        $this->load->view("profile/vw_profile", $data);
        $this->load->view("layout/footer", $data);
    }
    
}

?>