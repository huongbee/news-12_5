<?php

include('Controller.php');
include('model/ChitiettinModel.php');

class ChitiettinController extends Controller{

	public function getChitiettin(){
		$menu = $this->getMenu();

		$id = $_GET['id'];
		$model = new ChitiettinModel();
		$tintuc = $model->getChitiettin($id);

		$arrData = array('menu'=>$menu,'tintuc'=>$tintuc);

		return $this->loadView('chitiettin',$arrData);
	}
}




?>