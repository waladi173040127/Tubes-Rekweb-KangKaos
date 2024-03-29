<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 class Auth extends CI_Controller{

 	public function index(){
 		$data['title'] = 'Page Login';
 		$this->load->view('templates/auth_header', $data);
 		$this->load->view('auth/index');
 		$this->load->view('templates/auth_footer');
 	}

 	public function registration(){
		$data['title'] = 'Page registration';
 		$this->load->view('templates/auth_header', $data);
 		$this->load->view('auth/registration');
 		$this->load->view('templates/auth_footer');		
 	}

 	public function forgetPassword(){
 		$data['title'] = 'Page registration';
 		$this->load->view('templates/auth_header', $data);
 		$this->load->view('auth/forget_password');
 		$this->load->view('templates/auth_footer');	
 	}
 }

  ?>