<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmodel extends CI_Model {

	function __construct(){

		parent::__construct();
  }

	function getAllUser(){
		$query = $this->db->select('*')->from('users as u')
		->get();
		if($query->num_rows()>0){

				foreach ($query->result() as $row) {

					$data[] = $row;

			  }
				return $data;
		}
	}

function getOneUser($user_id){

		$query = $this->db->select('*')->from('users as u')
		->where('u.user_id',$user_id)
		->order_by('u.user_id')
		->get();

		if ($query->num_rows()>0) {

			return $query->row();
		}
	}

function editUser($id, $user){
		$nom = $user['lastname'];
		print_r($user);
		$this->db->set('lastname', 'Bonjour')
		->where('user_id', $id)
		->update('users');
		return true;
	}
}
