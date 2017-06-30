<?php

include('Controller.php');
include('model/HomeModel.php');

class HomeController extends Controller{

	public function getIndex(){
		$model = new HomeModel;
		$slide = $model->getSlide();

		$tin_noibat = $model->getTinNoibat();
		$tin_moinhat = $model->getTinMoinhat();
		$arrData = array(
						'slide'=>$slide, 
						'tin_noibat'=>$tin_noibat,
						'tin_moinhat'=>$tin_moinhat
					);

		return $this->loadView('trangchu', $arrData);
	}


}




?>