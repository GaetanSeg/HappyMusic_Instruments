
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermodel extends CI_Model {

	function __construct(){

		parent::__construct();
}
/********************************************************************************************************/
function signup($data){

	$this->db->insert('users',$data);
	return true;

}
/********************************************************************************************************/
function login($email,$password){

	$query = $this->db->get_where('users',array('email'=>$email,'password'=>sha1(md5($password))));

	if($query->num_rows()>0){

		$row=$query->row();
		$session = array('lastname'=>$row->lastname,'logged'=>true );
		$this->session->set_userdata($session);

		return true;

	}
	return false;
}
/********************************************************************************************************/
function get_countries(){

	$query = $this->db->get('countries');

	if($query->num_rows()>0){

		foreach ($query->result() as $row) {
			$data[]=$row;
		}
		return $data;
	}
}
/********************************************************************************************************/
function get_user($param){
	if(is_numeric($param)){

		$this->db->where('u.user_id',$param);

	}else{

		$this->db->where('u.lastname',$param);
	}
	$query = $this->db->select('*')->from('users as u')
	->join('countries as c ','u.user_country_id = c.country_id')
	->get();
	if($query->num_rows()>0){

		return $query->row();
	}
}
/********************************************************************************************************/
function is_logged(){

	return $this->session->userdata('lastname') && $this->session->userdata('logged');
}
/********************************************************************************************************/
function get_orders_user($user_id){

	$query = $this->db->select('*')->from('orders as  o')
	->where('o.order_user_id',$user_id)
	->order_by('o.order_valid','asc')->order_by('o.order_id','desc')
	->get();

	if($query->num_rows()>0){

		foreach ($query->result() as $row) {

			$data[] = $row;
		}
		return $data;
	}
}
/********************************************************************************************************/
function add_order($data){

	$this->db->insert('orders',$data);
	return true;

}
/********************************************************************************************************/
function add_sale($data){


	$this->db->insert('sales',$data);
	return true;

	}
/********************************************************************************************************/
function valid_order($token,$data){

		$this->db->where('order_token',$token)->update('orders',$data);
		return true;

	}

function delete_order($order_token){

			$this->db->where('order_token', $order_token);
			$this->db->delete('orders');

			return true;
		}

}
