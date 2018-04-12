<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->user = ($this->usermodel->is_logged()) ? $this->usermodel->get_user($this->session->userdata('lastname')) : false;
		$this->picture_path = base_url().'pictures/';
		$this->view_folder = strtolower(__CLASS__).'/';
	}
/********************************************************************************************************/
public function index()
{
	if(!$this->usermodel->is_logged()){
		redirect('user/login');exit;
	}

	$data = array(
		'title'=>'Mes achats',
		'user'=>$this->user,
		'orders'=>$this->usermodel->get_orders($this->user->user_id),
		'content'=>$this->view_folder.__FUNCTION__
	);
	$this->load->view('template/content',$data);
}

public function login()
{
	if($this->usermodel->is_logged()){
		redirect('user');exit;
	}
}
public function signup(){

			if(!$this->usermodel->is_logged()){

					//redirect('user');exit;
				}
				$data = array(
					'title'=>'inscriptions',
					'countries'=>$this->usermodel->get_countries(),
					'content'=>$this->view_folder.__FUNCTION__
				);
				$this->load->view('template/content',$data);
			}
public function logout(){

	$this->session->sess_destroy();
	redirect();exit;
}
}
