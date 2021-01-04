<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    public function __construct() {
		parent::__construct();
	}
    public function login_user($password)
	{
        $this->db->where('carnet',$password);
    	$this->db->or_where('rda',$password);
    	$query = $this->db->get('mtroservprog');
    	if($query->num_rows() >= 1)
    	{
    		return TRUE;
    	}else{
    	    return FALSE;
    	}
    }
    

}

/* End of file Login_model.php */


?>