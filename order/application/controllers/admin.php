<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends MY_Controller {
	
	public function __construct() {
		
		parent::__construct();
		if($this->session->userdata('logged_in_admin')) {
			
			//redirect('admin', 'refresh');
		} else {
			//If no session, redirect to login page
			redirect('adminLogin', 'refresh');
		}
	}
	
	public function index(){
		$this->load->adminTemplate('admin/dash');
		
	}
	
	public function logout() { 
   		$this->session->unset_userdata('logged_in_admin');
   		session_destroy();
   		redirect('admin', 'refresh');
 	}
	
	
	public function products($action = 'list', $ID = 0) {
		if($action == 'list') {
			$this->db->select('*');
			$this->db->from('category');
			$this->db->join('product', 'category.ID = product.category_ID', 'inner');
			$query = $this->db->get();
			$this->data['products'] = json_decode(json_encode($query->result()), true);
			
			$this->load->adminTemplate('admin/products', $this->data);
		}
		
		if($action == 'add') {
			
			$this->load->adminTemplate('admin/products_add', $this->data);
		}
		
		if($action == 'edit') {
			$this->db->select('*');
			$this->db->from('category');
			$this->db->join('product', 'category.ID = product.category_ID', 'inner');
			$this->db->where('product.ID', $ID);
			$query = $this->db->get();
			$this->data['product'] = json_decode(json_encode($query->result()), true);
			
			$this->load->adminTemplate('admin/product_edit', $this->data);
		
		}
	}
	
	public function orders($action='view', $ID = 0) {
		if($action == 'view'){
			$this->db->select();
			$this->db->from('transaction');
			$this->db->join('user', 'user.user_ID = transaction.transaction_user', 'left');
			$this->db->order_by('transaction_ID', 'asc');
			$query 	= $this->db->get();
			$row 	= $query->result();
			
			$this->data['daily']		= $this->report();
			$this->data['weekly']		= $this->report(7);
			$this->data['order_list'] 	= json_decode(json_encode($query->result()), true);
			
			$this->load->adminTemplate('admin/order', $this->data);
		}
		if($action == 'detail') {
			$this->db->select('*, user.name AS user_name, product.name AS product_name');
			$this->db->from('transaction');
			$this->db->where('transaction_ID',$ID);
			$this->db->where('transaction_status !=', 'done');
			$this->db->join('history', 'history.history_transaction = transaction.transaction_ID', 'left');
			$this->db->join('product', 'product.ID = history.history_product', 'left');
			$this->db->join('user', 'user.user_ID = transaction.transaction_user', 'left');
			$query = $this->db->get();
			$this->data['order_detail'] = json_decode(json_encode($query->result()), true);
			$query = $this->db->get('order_status');
			$this->data['stat'] = json_decode(json_encode($query->result()), true);
			//echo '<pre>'; print_r($this->data['stat']); exit;
			$this->load->adminTemplate('admin/order_detail', $this->data);
		}
	}
	public function users($action ='list', $ID = 0) {
		//switch for page action
		switch($action) {
			//for user detail view
			case 'detail' : 
				return $this->detail($ID);
				
				break;
			//for user remove action
			case 'remove' :
				return $this->remove($ID);
				
				break;
			//for user edit action	
			case 'edit' :
				return $this->edit($ID);
				
				break;
			//set view user list as default
			default :
				//get user member list
				$data['row'] = json_decode(json_encode($this->user->getUser()), true);
				$this->load->adminTemplate('admin/users', $data);
				
				break;	
		}
	}
	
	public function edit($ID) {
		$data['row'] = json_decode(json_encode($this->user->getDetail($ID)), true);
		
		$this->load->adminTemplate('admin/user_detail', $data);
		
	}
	
	public function report($date = '1') {
		//query for getting transaction date
		$term 	= sprintf('transaction_created >= DATE_SUB(CURDATE(), INTERVAL %s DAY)', $date);	
		
		$this->db->select();
		$this->db->from('transaction');
		$this->db->where($term);
		$this->db->join('user', 'user.user_ID = transaction.transaction_user');
		$this->db->order_by('transaction_ID', 'desc');
		$query 	= $this->db->get();
		$res 	= json_decode(json_encode($query->result()), true);
		
		$this->db->select();
		$this->db->from('transaction');
		$this->db->where($term);
		$this->db->join('history', 'history.history_transaction = transaction.transaction_ID');
		$this->db->join('product', 'product.ID = history.history_product');
		$query 	= $this->db->get();
		$row 	= json_decode(json_encode($query->result()), true);
		
		$trans 	= array();
		$amount = 0;
		foreach($res as $k => $v) {
			foreach($row as $key => $value) {
				if($v['transaction_ID'] == $value['transaction_ID']) {
					$amount = $amount + $value['price'];
					$res[$k]['amount'] 		= $amount; 
					$res[$k]['history'][] 	= $value;
				}
			}
		}
		
		$data 	= array(
			'total'	=> count($res),
			'row' 	=> $res
		);
		
		//echo json_encode($data);
		return $data;
		
		echo '<pre>'; print_r($res); exit;
		
		$this->db->join('history', 'history.history_transaction = transaction.transaction_ID');
		$this->db->join('product', 'product.ID = history.history_product');
		$this->db->join('user', 'user.user_ID = transaction.transaction_user');
		$query 	= $this->db->get();
		$res 	= json_decode(json_encode($query->result()), true);
		//echo '<pre>'; print_r($res);
		$data 	= array(
			'total'	=> count($res),
			'row' 	=> $res
		);
		
		//echo json_encode($data);
		return $data;
	}
	
	public function editOrder($ID) {
	
		$this->db->where('transaction_ID', $ID);
		$this->db->update('transaction', array('transaction_status' => $_POST['transaction_status']));
		 
   		redirect('admin/orders/detail/'.$ID, 'refresh');
	}
	
	public function editProduct($ID) {
		$data = array(
			'name'			=> $this->input->post('name'),
			'description'	=> $this->input->post('description'),
			'category_ID'	=> $this->input->post('category_ID'),
			'price'			=> $this->input->post('price'),
			'enable'		=> ($this->input->post('enable')) ? 1 : 0,
			'promote'		=> ($this->input->post('promote')) ? 1 : 0,
		);
		
		$this->db->where('ID', $ID);
		$this->db->update('product', $data);
		 
   		redirect('admin/products/edit/'.$ID, 'refresh');
	}
	
	public function addProduct() {
		$data = array(
			'name'			=> $this->input->post('name'),
			'description'	=> $this->input->post('description'),
			'category_ID'	=> $this->input->post('category_ID'),
			'price'			=> $this->input->post('price'),
			'enable'		=> ($this->input->post('enable')) ? 1 : 0,
			'promote'		=> ($this->input->post('promote')) ? 1 : 0,
		);
		
		$this->db->insert('product', $data);
		$ID = $this->db->insert_id();
   		redirect('admin/products/edit/'.$ID, 'refresh');
	}
	
	
	
	
	
	
	public function user($id = 0) {
		if($id == 0) {
			$this->load->template('admin/user');
		} else {
			$this->load->template('admin/user_detail');
		
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */