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
	$data = array();
	$this->db->group_by("name");
	$query = $this->db->get("contact"); 
	$data['records'] = $query->result();
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
	
	else if($user_login['user_email'] == "admin@gmail.com"){
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
        $this->load->view('contact_view', $data);
	}
	else {
		
		$this->load->view('user_profile.php',$data);		
	}
	
}

function user_profile(){

	$this->load->view('user_profile.php',array());

}
public function user_logout(){

	$this->session->sess_destroy();
	redirect('user/login_view', 'refresh');
}

public function home(){

	$this->load->view("home.php");
}

public function about(){

	$this->load->view("about.php");
}

public function contact_view()
{
	 $this->load->database();  
	 //load the model  
	 $this->load->model('User_model');  
	 //load the method of model  
	$this->db->group_by("name");

	 $data['records']=$this->user_model->admin_view();  
	 //return the data in view  
	 $this->load->view('contact_view', $data);
}

public function delete_contact() { 
	$this->load->model('User_model');  
	$id = $this->uri->segment('3');
	$this->db->group_by("name");
	$this->user_model->delete($id); 
	$query = $this->db->get("contact");
	$data['records'] = $query->result(); 
	$this->load->view('contact_view',$data); 
      }
	  
public function update_contact_view() { 
	  $this->load->helper('form'); 
	  $id = $this->uri->segment('3'); 
	  $this->db->where("id", $id); 
	  $this->db->group_by("name");
	  $query = $this->db->get("contact");
	  $data['records'] = $query->result(); 
	  $this->load->view('contact_edit',$data); 
      } 
  
 public function update_contact(){ 
	  $data = array( 
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'), 
			'address' => $this->input->post('address')		
		);
	
	 $id = $this->input->post('id'); 
	 $this->load->model('User_model');
	 $this->user_model->update($data,$id);
	 $this->db->group_by("name");
	 $query = $this->db->get("contact"); 
	 $data['records'] = $query->result();
	 $this->load->view('contact_view', $data);
  } 

 
  public function send_mail() { 
		$this->load->library('encrypt');
		$from_email = "priya31793@gmail.com"; 
		$user_password1 = "priya31793@";
		$username = "Priya Devanand";
		$subject = "Password Reset";
		// The mail sending protocol.
		$config['protocol'] = 'smtp';
		// SMTP Server Address for Gmail.
		$config['smtp_host'] = 'ssl://smtp.googlemail.com';
		// SMTP Port - the port that you is required
		$config['smtp_port'] = 465;
		// SMTP Username like. (abc@gmail.com)
		$config['smtp_user'] = $from_email;
		// SMTP Password like (abc***##)
		$config['smtp_pass'] = $user_password1;
		$this->load->library('email', $config);
		$email = $this->input->post('user_email');      
        $findemail = $this->user_model->ForgotPassword($email);  
		$to = $findemail['user_email'];
		$query1=$this->db->query("SELECT * from user where user_email = '".$to."' ");
        $row=$query1->result_array();
        if ($query1->num_rows()>0)
		{
		$row=$query1->result_array();
		$passwordplain = "";
        $passwordplain  = rand(999999999,9999999999);
        $newpass['user_password'] = md5($passwordplain);
        $this->db->where('user_email', $to);
        $this->db->update('user', $newpass); 
		$mail_message='Dear '.$row[0]['user_name'].','. "\r\n";
		$mail_message.=' '."\r\n";
        $mail_message.='You have requested the new password, Here is your new password '.$passwordplain.''."\r\n";
        $mail_message.='Please Update your password.'."\r\n";
		$mail_message.=' '."\r\n";
		$mail_message.=' '."\r\n";
        $mail_message.='Thanks & Regards'."\r\n";
        $mail_message.='DB Fitness Bootcamp'."\r\n"; 
 
		// Load email library and passing configured values to email library
		$this->email->set_newline("\r\n");
		// Sender email address
		$this->email->from($from_email, $username);
		// Receiver email address.for single email
		$this->email->to($to);
		//send multiple email
		//$this->email->to(abc@gmail.com,xyz@gmail.com,jkl@gmail.com);
		// Subject of email
		$this->email->subject($subject);
		// Message in email
		$this->email->message($mail_message);
		// It returns boolean TRUE or FALSE based on success or failure
		$this->email->send();
		$this->session->set_flashdata('message','Password has been reset and has been sent to email');		
		redirect('user/login_view','refresh');        
		}
		else
		{  
		 $this->session->set_flashdata('msg','Email not found try again!');
		 redirect('user/login_view','refresh');
		}	 
      } 
}
?>
