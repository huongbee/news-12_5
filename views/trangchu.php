
<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <?php for($i=0;$i<count($data); $i++){ ?>
	    	<li data-target="#myCarousel" data-slide-to="<?=$i?>" class="<?php if($i==0){ echo 'active';}?>"></li>
	    <?php
	    }
	    ?>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <?php

	    for($i=0;$i<count($data); $i++){

	    
	    ?>
	    <div class="item <?php if($i==0){ echo 'active';}?>">
	      <img src="public/images/banner.jpg" alt="Chania">
	      <div class="carousel-caption">
	        <h3>Chania</h3>
	        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
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
					<h2>Breaking News</h2>
				</div>
				<div class="marquee">
					<div class="marquee1"><a class="breaking" href="single.html">A 5-year-old boy who recently returned to the U.S from Ebola-stricken West Africa is under observation after experiencing a fever.</a></div>
					<div class="marquee2"><a class="breaking" href="single.html">The surprisingly successful president of the Philippines and peacemaking in the Philippines: Shaking it all up.</a></div>
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
							<img src="public/images/9.jpg" alt=" " class="img-responsive" />
							
							<div class="video-grid-pos">
								<h3><span>Bellevue</span>  Towers in Dubai Downtown UAE</h3>
								<ul>
									<li>9:32 <label>|</label></li>
									<li><i>Adom Smith</i> <label>|</label></li>
									<li><span>Blogger</span></li>
								</ul>
							</div>
								
						</div>
						<div class="video-grids-left2">
							<div class="course_demo1">
								<ul id="flexiselDemo1">	
									<li>
										<div class="item">
											<img src="public/images/10.jpg" alt=" " class="img-responsive" />
											
											<div class="floods-text">
												<h3>The fed and inequality <span>Blogger <label>|</label> <i>Adom Smith</i></span></h3>
												<p>5:56</p>
											</div>
										</div>
									</li>
									<li>
										<div class="item">
											<img src="public/images/11.jpg" alt=" " class="img-responsive" />
											
											<div class="floods-text">
												<h3>The fastest insect in the world <span>Blogger <label>|</label> <i>Adom Smith</i></span></h3>
												<p>5:56</p>
											</div>
										</div>
									</li>
									<li>
										<div class="item">
											<img src="public/images/12.jpg" alt=" " class="img-responsive" />
											
											<div class="floods-text">
												<h3>Billionaires versus Millionaires<span>Blogger <label>|</label> <i>Adom Smith</i></span></h3>
												<p>5:56</p>
											</div>
										</div>
									</li>
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
						<div class="col-md-3 video-bottom-grid">
							<div class="video-bottom-grid1">
								<div class="video-bottom-grid1-before">
									<img src="public/images/13.jpg" alt=" " class="img-responsive" />
									<div class="video-bottom-grid1-pos">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing </p>
									</div>
								</div>
								<ul>
									<li><a href="#">vel illum qui dolorem eum fugiat quo voluptas.</a></li>
									<li><a href="#">Itaque earum rerum hic tenetur a sapiente delectus.</a></li>
									<li><a href="#"> Neque porro quisquam est, qui dolor sit amet.</a></li>
									<li><a href="#">But I must explain to you how all this mistaken.</a></li>
								</ul>
								<div class="read-more">
									<a href="single.html">Read more in business</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 video-bottom-grid">
							<div class="video-bottom-grid1">
								<div class="video-bottom-grid1-before before1">
									<img src="public/images/14.jpg" alt=" " class="img-responsive" />
									<div class="video-bottom-grid1-pos">
										<p>Lorem ipsum dolor sit amet, consectetur.</p>
									</div>
								</div>
								<ul class="list">
									<li><a href="#">vel illum qui dolorem eum fugiat quo voluptas.</a></li>
									<li><a href="#">Itaque earum rerum hic tenetur a sapiente delectus.</a></li>
									<li><a href="#"> Neque porro quisquam est, qui dolor sit amet.</a></li>
									<li><a href="#">But I must explain to you how all this mistaken.</a></li>
								</ul>
								<div class="read-more res">
									<a href="single.html">Read more in world</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 video-bottom-grid">
							<div class="video-bottom-grid1">
								<div class="video-bottom-grid1-before before2">
									<img src="public/images/15.jpg" alt=" " class="img-responsive" />
									<div class="video-bottom-grid1-pos">
										<p>Lorem ipsum dolor sit amet adipiscing. </p>
									</div>
								</div>
								<ul class="list1">
									<li><a href="#">vel illum qui dolorem eum fugiat quo voluptas.</a></li>
									<li><a href="#">Itaque earum rerum hic tenetur a sapiente delectus.</a></li>
									<li><a href="#"> Neque porro quisquam est, qui dolor sit amet.</a></li>
									<li><a href="#">But I must explain to you how all this mistaken.</a></li>
								</ul>
								<div class="read-more res1">
									<a href="single.html">Read more in world</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 video-bottom-grid">
							<div class="video-bottom-grid1">
								<div class="video-bottom-grid1-before before3">
									<img src="public/images/16.jpg" alt=" " class="img-responsive" />
									<div class="video-bottom-grid1-pos">
										<p>Lorem ipsum dolor sit amet adipiscing. </p>
									</div>
								</div>
								<ul class="list2">
									<li><a href="#">vel illum qui dolorem eum fugiat quo voluptas.</a></li>
									<li><a href="#">Itaque earum rerum hic tenetur a sapiente delectus.</a></li>
									<li><a href="#"> Neque porro quisquam est, qui dolor sit amet.</a></li>
									<li><a href="#">But I must explain to you how all this mistaken.</a></li>
								</ul>
								<div class="read-more res2">
									<a href="single.html">Read more in Blogger</a>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="video-bottom-grids1">
						<div class="col-md-3 video-bottom-grid">
							<div class="video-bottom-grid1">
								<div class="video-bottom-grid1-before before4">
									<img src="public/images/10.jpg" alt=" " class="img-responsive" />
									<div class="video-bottom-grid1-pos">
										<p>Lorem ipsum dolor sit amet adipiscing. </p>
									</div>
								</div>
								<ul class="list2">
									<li><a href="#">vel illum qui dolorem eum fugiat quo voluptas.</a></li>
									<li><a href="#">Itaque earum rerum hic tenetur a sapiente delectus.</a></li>
									<li><a href="#"> Neque porro quisquam est, qui dolor sit amet.</a></li>
									<li><a href="#">But I must explain to you how all this mistaken.</a></li>
								</ul>
								<div class="read-more res3">
									<a href="single.html">Read more in general</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 video-bottom-grid">
							<div class="video-bottom-grid1">
								<div class="video-bottom-grid1-before before5">
									<img src="public/images/11.jpg" alt=" " class="img-responsive" />
									<div class="video-bottom-grid1-pos">
									<p>Lorem ipsum dolor sit amet adipiscing. </p>
									</div>
								</div>
								<ul class="list4">
									<li><a href="#">vel illum qui dolorem eum fugiat quo voluptas.</a></li>
									<li><a href="#">Itaque earum rerum hic tenetur a sapiente delectus.</a></li>
									<li><a href="#"> Neque porro quisquam est, qui dolor sit amet.</a></li>
									<li><a href="#">But I must explain to you how all this mistaken.</a></li>
								</ul>
								<div class="read-more res4">
									<a href="single.html">Read more in economics</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 video-bottom-grid">
							<div class="video-bottom-grid1">
								<div class="video-bottom-grid1-before before6">
									<img src="public/images/12.jpg" alt=" " class="img-responsive" />
									<div class="video-bottom-grid1-pos">
										<p>Lorem ipsum dolor sit amet adipiscing. </p>
									</div>
								</div>
								<ul class="list5">
									<li><a href="#">vel illum qui dolorem eum fugiat quo voluptas.</a></li>
									<li><a href="#">Itaque earum rerum hic tenetur a sapiente delectus.</a></li>
									<li><a href="#"> Neque porro quisquam est, qui dolor sit amet.</a></li>
									<li><a href="#">But I must explain to you how all this mistaken.</a></li>
								</ul>
								<div class="read-more res5">
									<a href="single.html">Read more in sports</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 video-bottom-grid">
							<div class="video-bottom-grid1">
								<div class="video-bottom-grid1-before before7">
									<img src="public/images/17.jpg" alt=" " class="img-responsive" />
									<div class="video-bottom-grid1-pos">
										<p>Lorem ipsum dolor sit amet adipiscing. </p>
									</div>
								</div>
								<ul class="list6">
									<li><a href="#">vel illum qui dolorem eum fugiat quo voluptas.</a></li>
									<li><a href="#">Itaque earum rerum hic tenetur a sapiente delectus.</a></li>
									<li><a href="#"> Neque porro quisquam est, qui dolor sit amet.</a></li>
									<li><a href="#">But I must explain to you how all this mistaken.</a></li>
								</ul>
								<div class="read-more res6">
									<a href="single.html">Read more in health</a>
								</div>
							</div>
						</div>
						<div class="clearfix" style="margin-bottom: 50px"> </div>
					</div>
				</div>
			<!-- //video-bottom-grids -->
			
		</div>
	</div>
	<!-- //banner-bottom -->