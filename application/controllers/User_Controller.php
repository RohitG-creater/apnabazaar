<?php
Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); //method allowed
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Controller extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->model('User_Model');
		$this->load->library('session');
	 }
  

	public function Save_Registration()
	{
		$mobile_result = $this->User_Model->Check_Mobile_Exist($this->input->post('Reg_User_Mobile'));
		if($mobile_result != null){
			echo json_encode(["message"=>"Mobile_Exist"]);
		}else{
			date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
			$date = date('Y-m-d h:i:s');
			$data = array ( 'User_Name' => $this->input->post('Reg_User_Name') , 'User_Mobile' => $this->input->post('Reg_User_Mobile') , 'User_Password' => $this->input->post('Reg_User_Password'), 'User_Date' => $date);
			$this->User_Model->Save_Registration($data);
			echo json_encode(["message"=>"Inserted"]);
		}
	}

	public function Check_Login(){
		$login_result = $this->User_Model->Check_Account_Exist($this->input->post('Login_User_Mobile'),$this->input->post('Login_User_Password'));
		if($login_result == null){
			echo json_encode(["message"=>"Account_Not_Exist"]);
		}else{
			echo json_encode(["message"=>"Success"]);
		}
	}
}


