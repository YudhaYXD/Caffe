<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_order extends CI_Model {

	public function order(){
		
		$data = $this->db->get('order');
		
		return $data->result();
	}

	public function order_ada(){
		$data = $this->db->get_where('order', array('status' =>'unserved' ));

		return $data->result();
	}

	public function detail_order_ada($id){
		$data = $this->db->get_where('order_detail', array('order_id' =>$id ));
		return $data->result();
	}

	public function order_nope(){
		$data = $this->db->get_where('order', array('status' =>'served' ));
		return $data->result();
	}	

	public function konf_order($id){
		$object = array('status'=>'served');
		
		$this->db->where('order_id', $id);
		$this->db->update('order', $object);
	}



	public function choose_order($id){
		$data = $this->db->get_where('order',array('order_id'=>$id));
		return $data->row_array();
	}

	public function input_order($data){

		$this->db->insert('order', $data);
	}

	public function in_detail($object){
		$this->db->insert('order_detail', $object);
	}


	public function show_edit($id){
		$lol = $this->db->where('order_id',$id)->get('order');

		return $lol->result();
	}

	public function edit_order($id){
		$update = array(
			'order_id' 	=> $this->input->post('order_id'),
			'name'		=> $this->input->post('name'),
			'total_price'	=> $this->input->post('total_price'),
			);

		$this->db->where('order_id', $id);
		$this->db->update('order', $update);
	}



	public function delete_order($id){
		$this->db->where('order_id', $id);
		$this->db->delete('order');
	}

}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */