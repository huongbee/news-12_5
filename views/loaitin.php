<?php
$tintuc = $data['tintuc'];
$loaitin = $data['loaitin'];
$link = $data['link'];
?>
<div class="banner-bottom">
	<div class="container">
		<!-- news-and-events -->
			<div class="news">
				<div class="news-grids">
					<div class="col-md-8 news-grid-left">
						<h3><?=$loaitin->tenTheLoai.' / '.$loaitin->tenLoaitin?></h3>
						<ul>
							<?php
							foreach($tintuc as $tin){
							?>
							<li>
								<div class="news-grid-left1">
									<img src="public/images/tintuc/<?=$tin->image?>" alt=" " class="img-responsive" />
								</div>
								<div class="news-grid-right1">
									<h4><a href="single.html"><?=$tin->title?></a></h4>
									<h5><i><?=date('d-m-Y H:i:s',strtotime($tin->created_at))?></i></h5>
									<p><?=$tin->summary?></p>
								</div>
								<div class="clearfix"> </div>
							</li>
							<?php
							}
							?>
						</ul>
						<div><?=$link?></div>
					</div>
					
					<div class="col-md-4 upcoming-events-right">
						<h3>upcoming events</h3>
						<div class="banner-bottom-video-grid-left">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								  <div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingOne">
									  <h4 class="panel-title">
										<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>assumenda est cliche reprehenderit
										</a>
									  </h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="height: 0px;">
									  <div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
									  </div>
									</div>
								  </div>
								  <div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwo">
									  <h4 class="panel-title">
										<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Itaque earum rerum
										</a>
									  </h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" style="height: 0px;">
									   <div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
									  </div>
									</div>
								  </div>
								  <div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingThree">
									  <h4 class="panel-title">
										<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>autem accusamus terry richa quibusdam
										</a>
									  </h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree" style="height: auto;">
									   <div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
									  </div>
									</div>
								  </div>
								  <div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingFour">
									  <h4 class="panel-title">
										<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
										  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>excepturi sint cliche reprehenderit
										</a>
									  </h4>
									</div>
									<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" style="height: 0px;">
									   <div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
									  </div>
									</div>
								  </div>
								   <div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingFive">
									  <h4 class="panel-title">
										<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
										  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>voluptatum deleniti enim eiusmod high
										</a>
									  </h4>
									</div>
									<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive" style="height: 0px;">
									   <div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
									  </div>
									</div>
								  </div>
								   <div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingSix">
									  <h4 class="panel-title">
										<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
										  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>autem enim eiusmod high quibusdam
										</a>
									  </h4>
									</div>
									<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix" style="height: 0px;">
									   <div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
									  </div>
									</div>
								  </div>
								  <div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingSeven">
									  <h4 class="panel-title">
										<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
										  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>excepturi accusamus terry richardson
										</a>
									  </h4>
									</div>
									<div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
									   <div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
									  </div>
									</div>
								  </div>
								  <div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingEight">
									  <h4 class="panel-title">
										<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
										  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>excepturi cupidatat skateboard sint
										</a>
									  </h4>
									</div>
									<div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
									   <div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
									  </div>
									</div>
								  </div>
								  <div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingNine">
									  <h4 class="panel-title">
										<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
										  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>excepturi cupidatat skateboard sint
										</a>
									  </h4>
									</div>
									<div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
									   <div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
									  </div>
									</div>
								  </div>
								  <div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTen">
									  <h4 class="panel-title">
										<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
										  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>excepturi cupidatat skateboard sint
										</a>
									  </h4>
									</div>
									<div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
									   <div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
									  </div>
									</div>
								  </div>
								</div>
						</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!-- //news-and-events -->
	</div>
</div>