<?php

include('Controller.php');
include('model/HomeModel.php');

class HomeController extends Controller{

	public function getIndex(){
		$model = new HomeModel;
		$slide = $model->getSlide();

		return $this->loadView('trangchu',$slide);
	}



}




?>