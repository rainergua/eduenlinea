<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Covid extends CI_Controller{
    public function __construct(){
        parent::__construct();
		$this->load->model('otros_model');
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

    public function index(){
        $data['error'] = "";
        //$data['info'] = "";
        $this->load->view('template/header');
        $this->load->view('vistas/covid/covid', $data);
        $this->load->view('template/footer');
    }
    public function guardar(){
        $this->load->view('template/header');
        //$data['info'] = "";
        $config['upload_path'] = './assets/uploads/files/video/';
        $config['allowed_types'] = 'mp4|m4v';
        $config['max_size'] = '45000';
        $codigo = $this->generaCodigo(6);
        $config['file_name'] = $codigo;
        /*$config['max_width']  = '1024';
        $config['max_height']  = '768';*/
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload()){
            /* error en la subida del archivo */
            /* obtenemos el error en un array */
            $error = array('error' => $this->upload->display_errors());
            $data['error'] = "Algo salió mal por favor intenta de nuevo";
            $this->load->view('vistas/ovis/diadelmar', $data);
            /* cargamos la vista inicial pero ya con el array de errores lleno */
            //print($config['upload_path']);
        }else{
            /* éxito en la subida del archivo */        
            $info = array('upload_data' => $this->upload->data());
            /* obtenemos los datos del upload del archivo en un array, lo 
            pasamos a la vista form_success */
            $archivo = $info['upload_data']['file_name'];
            $datos = array(
                'rude' => $this->input->post('rude'),
                'nombres' => $this->input->post('nombre'),
                'apellidos' => $this->input->post('apellido'),
                'titulo' => $this->input->post('titulo'),
                'departamento' => $this->input->post('departamento'),
                'municipio' => $this->input->post('municipio'),
                'archivo' => $archivo,
                'fono' => $this->input->post('fono'),
                'ue' => $this->input->post('ue'),
                'fecha' => date("Y-m-d H:i:s"),
                'codigo' => $codigo,
            );
            $res = $this->otros_model->guardar($datos);
            if($res){
                $data['error'] = "Tu video ha sido guardado correctamente.<br><h4>TU CÓDIGO ES: ".$datos['codigo']."<br>DEBES CONSERVAR ESTE CÓDIGO</h4>";
                $this->load->view('vistas/ovis/diadelmar', $data);
            }else{
                $data['error'] = "Algo salió mal por favor intenta de nuevo";
                $this->load->view('vistas/ovis/diadelmar', $data);
            }
        }
        $this->load->view('template/footer');
    }

    public function vervideos(){
        $data['res'] = $this->otros_model->sacavideo();
        $this->load->view('template/header');
        $this->load->view('vistas/ovis/vervideo', $data);
        $this->load->view('template/footer');
    }

    public function obtvideo(){
        $cod_vid = $this->input->post('cod_vid');
        $setvideo = $this->otros_model->getVideo($cod_vid);
        if($setvideo){
            echo json_encode($setvideo);
        }else{
            echo json_encode('error');
        }
        //echo json_encode($cod_vid);
    }

}
?>
