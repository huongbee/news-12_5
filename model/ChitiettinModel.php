<?php
include_once('dbconnect.php');


class ChitiettinModel extends database{

	public function getChitiettin($id){
		$sql = "SELECT * FROM tintuc WHERE id=$id";
		$this->setQuery($sql);
		return $this->loadRow();
	}



	public function getComment($id_tin){
		$sql = "SELECT comment.*, users.name, users.avatar, 
						GROUP_CONCAT(rc.content  SEPARATOR '::') as re_comment
				FROM comment 
				INNER JOIN users 
					ON comment.id_user=users.id 
                LEFT JOIN re_comment rc 
                	ON rc.id_comment = comment.id
				WHERE comment.id_tintuc = $id_tin                
                GROUP BY comment.id
                ORDER BY comment.id ASC";
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



	public function getReCommentByID($id){
		$sql = "SELECT re_comment.content as noidung, avatar, name, re_comment.created_at as ngaytao
				FROM re_comment 
				INNER JOIN comment
					ON re_comment.id_comment = comment.id
				INNER JOIN users
					ON users.id = comment.id_user
				WHERE re_comment.id = $id";
		$this->setQuery($sql);
		return $this->loadRow();
	}



}


?>