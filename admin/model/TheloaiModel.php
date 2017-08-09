<?php

require_once('dbconnect.php');
class TheloaiModel extends database{

	function getTheloai(){
		$sql = "SELECT * FROM theloai";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function editTheloai($name, $alias, $id){
		$sql = "UPDATE theloai SET name='$name', alias='$alias' WHERE id=$id";
		$this->setQuery($sql);
		return $this->customExecute();
	}

	function editImageTheloai($id, $filename){
		$sql = "UPDATE theloai SET image = '$filename' WHERE id=$id";
		$this->setQuery($sql);
		return $this->customExecute();
	}


	function getTheLoaiById($id){
		$sql = "SELECT * FROM theloai WHERE id=$id";
		$this->setQuery($sql);
		return $this->loadRow();
	}

	public function deleteTheLoai($id){
		$sql = "DELETE FROM theloai WHERE id=$id";
		$this->setQuery($sql);
		return $this->customExecute();
	}

	public function getLoaitinByIdTheloai($id_theloai){
		$sql = "SELECT * FROM loaitin WHERE id_theloai=$id_theloai";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}


	public function insertTheloai($name,$alias,$image){
		$sql = "INSERT INTO theloai(name,alias,image) VALUES ('$name','$alias','$image')";
		$this->setQuery($sql);
		$result = $this->customExecute();
		if($result){
			return $this->getLastId();//8
		}
		else{
			return false;//0
		}
	}
}




?>