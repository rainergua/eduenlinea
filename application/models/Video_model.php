<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Video_Model extends CI_Model {
    public function __construct() {
    	parent::__construct();
    }

    public function sacatutos(){
        $this->db->where('tipo_video', 21);
        //$this->db->order_by('tit_video');
        return $this->db->get('videos')->result();
    }
    public function getVideo($cod_vid){
        $this->db->where('cod_vid', $cod_vid);
        return $this->db->get('videos')->row();
    }
    public function sacavidini(){
        $this->db->where('tipo_video', 22);
        //$this->db->order_by('tit_video');
        return $this->db->get('videos')->result();
    }
}