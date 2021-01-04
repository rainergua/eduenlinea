<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secundaria extends CI_Controller{
    public function __construct(){
        parent::__construct();
		$this->load->model('cuestionario_model');
		$this->load->library('form_validation');
		$this->load->database('default');
    }
    public function valido(){
        if($this->session->userdata('is_logued_in') == FALSE)
        {
            //$host= $_SERVER["HTTP_HOST"];
            $url= explode("/",$_SERVER["REQUEST_URI"]); //---- /seguimiento/cuestionario
            //print_r($url);
            if($url[2]=='cuestionario')
                $this->session->set_userdata('url', $url[2]);
            redirect(base_url().'login');
        }
    }
    private function curso($curso){
        $literal = '';
        switch ($curso) {
            case 1:
                $literal = 'Primero';
                break;
            case 2:
                $literal = 'Segundo';
                break;
            case 3:
                $literal = 'Tercero';
                break;
            case 4:
                $literal = 'Cuarto';
                break;
            case 5:
                $literal = 'Quinto';
                break;
            case 6:
                $literal = 'Sexto';
                break;
            default:
                $literal = 'Primero';
                break;
        }
        return $literal;
    }
    private function materia($cod_mat){
        switch ($cod_mat){
            case 'mat':
                $materia ='Matemática';
                break;
            case 'fis':
                $materia ='Física';
                break;
            case 'qmc':
                $materia ='Química';
                break;
            case 'lit':
                $materia ='Literatura';
                break;
            case 'bio':
                $materia ='Biología';
                break;
            case 'soc':
                $materia ='Ciencias Sociales';
                break;
            default:
                $materia ='Matemática';
                break;
        }
        return $materia;
    }
    private function areas($curso){
        $areas = array( array('cod_mat'=>'mat', 'materia'=>'Matemática', 'img'=>'mate-sec.png', 'curso'=>$curso),
                        array('cod_mat'=>'fis', 'materia'=>'Física', 'img'=>'fisica.png', 'curso'=>$curso),
                        array('cod_mat'=>'qmc', 'materia'=>'Química', 'img'=>'quimica.png', 'curso'=>$curso),
                        array('cod_mat'=>'lit', 'materia'=>'Literatura', 'img'=>'literatura.png', 'curso'=>$curso),
                        array('cod_mat'=>'bio', 'materia'=>'Biología', 'img'=>'biologia.png', 'curso'=>$curso),
                        array('cod_mat'=>'soc', 'materia'=>'Ciencias Sociales', 'img'=>'soc-sec.png', 'curso'=>$curso)
                    );
        return $areas;
    }
    private function cont_area($curso, $materia){
        $contenido = array(
            array('nro'=>1, 'titulo'=>'Números Naturales'),
            array('nro'=>2, 'titulo'=>'Conteo y deconteo de números naturales'),
            array('nro'=>3, 'titulo'=>'Correspondencia, clasificación y seriación'),
            array('nro'=>4, 'titulo'=>'La linea recta, figuras y formas'),
            array('nro'=>5, 'titulo'=>'Números Naturales y su valor posicional')
        );
        return $contenido;
    }
    /******************** */
    public function index(){
        $this->load->view('template/header');
        $this->load->view('vistas/secundaria');
        $this->load->view('template/footer');
    }

    public function area_sec($curso){
        $data['curso'] = $this->curso($curso);
        $data['areas'] = $this->areas($curso);
        $this->load->view('template/header');
        $this->load->view('vistas/area_sec', $data);
        $this->load->view('template/footer');
    }
    public function contenido($curso, $materia){
        $data['contenidos'] = $this->cont_area($curso, $materia);
        $data['curso'] = $this->curso($curso);
        $data['materia'] = $this->materia($materia);
        $data['nivel'] = 'Secundario';
        $this->load->view('template/header');
        $this->load->view('vistas/contenido', $data);
        $this->load->view('template/footer');
    }
    public function cont_temas(){
        $this->load->view('template/header');
        $this->load->view('vistas/contemas');
        $this->load->view('template/footer');
    }
}
?>
