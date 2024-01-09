<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rps extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('mrps');
        $this->load->helper('form');
        $this->load->library('template');
    }

    function index() {
        // Tampilkan daftar RPS
        $data['rps_list'] = $this->mrps->get_rps_list();
        $this->load->view('rps_list', $data);
    }

    function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Simpan data ke database
            $data = array(
                'nomor_rps' => $this->input->post('nomor_rps'),
                'nama_prodi' => $this->input->post('prodi'),
                'kode_matkul' => $this->input->post('kode_matkul'),
                'nama_matkul' => $this->input->post('nama_matkul'),
                'nama_dosen_penyusun' => $this->input->post('nama_dosen'),
                'nik_dosen_penyusun' => $this->input->post('nik_dosen'),
                'tgl_berlaku' => $this->input->post('tgl_berlaku'),
            );
            $this->mrps->create_rps($data);

            redirect('rps');
        } else {
            $this->load->view('rps_create');
        }
    }

    function update($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Simpan data ke database
            $data = array(
                'nomor_rps' => $this->input->post('nomor_rps'),
                'nama_prodi' => $this->input->post('prodi'),
                'kode_matkul' => $this->input->post('kode_matkul'),
                'nama_matkul' => $this->input->post('nama_matkul'),
                'nama_dosen_penyusun' => $this->input->post('nama_dosen'),
                'nik_dosen_penyusun' => $this->input->post('nik_dosen'),
                'tgl_berlaku' => $this->input->post('tgl_berlaku'),
            );
            $this->mrps->update_rps($id, $data);

            redirect('rps');
        } else {
            $data['rps'] = $this->mrps->get_rps_by_id($id);
            $this->load->view('rps_update', $data);
        }
    }

    function delete($id) {
        // hapus rps
        $this->mrps->delete_rps($id);

        redirect('rps');
    }

    function submit($id) {
        // Ambil data dari database berdasarkan id
        $data['rps'] = $this->mrps->get_rps_by_id($id);

        // load library
        $this->template->load('rps_submit', 'isi_submit', $data);
    }
}