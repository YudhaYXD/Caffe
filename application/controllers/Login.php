<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->view('summon');
		// $this->load->view('navbar');
		$this->load->model('M_login');
	}

	public function index()
	{
		$username = $this->input->post('user');
		$password = $this->input->post('pass');

		$data = $this->M_login->login($username, $password);

		// print_r($data);

		$array = array(
			'user_id' 	=> $data['user_id'],
			'user'		=> $data['user'],
			'desc'		=> $data['desc']
			);
		
		$session = $this->session->set_userdata($array);

		if($this->session->userdata('desc')=="Admin"){
			// echo "Admin";
			redirect('admin/index','refresh');
		}
		elseif($this->session->userdata('desc')=="Member"){
			// echo "Member";
			redirect('welcome/index','refresh');
		}
		else
		{
			echo "You're Not Admin";
			redirect('admin/nolog','refresh');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'Welcome/index','refresh');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */