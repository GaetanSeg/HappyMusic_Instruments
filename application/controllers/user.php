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

				$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
				$this->form_validation->set_rules('password','Mot de passe','trim|required|min_length[5]');
				$this->form_validation->set_rules('lastname','Nom','trim|required');
				$this->form_validation->set_rules('firstname','Prénom','trim|required');
				$this->form_validation->set_rules('address','Adresse','trim|required');
				$this->form_validation->set_rules('city','Ville','trim|required');
				$this->form_validation->set_rules('cp','Code postal','trim|required');
				$this->form_validation->set_rules('country','Pays','trim|required|is_natural_no_zero');
				$this->form_validation->set_rules('phone','Téléphone','trim|required|integer');

				if($this->form_validation->run()){

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
