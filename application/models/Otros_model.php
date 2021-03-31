<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Otros_Model extends CI_Model {
    public function __construct() {
    	parent::__construct();
    }

    public function getcarresfm(){
        return $this->db->get('ecaresfm')->result();
    }
    public function guardar($data){
        if($this->db->insert("diadelmar", $data)){
			return TRUE;
		}else{
			return FALSE;
		}
    }
    public function sacavideo(){
        return $this->db->get('diadelmar')->result();
    }

    public function getVideo($cod_vid){
        $this->db->where('cod_diamar', $cod_vid);
        return $this->db->get('diadelmar')->row();
    }

}

/* End of file Eduvit_Model.php */

?>