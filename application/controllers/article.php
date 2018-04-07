<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->picture_path = base_url().'img/';
		$this->pictureCategorie_path = base_url().'img/';
		$this->view_folder = strtolower(__CLASS__).'/';
	}
/********************************************************************************************************/
public function index(){

	$data=array(
		'title'=>'Bienvenue sur la boutique',
		'categories'=>$this->sitemodel->getCategorie(),
		'content'=>$this->view_folder.__FUNCTION__
	);
	$this->load->view('template/content',$data);

	}
/********************************************************************************************************/

public function article(){

			$data=array(
				'title'=>'Bienvenue sur la boutique',
				'articles'=>$this->sitemodel->getAll(),
				'content'=>$this->view_folder.__FUNCTION__
			);
			$this->load->view('template/content',$data);
	}
/********************************************************************************************************/
/********************************************************************************************************/
public function show($article_id=null)/*valeur par défaut*/{

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
	/********************************************************************************************************/
public function add($article=null){
	if (!$article_id || !$this->sitemodel->getOne($article_id)) {
		redirect();
		exit;
	}
	else {
		$article = $this->sitemodel->getOne($article_id);
		$data =  array(
			'id'=>$article->article_id,
			'qty'=>1,
			'price'=>$article->price_amount,
			'name'=>$article->title
		 );
		 $this->cart->insert($data);
		 redirect('article/panier');
		 exit;
	}
}
public function panier(){
	$data=array(
		'title'=>'Mon panier',
		'cart'=>$this->cart->contents(),
		'total'=>$this->cart->total(),
		'total_articles'=>$this->cart->total_items(),
		'content'=>$this->view_folder.__FUNCTION__
	);
	$this->load->view('template/content',$data);

}
}
