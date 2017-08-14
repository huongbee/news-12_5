<?php

include_once('Controller.php');
include_once('model/UserModel.php');
include_once('function/mailer/mail.php');

class UserController extends Controller{

	public function getSignup(){
		$menu = $this->getMenu();

		$arrData = array('menu'=>$menu);

		return $this->loadView('dangki',$arrData);
	}


	public function postSignup(){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$model = new UserModel;
		$user = $model->DangKi($name, $email, md5($password)); //123 ->q67ghvhg3
		if($user>0){
			setcookie('thanhcong','Đăng kí thành công',time()+5);
			//unset($_SESSION['loi']);
			header('Location:index.php');
		}
		else{
			setcookie('loi','Đăng kí không thành công',time()+5);
			//$_SESSION['loi'] = "Đăng kí không thành công";
			header('Location:dangki.php');
		}
	}



	


	public function getLogin(){
		$menu = $this->getMenu();

		$arrData = array('menu'=>$menu);
		return $this->loadView('dangnhap',$arrData);
	}

	public function postLogin(){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$model = new UserModel;
		$user = $model->getUser($email, md5($password));
		if($user != NULL){
			$_SESSION['username'] = $user->name;
			$_SESSION['userID'] = $user->id;
			$_SESSION['role'] = $user->id_role;
			setcookie('thanhcong','Đăng nhập thành công',time()+5);
			if($_SESSION['role']==1 || $_SESSION['role']==2 || $_SESSION['role']==3){ //CEO
				header('Location:admin/index.php');
			}
			elseif($_SESSION['role']==4){//ghust
				header('Location:index.php');
			}
		}
		else{
			setcookie('loi','Đăng nhập không thành công',time()+5);
			header('Location:login.php');
		}
	}


	public function getForgetPassword(){
		$menu = $this->getMenu();
		$arrData = array('menu'=>$menu);
		return $this->loadView('quen_mk',$arrData);
	}


	public function postForgetPassword(){
		$email = $_POST['email'];
		$model = new UserModel;
		$user = $model->checkEmailExits($email);
		if($user == null){
			setcookie('loi','Không tồn tại email',time()+5);
			header('Location:forget_password.php');
		}
		else{
			$noidung = "
			<h1 style='color:red'>Tiêu đề</h1>
			<p>Click vào <a href='http://localhost/news12_5/reset_password.php?email=$email'>đây</a> để thay đổi mât khẩu</p>
			<img src='public/images/1.jpg'>";

			Mailer($email,$user->name,'Reset Password','Nội dung tóm tắt',$noidung);
			setcookie('thanhcong','Vui lòng mở hộp thư để reset password',time()+5);
			header('Location:forget_password.php');
		}
	}


	public function getResetPassword(){
		$menu = $this->getMenu();
		$arrData = array('menu'=>$menu);

		return $this->loadView('reset_password',$arrData);
	}

	public function postResetPassword($password, $email){
		$model = new UserModel;
		$user = $model->updatePassword($email, md5($password));
		if($user){
			setcookie('thanhcong','Đổi mật khẩu thành công',time()+5);
			header('Location:login.php');
		}
		else{
			setcookie('loi','Thất bại',time()+5);
			header('Location:reset_password.php');
		}
	}

}




?>