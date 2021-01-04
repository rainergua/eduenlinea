<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicial extends CI_Controller{
    public function __construct(){
        parent::__construct();
		$this->load->model('cuestionario_model');
		$this->load->library('form_validation');
		$this->load->database('default');
    }
    public function valido(){
        if($this->session->userdata('is_logued_in') == FALSE)
        {
            //$host= $_SERVER["HTTP_HOST"];
            $url= explode("/",$_SERVER["REQUEST_URI"]); //---- /seguimiento/cuestionario
            //print_r($url);
            if($url[2]=='cuestionario')
                $this->session->set_userdata('url', $url[2]);
            redirect(base_url().'login');
        }
    }
    public function index(){
        $this->load->view('template/header');
        $this->load->view('vistas/inicial');
        $this->load->view('template/footer');
    }
}
?>
