<?php
include_once('dbconnect.php');


class ChitiettinModel extends database{

	public function getChitiettin($id){
		$sql = "SELECT * FROM tintuc WHERE id=$id";
		$this->setQuery($sql);
		return $this->loadRow();
	}

}


?>