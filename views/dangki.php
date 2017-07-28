<?php

$flag = true;
if(isset($_POST['dangki'])){
	$password = trim($_POST['password']);
	$re_password = trim($_POST['passwordAgain']);
	if($password == $re_password){
		$c = new UserController;
		$c->postSignup();
	}
	else{
		//$_SESSION['loi'] = "Mật khẩu không giống nhau";
		$flag = false;
		setcookie('thatbai','Mật khẩu không giống nhau',time()+5);
	}
}

?>
	<div class="banner-bottom">
		<div class="container">
			<!-- news-and-events -->
			<div class="row carousel-holder">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
				  	<h2 style="margin-bottom: 20px">Sign up</h2>
				  	<?php
				  	if($flag==false):
				  	?>

					  	<div class="alert alert-danger">
					  		Mật khẩu không giống nhau
					  	</div>
				  	<?php
				  	endif
				  	?>
				  	<div class="panel-body">

				  	

				    	<form method="POST">
				    		<div>
				    			<label>Full name</label>
							  	<input type="text" class="form-control" placeholder="Username" name="name" aria-describedby="basic-addon1" value="<?=@$_POST['name']?>">
							</div>
							<br>
							<div>
				    			<label>Email</label>
							  	<input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1" value="<?=@$_POST['email']?>">
							</div>
							<br>	
							<div>
				    			<label>Enter Password</label>
							  	<input type="password" class="form-control" name="password" aria-describedby="basic-addon1">
							</div>
							<br>
							<div>
				    			<label>Re enter password</label>
							  	<input type="password" class="form-control" name="passwordAgain" aria-describedby="basic-addon1">
							</div>
							<br>
							<button type="submit" class="btn btn-success" name="dangki">Submit
							</button>

				    	</form>
				  	</div>
				</div>
            </div>
            <div class="col-md-2">
            </div>
            <div class="clearfix"></div>
        </div>
			<!-- //news-and-events -->
		</div>
	</div>