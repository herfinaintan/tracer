<?php

class Grup_Model_Fakultas extends CI_Model
{
    public function getAllGrup()
    {
        return $this->db->get('grup_kuisioner_fakultas')->result_array();
    }

    public function getGrup($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama_grup', $keyword);
        }
        return $this->db->get('grup_kuisioner_fakultas', $limit, $start)->result_array();
    }

    public function countAllGrup()
    {
        return $this->db->get('grup_kuisioner_fakultas')->num_rows();
    }

    public function tambahGrupKuisioner()
    {
        $data = [
            "nama_grup" => $this->input->post('nama_grup', true)
        ];

        $this->db->insert('grup_kuisioner_fakultas', $data);
    }

    public function hapusGrupKuisioner($id_grup)
    {
        $this->db->where('id_grup', $id_grup);
        $this->db->delete('grup_kuisioner_fakultas');
    }

    public function getGrupById($id_grup)
    {
        return $this->db->get_where('grup_kuisioner_fakultas', ['id_grup' => $id_grup])->row_array();
    }

    public function ubahGrupKuisioner()
    {
        $data = [
            "nama_grup" => $this->input->post('nama_grup', true)
        ];

        $this->db->where('id_grup', $this->input->post('id_grup'));
        $this->db->update('grup_kuisioner_fakultas', $data);
    }
}
