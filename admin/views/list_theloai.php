
<div class="panel panel-default">
  <div class="panel-heading"><b>Admin</b>
  </div>
  <div class="panel-body">
  	<?php
  	if(isset($_COOKIE['thanhcong'])){
  	?>
  		<div class="alert alert-success"><?=$_COOKIE['thanhcong']?></div>

  	<?php } ?>


  	<?php
  	if(isset($_COOKIE['loi'])){
  	?>
  		<div class="alert alert-danger"><?=$_COOKIE['loi']?></div>

  	<?php } ?>
  	<?php
  	if(isset($_COOKIE['notallow'])){
  	?>
  		<div class="alert alert-danger"><?=$_COOKIE['notallow']?></div>

  	<?php } ?>
      <table class="table table-hover">
	    <thead>
	      <tr>
	        <th>STT</th>
	        <th>Tên thể loại</th>
	        <th>Hình</th>
	        <th>Loại tin</th>
	        <th>Sửa | Xóa</th>
	      </tr>
	    </thead>
	    <tbody>
	    <?php
	    $stt = 1;
	    foreach($data as $theloai):
	    	
	    ?>
	      <tr class="a-<?=$theloai->id?>">
	        <td><?=$stt?></td>
	        <td><?=$theloai->name?></td>

	        <td><img src="../public/images/tintuc/<?=$theloai->image?>" style="width: 100px"></td>
	        <td><a href="danhsachloaitin.php?id=<?=$theloai->id?>">Xem danh sách loại tin</a></td>
	        <td>
	        <?php
	        if(isset($_SESSION['role']) && $_SESSION['role']==3){
	        	echo "bạn không co quyền thực hiện chức năng này";
	        }
	        else{
        	?>
	        <a href="edit_theloai.php?id=<?=$theloai->id?>"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a> |
	        <a dataId="<?=$theloai->id?>" id="delete-<?=$theloai->id?>"  data-toggle="modal" data-target="#myModal" ><i class="fa fa-trash-o fa-2x" aria-hidden="true" ></i></a>
	        <?php
	        }
	        ?>
	        </td>

	      </tr>
	    <?php
	    $stt++;
	    endforeach 
	    ?>
	    </tbody>
	  </table>
  </div>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <p>Bạn có chắc chắn muốn xóa không?</p>
        <p id="result" style="color: red; text-transform: uppercase;"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden='true'>Close</button>
        <a><button class='btn btn-success' id="accept">Ok</button></a>
      </div>
    </div>

  </div>
</div>

<script src="public/js/jquery.js"></script>
<script>
//delete_theloai.php?id=<?=$theloai->id?>


$(document).ready(function(){
	$('a[id^="delete-"]').click(function(){
		$('#result').html('');
		var id_theloai = $(this).attr('dataId')

		$('#accept').click(function(){

			if(id_theloai!=''){
				
				console.log(id_theloai)
				$.ajax({
					url:"delete_theloai.php",
					type:'GET',
					data: {id:id_theloai}, //biến truyền đi:giá trị của biến
					success:function(data){
						//console.log();
						if($.trim(data)=='false'){
							$('#result').html('ko thể xóa');
						}
						else if($.trim(data)=='true'){
							window.location.reload(true);
						}
						
					}
				})
			}
			
			id_theloai = ''
		})
		
	})

		
})


</script>