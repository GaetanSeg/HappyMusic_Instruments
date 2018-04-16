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

	$this->form_validation->set_rules('email','Email','trim|required|valid_email');
	$this->form_validation->set_rules('password','Mot de passe','trim|required');

	if($this->form_validation->run()){

		if ($this->usermodel->login($this->input->post('email'),$this->input->post('password'))) {

			redirect('user');exit;

		}else{
			$this->session->set_flashdata('error','Mauvais identifiants ');
			redirect('user');exit;
		}

	}

	$data = array(
			'title'=>'Connexion',
			'content'=>$this->view_folder.__FUNCTION__
	);
	$this->load->view('template/content',$data);
}
public function signup(){

			if($this->usermodel->is_logged()){

					redirect('user');exit;
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

					$user=array(

							'email'=>$this->input->post('email'),
							'firstname'=>$this->input->post('firstname'),
							'lastname'=>$this->input->post('lastname'),
							'address'=>$this->input->post('address'),
							'postal'=>$this->input->post('cp'),
							'user_country_id'=>$this->input->post('country'),
							'city'=>$this->input->post('city'),
							'phone'=>$this->input->post('phone'),
							'password'=>sha1(md5($this->input->post('password')))
						);
						if($this->usermodel->signup($user)){

							$this->session->set_flashdata('success','Inscription réussie');
							redirect(current_url());exit;

						}else{
							throw new Exception('Une erreur est survenue,veuillez recommencer ');
						}
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
