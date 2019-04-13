<?php 
if(isset($_GET["idproduct"])){
  $idproduct = $_GET["idproduct"];
  $sql= "select* from tbl_product_detail inner join tbl_product_group on tbl_product_detail.IdGroupProduct = tbl_product_group.IdGroupProduct 
  where IdProduct = '$idproduct' ";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $idproducer = $row["IdProducer"];
}
?>
<div class="container" style="margin-top: 50px"> <!-- detail start -->
  <div class="row">
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
      <div class="detail_left">
        <img src="upload/<?PHP echo($row["UrlImage"]) ?>" class="img-responsive">
      </div>
      
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <div class="detail_center">

       <h3><?PHP echo($row["NameProduct"]) ?></h3>
       <p>Nhà sản xuất: <span class="span_detail">
        <?PHP
        $sql1= "select* from tbl_product_detail INNER JOIN tbl_producer on tbl_product_detail.IdProducer = tbl_producer.IdProducer WHERE tbl_producer.IdProducer = '$idproducer'";
        $result1 = mysqli_query($conn, $sql1);
        $row1 = mysqli_fetch_array($result1); 
        echo($row1["NameProducer"]);
        ?>
      </span></p>
      <p>Dòng sản phẩm: <span class="span_detail"><?PHP echo($row["NameGroupProduct"]) ?></span></p>
      <p>Số lượng sản phẩm trong kho: <span class="span_detail">
       <!--  Vẫn còn hàng -->
       <?php 
       if($row["Amount"] > 0){
        echo ('Còn '.$row["Amount"].' sản phẩm');
      }else{
        echo '<i>Xin lỗi sản phẩm này đã hết hàng</i>';
      }
      ?>
    </span></p>
    <div class="btn btn-primary"><?PHP echo(number_format($row["NewPrice"])."đ") ?></div>
    <p class="trichdan">- <?PHP echo($row["Description"]) ?></p>
    <form action="View/addcart.php?idproduct=<?php echo($idproduct) ?>" method="post">
      <div class="form-group">
        <label for="sel1"><p><span class="span_detail1">*</span>Hương vị: </p></label>
        <select class="form-control" id="sel1" name="sel_huongvi">
          <option>Cafe</option>
          <option>Milo</option>
          <option>Dâu</option>
        </select>
      </div>
      <p><span class="span_detail1">*</span>Quà tặng(<span class="span_detail1">Click để chọn</span>)</p>
      <div class="container-fluid">
        <div class="quatang">
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <img src="upload/img_aothun.png" >
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" >
              <img src="upload/img_binhlac.png">
            </div>
          </div>

          <div class="row" style="margin-top: 15px">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <img src="upload/img_binhlacloxo.png">
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" >
              <img src="upload/img_goimau.png" >
            </div>
          </div>
        </div>
        <select class="form-control sel_quatang" name="sel_quatang">
          <option>Áo thun Muscletech</option>
          <option>Bình lắc 3 ngăn</option>
          <option>Bình lắc lò xo</option>
          <option>Gói mẫu Nitrotech</option>

        </select>
      </div>
      <a href="#modal-id" class="btn_mua" data-toggle="modal"><p style=""><span class="fa fa-shopping-cart" style="font-size: 30px; margin-right: 5px" ></span>Mua ngay/Thêm vào giỏ hàng</p></a>
      <!-- <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Trigger modal</a> -->
      <div class="modal fade" id="modal-id">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title animated flash h4Detail" style="font-style: italic;font-size: 23px;text-align: center;color: red;"><span class="glyphicon glyphicon-hand-right" style="    margin-right: 10px;font-size: 25px;"></span>Bạn có muốn thêm sản phẩm này vào giỏ hàng</h4>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src="upload/<?php echo($row["UrlImage"]) ?>" class="animated bounceInLeft img-responsive">
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src="upload/img_jerry.png" width="100%" style="margin-top: 140px;" class="animated bounceInRight img-responsive">
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger animated zoomIn" data-dismiss="modal">Hủy</button>
              <button type="submit" name="btn_buy" class="btn btn-success animated zoomIn">OK</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div> <!-- detail center end -->
</div>
<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 detail_right">
  <img src="upload/img_giaohang.png" alt="">
</div>
</div>
</div> <!-- detail begin -->
<hr style="opacity: 0">
<div class="container"><!--  thongtinsp start -->
  <div class="row">
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
      <div class="thongtinsp" >
        <h3>Chi tiết sản phẩm</h3>
        <img src="upload/<?PHP echo($row["UrlImage"]) ?>" class="img_detail_1 img-responsive" style="width: 50%; margin-left: auto; margin-right: auto;" >
        <?php echo($row["ProductContent"])?>
      </div>
    </div>
  </div>
