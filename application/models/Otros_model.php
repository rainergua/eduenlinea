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

}

/* End of file Eduvit_Model.php */

?>