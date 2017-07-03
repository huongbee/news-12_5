<?php

include('Controller.php');
require_once('model/HomeModel.php');

class HomeController extends Controller{

	public function getIndex(){
		$model = new HomeModel;
		$slide = $model->getSlide();

		$tin_noibat = $model->getTinNoibat();
		$tin_moinhat_1tin = $model->getTinMoinhat_1Tin();
		$tin_moinhat = $model->getTinMoinhat();
		$theloai_loaitin = $model->getTheLoai_LoaiTin();
		$menu = $this->getMenu();
		$arrData = array(
						'slide'=>$slide, 
						'tin_noibat'=>$tin_noibat,
						'tin_moinhat_1tin'=>$tin_moinhat_1tin,
						'tin_moinhat'=>$tin_moinhat,
						'theloai_loaitin'=>$theloai_loaitin,
						'menu'=>$menu
					);

		return $this->loadView('trangchu', $arrData);
	}


}




?>