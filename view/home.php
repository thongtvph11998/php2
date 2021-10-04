<article>
        <div class="bst" align="center">
          <h1  style="font-family: 'Coiny', cursive;"><strong><img src="../view/img/icon-hot.png" alt="">Mẫu Bán Chạy</strong></h1>
        </div>
        <div class="conten">
        <?php $AllSP = LoadAllSP(); ?>
        <?php foreach ($AllSP as $i => $row): ?>
          <div class="anh"align="center">  <a href="index.php?ta=chitiet&&id=<?=$row['id']?>">
            <img src="<?=$row['img']?>" alt="" width="300" height="370">
            <p><strong><?=$row['name']?></strong> <br> </a>
              <img src="../view/img/star.png" alt="" width="20" height="20">
              <img src="../view/img/star.png" alt="" width="20" height="20">
              <img src="../view/img/star.png" alt="" width="20" height="20">
              <img src="../view/img/star.png" alt="" width="20" height="20">
              <img src="../view/img/star.png" alt="" width="20" height="20"> 
              <br>
             <strong><?=$row['gia_sp']?><sup>đ</sup></strong>
             <br>
             <a href=""> <button>Mua Hàng</button></a>
            </p> 
          
          </div>
          <?php endforeach ?>
        </div>
        
        <div class="bst2" align="center">
            <h1  style="font-family: 'Coiny', cursive;"><strong>Bộ Sưu Tập</strong></h1>
          </div>
         
          <div class="conten">
          <?php $AllSP = LoadAllSPnew(); ?>
        <?php foreach ($AllSP as $i => $row): ?>
              <div class="anh"align="center">  <a href="index.php?ta=chitiet&&id=<?=$row['id']?>">
                <img src="<?=$row['img']?>" alt="" width="300" height="370">
                <p><strong><?=$row['name']?></strong> <br> </a>
                  <img src="../view/img/star.png" alt="" width="20" height="20">
                  <img src="../view/img/star.png" alt="" width="20" height="20">
                  <img src="../view/img/star.png" alt="" width="20" height="20">
                  <img src="../view/img/star.png" alt="" width="20" height="20">
                  <img src="../view/img/star.png" alt="" width="20" height="20"> 
                  <br>
                 <strong><?=$row['gia_sp']?><sup>đ</sup></strong>
                 <br>
                 <a href=""> <button>Mua Hàng</button></a>
                 
                </p> 
              
              </div>
              <?php endforeach ?>
            </div>
     </article> 
     <section class="section2">
         <div class="xt"> 
                <hr>
                <br>
                <a href="">
                <button>Xem Tất Cả</button></a>
              </div>
              <div class="support">
              <div class="img">
                <img src="../view/img/cart.png" alt="" width="70" height="70"> <br> 
                <strong>Giao hàng toàn quốc</strong><br>
                Giao hàng đến tận nơi nhanh chóng, đảm bảo 
              </div> 
              <div class="img">
                <img src="../view/img/return.png" alt="" width="70" height="70"> <br>
               <strong>Hỗ trợ đổi trả</strong> <br>
                Chúng tôi hỗ trợ đổi trả sản phẩm lỗi do nhà sản xuất hoặc vận chuyển. Đổi size khi còn nguyên tem mác
              </div>
              <div class="img">
                <img src="../view/img/living-room.png" alt="" width="70" height="70"> <br>
                <strong>Support 24/7 </strong>
                Hỗ trợ qua hệ thống fanpage, trả lời thắc mắc 24/7 trên Instagram  
              </div>
              </div>
               
      </section>