<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();

		// Load form helper library
		$this->load->helper('form');

		// Load form validation library
		$this->load->library('form_validation');

		// Load session library
		$this->load->library('session');

		// Load database
		$this->load->model('login_database');
	}

	// Show login page
	public function index() {
		$this->load->view('login');
	}

// Show registration page
public function user_registration_show() {
$this->load->view('customer_register');
}

// Validate and store registration data in database
public function new_user_registration() {


	$data = array(
	'username' => $this->input->post('username'),
	'password' => $this->input->post('password')
	);
	$result = $this->login_database->registration_insert($data);
	if ($result == TRUE) {
		$data['message_display'] = 'Registration Successfully !';
		$this->load->view('login', $data);
	} else {
		$data['message_display'] = 'Username already exist!';
		$this->load->view('customer_register', $data);
	}
}

// Check for user login process
public function user_login_process() {
	$data = array(
		'username' => $this->input->post('username'),
		'password' => $this->input->post('password')
		);
		$result = $this->login_database->login($data);
	if ($result == TRUE) {
		$username = $this->input->post('username');
		$result = $this->login_database->read_user_information($username);
		if ($result != false) {
			$session_data = array(
			'username' => $result[0]->username,
			'level' => $result[0]->level,
			);
			// Add user data in session
			$this->session->set_userdata('logged_in', $session_data);
			if($session_data['level'] == 1){
				$this->load->view('admin');
			} else {
				$this->load->view('customer');
			}
		}
	} else {
		$data = array(
		'error_message' => 'Invalid Username or Password'
		);
		$this->load->view('login', $data);
	}
}

// Logout from admin page
public function logout() {

	// Removing session data
	$sess_array = array(
	'username' => ''
	);
	$this->session->unset_userdata('logged_in', $sess_array);
	$data['message_display'] = 'Successfully Logout';
	$this->load->view('login', $data);
	}

}

?>