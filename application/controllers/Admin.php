<?php
Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); //method allowed
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	public function Admin_Login()
	{
		$this->load->view('Admin/login');
	}

	public function Index()
	{
		$data['pageName'] = 'index';
		$this->load->view('Admin/master',$data);
	}

	public function Product_List()
	{
		$data['pageName'] = 'product_list';
		$this->load->view('Admin/master',$data);
	}

	public function Add_Category(){
		$data['pageName'] = 'add_category';
		$this->load->view('Admin/master',$data);
	}

	public function Category_List()
	{
		$data['pageName'] = 'category_list';
		$this->load->view('Admin/master',$data);
	}

	public function Add_Product(){
		$data['pageName'] = 'add_product';
		$this->load->view('Admin/master',$data);
	}
	


	
	
}
