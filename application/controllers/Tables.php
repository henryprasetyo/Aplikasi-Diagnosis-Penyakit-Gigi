<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tables extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('data_pasien');
    }

    public function index()
    {
        $data['pasien'] = $this->data_pasien->getAllPasien();
        $this->load->view('admin/tables', $data);
        $this->load->view('templates/admin_footer');
    }

    public function hapus($kode_pengujian)
    {

        $this->data_pasien->hapusDataPasien($kode_pengujian);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('tables');
    }
}
