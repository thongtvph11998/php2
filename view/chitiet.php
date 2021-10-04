<style>
article{
	height:auto;
}

.ct-left{
	margin-top: 50px;
	width: 550px;
	margin-left: 100px;
	float: left;
	
}
.ct-left img{
	width: 400px;
	height: 450px;
	
}
.ct-right{
	float: left;
	width: 570px;
	padding-left: 15px;
	margin-top: 20px;
}
.ct-right button{
        border:none;
        background: orangered;
        border-radius: 5px;
        color: white;
        font-size: 20px;
}
.ndct{
	clear: both;
	padding-top: 50px;
}
.note{ 
	
    color: red;
}

</style>
  <h4 style="margin-top: 30px;"><a href="index.php">Trang chủ</a>/Thông tin sản phẩm</h4>
  <article>
   
    <div class="ct-left">
    
   
    <?php 
      if(isset($_GET['id'])){
        $id = $_GET['id'];
      }
      $product=loadSP($id);
//       echo  '<pre/>';
//       echo $product[0]['name'];die;
//  var_dump($product);die;
      
    ?>
     <img src="<?=$product['img']?>" alt="" width="300" height="370">
       
      
    </div>
    <div class="ct-right">
       <a href="">
       
              <p> <h3><strong><?=$product['name']?></strong> </h3> <br> </a>
                <img src="../view/img/star.png" alt="" width="20" height="20">
                <img src="../view/img/star.png" alt="" width="20" height="20">
                <img src="../view/img/star.png" alt="" width="20" height="20">
                <img src="../view/img/star.png" alt="" width="20" height="20">
                <img src="../view/img/star.png" alt="" width="20" height="20"> 
                <br>
                <strong><?=$product['gia_sp']?><sup>đ</sup></strong>
               <br>
               <img src="../view/img/sz.png" width="500" height="320">
                <a href=""> <button>Mua Hàng</button></a>
              </p> 

             
    </div>
    <div class="ndct">
      <h6 >Mô tả:</h6>
      <h2>Sản phẩm:<strong><?=$product['name']?></strong></h2>
      <span>Chất liệu: nỉ chân cua dày 100% cotton <br>
        Chất vải cực kì bền và ấm <br>
        Áo khoác Mixi là sản phẩm hot nhất trong đợt hàng lần này. Nhanh tay sắm một chiếc áo khoác MIXI về diện mùa đông nhé!! <br>
      </span>
      <h2>Chú Ý</h2>
      <span class="note">
      note:-Đơn hàng đã đến trang oder complete và có hiển thị"đơn hàng cảu bạn đã được nhận"sẽ được tính là đơn hàng thành công và cấp nhật lên hệ thống. <br>
      -Mỗi đơn hàng xác thành công có xác nhận về mail mà bạn đã đăng kí. TRong trường hợp hệ thống quá tải sẽ không có mail gửi về. <br>
      -Nhân viên bên shop sẽ gọi điện check lại đơn theo dữ liệu trên hệ thống nên bạn không cần lo lắng kể cả khi không nhận dc mamil xác nhận.
      <br>
      </span>

      <div class="comment" style="margin-top: 20px;">

       <div class="form-group">
      
         <form method="POST">
        <div class="form-group">
        <div class="form-group">
          <label for="sel1">Đánh giá:</label>
          <select name="danh_gia" class="form-control" id="danh_gia_sao">
            <option value="1">1 sao</option>
            <option value="2">2 sao</option>
            <option value="3">3 sao</option>
            <option value="4">4 sao</option>
            <option value="5">5 sao</option>
          </select>
        </div>
         <textarea class="form-control" name="noi_dung" id="noi_dung" rows="3" ></textarea>
        </div>
        <button type="submit" name="add_comment" value="true" class="btn btn-primary" btn-lg btn-block>Bình Luận</button>
        </form>

       

  </article>
  <section class="section2">
         
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

