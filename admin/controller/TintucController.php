<?php
require_once('AdminController.php');

class TintucController extends AdminController{

	public function getListTintuc(){
		return $this->loadView('list_tintuc');
	}
}


?>