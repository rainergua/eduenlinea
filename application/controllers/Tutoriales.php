<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutoriales extends CI_Controller{
    public function __construct(){
        parent::__construct();
		$this->load->library('form_validation');
		$this->load->database('default');
    }
    public function valido(){
        if($this->session->userdata('is_logued_in') == FALSE)
        {
            redirect(base_url().'login');
        }
    }

    public function index(){
        $this->load->view('template/header');
        $this->load->view('vistas/videos');
        $this->load->view('template/footer');
    }
}
?>
