<?php


require ('dbconnect.php');
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
}

?>