<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class penilaian extends CI_Controller 
{
    public function index()
    {
        $data['penilaian'] = $this->Penilaian_model->getAllPenilaian2();
        $data['kriteria'] = $this->Kriteria_model->getAllKriteria();
        $data['title'] = 'Tampilan Perangkingan';
        $this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('penilaian/index', $data);
		$this->load->view('templates/footer', $data);
    }

    public function tambah_penilaian()
    {
        $data['title'] = 'Form Tambah Data Penilaian';
        $data['kriteria'] = $this->Kriteria_model->getAllKriteria();
        $data['karyawan'] = $this->Karyawan_model->getAllKaryawan();
        $data['penilaian'] = $this->Penilaian_model->getAllPenilaianX();
        $data['rating'] = [1, 2, 3, 4, 5];
        
        $this->form_validation->set_rules('id_karyawan', 'ID Karyawan', 'required|trim|is_unique[penilaian.id_karyawan]', [
            'required' => 'Wajib diisi !',
            'is_unique' => 'ID Karyawan telah terdaftar !'
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
            $this->load->view('penilaian/tambah_penilaian', $data);
            $this->load->view('templates/footer', $data);
        } else {       
                $kehadiran = $this->input->post('kehadiran');
                $etika = $this->input->post('etika', true);
                $disiplin_waktu = $this->input->post('disiplin_waktu', true);
                $kualitas = $this->input->post('kualitas', true);
                $kuantitas = $this->input->post('kuantitas', true);
                $n_hadir = $data['kriteria'][0]['bobot_kriteria'];
                $n_etika = $data['kriteria'][1]['bobot_kriteria'];
                $n_disiplin = $data['kriteria'][2]['bobot_kriteria'];
                $n_kualitas = $data['kriteria'][3]['bobot_kriteria'];
                $n_kuantitas = $data['kriteria'][4]['bobot_kriteria'];

                // var_dump($n_hadir);
                // die;

                $data2 = [
                    "id_karyawan" => $this->input->post('id_karyawan', true),
                    "kehadiran" =>  $kehadiran/5*$n_hadir,
                    "etika" => $etika/5*$n_etika,
                    "disiplin_waktu" => $disiplin_waktu/5*$n_disiplin,
                    "kualitas" => $kualitas/5*$n_kualitas,
                    "kuantitas" => $kuantitas/5*$n_kuantitas,
                    "total" => $kehadiran/5*$n_hadir + $etika/5*$n_etika + $disiplin_waktu/5*$n_disiplin + $kualitas/5*$n_kualitas + $kuantitas/5*$n_kuantitas
                ];

                $data3 = [
                    "nilai_alternatif" => $kehadiran/5*$n_hadir + $etika/5*$n_etika + $disiplin_waktu/5*$n_disiplin + $kualitas/5*$n_kualitas + $kuantitas/5*$n_kuantitas
                ];
                $this->Penilaian_model->tambahDataPenilaian();
                if ($this->db->insert('p_alternatif', $data2)){
                    $this->db->where('id_karyawan', $this->input->post('id_karyawan'));
                    $this->db->update('karyawan', $data3);
                }
                $this->session->set_flashdata('msg', 
                '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                Data berhasil<strong> ditambahkan</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
                redirect('penilaian');
            }
    }

    public function ubah_penilaian($id)
    {
        $data['title'] = 'Form Ubah Data Penilaian';
        $data['kriteria'] = $this->Kriteria_model->getAllKriteria();
        $data['penilaian'] = $this->Penilaian_model->getPenilaianById($id);
        $data['penilaian2'] = $this->Penilaian_model->getAllPenilaianX();
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
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('penilaian/ubah_penilaian', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $kehadiran = $this->input->post('kehadiran');
            $etika = $this->input->post('etika', true);
            $disiplin_waktu = $this->input->post('disiplin_waktu', true);
            $kualitas = $this->input->post('kualitas', true);
            $kuantitas = $this->input->post('kuantitas', true);
            $n_hadir = $data['kriteria'][0]['bobot_kriteria'];
            $n_etika = $data['kriteria'][1]['bobot_kriteria'];
            $n_disiplin = $data['kriteria'][2]['bobot_kriteria'];
            $n_kualitas = $data['kriteria'][3]['bobot_kriteria'];
            $n_kuantitas = $data['kriteria'][4]['bobot_kriteria'];

                // var_dump($n_hadir);
                // die;

            $data2 = [
                "id_karyawan" => $this->input->post('id_karyawan', true),
                "kehadiran" =>  $kehadiran/5*$n_hadir,
                "etika" => $etika/5*$n_etika,
                "disiplin_waktu" => $disiplin_waktu/5*$n_disiplin,
                "kualitas" => $kualitas/5*$n_kualitas,
                "kuantitas" => $kuantitas/5*$n_kuantitas,
                "total" => $kehadiran/5*$n_hadir + $etika/5*$n_etika + $disiplin_waktu/5*$n_disiplin + $kualitas/5*$n_kualitas + $kuantitas/5*$n_kuantitas
            ];

            $data3 = [
                "nilai_alternatif" => $kehadiran/5*$n_hadir + $etika/5*$n_etika + $disiplin_waktu/5*$n_disiplin + $kualitas/5*$n_kualitas + $kuantitas/5*$n_kuantitas
            ];
            $this->Penilaian_model->ubahDataPenilaian();
            $this->db->where('id_karyawan', $this->input->post('id_karyawan'));
            if ($this->db->update('p_alternatif', $data2)){
                $this->db->where('id_karyawan', $this->input->post('id_karyawan'));
                $this->db->update('karyawan', $data3);
            }
            $this->session->set_flashdata('msg', 
            '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data berhasil<strong> diubah</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('penilaian');
        }
    }

    public function hapus_penilaian($id)
    {
        $this->Penilaian_model->getHapusPenilaian($id);
        $this->session->set_flashdata('msg', 
        '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Data berhasil<strong> dihapus</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('penilaian');
    }
}