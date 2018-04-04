<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->picture_path = base_url().'img/';
		$this->view_folder = strtolower(__CLASS__).'/';
	}

public function index(){

		$data=array(
			'title'=>'Bienvenue sur la boutique',
			'articles'=>$this->sitemodel->getAll(),
			'content'=>$this->view_folder.__FUNCTION__
		);
		$this->load->view('template/content',$data);

	}

function article(){

			$data=array(
				'title'=>'Bienvenue sur la boutique',
				'articles'=>$this->sitemodel->getAll(),
				'content'=>$this->view_folder.__FUNCTION__
			);
			$this->load->view('template/content',$data);
	}

function show($article_id=null)/*valeur par défaut*/{

		if (!$article_id || !$this->sitemodel->getOne($article_id)){
				redirect();
				exit;
		}

		else{
					$article = $this->sitemodel->getOne($article_id);
					$data=array(
						'title'=>$article->title,
						'article'=>$article,
						'content'=>$this->view_folder.__FUNCTION__
					);

					$this->load->view('template/content',$data);
		}
	}
}
