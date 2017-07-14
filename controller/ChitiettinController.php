<?php

include('Controller.php');
include('model/ChitiettinModel.php');

class ChitiettinController extends Controller{

	public function getChitiettin(){
		$menu = $this->getMenu();

		$id = $_GET['id'];
		$model = new ChitiettinModel();
		$tintuc = $model->getChitiettin($id);
		$comment = $model->getComment($id);

		$arrData = array('menu'=>$menu,'tintuc'=>$tintuc,'comment'=>$comment);

		return $this->loadView('chitiettin',$arrData);
	}
}




?>