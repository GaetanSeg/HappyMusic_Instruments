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
public function categorie()
{

	$data = array(
		'title'=>'Categorie',
		'categorie'=>$this->categorie,
		'articles'=>$this->sitemodel->get_articles_categorie($this->categorie->categorie_id),
		'content'=>$this->view_folder.__FUNCTION__
	);
	$this->load->view('template/content',$data);
}
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
public function add($article_id=null){
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

/********************************************************************************************************/
public function delete($rowid=null){
	if(!$rowid){
		redirect();
		exit;
	}

		$data = array(
			'rowid'=>$rowid,
			'qty'=>0
		);
		$this->cart->update($data);

		if($this->input->is_ajax_request()){
			$response = array(
				'success'=>true,
				'nb_article'=>$this->cart->total_items(),
				'total'=>number_format($this->cart->total(),2,',',' ')

			);
			echo json_encode($response);exit;
		}
		redirect('article/panier');


}
/********************************************************************************************************/
public function update($rowid=null)
{
	if(!$rowid || !$this->input->post('qty') || !is_numeric($this->input->post('qty'))){
		redirect('article/panier');exit;
	}
	$data = array(
		'rowid'=>$rowid,
		'qty'=>$this->input->post('qty')
	);
	$this->cart->update($data);

	/*if($this->input->is_ajax_request()){
		$response = array(
			'success'=>true,
			'nb_article'=>$this->cart->total_items(),
			'total'=>number_format($this->cart->total(), 2, ',', ' '),
			'total_for_item'=>number_format($this->input->post('qty') * $this->input->post('price'), 2, ',', ' ')
		);
		echo json_encode($response);exit;
	}*/

	redirect('article/panier');
}
/********************************************************************************************************/
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

/********************************************************************************************************/

public function cancel(){

	echo 'paiement annulé';

	}
}
