<?php 
defined('BASEPATH') OR exit('No direct script access allow');

class Register extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index() {
        $this->load->view('register');
    }

    public function add_user_index() {
        $this->add_user();
        redirect('login');
    }

    public function add_user() {
        $name = $this->input->post('user');
        $pswd  = $this->input->post('pswd');

        $data = array(
            'user' => $name,
            'password'  => password_hash($pswd, PASSWORD_BCRYPT)
        );

        $this->db->insert('user', $data);
    }
}
