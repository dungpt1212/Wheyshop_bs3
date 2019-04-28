<div id="main">
  <div class="container cn">
    <div class="row" class="san_pham_noi_bat">
      <h3 style="">Sản phẩm xem nhiều </h3>
      <hr>
      <?php 
            $sql= "select* from tbl_product_detail where IdGroupProduct !='7' and Views !='0' order by Views DESC LIMIT 6"; // chọn sản phẩm nổi bật dựa vào số Views
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
             ?>
             <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 kc">
              <a href="index.php?page=detail&&idproduct=<?php echo($row['IdProduct']) ?>">
               <div class="thumbnail text-center">
                 <img src="upload/<?PHP echo($row["UrlImage"]) ?>">
                 <div class="caption">
                   <p class="p_1" style="height: 36px">
                    <?PHP echo($row["Note"]) ?>
                  </p>
                  <h5 style="height: 50px"> <?PHP echo($row["NameProduct"]) ?></h5>
                  
                  <p class="p_1"">
                    <span style="text-decoration: line-through;">
                      <?PHP 
                      /*echo($row["OldPrice"]);*/

                      if($row["OldPrice"] !=0 ){
                        echo(number_format($row["OldPrice"])."đ");
                      }else echo '';
                      ?>

                    </span><br>
                    <span style="font-weight: bold; color: black; text-decoration: none;"><?PHP echo(number_format($row["NewPrice"])."đ") ?></span>

                  </p>

                  <p>
                   <a href="index.php?page=detail&&idproduct=<?php echo($row['IdProduct']) ?>" class="btn btn-default btn-xs"><b><span class="fa fa-eye" style="margin-right: 5px"></span>Chi tiết</b></a>
                   <a href="View/addcart.php?idproduct=<?php echo($row['IdProduct']) ?>" class="btn btn-primary btn-xs"><b><span class="fa fa-cart-plus" style="margin-right: 5px"></span>Mua ngay</b></a>
                 </p>
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
         </a>
       </div>
     <?php } ?>
   </div> 
 </div>
 <div class="container-fluid cf" style="background: #EC5C61">
  <div class="container" style="padding-bottom: 60px;">
    <div class="row">
      <h3 style="background: #ec5c61;">Sản phẩm khuyến mại</h3>
      <hr>
      <?php 
      $rand = rand(1,6);
      $sql= "select* from tbl_product_detail where OldPrice != '' and IdGroupProduct !='7' order by rand() limit 6  ";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_array($result)){
       ?>
       <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 kc">
        <a href="index.php?page=detail&&idproduct=<?php echo($row['IdProduct']) ?>">
         <div class="thumbnail text-center">
           <img src="upload/<?PHP echo($row["UrlImage"]) ?>">
           <div class="caption">
             <p class="p_1" style="height: 36px">
              <?PHP echo($row["Note"]) ?>
            </p>
            <h5 style="height: 50px"> <?PHP echo($row["NameProduct"]) ?></h5>
            <div id="sao">
             <!--  <?php 
             $a=rand(3,5);
             for ($i=0; $i < $a ; $i++) { 
                                   # code...
              ?>
              <p class="glyphicon glyphicon-star sao" style="color: red"></p>
                          <?php } ?> -->

           </div>
           <p class="p_1"">
            <span style="text-decoration: line-through;">
              <?PHP 
              /*echo($row["OldPrice"]);*/

              if($row["OldPrice"]!=0){
                echo(number_format($row["OldPrice"])."đ");
              }else echo '';
              ?>

            </span><br>
            <span style="font-weight: bold; color: black; text-decoration: none;"><?PHP echo(number_format($row["NewPrice"])."đ") ?></span>

          </p>
          <p>
           <a href="index.php?page=detail&&idproduct=<?php echo($row['IdProduct']) ?>" class="btn btn-default btn-xs"><b><span class="fa fa-eye" style="margin-right: 5px"></span>Chi tiết</b></a>
           <a href="View/addcart.php?idproduct=<?php echo($row['IdProduct']) ?>" class="btn btn-primary btn-xs"><b><span class="fa fa-cart-plus" style="margin-right: 5px"></span>Mua ngay</b></a>
         </p>
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
 </a>
</div>
<?php } ?>
</div>
</div>
</div>
<!-- <div class="container cn"> 
  <div class="row">
    <h3 class="animated zoomIn">Sản phẩm bán chạy</h3>
    <hr>
    <?php 
    $sql= "select* from tbl_product_detail where IdGroupProduct !='7' ORDER BY Amount DESC limit 6";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)){
     ?>
     <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 kc">
      <a href="index.php?page=detail&&idproduct=<?php echo($row['IdProduct']) ?>">
       <div class="thumbnail text-center">
         <img src="upload/<?PHP echo($row["UrlImage"]) ?>">
         <div class="caption">
           <p class="p_1" style="height: 36px">
            <?PHP echo($row["Note"]) ?>
          </p>
          <h5 style="height: 50px"> <?PHP echo($row["NameProduct"]) ?></h5>
          <div id="sao">
            <?php 
            $a=rand(3,5);
            for ($i=0; $i < $a ; $i++) { 
                                    # code...
             ?>
             <p class="glyphicon glyphicon-star" style="color: red"></p>
           <?php } ?>

         </div>
         <p class="p_1"">
          <span style="text-decoration: line-through;">
            <?PHP 
            /*echo($row["OldPrice"]);*/

            if($row["OldPrice"]!=0){
              echo(number_format($row["OldPrice"])."đ");
            }else echo '';
            ?>

          </span><br>
          <span style="font-weight: bold; color: black; text-decoration: none;"><?PHP echo(number_format($row["NewPrice"])."đ") ?></span>

        </p>

        <p>
         <a href="index.php?page=detail&&idproduct=<?php echo($row['IdProduct']) ?>" class="btn btn-default btn-xs"><b><span class="fa fa-eye" style="margin-right: 5px"></span>Chi tiết</b></a>
         <a href="View/addcart.php?idproduct=<?php echo($row['IdProduct']) ?>" class="btn btn-primary btn-xs"><b><span class="fa fa-cart-plus" style="margin-right: 5px"></span>Mua ngay</b></a>
       </p>
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
</a>
</div>
<?php } ?>
</div>  
</div> -->
<div class="container-fluid cf" style="background: #F5B53C">
  <div class="container" style="padding-bottom: 60px;">
    <div class="row h3_sua">
      <h3 style="background: #f5b53c;">Sữa tăng cân</h3>
      <hr>
      <?php 
      $sql= "select* from tbl_product_detail where IdGroupProduct = '2' order by rand() limit 6";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_array($result)){
       ?>
       <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 kc">
        <a href="index.php?page=detail&&idproduct=<?php echo($row['IdProduct']) ?>">
         <div class="thumbnail text-center">
           <img src="upload/<?PHP echo($row["UrlImage"]) ?>">
           <div class="caption">
             <p class="p_1" style="height: 36px">
              <?PHP echo($row["Note"]) ?>
            </p>
            <h5 style="height: 50px"> <?PHP echo($row["NameProduct"]) ?></h5>
            <div id="sao">
              <!-- <?php 
              $a=rand(3,5);
              for ($i=0; $i < $a ; $i++) { 
                                    # code...
               ?>
               <p class="glyphicon glyphicon-star" style="color: red"></p>
                           <?php } ?> -->

           </div>
           <p class="p_1"">
            <span style="text-decoration: line-through;">
              <?PHP 
              /*echo($row["OldPrice"]);*/

              if($row["OldPrice"]!=0){
                echo(number_format($row["OldPrice"])."đ");
              }else echo '';
              ?>

            </span><br>
            <span style="font-weight: bold; color: black; text-decoration: none;"><?PHP echo(number_format($row["NewPrice"])."đ") ?></span>

          </p>

          <p>
           <a href="index.php?page=detail&&idproduct=<?php echo($row['IdProduct']) ?>" class="btn btn-default btn-xs"><b><span class="fa fa-eye" style="margin-right: 5px"></span>Chi tiết</b></a>
           <a href="View/addcart.php?idproduct=<?php echo($row['IdProduct']) ?>" class="btn btn-primary btn-xs"><b><span class="fa fa-cart-plus" style="margin-right: 5px"></span>Mua ngay</b></a>
         </p>
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
 </a>
</div>
<?php } ?>
</div>
</div>
</div>
<div class="container cn">
  <div class="row h3_whey">
    <h3>Whey protein</h3>
    <hr>
    <?php 
    $sql= "select* from tbl_product_detail where IdGroupProduct = '1' order by rand() limit 6";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)){
     ?>
     <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 kc">
      <a href="index.php?page=detail&&idproduct=<?php echo($row['IdProduct']) ?>">
       <div class="thumbnail text-center">
         <img src="upload/<?PHP echo($row["UrlImage"]) ?>">
         <div class="caption">
           <p class="p_1" style="height: 36px">
            <?PHP echo($row["Note"]) ?>
          </p>
          <h5 style="height: 50px"> <?PHP echo($row["NameProduct"]) ?></h5>
          <div id="sao">
           <!--  <?php 
           $a=rand(3,5);
           for ($i=0; $i < $a ; $i++) { 
                                   # code...
            ?>
            <p class="glyphicon glyphicon-star" style="color: red"></p>
                      <?php } ?> -->

         </div>
         <p class="p_1"">
          <span style="text-decoration: line-through;">
            <?PHP 
            /*echo($row["OldPrice"]);*/

            if($row["OldPrice"]!=0){
              echo(number_format($row["OldPrice"])."đ");
            }else echo '';
            ?>

          </span><br>
          <span style="font-weight: bold; color: black; text-decoration: none;"><?PHP echo(number_format($row["NewPrice"])."đ") ?></span>

        </p>

        <p>
         <a href="index.php?page=detail&&idproduct=<?php echo($row['IdProduct']) ?>" class="btn btn-default btn-xs"><b><span class="fa fa-eye" style="margin-right: 5px"></span>Chi tiết</b></a>
         <a href="View/addcart.php?idproduct=<?php echo($row['IdProduct']) ?>" class="btn btn-primary btn-xs"><b><span class="fa fa-cart-plus" style="margin-right: 5px"></span>Mua ngay</b></a>
       </p>
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
</a>
</div>
<?php } ?>
</div>
</div>
</div>

