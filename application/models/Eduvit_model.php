<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Eduvit_Model extends CI_Model {
    public function __construct() {
    	parent::__construct();
    }

    public function retsis(){
        $this->db->order_by('cod_sis');
        return $this->db->get('subsistema')->result();   
    }
    
    public function retselec($cod_sis){
        $this->db->where('cod_sis', $cod_sis);
        return $this->db->get('subsistema')->row();   
    }
    public function retnivel($cod_sis){
        $this->db->where('cod_sis', $cod_sis);
        if($cod_sis==2)
            $this->db->order_by('txt_niv');
        return $this->db->get('nivel')->result();
    }
}

/* End of file Eduvit_Model.php */

?>