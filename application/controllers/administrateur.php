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

					$user= $this->adminmodel->getOneUser($user_id);
					$data=array(
						'user'=>$user,
						'content'=>$this->view_folder.__FUNCTION__
					);
						$this->load->view('template/content',$data);

/*      */

					/*	$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
						$this->form_validation->set_rules('password','Mot de passe','trim|required|min_length[5]');
						$this->form_validation->set_rules('lastname','Nom','trim|required');
						$this->form_validation->set_rules('firstname','Prénom','trim|required');
						$this->form_validation->set_rules('address','Adresse','trim|required');
						$this->form_validation->set_rules('city','Ville','trim|required');
						$this->form_validation->set_rules('cp','Code postal','trim|required');
						$this->form_validation->set_rules('country','Pays','trim|required|is_natural_no_zero');
						$this->form_validation->set_rules('phone','Téléphone','trim|required|integer');

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



								if ($this->form_validation->run() == FALSE) {

										$this->adminmodel->editUser($user_id,$user);
										print_r($user);

									if(!empty($user['email'])){

										redirect('administrateur/admin');

									}
								}*/
	}
	

}
