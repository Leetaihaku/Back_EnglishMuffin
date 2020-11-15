<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class index extends CI_Controller {

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
	public function __construct()
	{
		parent::__construct();
		$this->load->model("DHfilm_login_m");
		$this->load->model("DHfilm_signup_m");
	}
	

	//시네마 웹사이트 로그인페이지
	public function starting_point()
	{
		$this->load->view("DHfilm_login_v");
	}

	//로그인과정 처리작업
	public function login_verification()
	{
		if(isset($_POST)){
		
		$id = $_POST["userID"];
		$pw = $_POST["userPASSWORD"];
		
			
		$result_array = $this->DHfilm_login_m->login_verification_id($id);
		
		$pw_hash = $result_array->userPW;

		if($pw==$pw_hash)
		{
			$this->reservation_movie();
			reservation_movie();
		}
		else 
		{
			echo "<script>alert('비밀번호 오류로 인한 로그인 실패입니다');</script>";
			$this->starting_point();
			starting_point();
		}
	}
	else{
		echo "<script>alert('값을 입력해주세요');</script>";
		$this->starting_point();
		starting_point();
	}
	}

	//회원가입-회원정보저장
	public function save_newbie()
	{
			if(empty($_POST))
			$this->load->view("DHfilm_signup_v");
			else{
			$id = $_POST['signid'];
			$pw = $_POST['signpwd'];
			$name = $_POST['full_name'];
			$age = $_POST['age'];
			$sex = $_POST['sex'];
			
			$info = array(
				"userID"=> $id,
				"userPW"=> $pw,
		 		"userName"=> $name,
		 		"userAge"=> $age,
				"userSex"=> $sex
			);
		
			$result_back = $this->DHfilm_signup_m->insert_newbie($info);

			if(!$result_back)
			{
				echo("<script>alert('저장활동소로 보내는 과정에서 오류가 생김.')</script>");
				$this->starting_point();
				starting_point();
			}
			else 
			{
				$this->starting_point();
				starting_point();
			}
		}
	
	}

		//예매사이트로 이동
		public function reservation_movie()
		{
			$this->load->view("DHfilm_reservation_v");
	
			//#code
		}

		public function resr(Type $var = null)
		{
			# code...
		}
		
}
?>