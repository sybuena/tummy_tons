<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	
	public function index(){
		//$this->lang->lang();
		//exit;
		
		$this->load->frontTemplate('home', $this->data);
	}
	
	public function logout() { 
   		$this->session->unset_userdata('logged_in');
   		session_destroy();
   		redirect('home', 'refresh');
 	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */