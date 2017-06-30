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

	public function getTinMoinhat(){
		$sql = "SELECT * FROM tintuc ORDER BY id DESC LIMIT 0,1";
		$this->setQuery($sql);
		return $this->loadRow();
	}
} 

?>