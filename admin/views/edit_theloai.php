<?php

if(isset($_POST['btnLuu'])){
	$c = new TheloaiController;
	$theloai = $c->postEditTheloai();
}

?>

<div class="panel panel-default">
  <div class="panel-heading"><b>Sửa thể loại <?=$data->name?></b>
  </div>
  <div class="panel-body">
  	<div class="col-md-6">
      <form method="POST" enctype="multipart/form-data">
      	Tên thể loại: <input type="text" class="form-control" name="tentheloai" value="<?=$data->name?>">
      	<br>
      	<div>
      		<img src="../public/images/tintuc/<?=$data->image?>" style="width: 200px" id="thumbnil">
      	</div><br>
      	<div>
      		Chọn hình khác: <input type="file"  name="hinh" onchange="showMyImage(this)" accept="image/*">
      	</div>
      	<br><br>
      	<button class="btn btn-success" name="btnLuu" type="submit">Lưu</button>
      </form>
    </div>
  </div>
</div>
<script>
	
function showMyImage(fileInput) {
    var files = fileInput.files;
    for (var i = 0; i < files.length; i++) {           
        var file = files[i];
        var imageType = /image.*/;     
        if (!file.type.match(imageType)) {
            continue;
        }           
        var img=document.getElementById("thumbnil");            
        img.file = file;    
        var reader = new FileReader();
        reader.onload = (function(aImg) { 
            return function(e) { 
                aImg.src = e.target.result; 
            }; 
        })(img);
        reader.readAsDataURL(file);
    }    
}

</script>