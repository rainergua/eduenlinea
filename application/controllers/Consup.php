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
    /****************UNIVERSIDAES-DEPTO***************** */
    public function deptouni(){
        $this->load->view('template/header');
        $data['depto'] = $this->consup_model->getdepto();
        $data['titulo'] = "UNIVERSIDADES";
        $data['link'] = "universidad";        
        //$data['grados'] = $this->contenido_model->getgrado($nivel);
        $this->load->view('vistas/superior/deptos', $data);
        $this->load->view('template/footer');
    }
    /*****************ESFM-DEPTO**************** */
    public function deptoesfm(){
        $this->load->view('template/header');
        $data['depto'] = $this->consup_model->getdepto();
        $data['titulo'] = "ESCUELAS SUPERIORES DE FORMACIÓN DE MAESTROS";
        $data['link'] = "esfm";
        $this->load->view('vistas/superior/deptos', $data);
        $this->load->view('template/footer');
    }
    /**************UNIVERSIDADES POR DEPTO*****************/
    public function universidad($depto=1){
        $this->load->view('template/header');
        $data['unis'] = $this->consup_model->getunis($depto);
        $data['depto'] = $this->consup_model->getdeptoesp($depto);
        $this->load->view('vistas/superior/unis', $data);
        $this->load->view('template/footer');
    }
    /**************ESFM POR DEPTO*****************/
    public function esfm($depto=1){
        $this->load->view('template/header');
        $data['unis'] = $this->consup_model->getesfm($depto);
        $data['depto'] = $this->consup_model->getdeptoesp($depto);
        $this->load->view('vistas/superior/unis', $data);
        $this->load->view('template/footer');
    }
    /*****************CARRERAS POR UNIVERSIDAD***** */
    public function carreras($uni=11, $depto=2){
        $this->load->view('template/header');
        $data['carreras'] = $this->consup_model->getcarreras($uni);
        $data['uni'] = $this->consup_model->getuni($uni);
        $data['depto'] = $this->consup_model->getdeptoesp($depto);
        $this->load->view('vistas/superior/carreras', $data);
        $this->load->view('template/footer');
    }
    /**************CARRERAS POR ESFM*****************/
    public function carrerasesfm($uni=22, $depto=2){
        $this->load->view('template/header');
        $data['carreras'] = $this->consup_model->getcarreras($uni);
        $data['uni'] = $this->consup_model->getuni($uni);
        $data['depto'] = $this->consup_model->getdeptoesp($depto);
        $this->load->view('vistas/superior/carreras', $data);
        $this->load->view('template/footer');
    }
    /******MAERIAS POR CARRERA*************** */
    public function materias($carrera=5, $depto=4){
        $this->load->view('template/header');
        $data['carrera'] = $this->consup_model->getcarr($carrera);
        $data['uni'] = $this->consup_model->getuni($data['carrera']->cod_uni);
        $data['depto'] = $this->consup_model->getdeptoesp($depto);
        $data['semestres'] = $this->consup_model->getperiodos($carrera);
        $data['materias'] = $this->consup_model->getmateria($carrera);
        $this->load->view('vistas/superior/materias', $data);
        $this->load->view('template/footer');
    }

    /*public function areas($curso){
        $data['nivel'] = $this->contenido_model->getsisnivgra($curso);
        $data['areas'] = $this->contenido_model->getareas($curso);
        $this->load->view('template/header');
        $this->load->view('vistas/areas', $data);
        $this->load->view('template/footer');
    }

    public function contarea($grado, $area){
        $data['nivel'] = $this->contenido_model->getsisnivgrarea($grado, $area);
        $data['contenidos'] = $this->contenido_model->getcontenidos($grado, $area);
        $this->load->view('template/header');
        $this->load->view('vistas/contenido', $data);
        $this->load->view('template/footer');

    }
    public function vermaterial($area, $tema){
        $data['nivel'] = $this->contenido_model->getsisnivgrareatema($area, $tema);
        $data['tipo'] = $this->contenido_model->gettipo($tema);
        $data['archivos'] = $this->contenido_model->getarchivoscon($tema);
        $this->load->view('template/header');
        $this->load->view('vistas/contemas', $data);
        $this->load->view('template/footer');
    }*/
    //////////////////////
    //////////////////////
    //Para la pagina de los libros
    public function dispcontarea($grado=0, $area=0){
        if($grado!=0){
            $data['nivel'] = $this->contenido_model->getsisnivgrarea($grado, $area);
            $data['archivos'] = $this->contenido_model->getlibroarea($grado, $area);
            $this->load->view('template/header');
            $this->load->view('vistas/dispareacont', $data);
            $this->load->view('template/footer');
        }else{
            $this->index();
        }
    }
    //Para la pagina de los libros de actividades
    public function dispcontareaact($grado=0, $area=0){
        if($grado!=0){
            $data['nivel'] = $this->contenido_model->getsisnivgrarea($grado, $area);
            $data['archivos'] = $this->contenido_model->getactearea($grado, $area);
            $this->load->view('template/header');
            $this->load->view('vistas/dispareacontact', $data);
            $this->load->view('template/footer');
        }else{
            $this->index();
        }
    }
    //Para la pagina de los Videos
    public function dispcontareavideo($grado=0, $area=0){
        if($grado!=0){
            $data['nivel'] = $this->contenido_model->getsisnivgrarea($grado, $area);
            $data['archivos'] = $this->contenido_model->getvidearea($grado, $area);
            $this->load->view('template/header');
            $this->load->view('vistas/dispareacontvid', $data);
            $this->load->view('template/footer');
        }else{
            $this->index();
        }
    }
    //Para la pagina de los materiales varios(more)
    public function dispcontareamas($grado=0, $area=0){
        if($grado!=0){
            $data['nivel'] = $this->contenido_model->getsisnivgrarea($grado, $area);
            $this->load->view('template/header');
            $this->load->view('vistas/dispareacontmas', $data);
            $this->load->view('template/footer');
        }else{
            $this->index();
        }
    }
}
?>