<div class="container-fluid " style="background: #8DC63F">
  <div class="container h3_tin">
    <div class="row">
      <ul class="ul_main_tintuc">
        <h3>TIN TỨC THỂ HÌNH</h3>
        <hr class="hr_tintuc" color="#DDAEAE">
        <?php 
        $sql= "select* from tbl_news_detail order by rand() limit 4";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
          ?>
          <a href="index.php?page=detail_new&&idnews=<?php echo($row["IdNews"]) ?>">
            <li>
              <img src="upload/<?php echo($row["UrlImage"]) ?>" class="thumbnail" height="190px" width="245px" >
              <p style="font-weight: bold; font-size: 20px; min-height: 83px"><a href="index.php?page=detail_new&&idnews=<?php echo($row["IdNews"]) ?>"><?php echo($row["Title"]) ?></p></a>

              <p style="text-overflow: ellipsis;overflow: hidden;color: #83846a;height: 96px;border-top: 1px solid #ccc;text-indent: 50px;text-align: justify;padding-top: 10px;"><?php echo($row["Discreption"]) ?>[...]</p>
              <p><a href="index.php?page=detail_new&&idnews=<?php echo($row["IdNews"]) ?>" style="text-decoration: underline; color: #000000;"><span class="glyphicon glyphicon-send" style="margin-right: 5px"></span>click để xem thêm...</a></p>
            </li>
          </a>
          <?PHP
        }
        ?>
      </ul>
    </div>
  </div>
</div>