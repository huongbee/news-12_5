<?php
require_once('model/HomeModel.php');
class Controller{
	
	

	public function loadView($view,$data=array()){
		include("views/layout.php");
	}


	public function getMenu(){
		$model = new HomeModel();
		$menu = $model->getTheLoai_LoaiTin();
		return $menu;
	}

	public function getView($view,$data=array()){
		include("views/$view.php");
	}
}

?>