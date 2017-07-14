<?php

include('Controller.php');

class UserController extends Controller{

	public function getSignup(){
		$menu = $this->getMenu();

		$arrData = array('menu'=>$menu);

		return $this->loadView('dangki',$arrData);
	}



	


	public function getLogin(){
		return $this->loadView('dangnhap');
	}

}




?>