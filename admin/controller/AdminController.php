<?php
session_start();
class AdminController{

	public $role;


	public function __construct(){
		$this->role = $_SESSION['role'];
		if(isset($_SESSION['role']) && $_SESSION['role']==4){
			header("Location:../index.php");
		}
		return $this->role;
	}



	public function checkRole(){
		//2:sửa, xóa
		//3:thêm
		if($this->role==3){//không được vào
			header("Location:$_SERVER[HTTP_REFERER]");
			setcookie('notallow','Bạn không có quyền',time()+2);
		}
		
	}

	
	public function loadView($view,$data=array()){
		include("views/layout.php");
	}

}


?>