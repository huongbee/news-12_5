
<div class="panel panel-default">
  <div class="panel-heading"><b>Admin</b>
  </div>
  <div class="panel-body">
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
		        <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i> |
		        <i class="fa fa-trash-o fa-2x" aria-hidden="true"></i>
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