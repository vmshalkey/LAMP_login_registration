<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logins extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->output->enable_profiler();
		// $this->session->sess_destroy();
	}

	public function index() {
		$this->load->view('login_home');
	}
	public function login_user() {
		if($this->login->login_user($this->input->post())){
			redirect('/welcome');
		} else {
			redirect('/');
		}
	}
	public function register_user() {
		$this->login->register_user($this->input->post());
		redirect('/');
	}

	public function show() {
		$user = $this->login->get_user_info();
		$this->load->view("welcome", array("user" => $user));
	}
	public function logoff_user() {
		$this->session->sess_destroy();
		redirect('/');
	}
}

/* End of file logins.php */
/* Location: ./application/controllers/logins.php */