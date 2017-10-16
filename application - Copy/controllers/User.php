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
	$this->load->view("register.php",'refresh');
	$this->load->library('form_validation');
} 

/* User Registration Function */  
public function register_user()
{
	$email='';
	$user=array(
	  'user_name'=>$this->input->post('user_name'),
	  'user_email'=>$this->input->post('user_email'),
	  'user_password'=>md5($this->input->post('user_password')),
	  'user_age'=>$this->input->post('user_age'),
	  'user_mobile'=>$this->input->post('user_mobile')
	);
	//Validating Email Exist Field
	$email_check=$this->user_model->email_check($user['user_email']);
	$this->load->library('form_validation');
	$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	//Validating Name Field
	$this->form_validation->set_rules('user_name', 'Username', 'required|min_length[5]|max_length[18]');
	//Validating Email Field
	$this->form_validation->set_rules('user_email', 'Email', 'required|valid_email');
	//Validating Password Field
	$this->form_validation->set_rules('user_password', 'Password', 'required');
	//Validating Age Field
	$this->form_validation->set_rules('user_age', 'Age', 'required|min_length[1]|max_length[3]');
	//Validating Mobile Field
	$this->form_validation->set_rules('user_mobile', 'Mobile', 'required|regex_match[/^[0-9]{10}$/]');
	
	if($this->form_validation->run() == FALSE) 
	{
	  $this->load->view('register',$user);
	}
	else 
	{
	  //load the register_user method of model
	  $this->user_model->register_user($user);
	  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
	  //return the data in view  
	  redirect('user/login_view');
	}
}

/* Login Page View */  
public function login_view()
{
	$this->load->view("login.php");
}

/* Password Check */  
function pass($user_password)
{
    $this->user_model->pass_check($user_password);
}
 
/* User Login Function */  
public function login_user()
{
	$user_login=array(
		'user_email'=>$this->input->post('user_email'),
		'user_password'=>md5($this->input->post('user_password'))
    );
	$data=$this->user_model->login_user($user_login['user_email'],$user_login['user_password']);
    $pass=$this->user_model->pass_check($user_login['user_password']);
	if ($user_login['user_password'] != "1"){
		$this->session->set_flashdata('error_msg', 'Incorrect Username or Password.');
	}	
	if($data == TRUE)
	{
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
	
	if($this->form_validation->run() == FALSE) 
	{
		$this->session->set_flashdata('error_msg', 'Incorrect Username or Password.');
		//return the data in view  
		$this->load->view("login.php");
	}
	else if($user_login['user_email'] == "admin@gmail.com")
	{
		$this->load->database();  
        //load the model  
        $this->load->model('User_model');  
        //load the method of model  
        $data['records']=$this->user_model->admin_view(); 
		$id = $this->uri->segment('3');
		$this->db->group_by("name");
		$this->user_model->delete($id); 
		$query = $this->db->get("contact");
		$data['records'] = $query->result();		 
        //return the data in view  
        $this->load->view('admin.php', $data);
	}
	else
	{	
		//return the data in view 
		$this->load->view('user_profile.php',$data);
	}
}

/* Forgor Password Function */  
public function ForgotPassword()
{
    $email = $this->input->post('user_email');
    $findemail = $this->user_model->ForgotPassword($email);
    if ($findemail) 
	{
		//Load the sendpassword method in user model 
        $this->user_model->sendpassword($findemail);
    } else 
	{
        echo "<script>alert(' $email not found, please enter correct email id')</script>";
		//return the data in view 
        redirect(base_url() . 'user/login', 'refresh');
    }
}

/* User Profile Function */  
function user_profile()
{
	$this->load->view('user_profile.php','refresh');
}

/* User Logout Function */  
public function user_logout()
{
	$this->session->sess_destroy();
	//return the data in view 
	redirect('user/login_view', 'refresh');
}

/* Home Page Function */  
public function home()
{
	$this->load->view("home.php");
}

/* Add Contact Function */  
public function add_contact() 
{ 
	$this->load->model('User_model');
	$this->load->library('form_validation');
	$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	//Validating Name Field
	$this->form_validation->set_rules('name', 'Name', 'required|min_length[5]|max_length[18]');
	//Validating Email Field
	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	//Validating Feedback Field
	$this->form_validation->set_rules('feedback', 'Feedback.', 'required|min_length[10]|max_length[150]');
	 
	$data = array( 
		'name' => $this->input->post('name',TRUE),
		'email' => $this->input->post('email',TRUE), 
		'address' => $this->input->post('address',TRUE),
		'feedback' => $this->input->post('feedback',TRUE)			
	 ); 
	 
	if ($this->form_validation->run() === FALSE)
	{
		$this->session->set_flashdata('error_msg', 'Please Enter all the Details.');
		//return the data in view 
		$this->load->view('home','refresh');
	}	
	else
	{
		$this->db->group_by("name");
		//insert the data in db 
		$q = $this->user_model->insert($data);
		$this->session->set_flashdata('success_msg', 'Submitted successfully!.');
		//return the data in view 
		redirect('home','refresh');
	}
  }

/* Add Contact Function */  
public function add_contact_view() 
{ 
	$this->load->helper('form'); 
	//return the data in view 
	$this->load->view('contact_add','refresh'); 
}

/* Admin View Function */  
public function admin_view()
{
	//load the database
	 $this->load->database();  
	 //load the model  
	 $this->load->model('User_model');   
	 $this->db->group_by("id");
	 //load the method of model 
	 $data['records']=$this->user_model->admin_view();  
	 //return the data in view  
	 $this->load->view('admin', $data);
}

/* Admin Edit Function */  	  
public function update_contact_view() 
{ 
	  $this->load->helper('form'); 
	  $id = $this->uri->segment('3'); 
	  $this->db->where("id", $id); 
	  $this->db->group_by("name");
	  $query = $this->db->get("contact");
	  $data['records'] = $query->result();
	  //return the data in view	  
	  $this->load->view('contact_edit',$data); 
} 
  
/* Admin Update Function */  
public function update_contact()
 { 
	$data = array( 
		'name' => $this->input->post('name'),
		'email' => $this->input->post('email'), 
		'address' => $this->input->post('address')		
	);
	 $id = $this->input->post('id');
	//return the model 	 
	 $this->load->model('User_model');
	 $this->user_model->update($data,$id);
	 $this->db->group_by("name");
	 //fetch the contact details in db 
	 $query = $this->db->get("contact"); 
	 $data['records'] = $query->result();
	 //return the data in view 
	 $this->load->view('admin', $data);
} 

/* Admin Delete Function */  
 public function delete_contact() 
{ 
	//load the model 
	$this->load->model('User_model');  
	$id = $this->uri->segment('3');
	$this->db->group_by("id");
	//load the method of model
	$this->user_model->delete($id); 
	$query = $this->db->get("contact");
	$data['records'] = $query->result();
	//return the data in view 	
	$this->load->view('admin',$data); 
}
 
	  




}
?>
