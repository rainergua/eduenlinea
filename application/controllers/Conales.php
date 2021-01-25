<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conales extends CI_Controller{
    public function __construct(){
        parent::__construct();
		$this->load->model('conales_model');
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
    /********************************* */
    public function discapacidad(){
        $this->load->view('template/header');
        $this->load->view('vistas/alesp/discapacidad');
        $this->load->view('template/footer');
    }
    public function dificultad(){
        $data['material'] = $this->conales_model->getcontenidos(6);
        $data['tipo'] = $this->conales_model->gettipocont(6);
        $this->load->view('template/header');
        $this->load->view('vistas/alesp/dificultad', $data);
        $this->load->view('template/footer');
    }
    public function talento(){
        $data['material'] = $this->conales_model->getcontenidos(7);
        $data['tipo'] = $this->conales_model->gettipocont(7);
        $this->load->view('template/header');
        $this->load->view('vistas/alesp/talento', $data);
        $this->load->view('template/footer');
    }
    public function tipodisc($cod_dis=1){
        $data['material'] = $this->conales_model->getcontenidos($cod_dis);
        $data['tipo'] = $this->conales_model->gettipocont($cod_dis);
        $this->load->view('template/header');
        $this->load->view('vistas/alesp/contesp', $data);
        $this->load->view('template/footer');
    }
    public function alteruno($cod_dis=8){
        $data['material'] = $this->conales_model->getcontenidos($cod_dis);
        $data['tipo'] = $this->conales_model->gettipocont($cod_dis);
        $this->load->view('template/header');
        $this->load->view('vistas/alesp/contal', $data);
        $this->load->view('template/footer');
    }
    public function nivel($nivel=9){
        $this->load->view('template/header');
        $data='';
        if($nivel==9){
            $this->load->view('vistas/alesp/alter', $data);
        }else{
            $this->load->view('vistas/alesp/espe', $data);
        }
        /*$data['nivel'] = $this->conales_model->getsisniv($nivel);
        $data['grados'] = $this->conales_model->getgrado($nivel);
        switch ($nivel) {
            case 7:
                $this->load->view('vistas/cursos_alesp', $data);
                break;
            case 8:
                $this->load->view('vistas/cursos_aless', $data);
                break;
            case 9:
                $this->load->view('vistas/cursos_alesa', $data);
                break;
            case 13:
                redirect("http://cepead.educabolivia.bo/");
                break;
            case 14:
                redirect("http://cepead.educabolivia.bo/");
                break;
            default:
                $this->load->view('vistas/grados_alesp', $data);
                break;

        }*/
        $this->load->view('template/footer');
    }
    //TODO: Agregar en la vista Material de año de escolaridad getmatanio
    public function areas($curso=0){
        if($curso!=0){
            $data['nivel'] = $this->conales_model->getsisnivgra($curso);
            $data['areas'] = $this->conales_model->getareas($curso);
            $data['matanio'] = $this->conales_model->getmatanio($curso);
            $this->load->view('template/header');
            $this->load->view('vistas/areas_ales', $data);
            $this->load->view('template/footer');
        }else{
            $this->index();
        }
    }

    public function contarea($grado=0, $area=0){
        if($grado!=0){
            $data['nivel'] = $this->conales_model->getsisnivgrarea($grado, $area);
            $data['contenidos'] = $this->conales_model->getcontenidos($grado, $area);
            $this->load->view('template/header');
            $this->load->view('vistas/contenido', $data);
            $this->load->view('template/footer');
        }else{
            $this->index();
        }

    }
    public function vermaterial($area=0, $tema=0){
        if($tema!=0){
            $data['nivel'] = $this->conales_model->getsisnivgrareatema($area, $tema);
            $data['tipo'] = $this->conales_model->gettipo($tema);
            $data['archivos'] = $this->conales_model->getarchivoscon($tema);
            $this->load->view('template/header');
            $this->load->view('vistas/contemas', $data);
            $this->load->view('template/footer');
        }else{
            $this->index();
        }
    }
    //Para la pagina de los libros
    public function dispcontarea($grado=0, $area=0){
        if($grado!=0){
            $data['nivel'] = $this->conales_model->getsisnivgrarea($grado, $area);
            //$data['tipo'] = $this->conales_model->gettipo($tema);
            $data['archivos'] = $this->conales_model->getlibroarea($grado, $area);
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
            $data['nivel'] = $this->conales_model->getsisnivgrarea($grado, $area);
            //$data['tipo'] = $this->conales_model->gettipo($tema);
            //$data['archivos'] = $this->conales_model->getvidearea($grado, $area);
            $this->load->view('template/header');
            $this->load->view('vistas/dispareacontact', $data);
            $this->load->view('template/footer');
        }else{
            $this->index();
        }
    }
    //Para la pagina de los Videos
    public function dispcontareavideo($grado=0, $area=0){
        if($grado==0){
            $data['nivel'] = $this->conales_model->getsisnivgrarea($grado, $area);
            //$data['tipo'] = $this->conales_model->gettipo($tema);
            $data['archivos'] = $this->conales_model->getvidearea($grado, $area);
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
            $data['nivel'] = $this->conales_model->getsisnivgrarea($grado, $area);
            //$data['tipo'] = $this->conales_model->gettipo($tema);
            //$data['archivos'] = $this->conales_model->getarchivoscon($tema);
            $this->load->view('template/header');
            $this->load->view('vistas/dispareacontmas', $data);
            $this->load->view('template/footer');
        }else{
            $this->index();
        }
    }
}
?>
