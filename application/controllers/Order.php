<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_order');
		$this->load->view('summon');
	}

	public function index(){
		$cart 	= $this->cart->contents();
		$name	= $this->input->post('name');
		$num	= $this->input->post('num');

		$date = date("Ymd-Hi-s");

		$data = array(
				'order_id' 		=> $date,
				'name'			=> $name,
				'total_price'	=> $this->cart->total(),
				'num'			=> $num,
				'status'		=> "unserved"
		);

		$this->M_order->input_order($data);

		$i=1;
		foreach ($cart as $key) {
			$data2 = array(
				'detail_order_id' => $date.".".$i++,
				'order_id'		  => $date,
				'menu_id'		  => $key['id'],
				'name'			  => $key['rname'],
				'price'			  => $key['price'] 
			);

			// print_r($data2);		
			$this->M_order->in_detail($data2);
			redirect('welcome','refresh');	
		}

	}

}

/* End of file order.php */
/* Location: ./application/controllers/order.php */