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
	 * 
	 */

	public function __construct(){
		parent::__construct();
		$this->load->model('Category');
		$this->load->model('Product');
		$this->load->library('session');
	 }
  
	public function Login_Validation(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->db->where('User_Email',$email);
		$this->db->where('User_Password',$password);
		if($this->db->get('tbl_admin')->row() == null){
			echo json_encode(["message"=>"Email_Not_Exist"]);
		}else{
			$this->session->set_userdata(["email"=>$email]);
			echo json_encode(["message"=>"Success"]);
		}
	}
	public function Admin_Login()
	{
		$this->load->view('Admin/login');
	}

	public function Index()
	{
       if($this->session->userdata("email")){
			$data['pageName'] = 'index';
			$this->load->view('Admin/master',$data);
		}else{
			redirect('admin/login'); 
		}
		
	}

	public function Product_List()
	{
		if($this->session->userdata("email")){
			$data['product_list'] = $this->Product->get_product_list();
			$data['pageName'] = 'product_list';
			$this->load->view('Admin/master',$data);
		}else{
			redirect('admin/login'); 
		}
	}

	public function Add_Category(){
		if($this->session->userdata("email")){
			$data['pageName'] = 'add_category';
			$data['category_list'] = $this->Category->get_category_list();
			$this->load->view('Admin/master',$data);
		}else{
			redirect('admin/login'); 
		}
	}

	public function Add_Product(){
		if($this->session->userdata("email")){
			$data['category_list'] = $this->Category->get_category_list();
			$data['pageName'] = 'add_product';
			$this->load->view('Admin/master',$data);
		}else{
			redirect('admin/login'); 
		}
	}

	public function Save_Category(){
		$data = array ( 'Category_Name' => $this->input->get('category_name') , 'Category_Url' => $this->input->get('category_url') );
		$this->Category->save_category($data);
		echo 'Data_Inserted';
	}

	public function Get_Edit_Category(){
		$id = $this->input->get('category_id');
		$data['Edit_Category'] = $this->Category->get_edit_category($id);
		echo json_encode($data);
	}

	public function Update_Category(){
		$data = array('Category_Name' => $this->input->get('category_name') , 'Category_Url' => $this->input->get('category_url'));
		$this->Category->Update_Category($this->input->get('category_id'),$data);
	}

	public function Save_Product(){
		$this->load->library('upload');//loading the library
		$imagePath = realpath(APPPATH . '../public/images');//this is your real path APPPATH means you are at the application folder
		$number_of_files_uploaded = count($_FILES['files']['name']);
		$file_name = [];
        for ($i = 0; $i <  $number_of_files_uploaded; $i++) {
            $_FILES['Files']['name']     = $_FILES['files']['name'][$i];
            $_FILES['Files']['type']     = $_FILES['files']['type'][$i];
            $_FILES['Files']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
            $_FILES['Files']['error']    = $_FILES['files']['error'][$i];
            $_FILES['Files']['size']     = $_FILES['files']['size'][$i];
            //configuration for upload your images
            $config = array(
                'file_name'     => $this->getRandomString(),
                'allowed_types' => 'jpg|jpeg|png|gif',
                'max_size'      => 3000,
                'overwrite'     => FALSE,
                'upload_path' =>$imagePath
            );
            $this->upload->initialize($config);
            if ($this->upload->do_upload())
            {
                $filename = $this->upload->data();
            }
			array_push($file_name,$_FILES['files']['name'][$i]);
		}
		$data = array ( 
			'Product_Name'=>$this->input->post('product_name'),
			'Product_Quantity'=>$this->input->post('product_quantity'),
			'Product_Offer_Price'=>$this->input->post('product_offer_price'),
			'Product_Price_Without_Offer'=>$this->input->post('product_without_offer_price'),
			'Product_Description'=>$this->input->post('product_description'),
			'Product_Image'=>implode(",",$file_name),
			'Product_Category'=>$this->input->post('product_category'),
			'Product_Url'=>$this->input->post('product_url'),
		);

		$this->Product->Save_Product($data);
		echo json_encode("updated");
	}

	public function Get_Edit_Product(){
		if($this->session->userdata("email")){
			$array_url = explode("-",$this->uri->segment(3));
			$id = end($array_url);
			$data['Edit_Product'] = $this->Product->get_edit_product($id);
			$data['pageName'] = 'update_product';
			$data['category_list'] = $this->Category->get_category_list();
			$this->load->view('Admin/master',$data);
		}else{
			redirect('admin/login'); 
		}
	}

	public function Update_Product(){
		$this->load->library('upload');//loading the library
		$imagePath = realpath(APPPATH . '../public/images');//this is your real path APPPATH means you are at the application folder

		if(isset($_FILES['files']['name'])){
			$number_of_files_uploaded = count($_FILES['files']['name']);
			$file_name = [];
			for ($i = 0; $i <  $number_of_files_uploaded; $i++) {
				$_FILES['Files']['name']     = $_FILES['files']['name'][$i];
				$_FILES['Files']['type']     = $_FILES['files']['type'][$i];
				$_FILES['Files']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
				$_FILES['Files']['error']    = $_FILES['files']['error'][$i];
				$_FILES['Files']['size']     = $_FILES['files']['size'][$i];
				//configuration for upload your images
				$config = array(
					'file_name'     => $this->getRandomString(),
					'allowed_types' => 'jpg|jpeg|png|gif',
					'max_size'      => 3000,
					'overwrite'     => FALSE,
					'upload_path' =>$imagePath
				);
				$this->upload->initialize($config);
				if ($this->upload->do_upload())
				{
					$filename = $this->upload->data();
				}
				array_push($file_name,$_FILES['files']['name'][$i]);
			}
		}
		$data = array ( 
			'Product_Name'=>$this->input->post('product_name'),
			'Product_Quantity'=>$this->input->post('product_quantity'),
			'Product_Offer_Price'=>$this->input->post('product_offer_price'),
			'Product_Price_Without_Offer'=>$this->input->post('product_without_offer_price'),
			'Product_Description'=>$this->input->post('product_description'),
			'Product_Image'=>$this->input->post('product_image_name'),
			'Product_Category'=>$this->input->post('product_category'),
			'Product_Url'=>$this->input->post('product_url'),
		);
		$this->Product->Update_Product($data,$this->input->post('product_id'));
		echo json_encode("updated");
	}


	public function getRandomString(){
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randomString = '';
	  
		for ($i = 0; $i < 5; $i++) {
			$index = rand(0, strlen($characters) - 1);
			$randomString .= $characters[$index];
		}
	  
		return $randomString;
	}

	public function Delete_Category(){
		$ID = $this->input->post('delete_id');
		$this->Category->Delete_Category($ID);
	}

	public function Delete_Product(){
		$ID = $this->input->post('delete_id');
		$this->Product->Delete_Product($ID);
	}

	public function Logout(){
		if($this->session->userdata("email")){
			$this->session->unset_userdata("email");
			redirect("admin/login");
		}
	}
}
?>