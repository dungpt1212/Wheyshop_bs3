<div class="menu">
  <a href="index.php"><img src="upload/san-deal.jpg" style="width: 1347px;/* margin-left: -15px; */height: 37px;" class="animated flash"></a>
  <!--  menu cho màn di động start -->
  <nav class="navbar navbar-default navbar-fixed-top didong" role="navigation" >
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="logo"><a class="navbar-brand"data-toggle="modal" href='#modal-id1'><span class="fa fa-heartbeat" style="margin-right: 5px"></span>Whey shop</a></div>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <div id="navbar-right">
          <ul class="nav navbar-nav navbar-right">
           <?php 
           $sql1="SELECT * FROM tbl_product_group where IdGroupProduct != '7' ";
           $query1= mysqli_query($conn, $sql1);
           while($row = mysqli_fetch_array($query1)){
            ?>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo($row["NameGroupProduct"]); 
              $IdGroupProduct = $row["IdGroupProduct"];
              ?>
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <?php 
                $sql2="SELECT * FROM tbl_groupdetail WHERE IdGroupProduct = ' $IdGroupProduct'";
                $query2= mysqli_query($conn, $sql2);
                while($row2 = mysqli_fetch_array($query2)){

                 ?>
                 <li><a href="index.php?page=group&&idgroupproduct=<?php echo($row['IdGroupProduct']) ?>&&idgroupdetail=<?php echo($row2['IdGroupDetail']) ?>"><?php echo($row2["NameGroupDetail"]); ?></a></li>
               <?php } ?>
             </ul>
           </li>
         <?php } ?>
         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tin tức thể hình
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <?php 
              $sql="SELECT * FROM tbl_news_group ";
              $query= mysqli_query($conn, $sql);
              while($row = mysqli_fetch_array($query)){

                ?>
                <li><a href="index.php?page=group_new&&id_news_group=<?php echo($row["IdNewsGroup"]) ?>"><?php echo($row["NameNewsGroup"]) ?></a></li>
              <?php } ?>
            </ul>
          </li>

          <li class="dropdown">
            <?php 
            $sql1="SELECT * FROM tbl_product_group where IdGroupProduct=7";
            $query1= mysqli_query($conn, $sql1);
            while($row = mysqli_fetch_array($query1)){
              $IdGroupProduct = $row["IdGroupProduct"];
              ?>
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo($row["NameGroupProduct"]); ?>
            <?php } ?>
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <?php 
              $sql2="SELECT * FROM tbl_groupdetail WHERE IdGroupProduct = '$IdGroupProduct'";
              $query2= mysqli_query($conn, $sql2);
              while($row2 = mysqli_fetch_array($query2)){ 

                ?>
                <li><a href="index.php?page=item&&idgroupproduct=<?php echo($IdGroupProduct) ?>&&idgroupdetail=<?php echo($row2['IdGroupDetail']) ?>"><?php echo($row2["NameGroupDetail"]); ?></a></li>
              <?php } ?>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nhà sản xuất<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <?php 
              $sql="SELECT * FROM tbl_producer ";
              $query= mysqli_query($conn, $sql);
              while($row = mysqli_fetch_array($query)){
                ?>
                <li><a href="index.php?page=group&&idproducer=<?php echo($row["IdProducer"]) ?>"><?php echo($row["NameProducer"]) ?></a></li>
              <?php } ?>
            </ul>
          </li>


          <li> 
            <a class="fa fa-twitter pull-left" style="color: #ffffff"></a>
            <a class="fa fa-envelope pull-left" style="color: #ffffff"></a>
            <a class="fa fa-facebook-square pull-left" style="color: #ffffff"></a>
            <a class="fa fa-youtube pull-left" style="color: #ffffff"></a>
          </li>
          <?php if(isset($_SESSION['admin'])){ ?>
            <li><a href="Admin/Index.php" style="border: 1px solid;font-weight: bold; color: #03f3ff;margin-left: 35px;border-radius: 5px;"><span class="glyphicon glyphicon-arrow-right" style="margin-right: 5px"></span>Admin page</a></li>
          <?php } ?>

        </ul>
      </div>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>  <!-- end menu top-->

