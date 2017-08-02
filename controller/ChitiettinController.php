<?php

include('Controller.php');
include('model/ChitiettinModel.php');

class ChitiettinController extends Controller{

	public function getChitiettin(){
		$menu = $this->getMenu();

		
		if(!isset($_GET['id']) || $_GET['id']==''){
			include('404.html');
			return;
		}



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
			$comment = $model->getCommentByID($new_cmt);
			return $this->getView('ajax_load_data',$comment);
		}
		else{
			echo 'lỗi';
		}
	}


	public function postAddReComment(){
		$id_user =  $_POST['id_user'];
		$idCmt = $_POST['idCmt'];
		$comment = $_POST['binhluan'];

		$model = new ChitiettinModel;
		$new_cmt = $model->addReComment($id_user,$idCmt,$comment);
		if($new_cmt>0){
			//echo 'thành công';
			$re_comment = $model->getReCommentByID($new_cmt);
			return $this->getView('ajax_load_data_re_cmt',$re_comment);
		}
		else{
			echo 'lỗi';
		}
	}
}




?>