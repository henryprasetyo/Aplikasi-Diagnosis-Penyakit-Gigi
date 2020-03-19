<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'About';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/about');
        $this->load->view('templates/footer');
    }
}
