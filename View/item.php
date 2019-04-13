<?php 
    if(isset($_GET["idgroupdetail"]) && isset($_GET["idgroupproduct"])){
      $idgroupdetail = $_GET["idgroupdetail"];
      $idgroupproduct = $_GET["idgroupproduct"];


    }


 ?>






<div id="item"> <!-- div item start -->
        <div class="container">
          <div class="row">
            <div id="item_left"> <!-- item left start -->
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <h3>Nhóm phụ kiện</h3>
                <div class="list-group">
                  <?php 
                    $sql1="SELECT * FROM tbl_groupdetail where IdGroupProduct=7";
                    $query1= mysqli_query($conn, $sql1);
                    while($row1 = mysqli_fetch_array($query1)){
                     
                  ?>
                  <a href="index.php?page=item&&idgroupproduct=<?php echo($row1['IdGroupProduct']) ?>&&idgroupdetail=<?php echo($row1['IdGroupDetail']) ?>" class="list-group-item"><span class="glyphicon glyphicon-pushpin" style="margin-right: 5px; font-size: 15px"></span><?php echo($row1["NameGroupDetail"]); ?></a>
                  <?php } ?>
                </div>
                <img src="upload/qc_item.jpg " class="img-responsive">
              </div>
            </div> <!-- item left end -->

            <div id="item_right"> <!-- item_right start -->
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                 <?php 
                    $sql="SELECT * FROM tbl_groupdetail where IdGroupDetail=$idgroupdetail";
                    $query= mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($query);
                  ?>
                <h3><?php echo($row["NameGroupDetail"]) ?></h3>
                <div id="search_item_right">
                  <p>Sắp xếp theo: <span><select>
                    <option>--------------Select--------------</option>
                    <option>Theo giá</option>
                    <option>Theo tên</option>
                  </select></span></p>
                </div>
                <div class="container-fluid">
                  <div class="row">
                     <?php 
                        $sql= "select* from tbl_product_detail where IdGroupDetail = '$idgroupdetail' ";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_array($result)){

                      ?>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="thumbnail" style="position: relative;" >
                          <img src="upload/<?PHP echo($row["UrlImage"]) ?>">
                          <div class="caption">
                            <p style="min-height: 65px;"><?PHP echo($row["NameProduct"]) ?></p>
                            <p>
                              <span style="color: #8DBCE9; text-decoration: line-through;">
                              <?PHP 
                                        /*echo($row["OldPrice"]);*/

                                  if($row["OldPrice"]!=0){
                                      echo(number_format($row["OldPrice"])."đ");
                              }else echo '';
                                    ?>
                            </span><span style="font-weight: bold; margin-left:17px"><?PHP echo(number_format($row["NewPrice"])."đ") ?></span></p>
                            <p>
                              <a href="View/addcart.php?idproduct=<?php echo($row["IdProduct"]) ?>" data-toggle="modal" class="btn btn-primary btn_muangay" hu="tooltip" title="Thêm sản phẩm này vào giỏ hàng">Mua ngay</a>
                            </p>
                          </div>
                           <?php  
                            if($row["OldPrice"] != 0){
                                $oldprice =  $row["OldPrice"];
                                $newprice =  $row["NewPrice"];
                                $km = 100- round(($newprice/$oldprice)*100);

                              ?>
                          <div id="khuyenmai"><p><?php echo("-".$km."%"); ?></p></div>
                            <?php } ?>
                        </div>

                    </div>
                  <?php } ?>

                  </div>
                </div>
              </div>
            </div> <!-- item_right end -->
          </div>
        </div>
      </div><!-- div item end -->
