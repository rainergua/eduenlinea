<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    public function __construct() {
		parent::__construct();
	}
    public function login_user($username, $password)
	{
        $this->db->where('carnet',$username);
    	$this->db->where('rda',$password);
		$query = $this->db->get('talentousr');
    	if($query->num_rows() >= 1)
    	{
    		return $query->result();
    	}else{
    	    return FALSE;
    	}
    }
    

}

/* End of file Login_model.php */


?>