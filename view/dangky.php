<?php
    if (isset($_POST['register']) && $_POST['register']) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $fullName = $_POST['fullName'];
        $phone = $_POST['phone'];
        
        $user = new User();
        $result = $user->register($username, $password, $email, $fullName, $phone);

        if (!$user) {
            echo '<script>alert("Dang ky khong thanh cong")</script>';
        } else {
            echo '<script>window.location.href="http://localhost:8077/PHP2/ASS/controller/index.php?ta=login"</script>';
        }
    }
?>

<link rel="stylesheet" type="text/css" href="../view/css/dangky.css">
   
<section>
    <form action="?ta=dk" method="post">
        <div class="container">
        <div class="content" align="center">
            <h1  style="font-family: 'Coiny', cursive; margin:30px;">ĐĂNG KÝ</h1>
            Mời bạn nhập thông tin
        </div>
        <div class="signup text-center">
            <hr />
            <input type="text" placeholder="User Name" name="username" id="username" required/>
            <input type="password" placeholder="PassWord" name="password" id="psw" required/>
            <input type="text" placeholder="Email" name="email" id="email" required/>
            <input type="text" placeholder="fullname" name="fullName" id="fullname" required/>
            <input type="text" placeholder="SDT" name="phone" required/>
            <hr />
            <button type="submit" class="registerbtn" name="register" value="dangky">ĐĂNG KÝ</button>
        </div>
        </div>
    </form>
</section>
