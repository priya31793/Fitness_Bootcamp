<?php 
   class Stud_controller extends CI_Controller {
	
      function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 
  
      public function index() { 
	     $this->load->library('table');
		 $this->db->group_by("name");
         $query = $this->db->get("student"); 
         $data['records'] = $query->result(); 
		 $this->table->generate($query);
         $this->load->helper('url'); 
         $this->load->view('Stud_view',$data); 
      } 
  
      public function add_student_view() { 
         $this->load->helper('form'); 
         $this->load->view('Stud_add'); 
      } 
  
      public function add_student() { 
         $this->load->model('Stud_Model');
         $data = array( 
			'name' => $this->input->post('name'),
            'email' => $this->input->post('email'), 
            'address' => $this->input->post('address'),
			'city' => $this->input->post('city'),
			'state' => $this->input->post('state'),
			'feedback' => $this->input->post('feedback')			
         ); 
         $q = $this->Stud_Model->insert($data); 
		 $this->db->group_by("name");

         $query = $this->db->get("student"); 
         $data['records'] = $query->result(); 
		 if ($q) {
                $data['message'] = '<h3> Your report has successfully submitted!</h3>';
                $data['success'] = '';
                $data['class'] = 'collapse';
				$this->load->view('Stud_view', $data);
            } else {
                $data['message'] = '<h3> Report submission unsuccessful!</h3>';
                $data['success'] = '';
                $data['class'] = 'collapse';
                $this->load->view('Stud_view', $data);
            } 
      } 
  
      public function update_student_view() { 
         $this->load->helper('form'); 
         $id = $this->uri->segment('3'); 
         $query = $this->db->get("student",array("id"=>$id));
         $data['records'] = $query->result(); 
         $data['id'] = $id; 
         $this->load->view('Stud_edit',$data); 
      } 
  
      public function update_student(){ 
		  $this->load->model('Stud_Model');
		  $id = $this->input->post('id'); 
          $data = array( 
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'), 
				'address' => $this->input->post('address'),
				'city' => $this->input->post('city'),
				'state' => $this->input->post('state'),
				'feedback' => $this->input->post('feedback')			
			);
         $this->Stud_Model->update($data,$id); 
      } 
  
      public function delete_student() { 
        $this->load->model('Stud_Model'); 
        $id = $this->uri->segment('3');
   		$this->db->group_by("name");
        $this->Stud_Model->delete($id); 
		$query = $this->db->get("student");
		$data['records'] = $query->result(); 
		$this->load->view('Stud_view',$data); 
      } 
   } 
?>