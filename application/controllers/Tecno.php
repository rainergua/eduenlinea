<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tecno extends CI_Controller{
    public function __construct(){
        parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('video_model');
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
        $this->load->view('template/header');
        $data['videos']=$this->video_model->sacatutos();
        $this->load->view('vistas/huawei/videos', $data);
        $this->load->view('template/footer');
    }
   public function carreras(){
        $this->load->view('template/header');
        $data['carreras'] = $this->consup_model->getcarresfm();
        $this->load->view('vistas/superior/carrera', $data);
        $this->load->view('template/footer');
   }
   public function materias($cod_carresfm){
        $this->load->view('template/header');
        $data['anios'] = $this->consup_model->getcarresfmanio($cod_carresfm);
        $data['materias'] = $this->consup_model->getcarresfmmat($cod_carresfm);
        $data['contenidos'] = $this->consup_model->getcarresfmcont($cod_carresfm);
        $this->load->view('vistas/superior/material', $data);
        $this->load->view('template/footer');
   }

   public function depto($i){
        $this->load->view('template/header');
        $data['depto'] = $this->consup_model->getdeptos();
        if($i == 1){
            $data['titulo'] = "Institutos Técnico Tecnológicos - Artísticos y Lingüisticos";
            $data['dir'] = 1;
        }elseif($i == 2){
            $data['titulo'] = "Universidades";
            $data['dir'] = 2;
        }else{
            $this->index();
        }
        $this->load->view('vistas/superior/deptos', $data);
        $this->load->view('template/footer');
    }

    public function superior($i, $depto){
        $this->load->view('template/header');
        $data['depto'] = $depto;
        if($i == 1){
            $data['inst'] = $this->consup_model->getinst($depto);
            $data['munis'] = $this->consup_model->getmuni($depto);
            $data['titulo'] = "Institutos Técnico Tecnológicos - Artísticos y Lingüisticos";
            $data['dir'] = 1;
            $this->load->view('vistas/superior/instis', $data);
        }elseif($i == 2){
            $data['unis'] = $this->consup_model->getunis($depto);
            $data['titulo'] = "Universidades";
            $data['dir'] = 2;
            $this->load->view('vistas/superior/universidades', $data);
        }else{
            $this->index();
        }
        $this->load->view('template/footer');
    }

    public function llenaInst(){
        $muni = $this->input->post('muni');
        $depto= $this->input->post('depto');
        $instis = $this->consup_model->getinstmuni($muni, $depto);
        $instisd = $this->consup_model->getinstmunid($muni, $depto);
        $data['sel'] = "";
        $data['tabla'] = "";
        $data['sel'] .= "<option value=''>Instituto</option>";
        foreach ($instis as $insti) {
            $data['tabla'].='<tr><th>'.$insti->municipio.'</th><td>'.$insti->instituto.'</td><td>'.$insti->carrera.'</td><td>'.$insti->grado_ac.'</td>
            <td>'.$insti->rm_ap.'</td><td>'.$insti->rm_carr.'</td><td>'.$insti->dependencia.'</td><td>'.$insti->sitio_web.'</td></tr>';
        }
        foreach ($instisd as $instid) {
            $data['sel'] .= "<option value='".$instid->instituto."'>".$instid->instituto."</option>";
        }
        print_r(json_encode($data));
    }

    public function llenaCarr(){
        $muni = $this->input->post('muni');
        $depto= $this->input->post('depto');
        $inst = $this->input->post('insti');
        $instis = $this->consup_model->getinstituto($muni, $depto, $inst);
        $data['tabla'] = "";
        foreach ($instis as $insti) {
            $data['tabla'].='<tr><th>'.$insti->municipio.'</th><td>'.$insti->instituto.'</td><td>'.$insti->carrera.'</td><td>'.$insti->grado_ac.'</td>
            <td>'.$insti->rm_ap.'</td><td>'.$insti->rm_carr.'</td><td>'.$insti->dependencia.'</td><td>'.$insti->sitio_web.'</td></tr>';
        }
        print_r(json_encode($data));
    }

}
?>
