<?php
  if (isset($_POST['login']) && $_POST['login']) {
      $user = new User();

      $email = isset($_POST['email']) ? $_POST['email'] : null;
      $password = isset($_POST['password']) ? $_POST['password'] : null;
      if (!$email || !$password) {
        echo "<script>alert('Vui long dien day du thong tin')</script>";
      } else {
        $result = $user->login($email, $password);
        if (!$result) {
          echo "<script>alert('Dang nhap khong thanh cong')</script>";
        } else {
          echo "<script>alert('Dang nhap thanh cong')</script>";
          echo '<script>window.location.href="http://localhost:8077/PHP2/ASS/controller/index.php"</script>';
        }
      }
  }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../view/css/login.css">
</head>
<body>

<h2>Mời bạn đăng nhập:</h2>


<form method="post">
  <div class="imgcontainer">
    <img src="../view/img/admin.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Enter email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="login" value="dangnhap">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
   <?php
   if(isset($_GET['errtxt'])){
     echo "User hoac Pass khong trung khop !";
   }
   ?>

</body>
</html>
