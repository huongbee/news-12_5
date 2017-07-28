<?php

require_once('dbconnect.php');

class HomeModel extends database{


	public function getSlide(){
		$sql = "SELECT * FROM slide";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}


	public function getTinNoibat(){
		$sql = "SELECT * FROM tintuc WHERE noibat=1 LIMIT 0,5";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function getTinMoinhat_1Tin(){
		$sql = "SELECT * FROM tintuc ORDER BY id DESC LIMIT 0,1";
		$this->setQuery($sql);
		return $this->loadRow();
	}

	public function getTinMoinhat(){
		$sql = "SELECT * FROM tintuc ORDER BY id DESC LIMIT 1,10";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function getTheLoai_LoaiTin(){
		$sql = "SELECT theloai.id AS idTheLoai, theloai.name AS TenTheLoai, 
				theloai.image AS hinhTheLoai,
				GROUP_CONCAT(loaitin.id, ':',loaitin.name,':',loaitin.alias) AS loaitin FROM theloai
				INNER JOIN loaitin ON theloai.id = loaitin.id_theloai
				GROUP BY theloai.id";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}


	public function getSearch($key){
		$sql = "SELECT * FROM tintuc WHERE title LIKE '%$key%' OR summary LIKE '%$key%' ";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
} 

?>