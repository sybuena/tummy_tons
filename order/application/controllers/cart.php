<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends MY_Controller {
	
	
	public function index(){
	
		$this->data['carts'] = $this->getCarts();
		$this->load->frontTemplate('cart', $this->data);
	}
	
	public function getCarts() {
		$data = array();
		if($this->session->userdata('cart_session')) {
			$cart = $this->session->userdata('cart_session');
			$data = array();
			foreach($cart as $k => $v) {
				
				$this->db->select();
				$this->db->from('product');
				$this->db->where('ID',$v['cart_product']);
				$query = $this->db->get();
				$row = $query->result();
				$row = json_decode(json_encode($query->result()), true);
				$row[0]['quantity'] = $v['quantity'];
				$row[0]['cart_ID'] = $k;
				$data[] = $row[0];
			}
			foreach($data as $k => $v) {
				$data[$k]['total'] = $v['quantity'] * $v['price'];
			}
		}
		
		return $data;
	}
	
	public function payment() { 
		
		//echo '<pre>'; print_r($_POST); exit;
		
		$this->db->insert('transaction', array('transaction_user'=>$_POST['user_ID']));
		$transaction_ID = $this->db->insert_id();
			
		foreach($_POST['product_ID'] as $k => $v) {
			$data[$k]['history_product'] = $v;
			$data[$k]['history_transaction'] = $transaction_ID;
		}
		foreach($_POST['product_quantity'] as $k => $v) {
			$data[$k]['history_quantity'] = $v;
		}
		foreach($data as $history) {
			
			$this->db->insert('history', $history);
		}
		foreach($_POST['cart_ID'] as $v) {
			$this->removeItem($v);
		}
		//TODO : do email sending
		
		redirect('cart/success/'.$transaction_ID, 'refresh');
		
	}
	
	public function success($ID) {
		$this->db->select('*, user.name AS user_name, product.name AS product_name');
		$this->db->from('transaction');
		$this->db->where('transaction_ID',$ID);
		$this->db->where('transaction_status !=', 'done');
		$this->db->join('history', 'history.history_transaction = transaction.transaction_ID', 'left');
		$this->db->join('product', 'product.ID = history.history_product', 'left');
		$this->db->join('user', 'user.user_ID = transaction.transaction_user', 'left');
		$query = $this->db->get();
		$row = $query->result();
		$this->data['order'] = json_decode(json_encode($query->result()), true);
		//echo '<pre>'; print_r($this->data['order']); exit;
		$this->load->frontTemplate('success', $this->data);
	}
	
	public function addCart() {
		if(isset($_POST) && !empty($_POST)) {
			$cart = array();
			if($this->session->userdata('cart_session')) {
				$cart = $this->session->userdata('cart_session');
			}
			
			$data = array(
				'cart_product' => $_POST['id'],
				'quantity' => $_POST['quantity']
			);
			$cart[] = $data;
			
       		$this->session->set_userdata('cart_session', $cart);
			
		}
	}
	
	public function checkout() {
		if(isset($this->data['user'])) {
			$this->data['carts'] = $this->getCarts();
			$this->load->frontTemplate('checkout', $this->data);
		} else {		
			redirect('cart', 'refresh');
		}
	}
	
	public function removeItem($ID) {
		
		$cart = $this->session->userdata('cart_session');
		print_r($cart);
		$this->session->unset_userdata('cart_session');
		unset($cart[$ID]);
		$this->session->set_userdata('cart_session', $cart); 
		//$this->db->delete('cart', array('cart_ID' => $ID)); 
	}
	
	public function getCart() {
		if($this->session->userdata('cart_session')) {
			$cart = $this->session->userdata('cart_session');
			$data = array();
			
			foreach($cart as $k => $v) {
				
				$this->db->select();
				$this->db->from('product');
				$this->db->where('ID',$v['cart_product']);
				$query = $this->db->get();
				$row = $query->result();
				$row = json_decode(json_encode($query->result()), true);
				$row[0]['quantity'] = $v['quantity'];
				$row[0]['cart_ID'] = $k;
				$data[] = $row[0];
			}
		} 
		
		echo json_encode($data);
		exit;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */