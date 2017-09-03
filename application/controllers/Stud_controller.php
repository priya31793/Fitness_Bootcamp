<?php 
   class Stud_controller extends CI_Controller {
	
      function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 
  
      public function index() { 
	     $this->load->library('table');
		 $this->load->library('form_validation');
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
		 
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		//Validating Name Field
		$this->form_validation->set_rules('name', 'Name', 'required|min_length[5]|max_length[15]');
		//Validating Email Field
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		//Validating Address Field
		$this->form_validation->set_rules('address', 'Address', 'required|min_length[10]|max_length[50]');
		//Validating Feedback. Field
		$this->form_validation->set_rules('feedback', 'Feedback.', 'required|min_length[10]|max_length[150]');
		 
        $data = array( 
			'name' => $this->input->post('name',TRUE),
            'email' => $this->input->post('email',TRUE), 
            'address' => $this->input->post('address',TRUE),
			'city' => $this->input->post('city'),
			'state' => $this->input->post('state'),
			'feedback' => $this->input->post('feedback',TRUE)			
         ); 
		 
		if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('stud_add', $data);
        }
        else
        {
         $this->load->model('Stud_Model');
         $this->db->group_by("name");
         $q = $this->Stud_Model->insert($data); 
		 $this->db->group_by("name");
         $query = $this->db->get("student"); 
         $data['records'] = $query->result();
		 $this->load->view('Stud_view', $data);
        }
      } 
  
	  public function update_student_view() { 
		  $this->load->helper('form'); 
		  $id = $this->uri->segment('3'); 
		  $this->db->where("id", $id); 
		  $this->db->group_by("name");
          $query = $this->db->get("student");
          $data['records'] = $query->result(); 
          $this->load->view('Stud_edit',$data); 
      } 
  
      public function update_student(){ 
          $data = array( 
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'), 
				'address' => $this->input->post('address'),
				'city' => $this->input->post('city'),
				'state' => $this->input->post('state'),
				//'feedback' => $this->input->post('feedback')			
			);
		
		 $id = $this->input->post('id'); 
		 $this->load->model('Stud_Model');
         $this->Stud_Model->update($data,$id);
		 $this->db->group_by("name");
		 $query = $this->db->get("student"); 
         $data['records'] = $query->result();
		 $this->load->view('Stud_view', $data);
		 redirect(Stud_controller);
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