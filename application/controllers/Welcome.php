<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	// function belajar(){
	// 	$data['contents'] = $this->M_menu->menu1();

	// 	print_r($data['contents']);
	// 	// $this->load->view('belajar',$data);
	// }

	public function __construct()
	{
		parent::__construct();
		$this->load->view('summon');
		$this->load->model('M_login');
		$this->load->model('M_menu');
		$this->load->model('M_feed');
		$this->load->view('feed');
	}

	public function feed(){
		$input = $this->M_feed->input_feed();
		redirect('welcome');
	}

	public function search(){
		$search = $this->input->post('search');

		$data['find'] = $this->M_menu->search($search);

		$this->load->view('navbar');
		$this->load->view('searched',$data);
		$this->load->view('footer');
	}

	public function index()
	{
		if($this->session->userdata('desc')=="Admin"){
			echo "LOL Cant Do That..";
		}else{
			if(isset($_POST['submit'])){

				$user = $this->input->post('user');
				$pass = $this->input->post('pass');

				$login = $this->M_login->login($user,$pass);

				print_r($login);

				$array = array(
					'user' 	=> $login->user,
					'pass'	=> $login->pass,
					'name'	=> $login->name
					);

				$this->session->set_userdata( $array );
				echo $this->session->userdata('name');
			}

			$data['feed'] = $this->M_feed->feed();


			
		// View
			$this->load->view('navbar');
			$this->load->view('contents',$data);
		// $this->load->view('menu', $data);
			$this->load->view('feed');
			$this->load->view('login');
			$this->load->view('footer');
		}
	}
	
	public function menu()
	{

		// setting pagination
		$config['base_url'] = base_url().'Welcome/menu';
		$config['total_rows'] = $this->db->count_all('menu');
		$config['per_page'] = 8;
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

		// memanggil model 
		$data['contents'] = $this->M_menu->menu($config["per_page"], $data['page']);
		$data['menu1'] = $this->M_menu->menu1();
		$data['menu2'] = $this->M_menu->menu2();

		// variabel untuk pagination 
		$data['paging'] =  $this->pagination->create_links();

		// load view 
		$this->load->view('navbar');
		$this->load->view('menu', $data);
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function guide(){
		$this->load->view('navbar');
		$this->load->view('guide');
		$this->load->view('footer');
	}
}		