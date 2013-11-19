<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller {
	
	public function index(){
		//$this->lang->lang();
		//exit;
		$this->load->frontTemplate('category', $this->data);
	}
	public function page($ID) {
		$this->data['page_ID'] = $ID-1;
		$this->load->frontTemplate('category', $this->data);
		
	}
	
	public function detail($catID, $ID) {
		//echo '<pre>';
		//print_r($this->data['category'][$catID]['products'][$ID]); exit;
		$this->data['cat_ID']  = $catID;
		$this->data['prod_ID'] = $ID;
		foreach($this->data['category'][$catID]['products'] as $k => $v) {
			//echo $ID.' = '.$v['ID'].'<br>';
			if($ID == $v['ID']) {
				$this->data['variable'] = $v;
			}
		}
		//print_r($this->data['variable']); exit;
		$this->load->frontTemplate('detail', $this->data);
		
	}
	
	public function test() {
		echo 'test lang';
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */