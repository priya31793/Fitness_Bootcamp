<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class contact extends CI_Controller {

public function __construct(){

    parent::__construct();
		$this->load->helper('url');
		$this->load->model('user_model');
		$this->load->library('session');
		$this->load->database(); 
        $this->load->helper('form');

}

public function index()
{
	$this->load->library('form_validation');
	$data = array();
	$this->db->group_by("name");
	$query = $this->db->get("contact"); 
	$data['records'] = $query->result(); 
	
	$this->load->library('googlemaps');
	$config = array();
	$config['center'] = 'auto';
	$config['onboundschanged'] = 'if (!centreGot) {
	var mapCentre = map.getCenter();
	marker_0.setOptions({
		position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng()) 
	});
	}
	centreGot = true;';
	$this->googlemaps->initialize($config);
	// set up the marker ready for positioning 
	// once we know the users location
	$marker = array();
	$this->googlemaps->add_marker($marker);
	$data['map'] = $this->googlemaps->create_map();
	$this->load->view('contact_view', $data);
}

public function add_contact_view() 
{ 
	 $this->load->helper('form'); 
	 $this->load->view('contact_view'); 
} 
  
public function add_contact() 
{ 
	$this->load->model('Contact_Model');
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
		$this->session->set_flashdata('error_msg', 'Please Enter all the Details.');
		$this->load->library('googlemaps');
		$config = array();
		$config['center'] = 'auto';
		$config['onboundschanged'] = 'if (!centreGot) {
		var mapCentre = map.getCenter();
		marker_0.setOptions({
			position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng()) 
		});
		}
		centreGot = true;';
		$this->googlemaps->initialize($config);
		// set up the marker ready for positioning 
		// once we know the users location
		$marker = array();
		$this->googlemaps->add_marker($marker);
		$data['map'] = $this->googlemaps->create_map();
		$this->load->view('contact_view',$data);
	}	
	else
	{
	 $this->db->group_by("name");
	 $q = $this->Contact_Model->insert($data);
	  $this->session->set_flashdata('success_msg', 'Submitted successfully!.');
	 
	 redirect('contact_view');
	}
  }
}
