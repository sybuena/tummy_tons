<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	
	protected $data = array();
	
	public function __construct() {
		
		parent::__construct();
		
		//SET ALL LOADER HERE
		$this->load->helper('url');
		$this->load->model('user','',TRUE);
		$this->load->library('form_validation');
		
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();
		$cat = json_decode(json_encode($query->result()), true);
		
		$this->db->select('*');
		$this->db->from('category');
		$this->db->join('product', 'category.ID = product.category_ID', 'inner');
		$query = $this->db->get();
		$products = json_decode(json_encode($query->result()), true);
		$count = 0;
		foreach($cat as $key => $value) {
			foreach($products as $k => $v) {
				
				if($value['ID'] == $v['category_ID']) {
					$cat[$key]['products'][] = $products[$k];
					$count++;
				}	
			}	
		}
		
		$this->data['default'] 	= base_url().'assets/img/spag.jpg';
		$this->data['category'] = $cat;
		
		if($this->session->userdata('logged_in')) {
			$this->data['user'] = $this->session->userdata('logged_in');
			//echo '<pre>'; print_r($this->data['user']); exit;
		}
		
		//echo '<pre>'; print_r($this->data['category']); exit;	
	}
	
	public function signup() {
		$this->load->library('form_validation');
	
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('address', 'Address', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('city', 'City', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		 //$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');
		
		if($this->form_validation->run() == FALSE) {
			//$this->index();
			$this->load->frontTemplate('home', $this->data);
		} else {
			$data = array(
				'name' 		=> $this->input->post('name'),
				'email' 	=> $this->input->post('email'),
				'address' 	=> $this->input->post('address'),
				'city' 		=> $this->input->post('city'),
				'phone' 	=> $this->input->post('phone'),
				'password' 	=> $this->input->post('password')
			);
			$this->db->insert('user', $data);
				
			$sess_array = array(
				'user_ID' 	=> $this->db->insert_id(),
				'email' 	=> $this->input->post('email'),
				'name' 		=> $this->input->post('name'),
				'address' 	=> $this->input->post('address'),
				'city' 		=> $this->input->post('city'),
				'phone' 	=> $this->input->post('phone')
			);
				
       		$this->session->set_userdata('logged_in', $sess_array);
			
		 	redirect('home', 'refresh');
		//$this->user_model->add_user();
		//$this->thank();
		}
	}
	
	public function verify() {
		//This method will have the credentials validation
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
		
		
		if($this->form_validation->run() == FALSE) {
		 	//Field validation failed.  User redirected to login page
			$this->load->frontTemplate('home', $this->data);
		} else {
		 	//Go to private area
		 	redirect('home', 'refresh');
		}
	}
	
	public function verifyAdmin() { 
		//This method will have the credentials validation
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database_admin');
		
		
		if($this->form_validation->run() == FALSE) { 
		 	//Field validation failed.  User redirected to login page
			$this->load->loginTemplate('admin/test', $this->data); 
		} else {
		 	//Go to private area
		 	redirect('admin', 'refresh');
		}
	}
	
	public function check_database_admin($password) {
   		//Field validation succeeded.  Validate against database
   		$email = $this->input->post('email');

   		//query the database
   		$result = $this->user->loginAdmin($email, $password);
		
   		if($result) {
			$result 	= json_decode(json_encode($result), true);
     		$sess_array = array();
			
     		foreach($result as $row) {
      			
				$sess_array = array(
         			'id' 		=> $row['id'],
         			'email' 	=> $row['email'],
         			'name' 		=> $row['name'],
         			'address' 	=> $row['address'],
         			'city' 		=> $row['city'],
         			'phone' 	=> $row['phone']
       			);
				
       			$this->session->set_userdata('logged_in_admin', $row);
     		}
			
     		return TRUE;
   		} else {
     		$this->form_validation->set_message('check_database', 'Invalid username or password');
     		return false;
   		}
 	}
	
	public function check_database($password) {
   		//Field validation succeeded.  Validate against database
   		$email = $this->input->post('email');

   		//query the database
   		$result = $this->user->login($email, $password);
   		if($result) {
			$result 	= json_decode(json_encode($result), true);
     		$sess_array = array();
			
     		foreach($result as $row) {
      			
				$sess_array = array(
         			'id' 		=> $row['id'],
         			'email' 	=> $row['email'],
         			'name' 		=> $row['name'],
         			'address' 	=> $row['address'],
         			'city' 		=> $row['city'],
         			'phone' 	=> $row['phone']
       			);
				
       			$this->session->set_userdata('logged_in', $row);
     		}
			
     		return TRUE;
   		} else {
     		$this->form_validation->set_message('check_database', 'Invalid username or password');
     		return false;
   		}
 	}
	
	public function check_database2($password) {
   		//Field validation succeeded.  Validate against database
   		$email = $this->input->post('email');

   		//query the database
   		$result = $this->user->login($email, $password);
   		if($result) {
			$result 	= json_decode(json_encode($result), true);
     		$sess_array = array();
			
     		foreach($result as $row) {
      			
				$sess_array = array(
         			'id' 		=> $row['id'],
         			'email' 	=> $row['email'],
         			'name' 		=> $row['name'],
         			'address' 	=> $row['address'],
         			'city' 		=> $row['city'],
         			'phone' 	=> $row['phone']
       			);
				
       			$this->session->set_userdata('logged_in', $row);
     		}
			
     		return TRUE;
   		} else {
     		$this->form_validation->set_message('check_database', 'Invalid username or password');
     		return false;
   		}
 	}
	
}