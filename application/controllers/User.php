<?php

class User extends CI_Controller {

public function __construct(){

    parent::__construct();
		$this->load->helper('url');
		$this->load->model('user_model');
        $this->load->library('session');
		$this->load->database(); 
}

public function index()
{
	 $this->load->view("register.php");
	 $this->load->library('form_validation');
} 
  
public function register_user(){
	$email='';
	$user=array(
	  'user_name'=>$this->input->post('user_name'),
	  'user_email'=>$this->input->post('user_email'),
	  'user_password'=>md5($this->input->post('user_password')),
	  'user_age'=>$this->input->post('user_age'),
	  'user_mobile'=>$this->input->post('user_mobile')
	);

	$email_check=$this->user_model->email_check($user['user_email']);
	
	$this->load->library('form_validation');
	$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	//Validating Name Field
	$this->form_validation->set_rules('user_name', 'Username', 'trim|required');
	//Validating user Name Field
	$this->form_validation->set_rules('user_email', 'Email', 'required|valid_email');
	//Validating password Field
	$this->form_validation->set_rules('user_password', 'Password', 'required');
	//Validating age Field
	$this->form_validation->set_rules('user_age', 'Age', 'required|min_length[1]|max_length[3]');
	//Validating user_mobile Field
	$this->form_validation->set_rules('user_mobile', 'Mobile', 'required|min_length[1]|max_length[10]');
	
	if($this->form_validation->run() == FALSE) {
	  $this->load->view('register',$user);
	}
	else {
	  $this->user_model->register_user($user);
	  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
	  redirect('user/login_view');
	}
}

public function login_view(){

	$this->load->view("login.php");
}

function login_user(){
	$user_login=array(
		'user_email'=>$this->input->post('user_email'),
		'user_password'=>md5($this->input->post('user_password'))
    );

    $data=$this->user_model->login_user($user_login['user_email'],$user_login['user_password']);
	if($data !=''){
	$this->session->set_userdata('user_id',$data['user_id'],TRUE);
		$this->session->set_userdata('user_email',$data['user_email'],TRUE);
		$this->session->set_userdata('user_name',$data['user_name'],TRUE);
		$this->session->set_userdata('user_age',$data['user_age'],TRUE);
		$this->session->set_userdata('user_mobile',$data['user_mobile'],TRUE);
	}
	
	$this->load->library('form_validation');
	$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	//Validating Name Field
	$this->form_validation->set_rules('user_email', 'user_email', 'required|valid_email');
	//Validating password Field
	$this->form_validation->set_rules('user_password', 'user_password', 'required');
	
	if($this->form_validation->run() == FALSE) {
	  $this->session->set_flashdata('error_msg', 'Incorrect Username or Password.');
		$this->load->view("login.php");
	 }
	else {
		$this->load->view('user_profile');	
	}
}

function user_profile(){

	$this->load->view('user_profile.php');

}
public function user_logout(){

	$this->session->sess_destroy();
	redirect('user/login_view', 'refresh');
}

public function home(){

	$this->load->view("home.php");
}

}
?>
