<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_c extends CI_Controller {

	public function index()
	{
		$this->load->view('menubar_v');
		$this->load->view('main_v');
		$this->load->view('footer_v');
	}
}
