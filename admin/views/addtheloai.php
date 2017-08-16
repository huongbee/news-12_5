
<?php

if(isset($_POST['btnThem'])){
    $c = new TheLoaiController;
    $c->postAddTheloai();
}

?>

<div class="panel panel-default">
  <div class="panel-heading"><b>Thêm thể loại</b>
  </div>
  <div class="panel-body">
  	<div class="col-md-6">

    <?php
    if(isset($_COOKIE['loi'])){
    ?>
      <div class="alert alert-danger"><?=$_COOKIE['loi']?></div>

    <?php } ?>

      <form method="POST" enctype="multipart/form-data">
      	Tên thể loại VN: <input type="text" class="form-control" name="tentheloai" placeholder="Nhập tên thể loại" required >
      	<br>
        Tên thể loại EN: <input type="text" class="form-control" name="tentheloai_en" placeholder="Nhập tên thể loại EL" required >
        <br>
        <div>
          <img  style="width: 200px" id="thumbnil">
        </div><br>
      	<div>
      		Chọn hình: <input type="file" required name="hinh" onchange="showMyImage(this)" accept="image/*">
      	</div>
      	<br><br>
      	<button class="btn btn-success" name="btnThem" type="submit">Thêm</button>
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