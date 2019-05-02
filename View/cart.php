<div class="container text-right damua">
  <a href="#" class="btn btn-success a_history_cart"><span class="fa fa-history" style="margin-right: 5px;font-size: 17px"></span>Lịch sử đơn hàng</a>
</div>

<?php 
if(isset($_SESSION["cart"])&&!empty($_SESSION["cart"])){
  if(isset($_SESSION["user"])){
    $id_confirm_cart = "click_confirm_pay";
  }else {
   $id_confirm_cart = "click_dangnhap2";
 }


 ?>
 <div id="cart"> <!-- cart start -->
  <h3 class="text-center"><span class="fa fa-cart-arrow-down"></span>Giỏ hàng của bạn</h3>
  <div class="container">
    <div class="row">
      <div id="cart_left"> <!-- cart_left start -->
       <form action="View/update_cart.php" method="post">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <div class="container-fluid" style="margin-bottom: 15px">

            <div class="row">
              <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <h4>
                  <?php 
                  if(isset($_SESSION["cart"])){
                    $total_product= count($_SESSION["cart"]);
                  }

                  ?>
                  <span class="glyphicon glyphicon-ok" style="margin-right: 5px"></span>Đã chọn(<?php echo($total_product) ?> sản phẩm)


                </h4>
              </div>
              <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <h4 class="dongia">Đơn giá</h4>
              </div>
              <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <h4 class="soluong">Số lượng</h4>
              </div>
            </div>
          </div>
          <?php 
          $total_money=0;
          foreach ($_SESSION["cart"] as $key=>$val){
            $total_money += $val["NewPrice"]*$val["number"];
            $_SESSION["total_money"] = $total_money

            ?>
            <div class="container-fluid cartdetail" style="margin-bottom: 15px">
              <div class="row">
                <div class="col-xs-6 col-sm-8 col-md-8 col-lg-8">
                 <img src="upload/<?php echo($val["UrlImage"]) ?>" class="pull-left">
                 <p class="ten"><?php echo($val["NameProduct"]); ?></p>
                 <?php 
                 if(isset($val["huongvi"]) && isset($val["quatang"])){
                   ?>
                   <p class="hươngvi"><span style="color: red">Hương vị:</span> <?php echo($val["huongvi"])?><span style="color: red">--Quà tặng:</span><?php echo($val["quatang"])?></p>
                 <?php } ?>
                 <p><!-- <span class="glyphicon glyphicon-heart" style="margin-right: 10px; color: #B1A69E"></span> --><a href="View/deletecart.php?idcart=<?php echo($key) ?>" hu="tooltip" title="Xóa sản phẩm này" onclick="return confirm('Bạn có muốn xóa sản phẩm này khỏi giỏ hàng')" id="deletecart"><span class="glyphicon glyphicon-trash" style="color: #B1A69E"></span></a></p>
               </div>
               <div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 dongia">
                 <p><?php echo(number_format($val["NewPrice"])."đ"); ?></p>
                 <p>
                  <?php 
                  if($val["OldPrice"]!=0){
                    echo(number_format($val["OldPrice"])."đ");
                  }else echo '';
                  ?>    
                </p>
                <p>
                  <?php if($val["OldPrice"]!=0){
                    $km = 100-(round($val["NewPrice"]/$val["OldPrice"]*100));
                    echo("-".$km."%"); 
                  }else {
                    echo '';
                  }

                  ?>
                </p>
              </div>
              <div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 text-center">
               <h4>
                <input class="soluong" type="number" name="txt_number[<?php echo($key) ?>]" min="1"; max="10" value="<?php echo($val["number"]) ?>"/>
              </h4>
            </div>
          </div>
        </div>
      <?php }

      ?>
      <div class="container-fluid" style="margin-bottom: 15px">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right" >
            <button type="submit" name="btn_update_cart" class="btn btn-success"><span class="fa fa-pen-square" style="margin-right:5px; font-size: 15px"></span>Cập nhật giỏ hàng</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<div id="cart_right">
  <form action="" method="post">
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="background: #fafafa">

      <h3>Thông tin đơn hàng</h3>
      <div class="container-fluid">
        <div class="row" style="margin-bottom: 5px">
          <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
            <p>Tổng só sản phẩm: </p>
          </div>
          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right">
            <p><b><?php echo($total_product) ?></b></p>
          </div>
        </div>
        <div class="row"  style="margin-bottom: 5px">
          <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
            <p>Tổng tiền: </p>
          </div>
          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right">
            <p><b><?php echo(number_format($total_money)."đ") ?></b></p>
          </div>
        </div>
        <div class="row" style="margin-bottom: 10px">
          <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
            <p>Phí giao hàng </p>
          </div>
          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right">
            <p>Miễn phí</p>
          </div>
        </div>
      </div>
      <!-- <p class="pull-left" ><input type="text" class="form-control" placeholder="Nhập mã giảm giá..." style="width: 276px;"></p> -->
      <!-- <p><input type="submit" value="Áp dụng" class="btn btn-primary" style="margin-left: 5px"></p> -->
      <div class="container-fluid">
        <div class="row" style="margin-bottom: 10px">
          <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
            <p><b>Phải trả</b></p>
          </div>
          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right">
            <p style="font-weight: bold;font-size: 14px;color: #F5724E;"><?php echo(number_format($total_money)."đ") ?></p>
          </div>
        </div>
      </div>
      <p id="xngh"><button type="submit" name="btn_confirm_cart" class="btn btn-block" id="<?php echo($id_confirm_cart) ?>"><span class="fa fa-check-circle" style="margin-right:5px"></span>Xác nhận giỏ hàng</button></p>
    </div>
  </form>
</div><!-- cart_left end -->
</div>
</div>
</div>
</div><!-- cart end -->


<?php 
}else{
  ?>
  <div id="nocart">
    <h4>Không có sản phẩm nào trong giỏ hàng</h4>
    <a href="index.php?page=home">TIẾP TỤC MUA SẮM</a>
  </div>
    <!-- <div id="alert_cart">
      
    </div> -->


  <?php } ?>

  <?php if(isset($_SESSION["user"])){
   $username = $_SESSION["user"];
   $sql="SELECT * FROM tbl_customer where Username = '$username'";
   $query= mysqli_query($conn, $sql);
   $row = mysqli_fetch_array($query);
 } ?>

 <div class="confirm_pay"> <!-- form xác nhận địa chỉ thanh toán start -->
  <div class="container-fluid">

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 left">
      <h3><span class="fa fa-truck" style="margin-right: 5px; transform: rotateY(180deg);"></span>Thông tin giao hàng</h3>
      <form action="View/process_pay.php" method="post" >
        <div class="form-group">
          <label>Tên(*):</label>
          <input type="text" class="form-control" name="txt_name1" id="txt_name1" placeholder="Họ tên..." value="<?php echo($row['NameCustomer']) ?>">
        </div>
        <div class="form-group">
          <label for="pwd">Số điện thoại(*):</label>
          <input type="number" class="form-control" name="txt_phone1" value="<?php echo '0'.$row['Phone'] ?>" placeholder="Xin vui lòng nhập số điện thoại...">
        </div>
        <div class="form-group">
          <label >Hình thức thanh toán</label>
          <select class="form-control" name="sl_hinhthucthanhtoan">
            <option value="Thanh toán sau khi nhận hàng" selected>Thanh toán sau khi nhận hàng</option>
            <option value="Thanh toán qua thẻ">Thanh toán qua thẻ</option>
          </select>
        </div>
        <button type="submit" value="btn_luu" class="btn btn-block btn-danger" name="btn_luu"><span class="fa fa-check-circle" style="margin-right: 5px;"></span>Lưu</button>

      </div>

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 right">
        <div class="form-group">
          <label for="email">Địa chỉ nhận hàng(*):</label>
          <input type="text" class="form-control" name="txt_addr1" value="<?php echo($row['Address']) ?>" placeholder="Vui lòng nhập địa chỉ của bạn(tên đường, số nhà)...">
        </div>
        <label for="sel1">Tỉnh/thành phố(*):</label>
        <select class="form-control tinhthanhpho" name="sl_tinhthanhpho">
          <option value="" selected disabled >Chọn tỉnh(thành phố)</option>
          <?php 
          $sql="SELECT * FROM devvn_tinhthanhpho ORDER BY name ASC";
          $query= mysqli_query($conn1, $sql);
          while($row = mysqli_fetch_array($query)){
            ?>
            <option value="<?PHP echo($row["matp"]) ?>"><?php echo($row["name"]) ?></option>
          <?php }?>
        </select>
        <label for="sel1">Quận/Huyện(*):</label>
        <select class="form-control quanhuyen" name="sl_quanhuyen" >
          <option value="">Chọn quận(Huyện)...</option>
        </select>
        <label for="sel1">Xã/phường:</label>
        <select class="form-control xaphuong" name="sl_xaphuong" >
          <option value="">Chọn Xã(Phường)...</option>
        </select>
      </div>
    </form>
  </div>
