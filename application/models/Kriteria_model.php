<?php

class kriteria_model extends CI_model
{
    public function getAllKriteria()
    {
        return $this->db->get('kriteria')->result_array();
    }

    public function getKriteriaById($id)
    {
        return $this->db->get_where('kriteria', ['id_kriteria' => $id])->row_array();
    }
    
    public function tambahDataKriteria()
    {
        $data = [
            "simbol_kriteria" => $this->input->post('simbol_kriteria', true),
            "nama_kriteria" => $this->input->post('nama_kriteria', true),
            "ket_kriteria" => $this->input->post('ket_kriteria', true),
            "nilai_kriteria" => $this->input->post('nilai_kriteria', true),
            "bobot_kriteria" => $this->input->post('bobot_kriteria', true)
        ];

        $this->db->insert('kriteria', $data);
    }

    public function ubahDataKriteria()
    {
        $data = [
            "simbol_kriteria" => $this->input->post('simbol_kriteria', true),
            "nama_kriteria" => $this->input->post('nama_kriteria', true),
            "ket_kriteria" => $this->input->post('ket_kriteria', true),
            "nilai_kriteria" => $this->input->post('nilai_kriteria', true),
            "bobot_kriteria" => $this->input->post('bobot_kriteria', true)
        ];

        $this->db->where('id_kriteria', $this->input->post('id_kriteria'));
        $this->db->update('kriteria', $data);
    }
    

    public function getHapusKriteria($id)
    {
        $this->db->delete('kriteria', ['id_kriteria' => $id]);
    }
}
?>