<?php

defined('BASEPATH') OR exit('No direct script access allowed');
    class Login extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('login_model');
        }
        public function valido(){
            if($this->session->userdata('is_logued_in') == FALSE)
            {
                redirect(base_url().'login');
            }
        }
        public function index()
        {
            switch ($this->session->userdata('perfil')) {    
                case '':
                    $data['token'] = $this->token();
                    $data['error'] = '';
                    $this->load->view('template/header');
                    $this->load->view('vistas/login_view', $data);
                    //$this->load->view('vistas/indice', $data);
                    $this->load->view('template/footer');
                    break;
                case 'a':
                case 'p':
                    redirect(base_url().'conales/vertalento');
                    break;
                default:
                    $data['token'] = $this->token();
                    $data['error'] = 'Usuario no válido';
                    $this->load->view('template/header');
                    $this->load->view('vistas/login_view', $data);
                    $this->load->view('template/footer');
                    break;
            }
        }
        public function ingresar()
        {
            if($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token'))
            {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                //Verifica en la BD si esta el usuario o Unidad Educativa
                $check_user = $this->login_model->login_user($username,$password);
                if($check_user != FALSE)
                {
                    //Asigna al array data el estado logueado, su id, su perfil, su nombre de usuario
                    $data = array(
                    'is_logued_in' 	=> 		TRUE,
                    'perfil'		=>		$check_user[0]->rol,
                    'carnet' 		=> 		$check_user[0]->carnet,
                    'rda' 		=> 		$check_user[0]->rda
                    );
                    //con el array	crea las 4 variables de sesion
                    $this->session->set_userdata($data);
                    //redirecciona al Metodo Index del Controlador Login
                    $this->index();
                }else{
                    redirect(base_url().'login');
                }
            }else{
                redirect(base_url().'login');
            }
        }
    
        public function token()
        {
            $token = md5(uniqid(rand(),true));
            $this->session->set_userdata('token',$token);
            return $token;
        }
        public function logout()
        {
            $this->session->sess_destroy();
            redirect(base_url().'login');
        }
    }

/* End of file Login.php */

?>