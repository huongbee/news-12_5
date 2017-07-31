<?php
require_once('AdminController.php');
require_once('model/TheLoaiModel.php');

class TheLoaiController extends AdminController{

	public function getListTheLoai(){
		$model = new TheLoaiModel;
		$theloai = $model->getTheloai();

		return $this->loadView('list_theloai',$theloai);
	}
}


?>