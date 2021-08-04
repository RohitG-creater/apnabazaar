<?php
Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); //method allowed
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Home_Model');
		$this->load->library('session','My_Cart');
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
		$this->load->view('single_product',$data);
	}

	public function Add_To_Cart(){
		$product_id = $this->input->get('product_id');
		$product = $this->Home_Model->Get_Single_Product_BY_ID($product_id);
		$Product_Price = $product->Product_Offer_Price;
		$qty = $price = null;
		$validate = "not_exisit";
		foreach ($this->cart->contents() as $items){
			if($items['id'] == $product_id){
				$qty = $items['qty'] + 1;;
				$price = $qty * $items['price'];
				$validate = "exist";
			}else{
				$qty = 1;
				$price = $product->Product_Offer_Price;
			}
		}
		if($validate == "not_exisit"){
			$data = array(
				'id'      => $product->ID,
				'qty'     => 1,
				'price'   => $product->Product_Offer_Price,
				'name'    => $product->Product_Name,
				'image' => $product->Product_Image
			);
			$this->cart->insert($data);
		}else{
			$data = array(
				'id'      => $product->ID,
				'qty'     => $qty,
				'price'   => $price,
			);
			$this->cart->update($data);
		}
		
	print_r($this->cart->contents());
	}

	
	
}
