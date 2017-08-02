<?php
require_once('AdminController.php');
require_once('model/TheLoaiModel.php');
require_once('../include/functions.php');

class TheLoaiController extends AdminController{

	public function getListTheLoai(){
		$model = new TheLoaiModel;
		$theloai = $model->getTheloai();

		return $this->loadView('list_theloai',$theloai);
	}

	public function getEditTheLoai(){
		if(!isset($_GET['id']) || $_GET['id']==''){
			include('../404.html');
			return;
		}
		$id = $_GET['id'];

		$model = new TheLoaiModel;
		$theloai = $model->getTheLoaiById($id);

		return $this->loadView('edit_theloai',$theloai);
	}



	public function postEditTheloai(){
		$id = $_GET['id'];
		$name = $_POST['tentheloai'];
		$alias = changeTitle($name);

		$model = new TheLoaiModel;
		$result = $model->editTheloai($name, $alias, $id);
		if($result ){
			$result = 'thành công';
		}
		else{
			$result = 'lỗi';
		}
		echo $result;
	}
}


?>