<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuestionario_model extends CI_Model{

    public function __construct() {
    	parent::__construct();
    }

    public function guardar_data($data){
        if($this->db->insert("cuestionario_tic", $data)){
			return TRUE;
		}else{
			return FALSE;
		}
    }
    public function guardar($data){
        $this->db->where('cod_rda', $data['cod_rda']);
        $this->db->where('carnet', $data['carnet']);
        $filas = $this->db->get('cuestionario_tic')->num_rows();
        if($filas == 0)
            $this->guardar_data($data);
        return $filas;
    }
    public function verifica($rda, $carnet){
        $this->db->where('cod_rda', $rda);
        $this->db->where('carnet', $carnet);
        return $this->db->get('cuestionario_tic')->num_rows();
    }
}
?>
