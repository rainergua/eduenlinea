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
    public function videodehoyis($cod_gra){
        $this->db->where('cod_gra', $cod_gra);
        $this->db->where('cod_tipo', 8);
        $this->db->order_by('cod_mat', 'DESC');
        $this->db->limit(5);
        return $this->db->get('material_area')->result();
    }
    public function videodehoypr($cod_gra){
        $this->db->where('cod_gra', $cod_gra);
        $this->db->where('cod_tipo', 8);
        $this->db->order_by('cod_codcam', 'DESC');
        $this->db->limit(5);
        return $this->db->get('mat_campo')->result();
    }
    public function getmaterialis($cod_mat){
        $this->db->where('cod_mat', $cod_mat);
        return $this->db->get('material_area')->row();
    }
    public function getmaterialpr($cod_mat){
        $this->db->where('cod_codcam', $cod_mat);
        return $this->db->get('mat_campo')->row();
    }
}