<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function login($user, $pass){
		// $log = $this->db->query("SELECT * FROM session WHERE user='$user' AND pass='$pass'");

		// if($log){
		// 	return $log->first_row();
		// }else{
		// 	return false;
		// }
		// $user = $this->input->post('user');
		// $pass = $this->input->post('pass');

		$log = $this->db->get_where('session', array('user'=>$user,'pass'=>$pass),$limit=1);
		if($log->num_rows()==1){
			return $log->row_array();
		}
		else{
			return false;
		}
	}

}

/* End of file m_user.php */
/* Location: ./application/models/m_user.php */