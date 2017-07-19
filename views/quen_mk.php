<?php
if(isset($_POST['reset'])){
	$c = new UserController;
	$c->postForgetPassword();
}

?>
<div class="banner-bottom">
	<div class="container">
		<!-- news-and-events -->
	<div class="row carousel-holder">
		<div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="panel panel-default">
			  	<h2 style="margin-bottom: 20px">Quên mật khẩu</h2>
			  		<?php
				  	if(isset($_COOKIE['loi'])):
				  	?>

					  	<div class="alert alert-danger">
					  		<?=$_COOKIE['loi']?>
					  	</div>
				  	<?php
				  	endif
				  	?>
				  	<?php
				  	if(isset($_COOKIE['thanhcong'])):
				  	?>

					  	<div class="alert alert-danger">
					  		<?=$_COOKIE['thanhcong']?>
					  	</div>
				  	<?php
				  	endif
				  	?>
			  	<div class="panel-body">
			    	<form method="post">
						<div>
			    			<label>Nhập email tạo tài khoản</label>
						  	<input type="email" class="form-control" placeholder="Email" name="email">
						</div>
						<br>
						<button type="submit" class="btn btn-success" name="reset">Reset
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