<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Consup_Model extends CI_Model {
    public function __construct() {
    	parent::__construct();
    }

    public function getcarresfm(){
        return $this->db->get('ecaresfm')->result();
    }
    public function getcarresfmanio($cod_carresfm){
        $this->db->select('n.cod_nivesfm, n.des_nivesm');
        $this->db->distinct();
        $this->db->from('emateria_caresfm m');
        $this->db->join('enivelesfm n', 'm.cod_nivesfm=n.cod_nivesfm', 'inner');
        $this->db->where('m.cod_caresfm', $cod_carresfm);
        $resultado = $this->db->get('enivelesfm')->result();
        return $resultado;
    }
    public function getcarresfmmat($cod_carresfm){
        $this->db->where('cod_caresfm', $cod_carresfm);
        $resultado = $this->db->get('emateria_caresfm')->result();
        return $resultado;
    }
    public function getcarresfmcont($cod_carresfm){
        $this->db->where('cod_caresfm', $cod_carresfm);
        $resultado = $this->db->get('ematerial_esfm')->result();
        return $resultado;
    }

}

/* End of file Eduvit_Model.php */

?>