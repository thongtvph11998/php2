
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <h1>Quản trị Slider</h1>
    <a href="?page=slider&action=insertSlider">Thêm Slider</a>
    <table border="1" class="table table-striped">
        <tr>
            <th>STT</th>
            <th>Tên Slider</th>
            <th>Nội dung</th>
            <th>Image</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        <?php
        foreach ($allSlider as $key => $rows) {
        ?>
            <tr>
                <td><?php echo ($key + 1) ?></td>
                <td><?php echo  $rows['name'] ?></td>
                <td><?php echo  $rows['noi_dung'] ?></td>
                <td><img src="<?= $rows['img'] ?>" alt="" width="100" height="50"></td>
                <td><a href="?page=slider&action=updateSlider&id=<?php echo $rows['id'] ?>">Sửa</a></td>
                <td><a href="?page=slider&action=delete&id=<?php echo $rows['id'] ?>"
                       onclick="return confirm('bạn thực sự muốn xóa không?')">Xóa</a></td>
            </tr>
        <?php

        }
        ?>

    </table>
</body>

</html>