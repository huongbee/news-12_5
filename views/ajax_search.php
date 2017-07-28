<div class="banner-bottom">
	<div class="container">
		<!-- news-and-events -->
		<div class="row carousel-holder">

			<div class="col-md-12 news-grid-left">
				<h3>Tìm thấy ? tin tức</h3>
				<ul>
					<?php
					foreach($data as $tin){
					?>
					<li>
						<div class="news-grid-left1">
							<img src="public/images/tintuc/<?=$tin->image?>" alt=" " class="img-responsive" />
						</div>
						<div class="news-grid-right1">
						<!-- detail.php?aliasloaitin=<?=$loaitin->aliasLoaitin?>&id=<?=$tin->id;?>&alias=<?=$tin->alias?> -->
							<h4><a href=""><?=$tin->title?></a></h4>
							<h5><i><?=date('d-m-Y H:i:s',strtotime($tin->created_at))?></i></h5>
							<p><?=$tin->summary?></p>
						</div>
						<div class="clearfix"> </div>
					</li>
					<?php
					}
					?>
				</ul>
				
			</div>
		</div>
	</div>
</div>