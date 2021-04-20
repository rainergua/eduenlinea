<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Libros extends CI_Controller{
    public function __construct(){
        parent::__construct();
		$this->load->model('otros_model');
		$this->load->library('form_validation');
		//$this->load->database('default');
    }

    public function index(){
        $this->load->view('template/header');
        $this->load->view('vistas/libros/libros');
        $this->load->view('template/footer');
    }

    public function verlibro(){
        $this->load->view('template/header');
        $this->load->view('vistas/libros/verlibroult');
        $this->load->view('template/footer');
    }
    

}
?>
