<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videodehoy extends CI_Controller{
    public function __construct(){
        parent::__construct();
		$this->load->model('video_model');
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
        $this->inicial();
    }
    public function inicial($curso=1){
        $this->load->model('eduvit_model');
        $curso += 8;
        $data['videos'] = $this->video_model->videodehoyis($curso);
        $data['nivel'] = $this->eduvit_model->retnivel(1);
        $this->load->view('template/header');
        $this->load->view('vistas/videodehoyis', $data);
        $this->load->view('template/footer');
    }

    public function primaria($curso=1){
        $this->load->model('eduvit_model');
        $curso += 10;
        $data['videos'] = $this->video_model->videodehoypr($curso);
        $data['nivel'] = $this->eduvit_model->retnivel(2);
        $this->load->view('template/header');
        $this->load->view('vistas/videodehoypr', $data);
        $this->load->view('template/footer');
    }
    public function secundaria($curso=1){
        $this->load->model('eduvit_model');
        $curso += 16;
        $data['videos'] = $this->video_model->videodehoyis($curso);
        $data['nivel'] = $this->eduvit_model->retnivel(3);
        $this->load->view('template/header');
        $this->load->view('vistas/videodehoyis', $data);
        $this->load->view('template/footer');
    }

    public function obtvideois(){
        $cod_mat = $this->input->post('cod_vid');
        $setvideo = $this->video_model->getmaterialis($cod_mat);
        if($setvideo){
            echo json_encode($setvideo);
        }else{
            echo json_encode('error');
        }
    }

    public function obtvideopr(){
        $cod_mat = $this->input->post('cod_vid');
        $setvideo = $this->video_model->getmaterialpr($cod_mat);
        if($setvideo){
            echo json_encode($setvideo);
        }else{
            echo json_encode('error');
        }
    }

}
?>
