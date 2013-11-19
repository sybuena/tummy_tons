<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLogin extends MY_Controller {
	
	
	public function index() {
		
		$this->load->helper(array('form'));
   		$this->load->loginTemplate('admin/test');
	}
	
}
