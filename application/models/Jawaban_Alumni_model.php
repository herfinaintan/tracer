<?php

class Jawaban_Alumni_model extends CI_Model
{
    public function getAllKuisAlumni()
    {
        return $this->db->get('kuisioner_alumni')->result_array();
    }

    public function getAllKuisFakultas()
    {
        return $this->db->get('kuisioner_fakultas_alumni')->result_array();
    }

    public function getKuisAlumni($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('kuisioner', $keyword);
            $this->db->or_like('model_kuisioner', $keyword);
            $this->db->or_like('nama_grup', $keyword);
        }
        return $this->db->get('kuisioner_alumni', $limit, $start)->result_array();
    }

    public function getKuisAlumniById($id)
    {
        return $this->db->get_where('kuisioner_alumni', ['id' => $id])->row_array();
    }

    public function getKuisAlumniDgId($id)
    {
        return $this->db->get_where('kuisioner_alumni', ['id' => $id])->result_array();
    }


    public function kirim()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "fakultas" => $this->input->post('fakultas', true),
            "jurusan" => $this->input->post('jurusan', true),
            "fakultas_id" => $this->input->post('fakultas_id', true),
            "jurusan_id" => $this->input->post('jurusan_id', true),
            "jawaban_A" => $this->input->post('jawaban_A', true),
            "jawaban_B" => $this->input->post('jawaban_B', true),
            "jawaban_C" => $this->input->post('jawaban_C', true),
            "jawab_A" => $this->input->post('jawab_A', true),
            "jawab_B" => $this->input->post('jawab_B', true),
            "jawab_C" => $this->input->post('jawab_C', true)
        ];

        $this->db->insert('jawaban_alumni', $data);
    }

}
