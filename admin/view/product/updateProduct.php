
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 align="center">Update</h1>
<form action="" method="post" enctype="multipart/form-data" style="margin-left:100px">
    Danh mục <select name="cate_id" id="">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    </select><br>
    <label for="">Tên sản phẩm:</label><br>
     <input type="text" name="name"value="<?php echo($onepr['name']) ?>"><br>
     <label for="">Ảnh sản phẩm:</label><br>
     <input type="file" name="image" id="" value="<?php echo($onepr['img']) ?>"><br>
     <label for="">Hot:</label><br>
     <input type="checkbox" name="hot" value="<?php echo($onepr['hot']) ?>"><br>
     <label for="">Mô tả:</label><br>
     <input type="text" name="mo_ta" id="" value="<?php echo($onepr['mo_ta']) ?>"><br>
     <label for="">Số Lương:</label><br>
     <input type="number" name="so_luong" id="" value="<?php echo($onepr['so_luong']) ?>"><br>
     <label for="">Giá sản phẩm:</label><br>
     <input type="text" name="gia_sp" id=""value="<?php echo($onepr['gia_sp']) ?>"><br>
    <input type="submit" value="thêm" name="btn_update"class="btn btn-primary">
    </form>
</body>
</html>
