<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contenido extends CI_Controller{
    public function __construct(){
        parent::__construct();
		$this->load->model('contenido_model');
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
    /////**CUENTA DESCARGAS***//////
    public function contdownld(){
        $cod_lib = $this->input->post('cod_lib');
        $actual = $this->contenido_model->updcontdwn($cod_lib);
        echo json_encode($actual);
        //return;
    }
    /****************DESPLIEGA LA VISTA POR NIVEL INI-PRIM-SEC***************** */
    public function nivel($nivel=5){
        $this->load->view('template/header');
        $data['nivel'] = $this->contenido_model->getsisniv($nivel);
        $data['grados'] = $this->contenido_model->getgrado($nivel);
        if($nivel==4){
            //$this->load->model('video_model');
            //$data['videos']=$this->video_model->sacavidini();
            $this->load->view('vistas/inicial', $data);
        }elseif ($nivel==5) {
            $this->load->view('vistas/primaria', $data);
        }elseif($nivel==6){
            $this->load->view('vistas/secundaria', $data);
        }
        $this->load->view('template/footer');
    }
    //******************DESPLIEGA LA VISTA DE LOS CAMPOS*/
    public function campos($curso=11){
        $data['curso'] = $curso;
        $data['campos'] = $this->contenido_model->getcampos();
        $data['nivel'] = $this->contenido_model->getsisnivgra($curso);
        $this->load->view('template/header');
        $this->load->view('vistas/campos', $data);
        $this->load->view('template/footer');
    }
    /**************DESPLIEGA LAS VISTAS DE AERAS */
    public function areas($curso=11, $campo=1){
        $data['nivel'] = $this->contenido_model->getsisnivgra($curso);
        if($curso==9 || $curso ==10)
            $data['areas'] = $this->contenido_model->getareasini($curso);
        else
            $data['areas'] = $this->contenido_model->getareas($curso, $campo);
        $this->load->view('template/header');
        $this->load->view('vistas/areas', $data);
        $this->load->view('template/footer');
    }
    //***************DESPLIEGA LA PAGINA DE LIBROS************* */
    public function textos(){
        $this->load->view('template/header');
        $this->load->view('vistas/libros');
        $this->load->view('template/footer');
    }
    /**************DESPLIEGUE DE MATERAL NO UTILIZADO**************
    public function material($grado=11, $area=1){
        $data['curso'] = $curso;
        $data['campos'] = $this->contenido_model->getcampos();
        $data['nivel'] = $this->contenido_model->getsisnivgrarea($grado, $area);
        //$data['material'] = $this->contenido_model->getcontenidos($grado, $area);
        $data['material'] = $this->contenido_model->getcont($grado, $area);
        //$data['tipo'] = $this->contenido_model->gettipocont($grado, $area);
        $data['tipo'] = $this->contenido_model->gettemas($grado, $area);
        $data['grado'] = $grado;
        $this->load->view('template/header');
        $this->load->view('vistas/content', $data);
        $this->load->view('template/footer');
    } */
    /***************DESPLIEGUE DE CONTENIDO POR ÁREA INICIAL Y SECUNDARIA************ */
    public function contenidoarea($grado=11, $area=1){
        $data['nivel'] = $this->contenido_model->getsisnivgrarea($grado, $area);
        $data['contenidos'] = $this->contenido_model->getcontenidos($grado, $area);
        $data['trimestres'] = $this->contenido_model->getrimestre();
        $data['periodos'] = $this->contenido_model->getperiodo();
        //$data['enlace'] = $this->contenido_model->getlink($grado, $area);
        $this->load->view('template/header');
        $this->load->view('vistas/contenido2t', $data);
        $this->load->view('template/footer');
    }
/*
    public function contenidoarea2t($grado=11, $area=1){
        $data['nivel'] = $this->contenido_model->getsisnivgrarea($grado, $area);
        $data['contenidos'] = $this->contenido_model->getcontenidos($grado, $area);
        $data['periodos'] = $this->contenido_model->getperiodo();
        //$data['enlace'] = $this->contenido_model->getlink($grado, $area);
        $this->load->view('template/header');
        $this->load->view('vistas/contenido2t', $data);
        $this->load->view('template/footer');
    }*/

    /*************DESPLIEGUE DE CONTENIDO POR CAMPO PRIMARIA******* */
    public function contenidocampo($grado=11, $campo=1){
        //$data['nivel'] = $this->contenido_model->getsisnivgracam($grado, $campo);
        $data['nivel'] = $this->contenido_model->getsisnivgra($grado);
        $data['contenidos'] = $this->contenido_model->getmatcampos($grado, $campo);
        $data['periodos'] = $this->contenido_model->getperiodo();
        //$data['enlace'] = $this->contenido_model->getlink($grado, $area);
        $this->load->view('template/header');
        $this->load->view('vistas/contcam2t', $data);
        $this->load->view('template/footer');
    }

    public function contenidocampo2t($grado=11, $campo=1){
        //$data['nivel'] = $this->contenido_model->getsisnivgracam($grado, $campo);
        $data['nivel'] = $this->contenido_model->getsisnivgra($grado);
        $data['contenidos'] = $this->contenido_model->getmatcampos($grado, $campo);
        $data['periodos'] = $this->contenido_model->getperiodo();
        //$data['enlace'] = $this->contenido_model->getlink($grado, $area);
        $this->load->view('template/header');
        $this->load->view('vistas/contcam2t', $data);
        $this->load->view('template/footer');
    }


    //Pantalla con 5 redondos (Curriculo, texto excolar, Recursos Educativos, Fichas Educativas, Otros)
    /*
    public function vermaterial($area=5, $tema=6){
        $data['nivel'] = $this->contenido_model->getsisnivgrareatema($area, $tema);
        $data['tipo'] = $this->contenido_model->gettipo($tema);
        $data['archivos'] = $this->contenido_model->getarchivoscon($tema);
        $this->load->view('template/header');
        $this->load->view('vistas/contemas', $data);
        $this->load->view('template/footer');
    }
    //Para la pagina de los curriculums
    public function dispcontcurr($grado=11, $area=1){
        $data['nivel'] = $this->contenido_model->getsisnivgrarea($grado, $area);
        //$data['tipo'] = $this->contenido_model->gettipo($tema);
        $data['archivos'] = $this->contenido_model->getcurrarea($grado, $area);
        $this->load->view('template/header');
        $this->load->view('vistas/dispareacurr', $data);
        $this->load->view('template/footer');
    }
    //Para la pagina de los libros
    public function dispcontarea($grado=11, $area=1){
        $data['nivel'] = $this->contenido_model->getsisnivgrarea($grado, $area);
        $data['archivos'] = $this->contenido_model->getlibroarea($grado, $area);
        $this->load->view('template/header');
        $this->load->view('vistas/dispareacont', $data);
        $this->load->view('template/footer');
    }
    //Para página de Recursos
    public function dispcontrec($grado=11, $area=1){
        $data['nivel'] = $this->contenido_model->getsisnivgrarea($grado, $area);
        $data['archivos'] = $this->contenido_model->getrecarea($grado, $area);
        $this->load->view('template/header');
        $this->load->view('vistas/disparearec', $data);
        $this->load->view('template/footer');
    }
    //Para la pagina de los libros de actividades
    public function dispcontareaact($grado=11, $area=1){
        $data['nivel'] = $this->contenido_model->getsisnivgrarea($grado, $area);
        //$data['tipo'] = $this->contenido_model->gettipo($tema);
        $data['archivos'] = $this->contenido_model->getactearea($grado, $area);
        $this->load->view('template/header');
        $this->load->view('vistas/dispareacontact', $data);
        $this->load->view('template/footer');
    }
    //Para la pagina de los Videos
    public function dispcontareavideo($grado=11, $area=1){
        $data['nivel'] = $this->contenido_model->getsisnivgrarea($grado, $area);
        //$data['tipo'] = $this->contenido_model->gettipo($tema);
        $data['archivos'] = $this->contenido_model->getvidearea($grado, $area);
        $this->load->view('template/header');
        $this->load->view('vistas/dispareacontvid', $data);
        $this->load->view('template/footer');
    }
    //Para la pagina de los materiales varios(more... otro contenido)
    public function dispcontareaotro($grado=11, $area=1){
        $data['nivel'] = $this->contenido_model->getsisnivgrarea($grado, $area);
        $data['archivos'] = $this->contenido_model->getsisnivgrareaotro($grado, $area);
        //$data['tipo'] = $this->contenido_model->gettipo($tema);
        //$data['archivos'] = $this->contenido_model->getarchivoscon($tema);
        $this->load->view('template/header');
        $this->load->view('vistas/dispareacontotro', $data);
        $this->load->view('template/footer');
    }*/
}
?>
