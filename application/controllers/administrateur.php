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
						
	}
}
