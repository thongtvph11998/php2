
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIXISHOP</title>
       <!-- CSS only -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />

    <!-- JS, Popper.js, and jQuery -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>
    <link href="https://fonts.googleapis.com/css2?family=Coiny&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../view/css/trangchu.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

</head>
<body>
     <header>
      <div class="left">
        <a href="index.php"><img src="../view/img/logo.jpg" alt="" /></a>
        
      </div>
      <div class="center">
        <form action="">
          <input type="search"placeholder="tìm kiếm..." />
          <a href=""><img src="../view/img/timkiem.png" alt=""/></a>
        </form>
      </div>
      <div class="right">
        <div class="icondt">
          <img src="../view/img/dt.jpg" alt="" />

          <span> <strong>0822221992</strong> </span>
        </div>
        <div class="icongh">
          <img src="../view/img/gh.png" alt="" />
          <span><strong>Giỏ Hàng</strong> </span>
        </div>
        <div class="admin">
          <a href="index.php?ta=login"><img src="../view/img/admin.png" alt="" />
          <span><strong><?php isset($_SESSION['auth']) ? print($_SESSION['auth']['username']) . ' | <a href="index.php?ta=logout" >dang xuat</a>' : 'Dang nhap' ?></strong>
          </a>

          
         
        </div>
      </div>
    </header>
    <nav class="menu">
        <div class="admin" align="center">
    <a href="index.php">MIXISHOP</a>
    <?php foreach ($danhmuc as $danhmuc): ?>
      <a href="index.php?ta=sp&idsp=<?= $danhmuc['id'] ?>"><?= $danhmuc['name'] ?></a>
   <?php endforeach ?>
    <!-- <a href="index.php">ÁO REFUND GAMING</a> -->
    <a href="index.php?ta=dk">ĐĂNG KÝ</a>
    <a href="index.php?ta=lh">LIÊN HỆ</a> 
    
    </div>
    </nav>
    <section class="section1">
      
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li
            data-target="#carouselExampleIndicators"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner slider" >

        <?php $AllSL = Loadsl(); ?>
        <?php foreach ($AllSL as $i => $row): ?>
          <img src="<?=$row['img']?>" alt="" height="350">
          <?php endforeach ?>

        </div>
        
      </div>
  </section>
  <script>
    $(document).ready(function(){
      $('.slider').bxSlider();
    });
  </script>

  