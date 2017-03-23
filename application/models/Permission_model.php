<?php
class Permission_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }

    /*
        pre: user is unique
        1.check the user existance
        2.check the password
    */
    public function auth_in_user() {
        $user_info = $this->db->where('user', $this->input->post('user'))->get('user')->result();
        if($user_info) {
            $pswd_hash = $user_info[0]->password;
            if(password_verify($this->input->post('pswd'), $pswd_hash)) {
                //set session
                $this->session->set_userdata(array(
                    'id' => $user_info[0]->id,
                    'front_name' => $this->details->front_name,
                    'isLoggedIn' => true
                ));
                return true;
            }
            //wrong psw
            return false;
        }
        //no user
        return false;
    }

}