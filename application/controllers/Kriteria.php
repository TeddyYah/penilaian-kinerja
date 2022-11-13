<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class kriteria extends CI_Controller 
{
    public function index()
    {
        $data['kriteria'] = $this->Kriteria_model->getAllKriteria();
        $data['title'] = 'Data Kriteria';
        $this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('kriteria/index', $data);
		$this->load->view('templates/footer', $data);
    }

    public function tambah_kriteria()
    {
        $data['title'] = 'Form Tambah Data Kriteria';

        $this->form_validation->set_rules('simbol_kriteria', 'Simbol Kriteria', 'required');
        $this->form_validation->set_rules('nama_kriteria', 'Nama Kriteria', 'required');
        $this->form_validation->set_rules('ket_kriteria', 'Keterangan Kriteria', 'required');
        $this->form_validation->set_rules('nilai_kriteria', 'Nilai Kriteria', 'required');
        $this->form_validation->set_rules('bobot_kriteria', 'Bobot Kriteria', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('kriteria/tambah_kriteria', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->Kriteria_model->tambahDataKriteria();
            $this->session->set_flashdata('msg', 
            '<div class="alert alert-primary alert-dismissible fade show" role="alert">
            Data berhasil<strong> ditambahkan</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('Kriteria');
        }
    }

    public function hapus_kriteria($id)
    {
        $this->Kriteria_model->getHapuskriteria($id);
        $this->session->set_flashdata('msg', 
        '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Data berhasil<strong> dihapus</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('kriteria');
    }

    public function ubah_kriteria($id)
    {
        $data['title'] = 'Form Ubah Data kriteria';
        $data['kriteria'] = $this->Kriteria_model->getkriteriaById($id);

        $this->form_validation->set_rules('simbol_kriteria', 'Simbol Kriteria', 'required');
        $this->form_validation->set_rules('nama_kriteria', 'Nama Kriteria', 'required');
        $this->form_validation->set_rules('ket_kriteria', 'Keterangan Kriteria', 'required');
        $this->form_validation->set_rules('nilai_kriteria', 'Nilai Kriteria', 'required');
        $this->form_validation->set_rules('bobot_kriteria', 'Bobot Kriteria', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('kriteria/ubah_kriteria', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->Kriteria_model->ubahDataKriteria();
            $this->session->set_flashdata('msg', 
            '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data berhasil<strong> diubah</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('kriteria');
        }
    }
}
?>