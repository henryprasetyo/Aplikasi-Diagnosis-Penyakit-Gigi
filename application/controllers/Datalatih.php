<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datalatih extends CI_Controller
{

    public function index()
    {
        $this->load->model('data_latih');
        $data['datalatih'] = $this->data_latih->getAllDatalatih();
        $this->load->view('admin/datalatih', $data);
        $this->load->view('templates/admin_footer');
    }
}
