<?php

require_once('dbconnect.php');

class HomeModel extends database{


	public function getSlide(){
		$sql = "SELECT * FROM slide";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
} 

?>