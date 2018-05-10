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
public function categorie($categorie_id=null)
{

	$data = array(
		'articles'=>$this->sitemodel->get_articles_categorie($categorie_id),
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
			'price'=>$article->amount,
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

	public function deleteArticle($article_id=null){

		if(!$article_id){
			redirect();
			exit;
		}

			$data =	$article_id;


			$this->sitemodel->delete_article($data);

			if($this->input->is_ajax_request()){
				$response = array(

					'success'=>true,
					'article_id'=>$article_id

				);
				echo json_encode($response);exit;
			}
			redirect('article/article');

	}

public function ajoutArticle(){

		if(!$this->usermodel->is_logged()){

				redirect('user');exit;
			}

			$this->form_validation->set_rules('title',"titre de l'article",'required');
			$this->form_validation->set_rules('description','Description','trim|required|min_length[30]');
			$this->form_validation->set_rules('categorie','categorie','trim|required|is_natural_no_zero');
			$this->form_validation->set_rules('amount','amount','trim|required|is_natural_no_zero');
			$this->form_validation->set_rules('image_name','image_name','trim|required|is_natural_no_zero');


			if($this->form_validation->run()){

				$article=array(

						'title'=>$this->input->post('title'),
						'description'=>$this->input->post('description'),
						'article_categorie_id'=>$this->input->post('categorie'),
						'amount'=>$this->input->post('price'),
						'image_name'=>$this->input->post('image_name')

					);
					if($this->sitemodel->addArticle($article)){

						$this->session->set_flashdata('success',"ajout d'article reussi ");
						redirect(current_url());exit;

					}else{
						throw new Exception('Une erreur est survenue,veuillez recommencer ');
					}
			}


		$data=array(
			'title'=>"Ajout d'article-HappyMusic",
			'categories'=>$this->sitemodel->getCategorie(),
			'content'=>$this->view_folder.__FUNCTION__
		);

		$this->load->view('template/content',$data);
	}




	public function updateArticle($article_id=null){

		$article = $this->sitemodel->getOne($article_id);

		$data = array(
			'title'=>"edition d'un article-HappyMusic",
			'categories'=>$this->sitemodel->getCategorie(),
			'article'=>$article,
			'content'=>$this->view_folder.__FUNCTION__
		);

		if(!$this->usermodel->is_logged()){

				redirect('user');exit;
			}

			$this->form_validation->set_rules('article_id',"article_id",'required');
			$this->form_validation->set_rules('title',"titre de l'article",'required');
			$this->form_validation->set_rules('description','Description','trim|required|min_length[30]');
			$this->form_validation->set_rules('categorie','categorie','trim|required|is_natural_no_zero');
			$this->form_validation->set_rules('amount','amount');
			$this->form_validation->set_rules('image_name','image_name');


			if($this->form_validation->run()){

				$articleUpdate=array(
						'article_id'=>$this->input->post('article_id'),
						'title'=>$this->input->post('title'),
						'description'=>$this->input->post('description'),
						'article_categorie_id'=>$this->input->post('categorie'),
						'amount'=>$this->input->post('price'),
						'image_name'=>$this->input->post('image_name')

					);
					if($this->sitemodel->updateArticle($articleUpdate)){

						$this->session->set_flashdata('success',"ajout d'article reussi ");
						redirect(current_url());exit;

					}else{
						throw new Exception('Une erreur est survenue,veuillez recommencer ');
					}
			}

		
		$this->load->view('template/content',$data);
	}

}