</div>  <!-- form xác nhận địa chỉ thanh toán end -->


<div class="grey_cart"></div>
<div class="div_history_cart">
  <div class="container-fluid" >
    <?php if(isset($_SESSION["user"])){
     $username = $_SESSION["user"];
     $sql="SELECT * FROM tbl_customer where Username = '$username'";
     $query= mysqli_query($conn, $sql);
     $row = mysqli_fetch_array($query);
     $idcustomer = $row["IdCustomer"];
     $sql="SELECT * FROM tbl_bill where IdCustomer = '$idcustomer' order by IdBill DESC";
     $query= mysqli_query($conn, $sql);
     if(mysqli_num_rows($query) > 0){
      ?>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
          <h3 align="center">Lịch sử đơn hàng của bạn</h3>
          <table class="table table-bordered " >
            <thead style="text-align: center;">
              <tr class="danger">
                <th>Thời gian đặt hàng</th>
                <th>Tổng tiền</th>
                <th>Tên người đặt</th>
                <th>Tên người nhận</th>
                <th>Sdt người nhận</th>
                <th>Địa chỉ <br> nhận hàng</th>
                <th>Hình thức thanh toán</th>
                <th>Trạng thái</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $sql="SELECT * FROM tbl_customer where Username = '$username'";
              $query= mysqli_query($conn, $sql);
              $row = mysqli_fetch_array($query);
              $idcustomer = $row["IdCustomer"];
              $sql="SELECT * FROM tbl_bill where IdCustomer = '$idcustomer' order by IdBill DESC";
              $query= mysqli_query($conn, $sql);
              while($row = mysqli_fetch_array($query)){
                $idcustomer = $row["IdCustomer"];
                ?>
                <tr>
                  <td><?php echo($row["Time"]) ?></td>
                  <td><?php echo(number_format($row["Total"])."VNĐ") ?></td>
                  <td><?php 
                  $sql1   ="SELECT * FROM tbl_customer where IdCustomer = '$idcustomer'";
                  $query1 = mysqli_query($conn, $sql1);
                  $row1 = mysqli_fetch_array($query1);
                  echo($row1["NameCustomer"]); 
                  ?>
                </td>
                <td><?php echo($row["NameRecevier"]) ?></td>
                <td><?php echo("+84".$row["PhoneReceiver"]) ?></td>
                <td><?php echo($row["AddressRecevier"]) ?></td>
                <td><?php echo($row["Pay"]) ?></td>
                <?php if($row["Status"] == "Đang xử lý"){ ?>
                  <td style="color: red; font-weight: bold;"><?php echo($row["Status"]) ?></td>
                <?php }else{ ?>
                  <td style="color: green;font-weight: bold;"><?php echo($row["Status"]) ?></td>
                <?php } ?>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>

  <?php }else{
    echo('<h3 align="center" style="padding: 260px 0px"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Lịch sử đơn hàng không tồn tại</h3>');
  }

}else{ 

  ?>
  <h3 align="center" style="padding: 260px 0px"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Lịch sử đơn hàng không tồn tại</h3>
<?php } ?>
</div>
</div>



<?php 
if(isset($_GET["alert"])){
  $alert = $_GET["alert"];
  if($alert == "paysuccess"){
    echo('<script>swal({
      text: "Bạn đã đặt hàng thành công, tiếp tục mua sắm",
      icon: "success",
      button: "OK",
    });</script>');
  }
}
?>
