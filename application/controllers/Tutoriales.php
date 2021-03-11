<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutoriales extends CI_Controller{
    public function __construct(){
        parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('video_model');
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
        $data['videos']=$this->video_model->sacatutos();
        $this->load->view('vistas/videos', $data);
        $this->load->view('template/footer');
    }

    public function obtvideo(){
        $cod_vid = $this->input->post('cod_vid');
        $setvideo = $this->video_model->getVideo($cod_vid);
        if($setvideo){
            echo json_encode($setvideo);
        }else{
            echo json_encode('error');
        }
        //echo json_encode($cod_vid);
    }

}
?>
