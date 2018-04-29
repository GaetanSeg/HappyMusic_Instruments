<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->user = ($this->usermodel->is_logged()) ? $this->usermodel->get_user($this->session->userdata('lastname')) : false;
		$this->picture_path = base_url().'img/';
		$this->view_folder = strtolower(__CLASS__).'/';
	}
/********************************************************************************************************/
public function index()
{
	if(!$this->usermodel->is_logged()){
		redirect('user/login');exit;
	}

	$data = array(
		'title'=>'Mes achats',
		'user'=>$this->user,
		'orders'=>$this->usermodel->get_orders_user($this->user->user_id),
		'content'=>$this->view_folder.__FUNCTION__
	);
	$this->load->view('template/content',$data);
}
/********************************************************************************************************/
public function login()
{
	if($this->usermodel->is_logged()){
		redirect('user');exit;
	}

	$this->form_validation->set_rules('email','Email','trim|required|valid_email');
	$this->form_validation->set_rules('password','Mot de passe','trim|required');

	if($this->form_validation->run()){

		if ($this->usermodel->login($this->input->post('email'),$this->input->post('password'))) {

			redirect('user');exit;

		}else{
			$this->session->set_flashdata('error','Mauvais identifiants ');
			redirect(current_url());exit;
		}

	}

	$data = array(
			'title'=>'Connexion',
			'content'=>$this->view_folder.__FUNCTION__
	);
	$this->load->view('template/content',$data);
}
/********************************************************************************************************/
public function signup(){

			if($this->usermodel->is_logged()){

					redirect('user');exit;
				}

				$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
				$this->form_validation->set_rules('password','Mot de passe','trim|required|min_length[5]');
				$this->form_validation->set_rules('lastname','Nom','trim|required');
				$this->form_validation->set_rules('firstname','Prénom','trim|required');
				$this->form_validation->set_rules('address','Adresse','trim|required');
				$this->form_validation->set_rules('city','Ville','trim|required');
				$this->form_validation->set_rules('cp','Code postal','trim|required');
				$this->form_validation->set_rules('country','Pays','trim|required|is_natural_no_zero');
				$this->form_validation->set_rules('phone','Téléphone','trim|required|integer');

				if($this->form_validation->run()){

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
						if($this->usermodel->signup($user)){

							$this->session->set_flashdata('success','Inscription réussie');
							redirect(current_url());exit;

						}else{
							throw new Exception('Une erreur est survenue,veuillez recommencer ');
						}
				}

				$data = array(
					'title'=>'inscriptions',
					'countries'=>$this->usermodel->get_countries(),
					'content'=>$this->view_folder.__FUNCTION__
				);
				$this->load->view('template/content',$data);
}
/********************************************************************************************************/
public function logout(){

	$this->session->sess_destroy();
	redirect();exit;
}
/********************************************************************************************************/
public function payer(){

	if(!$this->usermodel->is_logged()){
		redirect('user/login');exit;
	}

	if(!$this->cart->contents()){
		redirect();exit;
	}

	$this->load->library('paypal');
	$params = array(
		'RETURNURL'=>site_url('user/retour'),
		'CANCELURL'=>site_url('article/cancel')
	);

	$items = array();

	$i = 0;
	foreach($this->cart->contents() as $cart)
	{
		$items['L_PAYMENTREQUEST_0_NAME'.$i]  = $cart['name'];
		$items['L_PAYMENTREQUEST_0_NUMBER'.$i] = $cart['id'];
		$items['L_PAYMENTREQUEST_0_DESC'.$i] = $cart['name'];
		$items['L_PAYMENTREQUEST_0_AMT'.$i] = $cart['price'];
		$items['L_PAYMENTREQUEST_0_QTY'.$i] = $cart['qty'];
		$i++;
	}

	$items['PAYMENTREQUEST_0_AMT'] = $this->cart->total();
	$items['PAYMENTREQUEST_0_CURRENCYCODE'] = 'EUR';

	$params += $items;
	$paypal = new Paypal();
	$response = $paypal->request('SetExpressCheckout',$params);

	//reponse de Paypal renvoi un jeton si tout c'est bien passé
	if(!empty($response['TOKEN']) &&  $response['ACK']=='Success'){

		$token = htmlentities($response['TOKEN']);

		$order = array(
			'order_token'=>$token,
			'order_user_id'=>$this->user->user_id,
			'order_amt'=>$this->cart->total(),
			'order_total_items'=>$this->cart->total_items(),
			'order_paypal_infos'=>false,
			'order_valid'=>false
		);

		if($this->usermodel->add_order($order)){

			foreach ($this->cart->contents() as $cart) {
				$sale= array(

					'sale_user_id'=>$this->user->user_id,
					'sale_article_id'=>$cart['id'],
					'sale_qty'=>$cart['qty'],
					'sale_amt'=>$cart['price'],
					'sale_order_token'=>$token,
					'sale_valid'=>false

				);

				$this->usermodel->add_sale($sale);

			}
				header('Location: https://www.sandbox.paypal.com/webscr?cmd=_express-checkout&token='.urlencode($token).'&useraction=commit');
		}
	}else{
		echo "une erreur s'est produite : <br>".$response['L_LONGMESSAGE0'];
	}

}
/********************************************************************************************************/
function retour(){

	if(empty($_GET)){

		redirect();exit;

	}else{

		$this->load->library('paypal');
	}
	if(!empty($_GET['token'])){

			$params = array('TOKEN'=>htmlentities($_GET['token'],ENT_QUOTES));

			$paypal = new Paypal();
			$response = $paypal-> request('GetExpressCheckoutDetails',$params);

			if(is_array($response)&& $response['ACK']=='Success'){

				$token = htmlentities($response['TOKEN']);
				$user = $this->usermodel->get_user($this->sitemodel->get_order($token)->order_user_id);

				$payment_params = array(
					'PAYMENTREQUEST_0_PAYMENTACTIO'=>'Sale',
					'PayerID'=>htmlentities($_GET['PayerID'], ENT_QUOTES),
					'PAYMENTREQUEST_0_AMT'=>$response['AMT'],
					'PAYMENTREQUEST_0_CURRENCYCODE'=> 'EUR'
				);

				$params += $payment_params;
				$paypal = new Paypal();
				$response = $paypal->request('DoExpressCheckoutPayment',$params);

				if(is_array($response) && $response['ACK']=='Success'){

						//echo '<pre>';print_r($response);exit;

						$token =  htmlentities($response['TOKEN']);
						$order = array(

							'order_paypal_infos'=>serialize($response),
							'order_valid'=>true

						);
						if($this->usermodel->valid_order($token,$order)){

								$sales = $this->sitemodel->get_sales_orders($token);
								foreach ($sales as $s) {

									$data = array('sale_valid'=>true);
									$this->sitemodel->update_sales_orders($token,$data);
								}

						$amount = htmlentities($response['PAYMENTINFO_0_AMT']);

						//envoi d'un email au client
						$this->email->from('supra3946@gmail.com');
						$this->email->to($user->email);
						$this->email->subject('Vos achats sur HappyMusic-Instruments');
						$this->email->message('<h2>Bonjour '.$user->firstname.', </h2>
							<div>Commande n° <strong>'.$token.'</strong></div>
							<div>Montant de la commande :<strong>'.$amount.'</strong></div>
							<p>Votre commande sera expédiée rapidement bla bla bla<br>
							Vous pouvez consulter '.anchor('user','la liste de vos achats').' dans votre epace personnel et imprimer la facture.</p>');

						$this->email->send();

						$this->cart->destroy();
						redirect('user');

					}
				}
			}
		}
	}
/********************************************************************************************************/
public function commande($token=null){
	if(!$token){
		redirect();
		exit;

	}else{

			$sales= $this->sitemodel->get_sales_orders($token);
	}

	if (!$sales) {

		redirect();
		exit;

	}else{

		$data = array(
			'title'=>'Mes commandes',
			'sales'=>$sales,
			'order'=>$this->sitemodel->get_order($token),
			'content'=>$this->view_folder.__FUNCTION__
		);

		$this->load->view('template/content',$data);

	}
}
/********************************************************************************************************/
public function facture($token=null) {

	if (!$this->usermodel->is_logged()) {
			redirect();
			exit;
	}
	else if(!$token){
		redirect();
		exit;

	}else {

		$order= $this->sitemodel->get_order($token);
		$sales= $this->sitemodel->get_sales_orders($token);


		$data = array(
			'sales'=>$sales,
			'order'=>$order
		);

	}
	$this->load->view($this->view_folder.__FUNCTION__,$data);


}
/********************************************************************************************************/
}
