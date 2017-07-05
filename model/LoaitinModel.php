<?php

require_once('dbconnect.php');

class LoaitinModel extends database{

	public function getTinTheoIdLoai($id,$vitri=-1,$soluong=1){
		$sql = "SELECT * 
				FROM tintuc 
				WHERE id_loaitin = $id";
		if($vitri>=0 && $soluong>1){
			$sql .= " LIMIT $vitri,$soluong";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function getLoaitinTheoID($id){
		$sql = "SELECT loaitin.name as tenLoaitin, theloai.name as tenTheLoai
				FROM loaitin 
				INNER JOIN theloai 
					ON loaitin.id_theloai = theloai.id
				WHERE loaitin.id=$id";
		$this->setQuery($sql);
		return $this->loadRow();
	}
}


?>