<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil extends CI_Controller
{

    public function index()
    {
        //query data gejala dari database
        $data['gejala'] = $this->db->get('tb_gejala')->result_array();

        //query data penyakit dari database
        $data['penyakit'] = $this->db->get('tb_penyakit')->result_array();

        $data['title'] = 'Hasil';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/hasil', $data);
        $this->load->view('templates/footer');
    }

    public function cetak($kode_penyakit)
    {
        $data['gejala'] = $this->db->get('tb_gejala')->result_array();
        $penyakit = $this->db->get_where('tb_penyakit', ['kode_penyakit' => $kode_penyakit])->row_array();


        $data['pdf'] = [
            'nama'         => $this->session->userdata('nama'),
            'email'      => $this->session->userdata('email'),
            'date'         => date('d F Y'),
            'gejala1'     => $this->session->userdata('gejala1'),
            'gejala2'     => $this->session->userdata('gejala2'),
            'gejala3'     => $this->session->userdata('gejala3'),
            'gejala4'     => $this->session->userdata('gejala4'),
            'gejala5'     => $this->session->userdata('gejala5'),
            'gejala6'     => $this->session->userdata('gejala6'),
            'gejala7'     => $this->session->userdata('gejala7'),
            'gejala8'     => $this->session->userdata('gejala8'),
            'gejala9'     => $this->session->userdata('gejala9'),
            'gejala10'     => $this->session->userdata('gejala10'),
            'gejala11'     => $this->session->userdata('gejala11'),
            'gejala12'     => $this->session->userdata('gejala12'),
            'gejala13'     => $this->session->userdata('gejala13'),
            'gejala14'     => $this->session->userdata('gejala14'),
            'gejala15'     => $this->session->userdata('gejala15'),
            'gejala16'     => $this->session->userdata('gejala16'),
            'gejala17'     => $this->session->userdata('gejala17'),
            'gejala18'     => $this->session->userdata('gejala18'),
            'gejala19'     => $this->session->userdata('gejala19'),
            'gejala20'     => $this->session->userdata('gejala20'),
            'gejala21'     => $this->session->userdata('gejala21'),
            'gejala22'     => $this->session->userdata('gejala22'),
            'gejala23'     => $this->session->userdata('gejala23'),
            'gejala24'     => $this->session->userdata('gejala24'),
            'gejala25'     => $this->session->userdata('gejala25'),
            'penyakit'     => $penyakit['nama_penyakit'],
            'penyebab'     => $penyakit['penyebab'],
            'solusi'       => $penyakit['solusi'],
            'saran'        => $penyakit['saran']
        ];



        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "CetakHasilDiagnosa.pdf";
        $this->pdf->load_view('pdf/hasil_diagnosa', $data);
    }
}
