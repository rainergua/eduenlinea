<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consup extends CI_Controller{
    public function __construct(){
        parent::__construct();
		$this->load->model('consup_model');
		$this->load->library('form_validation');
		$this->load->database('default');
    }
    private function valido(){
        if($this->session->userdata('is_logued_in') == FALSE)
        {
            redirect(base_url().'login');
        }
    }

    //////////////************************* */
   public function index(){
        redirect(base_url());
   }
   public function carreras(){
        $this->load->view('template/header');
        $data['carreras'] = $this->consup_model->getcarresfm();
        $this->load->view('vistas/superior/carrera', $data);
        $this->load->view('template/footer');
   }
   public function materias($cod_carresfm){
        $this->load->view('template/header');
        $data['anios'] = $this->consup_model->getcarresfmanio($cod_carresfm);
        $data['materias'] = $this->consup_model->getcarresfmmat($cod_carresfm);
        $data['contenidos'] = $this->consup_model->getcarresfmcont($cod_carresfm);
        $this->load->view('vistas/superior/material', $data);
        $this->load->view('template/footer');
   }

}
?>
