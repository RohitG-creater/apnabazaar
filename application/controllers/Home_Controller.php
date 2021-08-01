<?php
Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); //method allowed
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Home_Model');
		$this->load->library('session');
	}

	public function Checkout()
	{
		$data['pageName']= 'checkout';
		$this->load->view('master',$data);
	}

	public function User_Login(){
		$data['pageName'] = 'login';
		$this->load->view('master',$data);
	}

	public function User_Registration(){
		$data['pageName'] = 'registration';
		$this->load->view('master',$data);
	}

	public function Mail_Us(){
		$data['pageName'] = 'mail_us';
		$this->load->view('master',$data);
	}

	public function Women_Product(){
		$data['women_product'] = $this->Home_Model->Get_Women_Product();
		$data['pageName'] = 'women_product';
		$this->load->view('master',$data);
	}

	public function Men_Product(){
		$data['men_product'] = $this->Home_Model->Get_Men_Product();
		$data['pageName'] = 'men_product';
		$this->load->view('master',$data);
	}
	public function Single_Product(){
		$product_array = explode("-",$this->uri->segment(1));
		$final_product = array_slice($product_array,1);
		$product_name = implode(" ",$final_product);
		$data['single_product'] = $this->Home_Model->Get_Single_Product($product_name);
		$data['pageName'] = 'single_product';
		$this->load->view('master',$data);
	}

	
	
}
