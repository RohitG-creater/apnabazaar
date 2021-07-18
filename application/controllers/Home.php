<?php
Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); //method allowed
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
		$data['pageName'] = 'women_product';
		$this->load->view('master',$data);
	}

	public function Men_Product(){
		$data['pageName'] = 'men_product';
		$this->load->view('master',$data);
	}
	public function Single_Product(){
		$this->load->view('single_product');
	}

	
	
}
