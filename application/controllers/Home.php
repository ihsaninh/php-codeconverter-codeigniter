<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function index()
	{
		$data['menu'] = $this->db->get('tbl_menu')->result_array();
		$this->load->view('home/header');
		$this->load->view('home/index', $data);
		$this->load->view('home/footer');
	}

	public function about()
	{
		$this->load->view('home/header');
		$this->load->view('home/about');
		$this->load->view('home/footer');
	}
}
