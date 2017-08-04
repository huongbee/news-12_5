
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
      <table class="table table-hover">
	    <thead>
	      <tr>
	        <th>STT</th>
	        <th>Tên thể loại</th>
	        <th>Hình</th>
	        <th>Sửa | Xóa</th>
	      </tr>
	    </thead>
	    <tbody>
	    <?php
	    $stt = 1;
	    foreach($data as $theloai):
	    	
	    ?>
	      <tr>
	        <td><?=$stt?></td>
	        <td><?=$theloai->name?></td>
	        <td><img src="../public/images/tintuc/<?=$theloai->image?>" style="width: 100px"></td>
	        <td>
		        <a href="edit_theloai.php?id=<?=$theloai->id?>"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a> |
		        <a href="delete_theloai.php?id=<?=$theloai->id?>"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a>
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