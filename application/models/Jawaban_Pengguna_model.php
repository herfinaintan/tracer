<?php

class Jawaban_Pengguna_model extends CI_Model
{
    public function getAllKuisPengguna()
    {
        return $this->db->get('kuisioner_pengguna_alumni')->result_array();
    }
    public function getAllKuisFakultas()
    {
        return $this->db->get('kuisioner_fakultas_pengguna')->result_array();
    }

    public function getAllIDKuisPengguna($id)
    {
        return $this->db->get_where('kuisioner_pengguna_alumni', ['id' => $id])->result_array();
    }
    public function getAllIDKuisFakultas($id)
    {
        return $this->db->get_where('kuisioner_fakultas_pengguna', ['id' => $id])->result_array();
    }


    public function kirim()
    {
        $data = [
            "jawaban" => $this->input->post('kuisioner', true),
            "jawaban_fakultas" => $this->input->post('fakultas', true),
        ];

        $this->db->insert('jawaban_pengguna_alumni', $data);
    }

    
}
