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
		return $this->execute();
	}


	function getTheLoaiById($id){
		$sql = "SELECT * FROM theloai WHERE id=$id";
		$this->setQuery($sql);
		return $this->loadRow();
	}
}




?>