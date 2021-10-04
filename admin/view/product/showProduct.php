
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sẩn phẩm</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <h1>Quản trị sản phẩm</h1>
    <a href="?page=sp&action=insert">Thêm sản phẩm</a>
    <table border="1" class="table table-striped">
        <tr>
        <th scope="col">STT</th>
            <th scope="col">IMG</th>
            <th scope="col">Tên SP</th>
            <th scope="col">Hot</th>
            <th scope="col">Mô Tả</th>
            <th scope="col">Số Lương</th>
            <th scope="col">Giá Sản Phẩm</th>
            <th scope="col">Danh mục</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
        </tr>
        <?php
        foreach ($allProduct as $key => $rows) {
        ?>
            <tr>
                <td><?php echo ($key + 1) ?></td>
                <td><img src="<?= $rows['img'] ?>" alt="" width="50" height="50"></td>
                <td><?php echo  $rows['name'] ?></td>
                <td><?php echo $rows['hot'] ?></td>
                <td><?php echo $rows['mo_ta'] ?></td>
                <td><?php echo $rows['so_luong'] ?></td>
                <td><?php echo $rows['gia_sp'] ?></td>
                <td><?php echo $rows['danh_muc_id'] ?></td>
                <td><a href="?page=sp&action=update&editID=<?php echo $rows['id'] ?>">Sửa</a></td>
                <td><a href="?page=sp&action=delete&id=<?php echo $rows['id'] ?>"
                       onclick="return confirm('bạn thực sự muốn xóa không?')">Xóa</a></td>
            </tr>
        <?php

        }
        ?>

    </table>
</body>

</html>