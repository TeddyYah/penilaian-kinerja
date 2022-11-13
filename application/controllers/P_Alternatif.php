<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class p_alternatif extends CI_Controller 
{
    public function index()
    {
        $data['penilaian'] = $this->P_Alternatif_model->getAllPAlternatif2();
        $data['kriteria'] = $this->Kriteria_model->getAllKriteria();
        $data['title'] = 'Penilaian Alternatif';
        $this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('p_alternatif/index', $data);
		$this->load->view('templates/footer', $data);
    }

    public function tambah_p_alternatif()
    {
        $data['title'] = 'Form Tambah Penilaian Alternatif';
        $data['karyawan'] = $this->Karyawan_model->getAllKaryawan();
        $data['nilai'] = $this->P_Alternatif_model->getAllPAlternatif();
        $data['penilaian'] = $this->P_Alternatif_model->getAllPAlternatiX();
        $data['rating'] = [1, 2, 3, 4, 5];
        $data['kehadiran'] = [1/5*0.2, 2/5*0.2, 3/5*0.2, 4/5*0.2, 5/5*0.2];
        $data['etika'] = [1/5*0.25, 2/5*0.25, 3/5*0.25, 4/5*0.25, 5/5*0.25];
        $data['disiplin_waktu'] = [1/5*0.2, 2/5*0.2, 3/5*0.2, 4/5*0.2, 5/5*0.2];
        $data['kualitas'] = [1/5*0.2, 2/5*0.2, 3/5*0.2, 4/5*0.2, 5/5*0.2];
        $data['kuantitas'] = [1/5*0.15, 2/5*0.15, 3/5*0.15, 4/5*0.15, 5/5*0.15];

        
        $this->form_validation->set_rules('id_karyawan', 'ID Karyawan', 'required|trim', [
            'required' => 'Wajib diisi !'
        ]);
        $this->form_validation->set_rules('kehadiran', 'Kehadiran', 'required|numeric', [
            'required' => 'Wajib diisi !'
        ]);
        $this->form_validation->set_rules('etika', 'Etika', 'required|numeric', [
            'required' => 'Wajib diisi !'
        ]);
        $this->form_validation->set_rules('disiplin_waktu', 'Disiplin Waktu', 'required|numeric', [
            'required' => 'Wajib diisi !'
        ]);
        $this->form_validation->set_rules('kualitas', 'Kualitas', 'required|numeric', [
            'required' => 'Wajib diisi !'
        ]);
        $this->form_validation->set_rules('kuantitas', 'Kuantitas', 'required|numeric', [
            'required' => 'Wajib diisi !'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('p_alternatif/tambah_p_alternatif', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->P_Alternatif_model->tambahDataPAlternatif();
            $this->session->set_flashdata('msg', 
            '<div class="alert alert-primary alert-dismissible fade show" role="alert">
            Data berhasil<strong> ditambahkan</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('p_alternatif');
        }
    }

    public function ubah_p_alternatif($id)
    {
        $data['title'] = 'Form Ubah Penilaian Alternatif';
        $data['penilaian'] = $this->P_Alternatif_model->getPAlternatifById($id);
        $data['penilaian2'] = $this->P_Alternatif_model->getAllPAlternatiX();
        $data['rating'] = [1, 2, 3, 4, 5];

        $this->form_validation->set_rules('kehadiran', 'Kehadiran', 'required|numeric', [
            'required' => 'Wajib diisi !'
        ]);
        $this->form_validation->set_rules('etika', 'Etika', 'required|numeric', [
            'required' => 'Wajib diisi !'
        ]);
        $this->form_validation->set_rules('disiplin_waktu', 'Disiplin Waktu', 'required|numeric', [
            'required' => 'Wajib diisi !'
        ]);
        $this->form_validation->set_rules('kualitas', 'Kualitas', 'required|numeric', [
            'required' => 'Wajib diisi !'
        ]);
        $this->form_validation->set_rules('kuantitas', 'Kuantitas', 'required|numeric', [
            'required' => 'Wajib diisi !'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('p_alternatif/ubah_p_alternatif', $data);
            $this->load->view('templates/footer');
        } else {
            $this->P_Alternatif_model->ubahDataPAlternatif();
            $this->session->set_flashdata('msg', 
            '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data berhasil<strong> diubah</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('p_alternatif');
        }
    }
}