<?php

include('Controller.php');

class LoaitinController extends Controller{

	public function getLoaitin(){
		return $this->loadView('loaitin');
	}



}




?>