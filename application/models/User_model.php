<?php
class User_model extends CI_model{

public function register_user($user)
{
	$this->db->insert('user', $user);
}

public function login_user($email,$pass)
{
	$this->db->select('*');
	$this->db->from('user');
	$this->db->where( array('user_email'=>$email,'user_password'=>$pass));
	$query=$this->db->get();
 
	if($query->num_rows() == 1)
	{
		return $query->row_array();
	}
	else
	{
		return false;
	}
}

public function email_check($email)
{
	$this->db->select('*');
	$this->db->from('user');
	$this->db->where('user_email',$email);
	$query=$this->db->get();

	if($query->num_rows()>0)
	{
		return false;
	}else
	{
		return true;
	}
}

public function admin_view() 
{
    $query = $this->db->get('contact');  
    return $query;  
}

public function delete($id) 
{ 
    if ($this->db->delete("contact", "id = ".$id)) 
	{ 
		return true; 
    } 
}

public function update($data,$id) 
{ 
	$this->db->where("id", $id); 
	$this->db->update("contact", $data); 
}

//funtion to get email of user to send password
public function ForgotPassword($email)
{
	$this->db->select('user_email');
	$this->db->from('user'); 
	$this->db->where(array('user_email'=>$email)); 
	$query=$this->db->get();
	return $query->row_array();
}

public function insert($data) 
{
	if ($this->db->insert("contact", $data)) 
	{ 
        return true; 
	} 
} 
	  
public function sendpassword($data) 
{ 
	$this->load->helper('form');
	$this->load->library('encrypt');
	$from_email = "dbfitness1587@gmail.com"; 
	$user_password1 = "daniel1587";
	$username = "Daniel Buckley";
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
		// Subject of email
		$this->email->subject($subject);
		// Message in email
		$this->email->message($mail_message);
		// It returns boolean TRUE or FALSE based on success or failure
		$this->email->send();
		$this->session->set_flashdata('message','Password has been reset and has been sent to email');		
		redirect(base_url().'user/login_view','refresh');   
	}
	else
	{  
		$this->session->set_flashdata('msg','Email not found try again!');
		redirect(base_url().'user/login_view','refresh');
	}	 
}
	  
}


?>
