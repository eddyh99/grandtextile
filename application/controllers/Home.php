<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = array(
            'title'     => NAMETITLE . ' - dashboard',
            'is_login'  => false,
            'content'   => 'dashboard',
            'extra'     => 'dashboard',
            'activeMenu'  => 'master',

        );
		$this->load->view('layout/wrapper', $data);
	}
}
