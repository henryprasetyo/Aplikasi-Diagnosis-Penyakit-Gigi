<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gejala extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('data_gejala');
    }

    public function index()
    {
        $data['datagejala'] = $this->data_gejala->getAllGejala();
        $this->load->view('admin/gejala', $data);
        $this->load->view('templates/admin_footer');
    }
}
