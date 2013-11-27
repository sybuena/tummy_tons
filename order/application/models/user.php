<?php //-->

Class User extends CI_Model {
	
	public function login($email, $password) {
	 
   		$this->db->select('*');
	   	$this->db->from('user');
	   	$this->db->where('email', $email);
	   	$this->db->where('password', $password);
	   	$this->db->limit(1);

		$query = $this->db->get();
	
		if($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
 	}
	
	public function loginAdmin($email, $password) {
	 
   		$this->db->select('*');
	   	$this->db->from('user');
	   	$this->db->where('email', $email);
	   	$this->db->where('usertype', 'A');
	   	$this->db->where('password', $password);
	   	$this->db->limit(1);

		$query = $this->db->get();
	
		if($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
 	}
	
	public function getUser() {
   		$this->db->select();
	   	$this->db->from('user');
		
		$query = $this->db->get();
		return $query->result();
	}
	
	public function getDetail($ID) {
		$query = $this->db->get_where('user', array('user_id' => $ID));
		return min(array_values($query->result()));	
	}
}

