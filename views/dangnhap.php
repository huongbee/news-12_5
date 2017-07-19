<?php
if(isset($_POST['login'])){
	$c = new UserController;
	$c->postLogin();
}

?>
<div class="banner-bottom">
		<div class="container">
			<!-- news-and-events -->
		<div class="row carousel-holder">
    		<div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="panel panel-default">
				  	<h2 style="margin-bottom: 20px">Login</h2>
				  	<?php
				  	if(isset($_COOKIE['loi'])):
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
							  	<input type="email" class="form-control" placeholder="Email" name="email">
							</div>
							<br>	
							<div>
				    			<label>Password</label>
							  	<input type="password" class="form-control" name="password">
							</div>
							<br>
							<button type="submit" class="btn btn-success" name="login">Đăng nhập
							</button>
							<a href="forget_password.php"><button type="button" class="btn btn-default" name="login">Quên mật khẩu</button></a>
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