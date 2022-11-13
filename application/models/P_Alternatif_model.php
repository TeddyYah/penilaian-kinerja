<?php

class P_Alternatif_model extends CI_model 
{
    public function getAllPAlternatif()
    {
        return $this->db->get('p_alternatif')->result_array();
    }
    
    public function getPAlternatifById($id)
    {
        return $this->db->get_where('p_alternatif', ['id_p_alternatif' => $id])->row_array();
    }

    public function getAllPAlternatiX()
    {
        $this->db->select('*');
        $this->db->from('karyawan');
        $this->db->where('nilai_alternatif', 0);
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function getPAlternatifById2($id)
    {
        return $this->db->get_where('p_alternatif', ['id_karyawan' => $id])->row_array();
    }

    public function getAllPAlternatif2()
    {
        $this->db->select('p_alternatif.*, karyawan.nama_karyawan');
        $this->db->from('p_alternatif');
        $this->db->join('karyawan','p_alternatif.id_karyawan = karyawan.id_karyawan');
        $this->db->order_by('total', 'DESC');
        $this->db->order_by('id_p_alternatif', 'ASC');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function tambahDataPAlternatif()
    {
        $kriteria = $this->db->get('kriteria')->result_array();
        $n = $kriteria['bobot_kriteria'];
        $kehadiran = $this->input->post('kehadiran');
        $etika = $this->input->post('etika', true);
        $disiplin_waktu = $this->input->post('disiplin_waktu', true);
        $kualitas = $this->input->post('kualitas', true);
        $kuantitas = $this->input->post('kuantitas', true);
        $data = [
            "id_karyawan" => $this->input->post('id_karyawan', true),
            // "nama_karyawan" => $this->input->post('nama_karyawan', true),
            "kehadiran" =>  $kehadiran,
            "etika" => $etika,
            "disiplin_waktu" => $disiplin_waktu,
            "kualitas" => $kualitas,
            "kuantitas" => $kuantitas,
            "total" => $kehadiran/5*$n['0.2'] + $etika/5*$n['0.25'] + $disiplin_waktu/5*$n['0.2'] + $kualitas/5*$n['0.15'] + $kuantitas/5*$n['0.2']
        ];

        $data2 = [
            "nilai_alternatif" => $kehadiran/5*$n['0.2'] + $etika/5*$n['0.25'] + $disiplin_waktu/5*$n['0.2'] + $kualitas/5*$n['0.15'] + $kuantitas/5*$n['0.2']
        ];

        if ($this->db->insert('p_alternatif', $data)) {
            $this->db->where('id_karyawan', $this->input->post('id_karyawan'));
            $this->db->update('karyawan', $data2);
        }
    }

    public function ubahDataPAlternatif()
    {
        $kriteria = $this->db->get('kriteria')->result_array();
        $n = $kriteria['bobot_kriteria'];
        $kehadiran = $this->input->post('kehadiran');
        $etika = $this->input->post('etika', true);
        $disiplin_waktu = $this->input->post('disiplin_waktu', true);
        $kualitas = $this->input->post('kualitas', true);
        $kuantitas = $this->input->post('kuantitas', true);
        $data = [
            "kehadiran" =>  $kehadiran,
            "etika" => $etika,
            "disiplin_waktu" => $disiplin_waktu,
            "kualitas" => $kualitas,
            "kuantitas" => $kuantitas,
            "total" => $kehadiran/5*$n['0.2'] + $etika/5*$n['0.25'] + $disiplin_waktu/5*$n['0.2'] + $kualitas/5*$n['0.15'] + $kuantitas/5*$n['0.2']
        ];

        $data2 = [
            "nilai_alternatif" => $kehadiran/5*$n['0.2'] + $etika/5*$n['0.25'] + $disiplin_waktu/5*$n['0.2'] + $kualitas/5*$n['0.15'] + $kuantitas/5*$n['0.2']
        ];

        $this->db->where('id_p_alternatif', $this->input->post('id_p_alternatif'));
        if ($this->db->update('p_alternatif', $data)){
            $this->db->where('id_karyawan', $this->input->post('id_karyawan'));
            $this->db->update('karyawan', $data2);
        }
    }

}