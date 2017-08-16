<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
ob_start();
session_start();
$_SESSION['lang'] = 'vi';
$_SESSION['lang'] = isset($_GET['lang'])?$_GET['lang']:'vi';

require_once('include/functions.php');


$menu = $data['menu']
?>
<!DOCTYPE HTML>
<html>
<head>
<title><?=setLang('Trang chủ', 'Home')?></title>
<base href="http://localhost/news12_5/">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Trendy Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<!-- Custom Theme files -->
<link href="public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="public/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
</head>

<body>
	<!-- menu -->
	<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
			<div class="logo">
				<a class="navbar-brand" href="index.html"><span>T</span></a>
				<input type="text" id="txtSearch" style="margin-top: 25px; margin-left: 20px">
				<input type="button" value="Search" id="btnSearch" style="margin-top: 25px">
			</div>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav cl-effect-18" id="cl-effect-18">
				<li class="act"><a href="./" class="effect1 active">Home</a></li>
				<?php
				foreach($menu as $mn){
					$loaitin = $mn->loaitin;
					$arrLoaitin = explode(',', $loaitin);
				?>
				<li role="presentation" class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
					  <?=setLang($mn->TenTheLoai_vi,$mn->TenTheLoai_en)?> <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
					  <?php
						foreach($arrLoaitin as $loaitin){
							
							list($id,$title,$alias) = explode(':', $loaitin)
						?>
					  <li><a href="type.php?id=<?=$id?>&alias=<?=$alias?>"><?=$title?></a></li>
					 <?php
					 }
					 ?>
					</ul>
				</li>
				<?php
				}
				?>

				<?php
				if(isset($_SESSION['username'])){
				?>
				<li role="presentation" class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Chào bạn, <?=$_SESSION['username']?><span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="logout.php">Đăng xuất</a></li>
					</ul>
				</li>

				<?php
				}
				else{
				?>

					<li><a href="signup.php"><?=setLang('Đăng kí', 'Sign up')?></a></li>
					<li><a href="login.php"><?=setLang('Đăng nhập', 'Sign in')?></a></li>
				<?php
				}
				?>
			</ul>
		</div>
	</nav>
	<!-- //menu -->

	<?php
	if(isset($_COOKIE['thanhcong'])):
	?>
	
	<div class="alert alert-success fade in alert-dismissable" style="z-index: 1000; position: fixed; right: 10px; bottom: 10px">

		<?=$_COOKIE['thanhcong']?>
		<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
	</div>
	<?php
	endif

	?>

	<div id="data_search">

		<?php

		include("$view.php");

		?>
	</div>


	<!-- footer -->
	
	<div class="footer">
		<div class="container">
			<div class="footer-bottom">
				<div class="footer-bottom-left-whtree-agileinfo">
					<p>&copy 2017 Trendy Blog. All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts.</a></p>
				</div>
				<div class="footer-bottom-right-whtree-agileinfo">
					<ul>
						<li><a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
						<li><a href="#" class="icon-button google"><i class="icon-google"></i><span></span></a></li>
						<li><a href="#" class="icon-button v"><i class="icon-v"></i><span></span></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="public/js/bootstrap.js"></script>
<!-- //for bootstrap working -->

<script>
	$(document).ready(function(){
		$('#btnSearch').click(function(){
			var keyword = $('#txtSearch').val();
			$.ajax({
				url:"search.php",
				type:'GET',
				data:{tukhoa:keyword} ,//biên truyền đi: giá trị
				success:function(data){
					$('#data_search').html(data)
				},
				error:function(){
					console.log('error')
				}
			})
		})
	})
</script>

</body>
</html>