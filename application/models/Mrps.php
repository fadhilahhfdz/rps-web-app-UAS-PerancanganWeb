<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mrps extends CI_Model {
    // Mendapatkan data berdasarkan id
    function get_rps_by_id($id) {
        return $this->db->get_where('rps', array('id_rps' => $id))->row();
    }
    
    // Menambahkan RPS ke database
    function create_rps($data) {
        $this->db->insert('rps', $data);
    }

    // Mendapatkan data RPS
    function get_rps_list() {
        return $this->db->get('rps')->result();
    }

    // Memperbarui RPS
    function update_rps($id, $data) {
        $this->db->where('id_rps', $id);
        $this->db->update('rps', $data);
    }

    // Hapus RPS
    function delete_rps($id) {
        $this->db->where('id_rps', $id);
        $this->db->delete('rps');
    }
}