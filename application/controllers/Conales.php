<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conales extends CI_Controller{
    public function __construct(){
        parent::__construct();
		$this->load->model('conales_model');
		$this->load->library('form_validation');
		$this->load->database('default');
    }
    private function generaCodigo($length = 6){
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz"), 0, $length);  
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
    public function pnp(){
        $this->load->view('template/header');
        $this->load->view('vistas/alesp/pnp');
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
        $this->load->view('template/footer');  
    }
    public function vertalento(){
        $this->valido();
        $carnet = $this->session->userdata('carnet');
        $rda = $this->session->userdata('rda');
        $rol = $this->session->userdata('perfil');
        $data['error'] = '';
        $data['user'] = $this->conales_model->getuser($carnet, $rda);
        if($rol == 'a'){
            $data['talent'] = $this->conales_model->getbol();
        }else{
            $data['talent'] = $this->conales_model->getdepto($data['user'][0]->departamento);
        }
        $data['user'] = $this->conales_model->getuser($carnet, $rda);
        $this->load->view('template/header');
        $this->load->view('vistas/alesp/vertalento', $data);
        $this->load->view('template/footer');
    }
    //Para el cargado de formulario de talento extraordinario
    public function formtal(){
        $data['error'] = '';
        $this->load->view('template/header');
        $this->load->view('vistas/alesp/talext', $data);
        $this->load->view('template/footer');
    }
    //Guarda la información del formulario de talento extraordinario
    public function savetal(){
        $datos = array();
        $config['upload_path'] = './assets/uploads/files/especial/talento/';
        $config['allowed_types'] = 'mp4|m4v|avi|mpeg|divx|flv|mkv|mpg';
        $video = $this->generaCodigo(6);
        $archexp = $this->generaCodigo(6);
        $dname = explode(".", $_FILES["videxp"]["name"]);
        $ext1 = end($dname);
        $video = $video .'.'. $ext1;
        $config['file_name'] = $video;
        $config['max_size'] = '102400';
        //$config['file_ext'] = pathinfo($_FILES["videxp"]["name"], PATHINFO_EXTENSION);
        $dname = explode(".", $_FILES["arcexp"]["name"]);
        $ext2 = end($dname);
        $config2['upload_path'] = './assets/uploads/files/especial/talento/';
        $config2['allowed_types'] = 'pptx|ppt|pdf';
        $config2['max_size'] = '51200';
        $archexp = $archexp.'.'.$ext2;
        $config2['file_name'] = $archexp;
        //$config2['file_ext'] = pathinfo($_FILES["arcexp"]["name"], PATHINFO_EXTENSION);
        $this->load->library('upload');
        $this->upload->initialize($config);
        $sw = 0;
        if(!$this->upload->do_upload('videxp')){
            $sw++;
            $data1 = $this->upload->data();
            //print_r($data1);
        }
        $this->upload->initialize($config2);
        if(!$this->upload->do_upload('arcexp')){
            $sw++;
            $data2 = $this->upload->data();
        }
        //$config['file_name'] = $codigo;
        $this->load->view('template/header');
        if ( $sw == 2){
            /* error en la subida del archivo */
            /* obtenemos el error en un array */
            $error = array('error' => $this->upload->display_errors());
            $data['error'] = "Algo salió mal por favor intenta de nuevo";
            //$this->load->view('vistas/ovis/diadelmar', $data);
            /* cargamos la vista inicial pero ya con el array de errores lleno */
            //print($config['upload_path']);
        }else{
            /* éxito en la subida del archivo */
            //$info = array('upload_data' => $this->upload->data());
            /* obtenemos los datos del upload del archivo en un array, lo 
            pasamos a la vista form_success */
            //$archivo = $info['upload_data']['file_name'];
            //print_r($_POST);
            if(!empty($_POST['rude'])){
                $datos = array(
                    'rude' => $this->input->post('rude'),
                    'nombre' => $this->input->post('nombre'),
                    'carnet' => $this->input->post('carnet'),
                    'fecnac' => $this->input->post('fecnac'),
                    'fono' => $this->input->post('fono'),
                    'correo' => $this->input->post('correo'),
                    'tutor' => $this->input->post('tutor'),
                    'fonotut' => $this->input->post('fonotut'),
                    'depto' => $this->input->post('depto'),
                    'munic' => $this->input->post('munic'),
                    'distrito' => $this->input->post('distrito'),
                    'ue' => $this->input->post('ue'),
                    'fonoue' => $this->input->post('fonoue'),
                    'dependencia' => $this->input->post('dependencia'),
                    'nivel' => $this->input->post('nivel'),
                    'anio' => $this->input->post('anio'),
                    'cenesp' => $this->input->post('cenesp'),
                    'dircesp' => $this->input->post('dircesp'),
                    'areapot' => $this->input->post('areapot'),
                    'videxp' => $video,
                    'desc_tal' => $this->input->post('desc'),
                    'arcexp' => $archexp,
                    'descnec' => $this->input->post('descnec'),
                    'noment' => $this->input->post('noment'),
                    'fonoment' => $this->input->post('fonoment'),
                    'titulo' => $this->input->post('titulo'),
                    'fecha' => date("Y-m-d H:i:s"),
                    'codigo' => $this->generaCodigo(5),
                );
                $res = $this->conales_model->guardatal($datos);
                //$data['error'] = "Tus datos han sido guardados correctamente.<br><h4>TU CÓDIGO ES: ".$datos['codigo']."<br>DEBES CONSERVAR ESTE CÓDIGO</h4>";
                $this->gendoc($datos);
                //print_r($datos);
            }else{
                $data['error'] = "Algo salió mal por favor intenta de nuevo";
                $this->load->view('vistas/alesp/talext', $data);
                $this->load->view('template/footer');
            }

        }
    }
    private function gendoc($data){
        $this->load->library('Pdf');
		$this->load->view('vistas/alesp/gecomp', $data);
    }
}
?>
