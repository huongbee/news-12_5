<?php
include_once('dbconnect.php');


class ChitiettinModel extends database{

	public function getChitiettin($id){
		$sql = "SELECT * FROM tintuc WHERE id=$id";
		$this->setQuery($sql);
		return $this->loadRow();
	}



	public function getComment($id_tin){
		$sql = "SELECT comment.*, users.name, users.avatar 
				FROM comment 
				INNER JOIN users 
				ON comment.id_user=users.id 
				WHERE id_tintuc = $id_tin";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}


	public function addComment($id_user,$id_tintuc,$content){
		$sql = "INSERT INTO comment (id_user,id_tintuc,content) VALUES (?,?,?)";
		$this->setQuery($sql);
		$cmt = $this->execute(array($id_user,$id_tintuc,$content));
		if($cmt){
			return $this->getLastId();
		}
		else{
			return false;
		}
	}

	public function getCommentByID($id){
		$sql = "SELECT content, avatar, name, comment.created_at as ngaytao
				FROM users 
				INNER JOIN comment
					ON comment.id_user = users.id
				WHERE comment.id = $id";
		$this->setQuery($sql);
		return $this->loadRow();
	}


	public function addReComment($id_user,$idCmt,$content){
		$sql = "INSERT INTO re_comment (id_user,id_comment,content) VALUES (?,?,?)";
		$this->setQuery($sql);
		$cmt = $this->execute(array($id_user,$idCmt,$content));
		if($cmt){
			return $this->getLastId();
		}
		else{
			return false;
		}
	}
}


?>