</div><!--  thongtinsp begin -->
<div class="container comment_fb"> <!-- Chèn bình luận fb start -->
  <div class="row">
    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
      <!-- <h3>BÌNH LUẬN</h3>
      <div class="fb-comments" data-href="" data-numposts="5"></div> -->
      <div class="container">
       <div class="row">

         <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 comment">
           <h3>Bình luận(999)</h3>
           <div class="user"><span class="fa fa-user"></span></div>
           <div class="form-group">
             <textarea class="form-control" rows="5" id="comment"></textarea>
           </div>
           <div class="btn btn-success pull-right">Bình luận</div>
         </div>

         <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 select">
           <div class="form-group">
             <select class="form-control">
               <option>Bình luận mới nhất</option>
               <option>Bình luận nổi bật</option>
             </select>
           </div>
         </div>

       </div>
       <?php for($i=0; $i < 5; $i++){ ?>
         <div class="row comment_detail">
           <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
             <div class="container-fluid">
               <div class="row">
                 <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 left">
                  <div class="user"><span class="fa fa-user"></span></div>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 center">
                 <p>Phạm Trung Dũng</p>
                 <p>Sản phẩm rất đúng với quảng cáo, giao hàng nhanh, chính xác! mình rất hài lòng :), mong ad liên tục cập nhật nhiều sản phẩm hay hơn nữa nhé :)))</p>
                 <p>Trả lời <span class="fa fa-thumbs-up"></span> <span class="fa fa-thumbs-down"></span></p>
               </div>
               <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 right">
                 <p>2 giờ trước</p>
               </div>
             </div>
           </div>
         </div>
       </div>
     <?php } ?>
   </div>
 </div>
</div>
</div> <!-- Chèn bình luận fb end -->

<div class="container desktop"> <!-- san pham lien quan start -->
  <div class="splienquan">
    <h3><span class="glyphicon glyphicon-arrow-right" style="margin-right: 5px"></span>Sản phẩm liên quan</h3>
    <div class="row">
      <?php 
      $sql= "SELECT * FROM tbl_product_detail 
      WHERE IdGroupProduct = (SELECT IdGroupProduct FROM tbl_product_detail WHERE IdProduct = $idproduct) limit 6";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_array($result)){

       ?>

       <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
        <div class="thumbnail text-center">
          <img src="upload/<?PHP echo($row["UrlImage"]) ?>">
          <div class="caption">
            <p style="color: #BDB5B5"><?PHP echo($row["Note"]) ?></p>
            <p style="color:#EF5759; font-weight: bold; min-height: 65px"><?PHP echo($row["NameProduct"]) ?></p>
            <p ><span style="text-decoration: line-through; color: #BDB5B5">
              <?PHP 
              if($row["OldPrice"]!=0){
                echo(number_format($row["OldPrice"])."đ");
              }else {
                echo '';
              }

              ?>
              
            </span> 
            <span style="font-weight: bold;"><?PHP echo(number_format($row["NewPrice"])."đ") ?></span></p>
            <a href="index.php?page=detail&&idproduct=<?php echo($row['IdProduct']) ?>" class="btn btn-primary">Chi tiết</a>
          </p>
        </div>
      </div>
      <?php  
      if($row["OldPrice"] != 0){
        $oldprice =  $row["OldPrice"];
        $newprice =  $row["NewPrice"];
        $km = 100- round(($newprice/$oldprice)*100);

        ?>
        <div class="khuyenmai_main">
         <p><?php   echo("-".$km."%"); ?></p>
       </div>
     <?php  } ?>
   </div>

 <?php } ?>

</div>
</div>
</div><!-- san pham lien quan begin -->



<div class="container didong"> <!-- san pham lien quan start -->
  <div class="splienquan">
    <h3><span class="glyphicon glyphicon-arrow-right" style="margin-right: 5px"></span>Sản phẩm liên quan</h3>
    <div class="row">
      <?php 
      $sql= "SELECT * FROM tbl_product_detail 
      WHERE IdGroupProduct = (SELECT IdGroupProduct FROM tbl_product_detail WHERE IdProduct = $idproduct) limit 2";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_array($result)){

       ?>

       <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
        <div class="thumbnail text-center">
          <img src="upload/<?PHP echo($row["UrlImage"]) ?>">
          <div class="caption">
            <p style="color: #BDB5B5"><?PHP echo($row["Note"]) ?></p>
            <p style="color:#EF5759; font-weight: bold; min-height: 65px"><?PHP echo($row["NameProduct"]) ?></p>
            <p ><span style="text-decoration: line-through; color: #BDB5B5">
              <?PHP 
              if($row["OldPrice"]!=0){
                echo(number_format($row["OldPrice"])."đ");
              }else {
                echo '';
              }

              ?>
              
            </span> 
            <span style="font-weight: bold;"><?PHP echo(number_format($row["NewPrice"])."đ") ?></span></p>
            <a href="index.php?page=detail&&idproduct=<?php echo($row['IdProduct']) ?>" class="btn btn-primary">Chi tiết</a>
          </p>
        </div>
      </div>
      <?php  
      if($row["OldPrice"] != 0){
        $oldprice =  $row["OldPrice"];
        $newprice =  $row["NewPrice"];
        $km = 100- round(($newprice/$oldprice)*100);

        ?>
        <div class="khuyenmai_main">
         <p><?php   echo("-".$km."%"); ?></p>
       </div>
     <?php  } ?>
   </div>

 <?php } ?>

</div>
</div>
</div><!-- san pham lien quan begin -->




