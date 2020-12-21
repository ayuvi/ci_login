<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Employee_model','e_model');
	}

	public function list(){

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['title'] = "List Employee";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('employee/index', $data);
		$this->load->view('templates/footer');
	}

	public function tampilData()
	{
		$data = $this->e_model->getAllEmployee();
		echo json_encode($data);
	}


}
