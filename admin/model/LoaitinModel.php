<?php

require_once 'dbconnect.php';

class LoaitinModel extends database{


	public function getLoaitinByIdTheLoai($id_theloai){
		$sql = "SELECT * FROM loaitin WHERE id_theloai=$id_theloai";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}


	function editLoaitin($name, $alias, $id){
		$sql = "UPDATE loaitin SET name='$name', alias='$alias' WHERE id=$id";
		$this->setQuery($sql);
		return $this->customExecute();
	}


	function getLoaitinById($id){
		$sql = "SELECT * FROM loaitin WHERE id=$id";
		$this->setQuery($sql);
		return $this->loadRow();
	}

}


?>