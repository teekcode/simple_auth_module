<?php
defined('BASEPATH') OR exit('No direct script access allow');

/*
other controller who need auth extends this function
only login extend CI_Controller
*/

class MY_Controller extends CI_controller {
    public function __construct() {
        parent::__construct();
    }

    public function _remap($method, $param = array()) {
        if($this->session->userdata('isLoggedIn')) {
            $this->$method(...$param);
        }
        else {
            redirect('login');
        }
    }
}

