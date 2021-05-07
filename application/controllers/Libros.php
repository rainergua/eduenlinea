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

    public function desclibro(){
        $this->load->view('template/header');
        $this->load->view('vistas/libros/desclibro');
        $this->load->view('template/footer');
    }
    public function verlibro(){
        $this->load->library('user_agent');
        if($this->agent->is_mobile()){
            $data['link'] = base_url().'assets/files/actaInde.pdf';
            $this->load->view('vistas/libros/verlibropdf', $data);
        }
        else{
            $this->load->view('template/header'); 
            $this->load->view('vistas/libros/verlibro');
            $this->load->view('template/footer');
        }
    }
    public function gesta(){
        $this->load->library('user_agent');
        if($this->agent->is_mobile()){
            $data['link'] = base_url().'assets/files/gesta.pdf';
            $this->load->view('vistas/libros/verlibropdf', $data);
        }
        else{
            $this->load->view('template/header'); 
            $this->load->view('vistas/libros/gesta');
            $this->load->view('template/footer');
        }
    }
    

}
?>
