<?php

include('Controller.php');
include('pager.php');
include('model/LoaitinModel.php');

class LoaitinController extends Controller{

	public function getLoaitin(){
		$model = new LoaitinModel;
		$id_loai = $_GET['id'];
		$soluong = 10;
		$tranghientai = isset($_GET['page']) ? $_GET['page'] : 1;
		$vitri = ($tranghientai-1)*$soluong;

		$tintuc = $model->getTinTheoIdLoai($id_loai);
		$tongsotin = count($tintuc); //lấy tổng số tin
		
		$pager = new pagination($tongsotin,$tranghientai,$soluong,5);
		$link = $pager->showPagination();

		$tranghientai = $pager->getCurrentPage();
		$vitri = ($tranghientai-1)*$soluong;
		$tintuc = $model->getTinTheoIdLoai($id_loai,$vitri,$soluong);

		$menu = $this->getMenu();
		$loaitin = $model->getLoaitinTheoID($id_loai);

		$arrData = array(
						'tintuc'=>$tintuc,
						'menu'=>$menu,
						'loaitin'=>$loaitin,
						'link'=>$link
					);
		return $this->loadView('loaitin',$arrData);
	}



}




?>