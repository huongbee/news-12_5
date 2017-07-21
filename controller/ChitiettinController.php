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


	public function postAddComment(){
		$id_user =  $_POST['id_user'];
		$id_tintuc = $_POST['id_tintuc'];
		$comment = $_POST['binhluan'];
		$model = new ChitiettinModel;
		$new_cmt = $model->addComment($id_user,$id_tintuc,$comment);
		if($new_cmt>0){
			echo 'thành công';
		}
		else{
			echo 'lỗi';
		}
	}
}




?>