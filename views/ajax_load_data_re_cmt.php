<div class="media response-info">
	<div class="media-left response-text-left">
		<a href="#">
			<img class="media-object" src="<?=$data->avatar?>" alt=""  style="width: 100px"/>
		</a>
		<h5><a href="#"><?=$data->name?></a></h5>
	</div>
	<div class="media-body response-text-right">
		<p><?=$data->noidung?></p>
		<ul>
			<li><?=date('d-m-Y',strtotime($data->ngaytao))?></li>
			
		</ul>		
	</div>
	<div class="clearfix"> </div>
</div>	