<!--  menu cho màn di động end -->
<nav class="navbar navbar-default desktop" role="navigation" >
 <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <div class="logo"><a class="navbar-brand"data-toggle="modal" href='#modal-id1'><span class="fa fa-heartbeat" style="margin-right: 5px"></span>Hệ thống cửa hàng</a></div>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
 <div id="navbar-right">
   <ul class="nav navbar-nav navbar-right">
    <li><a href="#" id="whey_menutop">Whey protein</a></li>
    <li><a href="#" id="sua_menutop">Sữa tăng cân</a></li>
    <li><a href="#" id="tin_menutop">Tin tức thể hình</a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nhà sản xuất<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <?php 
        $sql="SELECT * FROM tbl_producer ";
        $query= mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($query)){
          ?>
          <li><a href="index.php?page=group&&idproducer=<?php echo($row["IdProducer"]) ?>"><?php echo($row["NameProducer"]) ?></a></li>
        <?php } ?>
      </ul>
    </li>

    <li> 
      <a class="fa fa-twitter pull-left" style="color: #ffffff"></a>
      <a class="fa fa-envelope pull-left" style="color: #ffffff"></a>
      <a class="fa fa-facebook-square pull-left" style="color: #ffffff"></a>
      <a class="fa fa-youtube pull-left" style="color: #ffffff"></a>
    </li>
    <?php if(isset($_SESSION['admin'])){ ?>
      <li><a href="Admin/Index.php" style="border: 1px solid;font-weight: bold; color: #03f3ff;margin-left: 35px;border-radius: 5px;"><span class="glyphicon glyphicon-arrow-right" style="margin-right: 5px"></span>Admin page</a></li>
    <?php } ?>

  </ul>
</div>
</div><!-- /.navbar-collapse -->
</div>
</nav>  <!-- end menu top-->
<div class="container" style="padding: 5px 0px">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 logo">
      <a href="index.php?page=home"><img src="upload/logooo3.png" alt="" style="" class="animated zoomIn"></a>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-5 col-lg-5">
     <div id="input_menu">
      <input type="text" class="form-control pull-left animated flash" placeholder="Tìm kiếm..." list="data"><span class="glyphicon glyphicon-search" class="animated flash"></span>
      <div class="result_search" id="result_search">
      </div>
      <div class="vuong"></div>
    </div>
  </div> 
  <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
    <?php if(!isset($_SESSION["user"])){ ?>
     <div id="dangnhap"><span class="btn btn-primary animated zoomIn" id="click_dangnhap"><span class="glyphicon glyphicon-user" style="margin-right: 5px"></span>Đăng nhập/Đăng ký</span></div>
   <?php }else{ ?>
    <div id="dangxuat">
      <p><span style="color: #409217;font-weight: bold;" class="xinchao"><i class="fa fa-smile" style="color: red; margin-right: 5px;"></i>Xin chào:</span> <span style="font-weight: bold;color: #f70000;"><?php echo($_SESSION["user"]) ?></span></p>
      <p><a href="View/logout.php" style="color: #409217;" class="logout"><span class="glyphicon glyphicon-log-out" style="margin-right: 5px"></span>Đăng xuất</a></p>
    </div>
  <?php } ?>
</div>
<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 ">
  <div id="menu-right"> <img src="upload/icon_cart.png" alt="" style="width: 25%" class="animated zoomIn">
   <a href="index.php?page=cart"><span>
    <?php 
    $number=0;
    if(isset($_SESSION["cart"])){
      foreach ($_SESSION["cart"] as $key=>$val) {
        $number += $val["number"];
      }

    }
    ?>



    Giỏ hàng(<?php echo($number); ?>)</span></a>
  </div>



