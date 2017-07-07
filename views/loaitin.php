<?php
$tintuc = $data['tintuc'];
$loaitin = $data['loaitin'];
$link = $data['link'];
$tinxemnhieu = $data['tinxemnhieu'];


/*

detail.php?
aliasloaitin=<?=$loaitin->aliasLoaitin?>
&id=<?=$tin->id;?>
&alias=<?=$tin->alias?>

*/
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
									<h4><a href="detail.php?aliasloaitin=<?=$loaitin->aliasLoaitin?>&id=<?=$tin->id;?>&alias=<?=$tin->alias?>"><?=$tin->title?></a></h4>
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
						<h3>Tin xem nhiều</h3>
						<div class="banner-bottom-video-grid-left">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<?php
								foreach($tinxemnhieu as $key =>$tin):
								?>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading<?=$key?>">
									  <h4 class="panel-title">
										<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$key?>" aria-expanded="false" aria-controls="collapse<?=$key?>">
										  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i><?=$tin->title?>
										</a>
									  </h4>
									</div>
									<div id="collapse<?=$key?>" class="panel-collapse collapse <?=$key==0 ? 'in':''?>" role="tabpanel" aria-labelledby="heading<?=$key?>" style="height: auto;">
									   <div class="panel-body">
										<?=$tin->summary?>
									  </div>
									</div>
								</div>
								<?php 
								endforeach
								?>
							</div>
						</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!-- //news-and-events -->
	</div>
</div>