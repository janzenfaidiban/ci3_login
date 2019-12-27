<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model {
	
   	function do_login($email,$password){
		$query = $this
            ->db
			->where('email', $email) 
            ->where('password', $password)  
            ->limit(1) 
            ->get('user'); 
 
        if ($query->num_rows() == 1){ return $query->row_array(); 
        }else{ return FALSE; }
	}
} 