<?php

require_once('dbconnect.php');
class TheloaiModel extends database{

	function getTheloai(){
		$sql = "SELECT * FROM theloai";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}




?>