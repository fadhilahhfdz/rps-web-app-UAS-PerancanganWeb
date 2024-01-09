<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function register($data) {
        return $this->db->insert('tb_user', $data);
    }

    function login($username, $password) {
        $user = $this->db->get_where('tb_user', array('username' => $username))->row();

        if ($user && password_verify($password, $user->password)) {
            return true;
        } else {
            return false;
        }
    }
}