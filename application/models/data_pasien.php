<?php

class Data_pasien extends CI_Model
{
    public function getAllPasien()
    {
        return $this->db->get('tb_pengujian')->result_array();
    }

    public function hapusDataPasien($kode_pengujian)
    {
        $this->db->where('kode_pengujian', $kode_pengujian);
        $this->db->delete('tb_pengujian');
    }
}
