<?php
define('BASEPATH') or exit('No direct script access allowed');


class Login extends CI_Controller{

	function index(){
		$this->form_validation->set_rules('name','nama','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		}else{
			$password = $this->input->post('password');
			$username = $this->input->post('username');
			$cek_user = $this->M_user->cek_session($password,$username);
			if ($cek_user == FALSE) {
				$this->load->view('login');
			}else{
				switch ($cek_user->level) {
					case 'user':
						$this->session->set_userdata('id',$cek_user->id);
						$this->session->set_flashdata('flash','eaeaeaeaea');
						redirect('home');
						break;
					
					default:
						# code...
						break;
				}
			}
		}
	}
}

