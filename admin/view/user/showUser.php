
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
    <h1>Quản trị User</h1>
    <table border="1" class="table table-striped">
    <tr>
            <th scope="col">STT</th>
            <th scope="col">Chức Vu</th>
            <th scope="col">Tên</th>
            <th scope="col">Pass</th>
            <th scope="col">Email</th>
            <th scope="col">Họ tên</th>
            <th scope="col">SĐT</th>
            <th scope="col">Xoá</th>
        </tr>
        <?php
        foreach ($allUser as $key => $rows) {
        ?>
            <tr>
                <td><?php echo ($key + 1) ?></td>
                <td><?= $rows['chuc_vu'] ?></td>
                <td><?= $rows['username'] ?></td>
                <td><?= $rows['password'] ?></td>
                <td><?= $rows['email'] ?></td>
                <td><?= $rows['fullname'] ?></td>
                <td><?= $rows['phone'] ?></td>
                
                <td><a href="?page=user&action=delete&id=<?php echo $rows['id'] ?>"
                       onclick="return confirm('bạn thực sự muốn xóa không?')">Xóa</a></td>
            </tr>
        <?php

        }
        ?>

    </table>
</body>

</html>