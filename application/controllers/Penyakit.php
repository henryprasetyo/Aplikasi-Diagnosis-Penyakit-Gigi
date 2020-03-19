<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penyakit extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('data_penyakit');
    }

    public function index()
    {
        $data['penyakit'] = $this->data_penyakit->getAllPenyakit();
        $this->load->view('admin/penyakit', $data);
        $this->load->view('templates/admin_footer');
    }
}
