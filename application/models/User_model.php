<?php
class User_model extends CI_model{



public function register_user($user){


$this->db->insert('user', $user);

}

public function login_user($email,$pass){

  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_email',$email);
  $this->db->where('user_password',$pass);
 $query=$this->db->get();
  if($query->num_rows() == 1)
  {
      return $query->row_array();
  }
  else{
    return false;
  }


}
public function email_check($email){

  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_email',$email);
  $query=$this->db->get();

  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }

}

public function admin_view() {
        $query = $this->db->get('contact');  
         return $query;  
    }
public function delete($id) { 
         if ($this->db->delete("contact", "id = ".$id)) { 
            return true; 
         } 
      }
public function update($data,$id) { 
 $this->db->where("id", $id); 
 $this->db->update("contact", $data); 
}

//funtion to get email of user to send password
 public function ForgotPassword($email)
 {
        $this->db->select('user_email');
        $this->db->from('user'); 
        $this->db->where('user_email', $email); 
        $query=$this->db->get();
        return $query->row_array();
 }

}


?>
