<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->view('summon');
		$this->load->view('login');
		$this->load->model('M_menu');
		$this->load->model('M_login');
		$this->load->model('M_feed');
		$this->load->view('feed');
		$this->load->model('M_order');
	}

	public function index(){
		$cart = $this->cart->contents();

		// print_r($cart);

		foreach ($cart as $key) {
			echo $key["id"];

		}
		$this->load->view('navbar');
		$this->load->view('cart');
		$this->load->view('footer');

	}

	// public function add2(){
	// 	$id = "b0001";
	// 	$item = $this->M_menu->choose_menu($id);

	// 	echo $item['name'];

	// 	$data = array(
	// 		'id'      => $id,
	// 		'qty'     => 1,
	// 		'price'   => $item['price'],
	// 		'name'    => $item['menu_id'],
	// 		// 'options' => array('Size' => 'L', 'Color' => 'Red')
	// 		);
		
	// 	$this->cart->insert($data);

	// 	$cart = $this->cart->contents();
	// 	print_r($cart);
	// }

	public function add_cart(){

		if($this->session->userdata('desc')=="Member"){
			$id = $this->input->post('menu_id');
			$qty = $this->input->post('qty');
			$item = $this->M_menu->choose_menu($id);

			$disc         = $item['m_price'];
			$harga_potong = $item['price']*$disc;
			$harga 		  = $item['price']-$harga_potong ; 

			$data = array(
				'id'      => $item['menu_id'],
				'qty'     => $qty,
				'price'   => $harga,
				'name'    => $item['menu_id'],
				'rname'	  => $item['name'],
				'image'	  => $item['pic']
				);

			echo $harga;

			$this->cart->insert($data);

			$cart = $this->cart->contents();
			redirect('welcome/menu','refresh');

		}else{
			$id = $this->input->post('menu_id');
			$qty = $this->input->post('qty');
			$item = $this->M_menu->choose_menu($id);

			$data = array(
				'id'      => $item['menu_id'],
				'qty'     => $qty,
				'price'   => $item['price'],
				'name'    => $item['menu_id'],
				'rname'	  => $item['name'],
				'image'	  => $item['pic']
				);

			$this->cart->insert($data);

			$cart = $this->cart->contents();
			redirect('welcome/menu','refresh');
		}
		
		
	}

	public function update_cart($id){
		$data = array(
			'rowid' => $id,
			'qty'   => 1
			);
		
		$this->cart->update($data);
		redirect('welcome');
	}

	public function delete_cart($id){
		$data = array(
			'rowid' => $id,
			'qty'   => 0
			);
		
		$this->cart->update($data);
		redirect('cart/index','refresh');
	}

	public function clear(){
		$this->cart->destroy();
		redirect('cart/index','refresh');
	}


}

/* End of file cart.php */
/* Location: ./application/controllers/cart.php */