<?php

class Controller{
	
	public function loadView($view,$data=array()){
		include("views/layout.php");
	}
}

?>