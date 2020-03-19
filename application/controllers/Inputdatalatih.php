<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inputdatalatih extends CI_Controller
{

    public function index()
    {
        //mengambil data dari table user yang ada di Auth Private function _login
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('gejala1', 'Gejala1', 'required');
        $this->form_validation->set_rules('gejala2', 'Gejala2', 'required');
        $this->form_validation->set_rules('gejala3', 'Gejala3', 'required');
        $this->form_validation->set_rules('gejala4', 'Gejala4', 'required');
        $this->form_validation->set_rules('gejala5', 'Gejala5', 'required');
        $this->form_validation->set_rules('gejala6', 'Gejala6', 'required');
        $this->form_validation->set_rules('gejala7', 'Gejala7', 'required');
        $this->form_validation->set_rules('gejala8', 'Gejala8', 'required');
        $this->form_validation->set_rules('gejala9', 'Gejala9', 'required');
        $this->form_validation->set_rules('gejala10', 'Gejala10', 'required');
        $this->form_validation->set_rules('gejala11', 'Gejala11', 'required');
        $this->form_validation->set_rules('gejala12', 'Gejala12', 'required');
        $this->form_validation->set_rules('gejala13', 'Gejala13', 'required');
        $this->form_validation->set_rules('gejala14', 'Gejala14', 'required');
        $this->form_validation->set_rules('gejala15', 'Gejala15', 'required');
        $this->form_validation->set_rules('gejala16', 'Gejala16', 'required');
        $this->form_validation->set_rules('gejala17', 'Gejala17', 'required');
        $this->form_validation->set_rules('gejala18', 'Gejala18', 'required');
        $this->form_validation->set_rules('gejala19', 'Gejala19', 'required');
        $this->form_validation->set_rules('gejala20', 'Gejala20', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');


        if ($this->form_validation->run() == false) {
            //desain web menampilkan header dan footer
            $this->load->view('admin/inputdatalatih', $data);
        } else {
            // Validasi Input Data Latih Sukses
            $data = [
                'gejala1' => $this->input->post('gejala1'),
                'gejala2' => $this->input->post('gejala2'),
                'gejala3' => $this->input->post('gejala3'),
                'gejala4' => $this->input->post('gejala4'),
                'gejala5' => $this->input->post('gejala5'),
                'gejala6' => $this->input->post('gejala6'),
                'gejala7' => $this->input->post('gejala7'),
                'gejala8' => $this->input->post('gejala8'),
                'gejala9' => $this->input->post('gejala9'),
                'gejala10' => $this->input->post('gejala10'),
                'gejala11' => $this->input->post('gejala11'),
                'gejala12' => $this->input->post('gejala12'),
                'gejala13' => $this->input->post('gejala13'),
                'gejala14' => $this->input->post('gejala14'),
                'gejala15' => $this->input->post('gejala15'),
                'gejala16' => $this->input->post('gejala16'),
                'gejala17' => $this->input->post('gejala17'),
                'gejala18' => $this->input->post('gejala18'),
                'gejala19' => $this->input->post('gejala19'),
                'gejala20' => $this->input->post('gejala20'),
                'kategori' => $this->input->post('kategori')
            ];

            $this->db->insert('tb_datalatih', $data);
            //pesan berhasil
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! success input data training. </div>');
            redirect('datalatih/index');
        }
    }
}
