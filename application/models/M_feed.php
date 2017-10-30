<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_feed extends CI_Model {

	public function feed(){
		$data=$this->db->get('feed');
		return $data->result();
	}

	public function input_feed(){

		if($this->session->userdata('desc')){
			$name = $this->session->userdata('user');
		}
		else{
			$name ="Anonymous";
		}

		$input = array(
			'id_com' 	=> date('Ymd-hi-s'),
			'name'		=> $name,
			'rate'		=> $this->input->post('rate'),
			'title'		=> $this->input->post('title'),
			'comm'		=> $this->input->post('comm'),
			'time'		=> date('Y-m-d h:i:s')
			);

		$this->db->insert('feed', $input);
	}

	public function delete_feed($id){
		$this->db->where('id_com', $id);
		$this->db->delete('feed');
	}

	// public function delete_feed(){
	// 	$data = $this->M_feed->delete_feed($id_comm);
	// 	redirect(base_url().'admin/feed');
	// }

}

/* End of file M_feed.php */
/* Location: ./application/models/M_feed.php */