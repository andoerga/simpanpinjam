<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {


	public function index()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('user');
		$this->load->view('footer');
	}
	
	
}