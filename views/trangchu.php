<?php


$slide = $data['slide'];
$tin_noibat = $data['tin_noibat'];
$tin_moinhat_1tin = $data['tin_moinhat_1tin'];
$tin_moinhat = $data['tin_moinhat'];
$theloai_loaitin = $data['theloai_loaitin'];
//print_r($theloai_loaitin);
?>
<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <?php for($i=0;$i<count($slide); $i++){ ?>
	    	<li data-target="#myCarousel" data-slide-to="<?=$i?>" class="<?php if($i==0){ echo 'active';}?>"></li>
	    <?php
	    }
	    ?>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <?php

	    for($i=0;$i<count($slide); $i++){

	    
	    ?>
	    <div class="item <?php if($i==0){ echo 'active';}?>">
	      <img src="public/images/slide/<?=$slide[$i]->image;?>" alt="Chania" style="height: 500px">
	     
	      <div class="carousel-caption">
	        <h3><?=$slide[$i]->name;?></h3>
	        
	      </div>
	    </div>
	    <?php
	    }
	    ?>
	  </div>

	  <!-- Left and right controls -->
	  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<!-- banner -->
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="move-text">
				<div class="breaking_news">
					<h2>Tin nổi bật</h2>
				</div>
				<div class="marquee">
					<?php
					foreach($tin_noibat as $noibat){
					?>
						<div class="marquee1"><a class="breaking" href="detail.php"><?=$noibat->title?></a></div>
					<?php
					}
					?>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				<script type="text/javascript" src="public/js/jquery.marquee.js"></script>
				<script>
				  $('.marquee').marquee({ pauseOnHover: true });
				  //@ sourceURL=pen.js
				</script>
			</div>
			<!-- video-grids -->
				<div class="video-grids">
					<div class="col-md-8 video-grids-left">
						<div class="video-grids-left1">
							<img src="<?=$tin_moinhat_1tin->image;?>" alt=" " class="img-responsive" />
							
							<div class="video-grid-pos">
								<h3><?=$tin_moinhat_1tin->title;?></h3>
								<ul>
									<li><?=date('H:i:s d-m-Y',strtotime($tin_moinhat_1tin->created_at));?></li>
									
								</ul>
							</div>
								
						</div>
						<div class="video-grids-left2">
							<div class="course_demo1">
								<ul id="flexiselDemo1">	
								<?php
								foreach($tin_moinhat as $tin){

								?>
									<li>
										<div class="item">
											<img src="public/images/tintuc/<?=$tin->image?>" alt=" " class="img-responsive" style="height: 150px" />
											
											<div class="floods-text">
												<h3 style="font-size: 16px; margin-bottom: 15px"><?=$tin->title?></h3>
												<p><?=date('H:i:s d-m-Y',strtotime($tin->created_at))?></p>
											</div>
										</div>
									</li>
								<?php
								}
								?>
								</ul>
							</div>
							<!-- requried-jsfiles-for owl -->
								<script type="text/javascript">
								 $(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							 });
							  </script>
							 <script type="text/javascript" src="public/js/jquery.flexisel.js"></script>
						</div>
					</div>

					<div class="col-md-4 video-grids-right">
						<div class="sap_tabs">	
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<ul class="resp-tabs-list resp-tab-item grid1 resp-tab-active">
									<span>most shared</span>
									<div class="clear"></div>
								</ul>				  	 
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
											<div class="tab_list">
												<img src="public/images/10.jpg" alt=" " class="img-responsive" />
											</div>
											<div class="tab_list1">
												<ul>
													<li><a href="#">Blogger</a> <label>|</label></li>
													<li>30.03.2016</li>
												</ul>
												<p><a href="#">Nam libero tempore, cum soluta nobis.</a></p>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="facts">
											<div class="tab_list">
												<img src="public/images/11.jpg" alt=" " class="img-responsive" />
											</div>
											<div class="tab_list1">
												<ul>
													<li><a href="#" class="green">international</a> <label>|</label></li>
													<li>30.03.2016</li>
												</ul>
												<p><a href="#">Nam libero tempore, cum soluta nobis.</a></p>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="facts">
											<div class="tab_list">
												<img src="public/images/12.jpg" alt=" " class="img-responsive" />
											</div>
											<div class="tab_list1">
												<ul>
													<li><a href="#" class="orange">general</a> <label>|</label></li>
													<li>30.03.2016</li>
												</ul>
												<p><a href="#">Nam libero tempore, cum soluta nobis.</a></p>
											</div>
										  <div class="clearfix"> </div>
										</div>
										<div class="facts">
											<div class="tab_list">
												<img src="public/images/10.jpg" alt=" " class="img-responsive" />
											</div>
											<div class="tab_list1">
												<ul>
													<li><a href="#" class="orange1">business</a> <label>|</label></li>
													<li>30.03.2016</li>
												</ul>
												<p><a href="#">Nam libero tempore, cum soluta nobis.</a></p>
											</div>
										  <div class="clearfix"> </div>
										</div>
										<div class="facts">
											<div class="tab_list">
												<img src="public/images/12.jpg" alt=" " class="img-responsive" />
											</div>
											<div class="tab_list1">
												<ul>
													<li><a href="#" class="orange2">world</a> <label>|</label></li>
													<li>30.03.2016</li>
												</ul>
												<p><a href="#">Nam libero tempore, cum soluta nobis.</a></p>
											</div>
										  <div class="clearfix"> </div>
										</div>
									</div>
								</div>
								<script src="public/js/easyResponsiveTabs.js" type="text/javascript"></script>
								<script type="text/javascript">
									$(document).ready(function () {
										$('#horizontalTab').easyResponsiveTabs({
											type: 'default', //Types: default, vertical, accordion           
											width: 'auto', //auto or any width like 600px
											fit: true   // 100% fit in a container
										});
									});
								</script>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			<!-- //video-grids -->
			<!-- video-bottom-grids -->
				<div class="video-bottom-grids">
					<div class="video-bottom-grids1">
						<?php 
						foreach($theloai_loaitin as $tl_lt){
							$loaitin = $tl_lt->loaitin;
							$arrLoaitin = explode(',', $loaitin);
							
						?>
						<div class="col-md-3 video-bottom-grid">
							<div class="video-bottom-grid1">
								<div class="video-bottom-grid1-before">
									<img src="public/images/tintuc/<?=$tl_lt->hinhTheLoai?>" style="height: 200px" alt=" " class="img-responsive" />
									<div class="video-bottom-grid1-pos">
										<p><?=$tl_lt->TenTheLoai?></p>
									</div>
								</div>
								<ul>
								<?php
								foreach($arrLoaitin as $loaitin){
									$thongtin = explode(':', $loaitin);
									list($id,$title,$alias) = explode(':', $loaitin)
								?>
									<li>
										<a href="#"><?=$title;//$thongtin[1]?></a>
									</li>
								<?php
								}
								?>
								</ul>
								<div class="read-more">
									<a href="single.html">Read more in business</a>
								</div>
							</div>
						</div>
						<?php
						}
						?>
					</div>
				</div>
			<!-- //video-bottom-grids -->
			
		</div>
	</div>
	<!-- //banner-bottom -->