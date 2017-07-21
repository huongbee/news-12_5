<?php


include_once ('dbconnect.php');
class UserModel extends database{


	public function DangKi($name, $email, $password){
		$sql = "INSERT INTO users (name,email, password) VALUES (?,?,?)";
		$this->setQuery($sql);
		$result = $this->execute(array($name, $email, $password));
		if($result){
			return $this->getLastId();
		}
		else{
			return false;
		}
	}



	public function getUser($email, $password){
		$sql = "SELECT * FROM users 
				WHERE email = '$email' 
				AND password = '$password'";
		$this->setQuery($sql);
		return $this->loadRow();
	}

	public function checkEmailExits($email){
		$sql = "SELECT * FROM users WHERE email='$email'";
		$this->setQuery($sql);
		return $this->loadRow();
	}


	public function updatePassword($email, $password){
		$sql = "UPDATE users SET password='$password' WHERE email = '$email'";
		$this->setQuery($sql);
		return $this->execute();
	}
}

?>