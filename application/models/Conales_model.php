<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Conales_Model extends CI_Model {
    public function __construct() {
    	parent::__construct();
    }
    public function getperiodo(){
        $this->db->order_by('cod_per');
        return $this->db->get('periodo')->result();
    }

    public function getcontenidos($cod_disc){
        $this->db->select('cod_matanio, des_matanio, arch_matanio, img_matanio, t.tipo_cont, t.cod_tipo, genes');
        $this->db->from('matanio m');
        $this->db->join('tipo_contenido t', 'm.tipo_cont=t.cod_tipo', 'inner');
        $this->db->where('m.cod_dis', $cod_disc);
        $this->db->where('m.vis_matanio', 1);
        $this->db->order_by('genes, t.cod_tipo, cod_matanio, des_matanio');
        return $this->db->get()->result(); 
    }
    public function gettipocont($cod_disc){
        $this->db->select('t.tipo_cont, t.cod_tipo');
        $this->db->distinct();
        $this->db->from('matanio m');
        $this->db->join('tipo_contenido t', 'm.tipo_cont=t.cod_tipo', 'inner');
        $this->db->where('m.cod_dis', $cod_disc);
        $this->db->where('m.vis_matanio', 1);
        $this->db->order_by('t.cod_tipo');
        return $this->db->get()->result(); 
    }
    public function getuser($carnet, $rda){
        $this->db->where('carnet',$carnet);
    	$this->db->where('rda',$rda);
    	return $this->db->get('talentousr')->row();
    }
    public function getbol(){
        return $this->db->get('talento')->result();
    }
    public function getdepto($depto){
        $this->db->where('depto', $depto);
    	return $this->db->get('talento')->result();
    }
    public function guardatal($datos){
        $this->db->insert('talento', $datos);
    }
}

/* End of file Eduvit_Model.php */

?>