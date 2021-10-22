<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ocepb extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }
    
    public function index()
    {
        $data['error'] = "";
        //$data['info'] = "";
        $this->load->view('template/header');
        $this->load->view('vistas/ocepb/videos', $data);
        $this->load->view('template/footer');
    }

}

/* End of file Ocepb.php */

?>