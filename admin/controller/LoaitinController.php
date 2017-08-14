<?php
require_once('AdminController.php');
require_once('model/LoaitinModel.php');
require_once('../include/functions.php');

class LoaitinController extends AdminController{

	public function getListLoaitin(){
		if(!isset($_GET['id']) || $_GET['id']==''){
			include('../404.html');
			return;
		}
		$id = $_GET['id'];
		$model = new LoaitinModel;
		$loaitin = $model->getLoaitinByIdTheLoai($id);

		return $this->loadView('list_loaitin',$loaitin);
	}





/*============================*/
	public function postEditLoaitin(){
		
		$id = $_POST['id'];
		$name = trim($_POST['name']);
		
		$alias = changeTitle($name);

		$model = new LoaitinModel;
		$result = $model->editLoaitin($name, $alias, $id);
		if($result==false){
			echo "false";
		}
		else{
			echo 'true';
		}
		return;
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

	public function getAddTheloai(){
		return $this->loadView('addtheloai');
	}


	public function postAddTheloai(){

		if($_POST['tentheloai'] || $_FILES['hinh']['name'] ==''){
			$name = $_POST['tentheloai'];
			move_uploaded_file($_FILES['hinh']['tmp_name'], '../public/images/tintuc/'.$_FILES['hinh']['name']);

			$model = new TheLoaiModel;
			$result = $model->insertTheloai($name,changeTitle($name),$_FILES['hinh']['name']);

			if($result>0){
				setcookie('thanhcong','Thêm thành công',time()+1);
				header('Location:danhsachtheloai.php');
			}
		}
		else{
			setcookie('loi','Vui lòng điền đầy đủ thông tin',time()+1);
			header('location:add_theloai.php');
		}
	}
}


?>