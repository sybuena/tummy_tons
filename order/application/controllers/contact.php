<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {
	
	public function index(){
		
		$this->load->view('contact');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */