<style>
	.check{
		width: 10%; float: left; padding-top: 10px; padding-left: 10px
	}
	.cancer{
		width: 10%; float: left;padding-top: 10px
	}
	.inputtext{
		width: 70%; float: left;
	}
</style>
<div class="panel panel-default">
  <div class="panel-heading"><b>Tên loại tin .................</b>
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
      <table class="table table-hover">
	    <thead>
	      <tr>
	        <th>STT</th>
	        <th>Tên Loại</th>
	        <th>Tin tức</th>
	        <th>Sửa | Xóa</th>
	      </tr>
	    </thead>
	    <tbody>
	    <?php
	    $stt = 1;
	    foreach($data as $loaitin):
	    	
	    ?>
	      <tr class="a-<?=$loaitin->id?>">
	        <td><?=$stt?></td>
	        <td id='input_append_<?=$loaitin->id?>'><?=$loaitin->name?></td>
	        

	        <td><a href="">Xem danh sách tin tức</a></td>
	        <td>
		        <a dataId="<?=$loaitin->id?>" id="edit-<?=$loaitin->id?>" class="edit-<?=$loaitin->id?>"><i class="fa fa-pencil-square-o fa-2x " aria-hidden="true"></i></a> |
		        <a  id="delete-<?=$loaitin->id?>"  class="delete-<?=$loaitin->id?>" data-toggle="modal" data-target="#myModal" ><i class="fa fa-trash-o fa-2x" aria-hidden="true" ></i></a>
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
//delete_loaitin.php?id=<?=$loaitin->id?>

function cancel(id_loaitin, name){
	$('#input_append_'+id_loaitin).html(name)
	return 1
}

$(document).ready(function(){
	$('a[id^="delete-"]').click(function(){
		$('#result').html('');
		var id_loaitin = $(this).attr('dataId')

		$('#accept').click(function(){

			if(id_loaitin!=''){
				
				console.log(id_loaitin)
				$.ajax({
					url:"delete_loaitin.php",
					type:'GET',
					data: {id:id_loaitin}, //biến truyền đi:giá trị của biến
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
			
			id_loaitin = ''
		})
		
	})
	var dem = 1;
	$('a[id^="edit-"]').click(function(){		
		if(dem>1){
			$('.inputtext').focus();
			return
		}
		id_loaitin = $(this).attr('dataId')

		var name = $('#input_append_'+id_loaitin).text()//lấy giá trị
		var input = "<input value='"+name+"' class='form-control inputtext'  name='tenloaitin' required><i class='fa fa-check check' aria-hidden='true'></i><i class='fa fa-times cancel' aria-hidden='true'></i>";
		$('#input_append_'+id_loaitin).html(input);//gán giá trị
		console.log(name)
		dem++

		$('.check').click(function(){// alert(2345)
			name_update = $('.inputtext').val();
			if(jQuery.trim(name_update)<1){
				$('.inputtext').focus();
				return
			}
			if(jQuery.trim(name)!=jQuery.trim(name_update)){
				$.ajax({
					url:"edit_loaitin.php",
					data:{
						name: name_update,
						id:id_loaitin
					},
					type:"post",
					success:function(data){
						//console.log(name_update)
						dem = cancel(id_loaitin,name_update)
					}
				})
			}
			else{
				dem = cancel(id_loaitin,name_update)
			}
		})
		$('.cancel').click(function(){
			dem = cancel(id_loaitin,name) 
		})
	})

		
})


</script>