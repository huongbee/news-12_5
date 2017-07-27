<?php
include('function/function.php');
$tintuc = $data['tintuc'];
$comment = $data['comment'];


?>
<!-- single -->
	<div class="single">
		<div class="container">
			<div class="single-grid">
				<div class="col-md-8 blog-left">
					<div class="blog-left-grid">
						<div class="blog-leftl">
							<h4><?=parseMonth(date('m',strtotime($tintuc->created_at)));?><span><?=date('d',strtotime($tintuc->created_at));?></span></h4>
							
						</div>
						<div class="blog-leftr">
							<img src="public/images/tintuc/<?=$tintuc->image?>" alt=" " class="img-responsive" />
							<p><?=$tintuc->content?></p>
							<ul>
								
								<li><a href="#"><i class="glyphicon glyphicon-comment" aria-hidden="true"></i><?=count($comment)?> bình luận</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
<!-- 						<div class="admin-text">
								<h5>Written By Admin Name</h5>
								<div class="admin-text-left">
									<a href="#"><img src="public/images/icon1.png" alt=""/></a>
								</div>
								<div class="admin-text-right">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<span>View all posts by:<a href="#"> Admin </a></span>
								</div>
								<div class="clearfix"> </div>
						</div> -->
						<div class="response">
							<h4><button id="btnCMT">Bình luận</button></h4>
							<?php

							foreach($comment as $cmt):
							?>
							<div class="media response-info">
								<div class="media-left response-text-left">
									<a href="#">
										<img class="media-object" src="<?=$cmt->avatar?>" alt="" style="width: 50px"/>
									</a>
									<h5><a href="#"><?=$cmt->name?></a></h5>
								</div>
								<div class="media-body response-text-right">
									<p><?=$cmt->content?></p>
									<ul>
										<li><?=date('d-m-Y h:i:s', strtotime($cmt->created_at))?></li>
										<li><span class="reply" idCmt="<?=$cmt->id?>">Reply</span></li>
									</ul>
									<?php

									$re_cmt = $cmt->re_comment;
									if(strlen($re_cmt)>0){
										$arr_re_cmt = explode("::", $re_cmt);
										//rint_r($arr_re_cmt) ;
										foreach($arr_re_cmt as $reply){
										?>	
										<div class="media response-info">
											<div class="media-left response-text-left">
												<a href="#">
													<img class="media-object" src="http://online.khoapham.vn/teacher/img/profile/khoa.jpg" alt="" style="width: 50px"/>
												</a>
												<h5><a href="#">Admin</a></h5>
											</div>
											<div class="media-body response-text-right">
												<p><?=$reply?></p>
												<ul>
													<li>October 25, 2016</li>
													
												</ul>		
											</div>
											<div class="clearfix"> </div>
										</div>	
										<?php
										}
									}
									?>
									<div id="reply_<?=$cmt->id?>"></div>
								</div>
								<div class="clearfix"> </div>

								<div id="form_append_<?=$cmt->id?>"></div>
							</div>
							<?php
							endforeach
							?>

							<div id="append_data"></div>
						</div>
						<div class="cmt_form">	
							<div class="coment-form">
								<h4>Bình luận</h4>
								<form>
									
									<textarea id="content" type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required=""></textarea >
									<input type="button" value="Gửi bình luận" id="sendCMT" >
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 blog-right">
					<h3>Categories</h3>
					<ul>
						<li><a href="#">Aliquam erat volutpat</a></li>
						<li><a href="#">Integer rutrum ante eu lacus</a></li>
						<li><a href="#">Cum sociis natoque penatibus</a></li>
						<li><a href="#">Mauris fermentum dictum magna</a></li>
						<li><a href="#">Sed laoreet aliquam leo</a></li>
						<li><a href="#">Cum sociis natoque penatibus</a></li>
					</ul>
					
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //single -->
<script>
	$(document).ready(function(){
		var sessionID = "<?php echo @$_SESSION['userID']?>";
		var idTin = "<?php echo @$_GET['id']?>"

		$('.cmt_form').hide();

		$('#btnCMT').click(function(){
			$('div[id^="form_append_"]').hide();
			$('.cmt_form').show();
		})

		//console.log(session);
		$('#sendCMT').click(function(){

			if(sessionID == ''){
				alert('Vui lòng đăng nhập trước khi thêm bình luận')
			}
			else{
				var comment = $('#content').val();
				$.ajax({
					url:"add_comment.php",
					data:{
						binhluan:comment,
						id_user:sessionID,
						id_tintuc:idTin
					}, //tên biến truyền đi:giá trị
					type:"POST",
					success:function(dataReturn){
						$('#append_data').append(dataReturn)
					},
					error:function(){
						console.log('Lỗi')
					}
				})
			}
			
		})


		$('.reply').click(function(){
			var idCmt = $(this).attr('idCmt')
			var form = $('.cmt_form').html();
			$('.cmt_form').hide();

			
			$('div[id^="form_append_"]').show();


			$('#form_append_'+idCmt).html(form)


			$('#sendCMT').click(function(){

				if(sessionID == ''){
					alert('Vui lòng đăng nhập trước khi thêm bình luận')
				}
				else{
					var comment = $('#content').val();
					$.ajax({
						url:"add_re_comment.php",
						data:{
							binhluan:comment,
							id_user:sessionID,
							idCmt:idCmt
						}, //tên biến truyền đi:giá trị
						type:"POST",
						success:function(dataReturn){
							$('#reply_'+idCmt).append(dataReturn)
							///alert(dataReturn)
						},
						error:function(){
							console.log('Lỗi recmt')
						}
					})
				}
				
		})



		})
	})
</script>