</div> 
</div>
</div><!-- end menu giua -->
<div id="menu_duoi">
 <nav class="navbar navbar-inverse">
  <div class="container">

    <ul class="nav navbar-nav">
      <li class="active" style="font-size: 18px; "><a href="index.php?page=home"><span class="glyphicon glyphicon-home" style="color: #fffefe; margin-right: 5px; "></span>Trang chủ</a></li>

     <?php 
     $sql1="SELECT * FROM tbl_product_group where IdGroupProduct != '7' ";
     $query1= mysqli_query($conn, $sql1);
     while($row = mysqli_fetch_array($query1)){
      ?>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo($row["NameGroupProduct"]); 
        $IdGroupProduct = $row["IdGroupProduct"];
        ?>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <?php 
          $sql2="SELECT * FROM tbl_groupdetail WHERE IdGroupProduct = ' $IdGroupProduct'";
          $query2= mysqli_query($conn, $sql2);
          while($row2 = mysqli_fetch_array($query2)){

           ?>
           <li><a href="index.php?page=group&&idgroupproduct=<?php echo($row['IdGroupProduct']) ?>&&idgroupdetail=<?php echo($row2['IdGroupDetail']) ?>"><?php echo($row2["NameGroupDetail"]); ?></a></li>
         <?php } ?>
       </ul>
     </li>
   <?php } ?>
   <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tin tức thể hình
      <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <?php 
        $sql="SELECT * FROM tbl_news_group ";
        $query= mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($query)){

          ?>
          <li><a href="index.php?page=group_new&&id_news_group=<?php echo($row["IdNewsGroup"]) ?>"><?php echo($row["NameNewsGroup"]) ?></a></li>
        <?php } ?>
      </ul>
    </li>

    <li class="dropdown">
      <?php 
      $sql1="SELECT * FROM tbl_product_group where IdGroupProduct=7";
      $query1= mysqli_query($conn, $sql1);
      while($row = mysqli_fetch_array($query1)){
        $IdGroupProduct = $row["IdGroupProduct"];
        ?>
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo($row["NameGroupProduct"]); ?>
      <?php } ?>
      <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <?php 
        $sql2="SELECT * FROM tbl_groupdetail WHERE IdGroupProduct = '$IdGroupProduct'";
        $query2= mysqli_query($conn, $sql2);
        while($row2 = mysqli_fetch_array($query2)){ 

          ?>
          <li><a href="index.php?page=item&&idgroupproduct=<?php echo($IdGroupProduct) ?>&&idgroupdetail=<?php echo($row2['IdGroupDetail']) ?>"><?php echo($row2["NameGroupDetail"]); ?></a></li>
        <?php } ?>
      </ul>
    </li>
  </ul>
</div>
</nav>
</div>
</div>


<div id="modal_menu">
  <div class="modal fade" id="modal-id1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Hệ thống cửa hàng của wheyshop</h4>
        </div>
        <div class="modal-body">
          <p style="color: red">Thời gian mở cửa: 8-20h hằng ngày</p>
          <p><span class="sp_modalmenu">Hà Nội :</span> Số 1 Ngõ 318 La Thành Đống Đa Hà Nội (0981.335.858 - 0965.335.858</p>
          <p><span class="sp_modalmenu">Hải Phòng :</span> Số 175 Tôn Đức Thắng Quận Lê Chân Hải Phòng (0931.335.858)</p>
          <p><span class="sp_modalmenu">Vinh :</span> 48 An Dương Vương Thành Phố Vinh (0961.338.585)</p>
          <p><span class="sp_modalmenu">HCM :</span> 521/36 Cách Mạng Tháng 8 P13 Quận 10 TP Hồ Chí Minh (0971.338.585)</p>
          <p><span class="sp_modalmenu">CSKH :</span> 0965.28.78.68</p>
        </div>
      </div>
    </div>
  </div>
</div>