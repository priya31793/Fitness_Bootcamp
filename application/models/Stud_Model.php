<?php 
   class Stud_Model extends CI_Model {
	
      function __construct() { 
         parent::__construct(); 
      } 
   
      public function insert($data) {
         if ($this->db->insert("student", $data)) { 
            return true; 
         } 
      } 
   
      public function delete($id) { 
         if ($this->db->delete("student", "id = ".$id)) { 
            return true; 
         } 
      } 
   
      public function update($data,$id) { 
         $this->db->where("id", $id); 
		 $this->db->update("student", $data); 
      }
   } 
?> 