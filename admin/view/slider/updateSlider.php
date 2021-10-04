<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
                 
Tên slider <input type="text" name="name"value="<?php echo($oneSlider['name']) ?>"><br>
Tên slider <input type="file" name="image"value="<?php echo($oneSlider['img']) ?>"><br>
Tên slider <input type="text" name="noi_dung"value="<?php echo($oneSlider['noi_dung']) ?>"><br>
                
                        <div class="col-sm-4">
                            <button type="submit" name="btn_ud" id="" class="btn btn-primary" btn-lg btn-block>Update</button>
                            <a name="" id="" class="btn btn-primary" href="?page=cate" role="button">Quay Lại</a>
                        </div>
                    </form>
</body>
</html>