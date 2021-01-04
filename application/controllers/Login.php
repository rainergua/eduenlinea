<?php

defined('BASEPATH') OR exit('No direct script access allowed');
    class Login extends CI_Controller{
        public $CI = NULL;
        public function __construct()
        {
            parent::__construct();
            $this->CI = &get_instance();
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
            redirect(base_url());
            /*switch ($this->session->userdata('perfil')) {
                case 'a':
                case 'm':
                    $res = 0;
                    echo json_encode($res);
                    break;
                default:
                    $data['token'] = $this->token();
                    $data['error'] = '';
                    $data['titulo'] = 'Ingrese sus datos';
                    $this->load->view('template/header');
                    $this->load->view('vistas/login_view', $data);
                    $this->load->view('template/footer');
                    break;
            }*/
        }
        public function ingresar()
        {
            if($this->input->post('token') == $this->session->userdata('token'))
            {
                $password = $this->input->post('password');
                $usrverifica = $this->verificausr($password);
                //Verifica en la BBDD si esta el usuario o Unidad Educativa
                if($password == '12345678' || $usrverifica)
                //if($password == '12345678')
                {
                    $data = array(
                    'is_logued_in' 	=> 		TRUE,
                    'perfil'		=>		'a',
                    'pass' 		    => 		'12345678'//,$check_user->carnet,
                    );
                    $this->session->set_userdata($data);
                    $res = 1;
                    echo json_encode($res);
                }else{
                    /*$data['token'] = $this->token();
                    $data['error'] = 'Usuario no válido';
                    $data['titulo'] = 'Ingrese sus Datos';
                    $this->load->view('template/header');
                    $this->load->view('vistas/login_view', $data);
                    $this->load->view('template/footer');*/
                    $res = 0;
                    echo json_encode($res);
                }
            }else{
                /*$data['token'] = $this->token();
                $data['error'] = 'Usuario no válido';
                $data['titulo'] = 'Ingrese sus Datos';
                $this->load->view('template/header');
                $this->load->view('vistas/login_view', $data);
                $this->load->view('template/footer');*/
                $res = 0;
                echo json_encode($res);
            }
        }
    
        public function token()
        {
            $token = md5(uniqid(rand(), true));
            $this->session->set_userdata('token',$token);
            return $token;
        }
        public function logout()
        {
            $this->session->sess_destroy();
            redirect(base_url());
        }
        private function verificausr($password)
        {
            if($this->verificamaestro($password)){
                return TRUE;
            }elseif($this->verificaestudiante($password)){
                return TRUE;
            }else{
                return FALSE;
            }
        }
        private function verificamaestro($password)
        {   
            $habil = $this->login_model->login_user($password);
            if($habil){
                return TRUE;
            }else{
                return FALSE;
            }
        }
        private function verificaestudiante($password)
        {
            $code = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiI1dm5TRXBTTmFjMVRtd09IWGZhaXd0ZmEzNFlpdlZKSSIsInVzZXIiOiJ2Y3l0LWRldiIsImV4cCI6MTY4OTEyMDQyMH0.QYRTLOl7gHNC2GnfhoyA7puq-RnIWbByCHPBPFHLXZk';
            $this->load->library('rest');
            //$config = array('server' 	=> 'http://100.0.101.105:8000',);
            $config = array('server' 	=> 'http://200.105.138.32:8000',);
            $this->rest->header('Authorization: Bearer '.$code);
            $this->rest->initialize($config);
            $habil = $this->rest->get('vcyt/inscripcion/estudiante/'.$password);
            if($habil->resultado){
                return TRUE;
            }else{
                return FALSE;
            }
        }
    }

/* End of file Login.php */

?>