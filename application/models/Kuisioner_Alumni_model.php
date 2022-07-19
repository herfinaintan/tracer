<?php

class Kuisioner_Alumni_model extends CI_Model
{
    public function getAllKuisAlumni()
    {
        return $this->db->get('kuisioner_alumni')->result_array();
    }

    public function getKuisAlumni($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('kuisioner', $keyword);
        }
        return $this->db->get('kuisioner_alumni', $limit, $start)->result_array();
    }

    public function countAllKuisAlumni()
    {
        return $this->db->get('kuisioner_alumni')->num_rows();
    }

    public function tambahDataKuisAlumniTipeA()
    {
        $data = [
            "kuisioner" => $this->input->post('kuisioner', true),
            "model_kuisioner" => $this->input->post('model_kuisioner', true),
            "nama_grup" => $this->input->post('nama_grup', true)
        ];

        $this->db->insert('kuisioner_alumni', $data);
    }

    public function tambahDataKuisAlumniTipeB()
    {
        $data = [
            "kuisioner" => $this->input->post('kuisioner', true),
            "model_kuisioner" => $this->input->post('model_kuisioner', true),
            "nama_grup" => $this->input->post('nama_grup', true),
            "pilihan_A" => $this->input->post('pilihan_A', true),
            "pilihan_B" => $this->input->post('pilihan_B', true),
            "pilihan_C" => $this->input->post('pilihan_C', true),
            "pilihan_D" => $this->input->post('pilihan_D', true),
            "pilihan_E" => $this->input->post('pilihan_E', true),
            "pilihan_F" => $this->input->post('pilihan_F', true),
            "pilihan_G" => $this->input->post('pilihan_G', true),
            "pilihan_H" => $this->input->post('pilihan_H', true),
            "pilihan_I" => $this->input->post('pilihan_I', true),
            "pilihan_J" => $this->input->post('pilihan_J', true),
            "pilihan_K" => $this->input->post('pilihan_K', true),
            "pilihan_L" => $this->input->post('pilihan_L', true),
            "pilihan_M" => $this->input->post('pilihan_M', true),
            "pilihan_N" => $this->input->post('pilihan_N', true),
            "pilihan_O" => $this->input->post('pilihan_O', true)
        ];

        $this->db->insert('kuisioner_alumni', $data);
    }

    public function tambahDataKuisAlumniTipeC()
    {
        $data = [
            "kuisioner" => $this->input->post('kuisioner', true),
            "model_kuisioner" => $this->input->post('model_kuisioner', true),
            "nama_grup" => $this->input->post('nama_grup', true),
            "pilihan_A" => $this->input->post('pilihan_A', true),
            "pilihan_B" => $this->input->post('pilihan_B', true),
            "pilihan_C" => $this->input->post('pilihan_C', true),
            "pilihan_D" => $this->input->post('pilihan_D', true),
            "pilihan_E" => $this->input->post('pilihan_E', true),
            "pilihan_F" => $this->input->post('pilihan_F', true),
            "pilihan_G" => $this->input->post('pilihan_G', true),
            "pilihan_H" => $this->input->post('pilihan_H', true),
            "pilihan_I" => $this->input->post('pilihan_I', true),
            "pilihan_J" => $this->input->post('pilihan_J', true),
            "pilihan_K" => $this->input->post('pilihan_K', true),
            "pilihan_L" => $this->input->post('pilihan_L', true),
            "pilihan_M" => $this->input->post('pilihan_M', true),
            "pilihan_N" => $this->input->post('pilihan_N', true),
            "pilihan_O" => $this->input->post('pilihan_O', true)
        ];

        $this->db->insert('kuisioner_alumni', $data);
    }

    public function hapusKuisAlumni($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kuisioner_alumni');
    }

    public function getKuisAlumniById($id)
    {
        return $this->db->get_where('kuisioner_alumni', ['id' => $id])->row_array();
    }

    public function getKuisAlumniDgId($id)
    {
        return $this->db->get_where('kuisioner_alumni', ['id' => $id])->result_array();
    }

    public function ubahDataKuisAlumniTipeA()
    {
        $data = [
            "kuisioner" => $this->input->post('kuisioner', true),
            "model_kuisioner" => $this->input->post('model_kuisioner', true),
            "nama_grup" => $this->input->post('nama_grup', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('kuisioner_alumni', $data);
    }

    public function ubahDataKuisAlumniTipeB()
    {
        $data = [
            "kuisioner" => $this->input->post('kuisioner', true),
            "model_kuisioner" => $this->input->post('model_kuisioner', true),
            "nama_grup" => $this->input->post('nama_grup', true),
            "pilihan_A" => $this->input->post('pilihan_A', true),
            "pilihan_B" => $this->input->post('pilihan_B', true),
            "pilihan_C" => $this->input->post('pilihan_C', true),
            "pilihan_D" => $this->input->post('pilihan_D', true),
            "pilihan_E" => $this->input->post('pilihan_E', true),
            "pilihan_F" => $this->input->post('pilihan_F', true),
            "pilihan_G" => $this->input->post('pilihan_G', true),
            "pilihan_H" => $this->input->post('pilihan_H', true),
            "pilihan_I" => $this->input->post('pilihan_I', true),
            "pilihan_J" => $this->input->post('pilihan_J', true),
            "pilihan_K" => $this->input->post('pilihan_K', true),
            "pilihan_L" => $this->input->post('pilihan_L', true),
            "pilihan_M" => $this->input->post('pilihan_M', true),
            "pilihan_N" => $this->input->post('pilihan_N', true),
            "pilihan_O" => $this->input->post('pilihan_O', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('kuisioner_alumni', $data);
    }

    public function ubahDataKuisAlumniTipeC()
    {
        $data = [
            "kuisioner" => $this->input->post('kuisioner', true),
            "model_kuisioner" => $this->input->post('model_kuisioner', true),
            "nama_grup" => $this->input->post('nama_grup', true),
            "pilihan_A" => $this->input->post('pilihan_A', true),
            "pilihan_B" => $this->input->post('pilihan_B', true),
            "pilihan_C" => $this->input->post('pilihan_C', true),
            "pilihan_D" => $this->input->post('pilihan_D', true),
            "pilihan_E" => $this->input->post('pilihan_E', true),
            "pilihan_F" => $this->input->post('pilihan_F', true),
            "pilihan_G" => $this->input->post('pilihan_G', true),
            "pilihan_H" => $this->input->post('pilihan_H', true),
            "pilihan_I" => $this->input->post('pilihan_I', true),
            "pilihan_J" => $this->input->post('pilihan_J', true),
            "pilihan_K" => $this->input->post('pilihan_K', true),
            "pilihan_L" => $this->input->post('pilihan_L', true),
            "pilihan_M" => $this->input->post('pilihan_M', true),
            "pilihan_N" => $this->input->post('pilihan_N', true),
            "pilihan_O" => $this->input->post('pilihan_O', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('kuisioner_alumni', $data);
    }


    public function getAllGrup()
    {
        return $this->db->get('grup_kuisioner')->result_array();
    }
}
