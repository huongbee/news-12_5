<?php

if(isset($_POST['update'])){
	$password = $_POST['password'];
	$re_password = $_POST['re_password'];
	$email = $_POST['email'];
	if($email==''){
		$loi[] = "Email không được rỗng";
	}
	elseif($password ==''){
		$loi[] = "Mật khẩu không được rỗng";
	}
	elseif($password != $re_password){
		$loi[] = "Mật khẩu không giống nhau";
	}
	elseif(strlen($password)<4){
		$loi[] = "Mật khẩu ít nhất 4 kí tự";
	}
	else{
		$c = new UserController;

		$c->postResetPassword($password, $email);
	}
}

?>
<div class="banner-bottom">
	<div class="container">
		<!-- news-and-events -->
	<div class="row carousel-holder">
		<div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="panel panel-default">
			  	<h2 style="margin-bottom: 20px">Reset Password</h2>
			  	<?php
			  	if(isset($loi )):
			  	?>
				  	<div class="alert alert-danger">
				  		<?php 
				  		foreach($loi as $err){
				  			echo "<li>$err</li>";
				  		}
				  		?>
				  	</div>
			  	<?php
			  	endif
			  	?>
			  	<!-- lỗi ko cập nhật thành công -->
			  	<?php
			  	if(isset($_COOKIE['loi'] )):
			  	?>
				  	<div class="alert alert-danger">
				  		<?=$_COOKIE['loi']?>
				  	</div>
			  	<?php
			  	endif
			  	?>
			  	<div class="panel-body">
			    	<form method="post">
						<div>
			    			<label>Email</label>
						  	<input type="email" class="form-control" value="<?=@$_GET['email']?>" name="email" readonly >
						</div>
						<br>	
						<div>
			    			<label>Password</label>
						  	<input type="password" class="form-control" name="password"  maxlength="10" minlength="4" required>
						</div>
						<div>
			    			<label>RePassword</label>
						  	<input type="password" class="form-control" name="re_password"  maxlength="10" minlength="4" required>
						</div>
						<br>
						<button type="submit" class="btn btn-success" name="update">Cập nhật
						</button>
			    	</form>
			  	</div>
			</div>
        </div>
        <div class="col-md-4"></div>
    </div>
    <div class="clearfix" style="margin-bottom: 100px"></div>
		<!-- //news-and-events -->
	</div>
</div>