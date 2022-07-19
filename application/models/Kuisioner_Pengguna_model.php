<?php

class Kuisioner_Pengguna_model extends CI_Model
{
    public function getAllKuisPengguna()
    {
        return $this->db->get('kuisioner_pengguna_alumni')->result_array();
    }

    public function getKuisPengguna($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('kuisioner', $keyword);
        }
        return $this->db->get('kuisioner_pengguna_alumni', $limit, $start)->result_array();
    }

    public function countAllKuisPengguna()
    {
        return $this->db->get('kuisioner_pengguna_alumni')->num_rows();
    }

    public function tambahDataKuisPenggunaTipeA()
    {
        $data = [
            "kuisioner" => $this->input->post('kuisioner', true),
            "model_kuisioner" => $this->input->post('model_kuisioner', true),
        ];

        $this->db->insert('kuisioner_pengguna_alumni', $data);
    }

    public function tambahDataKuisPenggunaTipeB()
    {
        $data = [
            "kuisioner" => $this->input->post('kuisioner', true),
            "model_kuisioner" => $this->input->post('model_kuisioner', true),
            "pilihan_A" => $this->input->post('pilihan_A', true),
            "pilihan_B" => $this->input->post('pilihan_B', true),
            "pilihan_C" => $this->input->post('pilihan_C', true),
            "pilihan_D" => $this->input->post('pilihan_D', true)
        ];

        $this->db->insert('kuisioner_pengguna_alumni', $data);
    }


    public function hapusKuisPengguna($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kuisioner_pengguna_alumni');
    }

    public function getKuisPenggunaById($id)
    {
        return $this->db->get_where('kuisioner_pengguna_alumni', ['id' => $id])->row_array();
    }

    public function getKuisPenggunaDgId($id)
    {
        return $this->db->get_where('kuisioner_pengguna_alumni', ['id' => $id])->result_array();
    }

    public function ubahDataKuisPenggunaTipeA()
    {
        $data = [
            "kuisioner" => $this->input->post('kuisioner', true),
            "model_kuisioner" => $this->input->post('model_kuisioner', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('kuisioner_pengguna_alumni', $data);
    }

    public function ubahDataKuisPenggunaTipeB()
    {
        $data = [
            "kuisioner" => $this->input->post('kuisioner', true),
            "model_kuisioner" => $this->input->post('model_kuisioner', true),
            "pilihan_A" => $this->input->post('pilihan_A', true),
            "pilihan_B" => $this->input->post('pilihan_B', true),
            "pilihan_C" => $this->input->post('pilihan_C', true),
            "pilihan_D" => $this->input->post('pilihan_D', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('kuisioner_pengguna_alumni', $data);
    }


    public function getAllGrup()
    {
        return $this->db->get('grup_kuisioner')->result_array();
    }
}
