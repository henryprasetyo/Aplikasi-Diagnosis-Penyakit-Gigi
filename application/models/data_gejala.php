<?php

class Data_Gejala extends CI_Model
{
    public function getAllGejala()
    {
        return $this->db->get('tb_gejala')->result_array();
    }
}
