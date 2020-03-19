<?php

class Data_Penyakit extends CI_Model
{
    public function getAllPenyakit()
    {
        return $this->db->get('tb_penyakit')->result_array();
    }
}
