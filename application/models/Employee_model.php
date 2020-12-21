<?php 

class Employee_model extends CI_Model{

	public function getAllEmployee()
	{
		return $this->db->get('user')->result();
	}
}
