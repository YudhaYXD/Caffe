<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_menu extends CI_Model {

	public function search($find){
		// $this->db->where("reference_number=1234 AND field1='$search_value'");
		// $this->db->or_where("reference_number=1234 AND field2='$search_value'");
		// $res = $this->db->get('TABLE_NAME');

		$this->db->like('name', $find);
		$this->db->or_like('descript', $find);
		$this->db->or_like('price', $find);
		// $this->db->where('reference_number', $reference_number);
		$res = $this->db->get('menu');

		return $res->result();
	}

	public function menu($limit, $start){
		// $log = $this->db->select("SELECT * FROM menu WHERE'field1, field2'");
		$data = $this->db->get('menu',$limit, $start);

		return $data->result();
	}

	public function menu1(){
		// $log = $this->db->select("SELECT * FROM menu WHERE'field1, field2'");
		$this->db->like('menu_id','b','after');
		$data = $this->db->get('menu');

		return $data->result();
	}

	public function menu2(){
		// $log = $this->db->select("SELECT * FROM menu WHERE'field1, field2'");
		$this->db->like('menu_id','s','after');
		$data = $this->db->get('menu');

		return $data->result();
	}

	public function choose_menu($id){
		$data = $this->db->get_where('menu',array('menu_id'=>$id));
		return $data->row_array();
	}

	public function input_menu(){
		$input = array(
			'menu_id' 	=> $this->input->post('menu_id'),
			'name'		=> $this->input->post('name'),
			'descript'	=> $this->input->post('descript'),
			'price'		=> $this->input->post('price'),
			'm_price'	=> $this->input->post('m_price'),
			'pic'		=> $_FILES["pic"]["name"]
			);

		$this->db->insert('menu', $input);
	}

	public function show_edit($id){
		$lol = $this->db->where('menu_id',$id)->get('menu');

		return $lol->result();
	}

	public function edit_menu($id){
		$update = array(
			'menu_id' 	=> $this->input->post('menu_id'),
			'name'		=> $this->input->post('name'),
			'descript'	=> $this->input->post('descript'),
			'price'		=> $this->input->post('price'),
			'm_price'	=> $this->input->post('m_price'),
			'pic'		=> $this->input->post('pic_name')
			);

		$this->db->where('menu_id', $id);
		$this->db->update('menu', $update);
	}



	public function delete_menu($id){
		$this->db->where('menu_id', $id);
		$this->db->delete('menu');
	}
	

}

/* End of file m_menu.php */
/* Location: ./application/models/m_menu.php */