<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->view('summon');
		$this->load->model('M_menu');
		$this->load->model('M_order');
		$this->load->model('M_feed');
		$this->load->view('feed');
	}

	public function index(){
		$this->load->view('admin/navbar');
		$this->load->view('admin/contents');
		$this->load->view('footer');
	}

	public function feed(){
		$data['feed'] = $this->M_feed->feed();
		$this->load->view('admin/navbar', $data, FALSE);
		$this->load->view('admin/feed',$data);
		$this->load->view('footer');
	}

	public function delete_feed($id){
		$data = $this->M_feed->delete_feed($id);
		redirect(base_url().'admin/feed');
	}

	public function search(){
		$search = $this->input->post('search');

		$data['find'] = $this->M_menu->search($search);

		$this->load->view('admin/navbar');
		$this->load->view('admin/searched',$data);
		$this->load->view('footer');
	}

	public function menu(){
		if($this->session->userdata('desc')=="Admin"){

			// setting pagination
			$config['base_url'] = base_url().'admin/menu';
			$config['total_rows'] = $this->db->count_all('menu');
			$config['per_page'] = 6;
			$config['uri_segment'] = 3;
			$config['num_links'] = $config["total_rows"] / $config["per_page"];

		// settinggan Bootstrap
			$config['full_tag_open'] 	= '<ul class="pagination">';
			$config['full_tag_close'] 	= '</ul>';
			$config['first_link'] 		= false;
			$config['last_link'] 		= false;
			$config['first_tag_open'] 	= '<li>';
			$config['first_tag_close'] 	= '</li>';
			$config['prev_link'] 		= '&laquo';
			$config['prev_tag_open'] 	= '<li class="prev">';
			$config['prev_tag_close'] 	= '</li>';
			$config['next_link'] 		= '&raquo';
			$config['next_tag_open'] 	= '<li>';
			$config['next_tag_close'] 	= '</li>';
			$config['last_tag_open'] 	= '<li>';
			$config['last_tag_close']	= '</li>';
			$config['cur_tag_open'] 	= '<li class="active"><a href="#">';
			$config['cur_tag_close'] 	= '</a></li>';
			$config['num_tag_open'] 	= '<li>';
			$config['num_tag_close'] 	= '</li>';

		//insisalisasi Pagination 
			$this->pagination->initialize($config);

		//membuat membaca uri_segment menjadi : 0
			$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['query']=$this->M_menu->menu($config["per_page"], $data['page']);

			$data['paging'] =  $this->pagination->create_links();


			$this->load->view('admin/navbar');
			// $this->load->view('admin/contents');
			$this->load->view('admin/menu',$data);
			// $this->load->view('admin/menu',$data);
		}else{
			redirect(base_url().'welcome/menu','refresh');
		}
		$this->load->view('footer');
	}

	public function cart(){
		$data['order'] 	= $this->M_order->order_ada();
		$data['order2'] = $this->M_order->order_nope();

		$this->load->view('admin/navbar');
		$this->load->view('admin/cart', $data);
		$this->load->view('footer');
	}

	public function served_order(){
		$data['order2'] = $this->M_order->order_nope();

		$this->load->view('admin/navbar');
		$this->load->view('admin/served_order', $data);
		$this->load->view('footer');
	}

	public function detail_order($id){
		$data['order'] = $this->M_order->detail_order_ada($id);
		$data['id_num']	= $id;

		$this->load->view('admin/navbar');
		$this->load->view('admin/detail_order', $data);
		$this->load->view('footer');
	}

	public function confrim_order($id){
		$this->M_order->konf_order($id);
		redirect('admin/cart');
		$this->load->view('footer');
	}

	public function input(){

		// echo "LOL";

		if(isset($_POST['ok'])){

			$config['upload_path'] 		= 'uploads/';
			$config['allowed_types'] 	= 'gif|jpg|png';
			$config['max_size']  		= '100';
			$config['max_width']  		= '1024';
			$config['max_height']  		= '768';


			// $nama_asli =  $_FILES["gambar"]["name"];
			// $spilt = explode(".", $nama_asli);

			// echo $spilt[1];

			// $this->load->library('upload', $config);
			$this->upload->initialize($config);
			
			if (!$this->upload->do_upload('pic')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else{
				$data = array('upload_data' => $this->upload->data());

				

				$this->M_menu->input_menu();
			}
		}
		$this->load->view('admin/navbar');
		$this->load->view('admin/input');
		$this->load->view('footer');
		// redirect('admin/menu');
	}

	public function edit($id)
	{
		$data['update'] = $this->M_menu->show_edit($id);

		if(isset($_POST['update'])){
			// $this->M_menu->edit_menu($id);

			$config['upload_path'] 		= 'uploads/';
			$config['allowed_types'] 	= 'gif|jpg|png';
			$config['max_size']  		= '100';
			$config['max_width']  		= '1024';
			$config['max_height']  		= '768';

			$this->upload->initialize($config);
			
			if (!$this->upload->do_upload('pic')){
				$error = array('error' => $this->upload->display_errors());
				// print_r($error);
				$this->M_menu->edit_menu($id);
				redirect(base_url().'admin');
			}
			else{

				$data = array('upload_data' => $this->upload->data());
				$this->M_menu->edit_menu($id);
				redirect(base_url().'admin');
			}
		}

		$this->load->view('admin/edit',$data);
		$this->load->view('admin/navbar');
		$this->load->view('footer');

	}

	public function delete($id){
		$lol = $this->M_menu->delete_menu($id);
		redirect(base_url().'admin');
	}

	public function nolog(){
		$this->load->view('nolog');
	}

}


/* End of file admin.php */
/* Location: ./application/controllers/admin.php */