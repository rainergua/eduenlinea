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
        if (getenv('HTTP_CLIENT_IP')) {
            $ip = getenv('HTTP_CLIENT_IP');
        } elseif (getenv('HTTP_X_FORWARDED_FOR')) {
            $ip = getenv('HTTP_X_FORWARDED_FOR');
        } elseif (getenv('HTTP_X_FORWARDED')) {
            $ip = getenv('HTTP_X_FORWARDED');
        } elseif (getenv('HTTP_FORWARDED_FOR')) {
            $ip = getenv('HTTP_FORWARDED_FOR');
        } elseif (getenv('HTTP_FORWARDED')) {
            $ip = getenv('HTTP_FORWARDED');
        } else {
            // Método por defecto de obtener la IP del usuario
            // Si se utiliza un proxy, esto nos daría la IP del proxy
            // y no la IP real del usuario.
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        //print_r($this->input->server(array('SERVER_PROTOCOL', 'REQUEST_URI', 'SERVER_NAME', 'PHP_SELF', 'HTTP_USER_AGENT', 'REMOTE_ADDR')));
        $data2 = array(
            'sprot'  	    => 		$this->input->server('SERVER_PROTOCOL'),
            'request'		=>		$this->input->server('REQUEST_URI'),
            'sname'		    => 		$this->input->server('SERVER_NAME'),//,$check_user->carnet,
            'phpself' 	    => 		$this->input->server('PHP_SELF'),
            'useragent'		=>		$this->input->server('HTTP_USER_AGENT'),
            'remoteadd'	    => 		$ip,//$this->input->server( 'REMOTE_ADDR'),//,$check_user->carnet,
            //'ip_client'	    => 		$this->input->server( 'IP_CLIENT'),//,$check_user->carnet,
            'fecha'         =>      date("Y-m-d H:i:s")
            );
        $this->eduvit_model->savevis($data2);
        $this->load->view('template/header');
        $this->load->view('vistas/indice', $data);
        $this->load->view('template/footer');
    }
    public function regular(){
        //$this->valido();
        $data['sis'] = $this->eduvit_model->retselec(1);
        $data['nivel'] = $this->eduvit_model->retnivel(1);
        $this->load->view('template/header');
        $this->load->view('vistas/inicio', $data);
        $this->load->view('template/footer');
    }

    public function alternativa(){
        $data['sis'] = $this->eduvit_model->retselec(2);
        $data['nivel'] = $this->eduvit_model->retnivel(2);
        $this->load->view('template/header');
        $this->load->view('vistas/ialesp', $data);
        $this->load->view('template/footer');
    }
    public function superior(){
        $data['sis'] = $this->eduvit_model->retselec(3);
        $data['nivel'] = $this->eduvit_model->retnivel(3);
        $this->load->view('template/header');
        $this->load->view('vistas/isuper', $data);
        $this->load->view('template/footer');
    }
    public function videos(){
        $this->load->view('template/header');
        $this->load->view('vistas/videos');
        $this->load->view('template/footer');
    }

    private function saber_ip(){
        // Intentamos primero saber si se ha utilizado un proxy para acceder a la página,
        // y si éste ha indicado en alguna cabecera la IP real del usuario.
        if (getenv('HTTP_CLIENT_IP')) {
            $ip = getenv('HTTP_CLIENT_IP');
        } elseif (getenv('HTTP_X_FORWARDED_FOR')) {
            $ip = getenv('HTTP_X_FORWARDED_FOR');
        } elseif (getenv('HTTP_X_FORWARDED')) {
            $ip = getenv('HTTP_X_FORWARDED');
        } elseif (getenv('HTTP_FORWARDED_FOR')) {
            $ip = getenv('HTTP_FORWARDED_FOR');
        } elseif (getenv('HTTP_FORWARDED')) {
            $ip = getenv('HTTP_FORWARDED');
        } else {
            // Método por defecto de obtener la IP del usuario
            // Si se utiliza un proxy, esto nos daría la IP del proxy
            // y no la IP real del usuario.
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
}
?>
