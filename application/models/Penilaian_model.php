<?php

class penilaian_model extends CI_model
{
    public function getAllPenilaian()
    {
        return $this->db->get('penilaian')->result_array();
    }
    
    public function getPenilaianById($id)
    {
        return $this->db->get_where('Penilaian', ['id_penilaian' => $id])->row_array();
    }

    public function getAllPenilaianX()
    {
        $this->db->select('*');
        $this->db->from('karyawan');
        $this->db->where('penilaian', 0);
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function getPenilaianById2($id)
    {
        return $this->db->get_where('Penilaian', ['id_karyawan' => $id])->row_array();
    }

    public function getAllPenilaian2()
    {
        $this->db->select('penilaian.*, karyawan.nama_karyawan');
        $this->db->from('penilaian');
        $this->db->join('karyawan','penilaian.id_karyawan = karyawan.id_karyawan');
        $this->db->order_by('total', 'DESC');
        $this->db->order_by('id_penilaian', 'ASC');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function tambahDataPenilaian()
    {
        $kehadiran = $this->input->post('kehadiran');
        $etika = $this->input->post('etika', true);
        $disiplin_waktu = $this->input->post('disiplin_waktu', true);
        $kualitas = $this->input->post('kualitas', true);
        $kuantitas = $this->input->post('kuantitas', true);
        $data = [
            "id_karyawan" => $this->input->post('id_karyawan', true),
            "kehadiran" =>  $kehadiran,
            "etika" => $etika,
            "disiplin_waktu" => $disiplin_waktu,
            "kualitas" => $kualitas,
            "kuantitas" => $kuantitas,
            "total" => $kehadiran + $etika + $kualitas + $kualitas + $kuantitas
        ];

       

        $data3 = [
            "penilaian" => $kehadiran + $etika + $kualitas + $kualitas + $kuantitas
        ];
        

        if ($this->db->insert('penilaian', $data)) {
            $this->db->where('id_karyawan', $this->input->post('id_karyawan'));
            $this->db->update('karyawan', $data3);
            
        }
    }

    public function ubahDataPenilaian()
    {
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
            "total" => $kehadiran + $etika + $kualitas + $kualitas + $kuantitas
        ];

        $data2 = [
            "penilaian" => $kehadiran + $etika + $kualitas + $kualitas + $kuantitas
        ];

        $this->db->where('id_penilaian', $this->input->post('id_penilaian'));
        if ($this->db->update('penilaian', $data)){
            $this->db->where('id_karyawan', $this->input->post('id_karyawan'));
            $this->db->update('karyawan', $data2);
        }
    }
}