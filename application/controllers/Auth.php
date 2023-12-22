<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


	public function index()
	{
		if (isset($_SESSION['logged_status'])) {			
			redirect("home");
		}

		$data = array(
			'title'     => NAMETITLE . ' - Login',
			'is_login'  => false,
			'content'   => 'login/index',
			'extra'		=> 'login/js/js_index',
		);
		$this->load->view('layout/wrapper', $data);
	}

	public function auth_login()
	{
		$this->form_validation->set_rules('uname', 'Username', 'trim|required');
		$this->form_validation->set_rules('pass', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', $this->message->error_msg(validation_errors()));
			redirect("/");
			return;
		}

		$uname = $this->security->xss_clean($this->input->post('uname'));
		$pass = $this->security->xss_clean($this->input->post('pass'));
		
		//$mdata=array(
		//	"uname"		=> $uname,
		//	"passwd"	=> sha1($pass)
		//);

		//$apiUrl = API_URL . '/v1/auth/signin';

		//$postData = json_encode($mdata);
		//$apiResponse = '200';

		//if ($apiResponse->code=="200") {
		//	$session_data = array(
		//		'uname'  	=> $uname,
		//		'role'      => $apiResponse->message->role,
		//	);
		//	$this->session->set_userdata('logged_status', $session_data);
		//		
		//	redirect('home');
		//} else {
		//	$this->session->set_flashdata('error', "username atau password salah, mohon periksa ulang");
		//	redirect("/");
		//	return;
		//}
		$result="true";
		if (!empty($result)) {
			$session_data = array(
				'username'  => $uname,
				'nama'      => true,
				'role'      => true,
				'is_login'  => true
			);
			$this->session->set_userdata('logged_status', $session_data);
				
			redirect('home');
		} else {
			$this->session->set_flashdata('error', "username atau password salah, mohon periksa ulang");
			redirect("/");
			return;
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}
