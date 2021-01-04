<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eduvit extends CI_Controller{
    public function __construct(){
        parent::__construct();
		$this->load->model('eduvit_model');
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
        $data['sis'] = $this->eduvit_model->retsis();
        $this->load->view('template/header');
        $this->load->view('vistas/inicio', $data);
        $this->load->view('template/footer');
    }
    public function regular(){
        $this->valido();
        $data['sis'] = $this->eduvit_model->retselec(1);
        $data['nivel'] = $this->eduvit_model->retnivel(1);
        $this->load->view('template/header');
        $this->load->view('vistas/nivel', $data);
        $this->load->view('template/footer');
    }

    public function alternativa(){
        $data['sis'] = $this->eduvit_model->retselec(2);
        $data['nivel'] = $this->eduvit_model->retnivel(2);
        $this->load->view('template/header');
        $this->load->view('vistas/nivel', $data);
        $this->load->view('template/footer');
    }
    public function superior(){
        $data['sis'] = $this->eduvit_model->retselec(3);
        $data['nivel'] = $this->eduvit_model->retnivel(3);
        $this->load->view('template/header');
        $this->load->view('vistas/superior/dirsup', $data);
        $this->load->view('template/footer');
    }
}
?>
