<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemodel extends CI_Model {

	function __construct(){

		parent::__construct();
}
/********************************************************************************************************/
	function getAll(){
		$query = $this->db->select('*')->from('articles as a')

		->join('prices as p','p.price_article_id = a.article_id','left')
		->join('images as img','img.image_article_id = a.article_id','left')
		->join('categories as c','c.categorie_id = a.article_categorie_id','left')
		->order_by('a.article_categorie_id')
		->get();
		if($query->num_rows()>0){

				foreach ($query->result() as $row) {

					$data[] = $row;

			  }
				return $data;
		}
	}
/********************************************************************************************************/
function get_articles_categorie($categorie_id){

	$query = $this->db->select('*')->from('articles as  a')
	->where('a.article_categorie_id',$categorie_id)
	->join('prices as p','p.price_article_id = a.article_id','left')
	->join('images as img','img.image_article_id = a.article_id','left')
	->join('categories as c','c.categorie_id = a.article_categorie_id','left')
	->get();

	if($query->num_rows()>0){

		foreach ($query->result() as $row) {

			$data[] = $row;
		}
		return $data;
	}
}
/********************************************************************************************************/
	function getOne($article_id){
		$query = $this->db->select('*')->from('articles as a')
		->where('a.article_id',$article_id)
		->join('prices as p','p.price_article_id = a.article_id','left')
		->join('images as img','img.image_article_id = a.article_id','left')
		->order_by('a.article_id')
		->get();
		if ($query->num_rows()>0) {

			return $query->row();
		}
	}
/********************************************************************************************************/
	function getCategorie(){
		$query = $this->db->select('*')->from('categories as c')
		->order_by('c.categorie_id')
		->get();
		if($query->num_rows()>0){

				foreach ($query->result() as $row) {

					$data[] = $row;

			  }
				return $data;
			}
		}
/********************************************************************************************************/
	function get_order($token){

		$query = $this->db->get_where('orders',array('order_token'=>$token));

			if($query->num_rows()>0){

				return $query->row();

			}

		}
/********************************************************************************************************/
	function get_sales_orders($token)	{
		$query =  $this->db->get_where('sales',array('sale_order_token'=>$token));

		if($query->num_rows() > 0){

			foreach ($query->result() as $row) {

				$data[] = $row;

			}
			return $data;
		}

	}
/********************************************************************************************************/
	function update_sales_orders($token,$data){

		$this->db->where('sale_order_token',$token)->update('sales',$data);

		return true;
	}
}
