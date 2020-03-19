<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $data['pasien'] = $this->db->query('SELECT COUNT(kode_pengujian) as total FROM tb_pengujian')->row_array();
        $data['datalatih'] = $this->db->query('SELECT COUNT(kode_datalatih) as total FROM tb_datalatih')->row_array();
        $data['gejala'] = $this->db->query('SELECT COUNT(kode_gejala) as total FROM tb_gejala')->row_array();
        $data['penyakit'] = $this->db->query('SELECT COUNT(kode_penyakit) as total FROM tb_penyakit')->row_array();

        $data['user'] = $this->db->get_where('tb_user', ['id' => $this->session->userdata('id')])->row_array();
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates/admin_footer');
    }
}
