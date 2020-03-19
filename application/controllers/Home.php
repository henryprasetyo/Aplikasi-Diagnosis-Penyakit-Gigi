<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Halaman Utama';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }

    public function nama()
    {

        //data nama diterima dengan metode POST
        $nama     = $this->input->post('nama');

        //data email diterima dengan metode POST
        $email     = $this->input->post('email');

        //mengubah data gejala yang dipilih ke dalam array
        $dataGejala = [
            'nama'      => $nama,
            'email'      => $email,
        ];

        //data yang telah diubah menjadi array, selanjutnya disimpan ke dalam session
        $this->session->set_userdata($dataGejala);

        //dialihkan ke halaman hasil diagnosa
        redirect('diagnosa');
    }
}
