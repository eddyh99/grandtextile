<?php
defined('BASEPATH') or exit('No direct script access allowed');

class register extends CI_Controller
{


	public function index()
	{

		$data = array(
			'title'     => NAMETITLE . ' - register',
			'is_register'  => false,
			'content'   => 'register/index',
			'extra'		=> 'register/js/js_index',
		);
		$this->load->view('layout/wrapper', $data);
	}

	
}
