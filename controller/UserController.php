<?php

include('Controller.php');

class UserController extends Controller{

	public function getSignup(){
		return $this->loadView('dangki');
	}


	public function getLogin(){
		return $this->loadView('dangnhap');
	}

}




?>