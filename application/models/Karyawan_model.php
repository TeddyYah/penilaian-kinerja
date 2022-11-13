<?php

class karyawan_model extends CI_model
{
    public function getAllKaryawan()
    {
        return $this->db->get('karyawan')->result_array();
    }

    public function getKaryawanById($id)
    {
        return $this->db->get_where('karyawan', ['id_karyawan' => $id])->row_array();
    }

    public function tambahDataKaryawan()
    {
        $data['karyawan'] = $this->Karyawan_model->getAllKaryawan();
        $data = [
            "nik_karyawan" => $this->input->post('nik_karyawan', true),
            "nama_karyawan" => $this->input->post('nama_karyawan', true),
            "tempat_lahir" => $this->input->post('tempat_lahir', true),
            "tanggal_lahir" => $this->input->post('tanggal_lahir', true),
            "alamat" => $this->input->post('alamat', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "no_telepon" => $this->input->post('no_telepon', true)
        ];


        $this->db->insert('karyawan', $data);


    }

    public function ubahDataKaryawan()
    {
        $data = [
            "nik_karyawan" => $this->input->post('nik_karyawan', true),
            "nama_karyawan" => $this->input->post('nama_karyawan', true),
            "tempat_lahir" => $this->input->post('tempat_lahir', true),
            "tanggal_lahir" => $this->input->post('tanggal_lahir', true),
            "alamat" => $this->input->post('alamat', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "no_telepon" => $this->input->post('no_telepon', true)
        ];

        $this->db->where('id_karyawan', $this->input->post('id_karyawan'));
        $this->db->update('karyawan', $data);
    }

    public function getHapusKaryawan($id)
    {
        $this->db->delete('karyawan', ['id_karyawan' => $id]);
        $this->db->delete('penilaian', ['id_karyawan' => $id]);
        $this->db->delete('p_alternatif', ['id_karyawan' => $id]);
    }

}