<?php
class Test1 extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function coba()
	{
		$this->load->view('sample2');
	}
	
	
}
