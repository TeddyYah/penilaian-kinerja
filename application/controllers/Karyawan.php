<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class karyawan extends CI_Controller 
{
    public function index()
    {
        $data['karyawan'] = $this->Karyawan_model->getAllKaryawan();
        $data['title'] = 'Daftar Karyawan';
        $this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('karyawan/index', $data);
		$this->load->view('templates/footer', $data);
    }

    public function tambah_karyawan()
    {
        $data['karyawan'] = $this->Karyawan_model->getAllKaryawan();
        $data['title'] = 'Form Tambah Data Karyawan';

        $this->form_validation->set_rules('nik_karyawan', 'NIK', 'required|trim|is_unique[karyawan.nik_karyawan]', [
            'required' => 'Wajib diisi !',
            'is_unique' => 'NIK Karyawan telah terdaftar !'
        ]);
        $this->form_validation->set_rules('nama_karyawan', 'Nama Karyawan', 'required|trim|is_unique[karyawan.nama_karyawan]', [
            'required' => 'Wajib diisi !',
            'is_unique' => 'Nama Karyawan telah terdaftar !'
        ]);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim', [
            'required' => 'Wajib diisi !'
        ]);
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim', [
            'required' => 'Wajib diisi !'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Wajib diisi !'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim', [
            'required' => 'Wajib diisi !'
        ]);
        $this->form_validation->set_rules('no_telepon', 'No. Telp', 'required|trim|is_unique[karyawan.no_telepon]', [
            'required' => 'Wajib diisi !',
            'is_unique' => 'No. Telp telah terdaftar !'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('karyawan/tambah_karyawan', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->Karyawan_model->tambahDataKaryawan();
            $this->session->set_flashdata('msg', 
            '<div class="alert alert-primary alert-dismissible fade show" role="alert">
            Data berhasil<strong> ditambahkan</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('karyawan');
        }
    }

    public function hapus_karyawan($id)
    {
        $this->Karyawan_model->getHapusKaryawan($id);
        $this->session->set_flashdata('msg', 
        '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Data berhasil<strong> dihapus</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('karyawan');
    }

    public function detail_karyawan($id)
    {
        $data['title'] = 'Detail Data Karyawan';
        $data['karyawan'] = $this->Karyawan_model->getKaryawanById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('karyawan/detail_karyawan', $data);
        $this->load->view('templates/footer', $data);
    }

    public function ubah_karyawan($id)
    {
        $data['title'] = 'Form Ubah Data Karyawan';
        $data['karyawan'] = $this->Karyawan_model->getKaryawanById($id);
        $data['gender'] = ['L', 'P'];

        $this->form_validation->set_rules('nik_karyawan', 'NIK', 'required|numeric');
        $this->form_validation->set_rules('nama_karyawan', 'NRP', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('no_telepon', 'No. Telp', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('karyawan/ubah_karyawan', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->Karyawan_model->ubahDataKaryawan();
            $this->session->set_flashdata('msg', 
            '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data berhasil<strong> diubah</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('karyawan');
        }
    }
}