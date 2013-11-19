<?php

/**
 * /application/core/MY_Loader.php
 *
 */
class MY_Loader extends CI_Loader {
	
    public function template($template_name, $vars = array(), $return = FALSE){
        $content  = $this->view('header/header_admin', $vars, $return);
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('footer/footer_admin', $vars, $return);

        if($return) {
            return $content;
        }
    }
	
	public function adminTemplate($template_name, $vars = array(), $return = FALSE) {
        $content  		= $this->view('header/admin_header', $vars, $return);
		$session_data 	= array();//$this->session->userdata('logged_in');
		$content  		= $this->view('navbar/admin_nav', $session_data, $return);
        $content 		.= $this->view($template_name, $vars, $return);
        $content 		.= $this->view('footer/admin_footer', $vars, $return);
		
		if($return) {
            return $content;
        }
	}
	
	public function loginTemplate($template_name, $vars = array(), $return = FALSE) {
        $content  		= $this->view('header/admin_header', $vars, $return);
        $content 		.= $this->view($template_name, $vars, $return);
        $content 		.= $this->view('footer/admin_footer', $vars, $return);
		
		if($return) {
            return $content;
        }
	}
	
	public function frontTemplate($template_name, $vars = array(), $return = FALSE) {
	
		$content  = $this->view('header/front_header', $vars, $return);
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('footer/front_footer', $vars, $return);
		
		if($return) {
            return $content;
        }
	}
	
}