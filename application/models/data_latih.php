<?php

class Data_latih extends CI_Model
{
    public function getAllDatalatih()
    {
        return $this->db->get('tb_datalatih')->result_array();
    }
}
