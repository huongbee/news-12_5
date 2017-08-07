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
		if(!isset($_GET['id']) || $_GET['id']==''){
			include('../404.html');
			return;
		}
		$id = $_GET['id'];
		$name = trim($_POST['tentheloai']);
		//var_dump($name); die;
		if(strlen($name)<1){
			setcookie('loi','Tên thể loại ko rỗng',time()+2);
			header('Location:edit_theloai.php?id='.$id);
			return;
		}

		$alias = changeTitle($name);

		$model = new TheLoaiModel;
		$result = $model->editTheloai($name, $alias, $id);

		$result_upload = true;

		$image = $_FILES['hinh'];
		if($image['name']!=''){
			$name = date('h-i-s').'-'.$image['name'];
			move_uploaded_file($image['tmp_name'], '../public/images/tintuc/'.$name);
			$result_upload = $model->editImageTheloai($id,$name);

		}
		if($result_upload && $result){
			setcookie('thanhcong','Sửa thành công',time()+2);
			header('Location:danhsachtheloai.php');	
		}
		else{
			setcookie('loi','Sửa không thành công',time()+2);
			header('Location:edit_theloai.php?id='.$id);
		}
	}

	public function deleteTheloai(){
		if(!isset($_GET['id']) || $_GET['id']==''){
			include('../404.html');
			return;
		}
		$id = $_GET['id'];
		$model = new TheLoaiModel;
		$loaitin = $model->getLoaitinByIdTheloai($id);
		
		if(count($loaitin)>0){
			//setcookie('loi','không thể xóa thể loại này',time()+2);
			//header('Location:danhsachtheloai.php');
			echo 'false';
			return;
		}

		$result = $model->deleteTheLoai($id);
		if($result){
			//setcookie('thanhcong','Xóa thành công',time()+2);
			echo 'true';
		}
		else{
			//setcookie('loi','Xóa không thành công',time()+2);
			echo 'false';
		}
		return;
		//header('Location:danhsachtheloai.php');

	}
}


?>