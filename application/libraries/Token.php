<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Token 
{
    public function tokenlb()
    {
        $CI = &get_instance();
        $CI->load->library('session');
        $token = md5(uniqid(rand(), true));
        $CI->session->set_userdata('token',$token);
        return $token;
    }    
    
}


?>