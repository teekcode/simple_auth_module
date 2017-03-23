<?php
defined('BASEPATH') OR exit('No direct script access allow');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('permission_model');
    }

    public function index() {
        if($this->session->userdata('isLoggedIn')) {
            redirect('welcome');
        }
        else {
            $this->load->view('login');
        }
    }

    public function auth_in() {
        if($this->permission_model->auth_in_user()) {
            redirect('welcome');
        }
        else {
            $data['error'] = "密码错误";
            $this->load->view('login', $data);
        }
    }

    public function auth_out() {
        $this->session->sess_destroy();
        redirect('login');
    }
}