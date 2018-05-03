<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Administrateur extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->picture_path = base_url().'img/';
		$this->pictureCategorie_path = base_url().'img/';
		$this->view_folder = strtolower(__CLASS__).'/';

	}
/********************************************************************************************************/


public function admin(){

			$data=array(

				'title'=>'Bienvenue sur la boutique',
				'users'=>$this->adminmodel->getAllUser(),
				'content'=>$this->view_folder.__FUNCTION__
			);
			$this->load->view('template/content',$data);
	}
/********************************************************************************************************/
public function editUser($user_id=null)/*valeur par défaut*/{


		if (!$user_id || !$this->adminmodel->getOneUser($user_id)){
				redirect('administrateur/admin');
				exit;
		}
		else{
					$user= $this->adminmodel->getOneUser($user_id);
					$data=array(
						'user'=>$user,
						'content'=>$this->view_folder.__FUNCTION__
					);
						$userUpdate=array(
								'email'=>$this->input->post('email'),
								'password'=>sha1(md5($this->input->post('password'))),
								'address'=>$this->input->post('address'),
								'city'=>$this->input->post('city'),
								'postal'=>$this->input->post('cp'),
								'user_country_id'=>$this->input->post('country'),
								'phone'=>$this->input->post('phone'),
								'firstname'=>$this->input->post('firstname'),
								'lastname'=>$this->input->post('lastname'),
							);
							print_r($userUpdate);
							$this->adminmodel->editUser($userUpdate);
		}
			$this->load->view('template/content',$data);
	}
}
