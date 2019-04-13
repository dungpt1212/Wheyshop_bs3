 <?php 
  if(isset($_GET["id_news_group"])){
    $id_news_group = $_GET["id_news_group"];
  }
    $sql= "select * from tbl_news_group where IdNewsGroup = '$id_news_group' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);



  ?>

 <div id="group_new">
         <div class="container">
           <div class="row">
             <div id="group_new_left">
               <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <h3>CHUYÊN MỤC:<?php echo($row["NameNewsGroup"]) ?></h3>
                 <ul class="list-unstyled">
                  <?php 
                      $sql= "select * from tbl_news_detail where IdNewsGroup = '$id_news_group' ";
                      $result = mysqli_query($conn, $sql);
                     while ( $row = mysqli_fetch_array($result)){
                   ?>
                   <li>
                     <img src="upload/<?php echo($row["UrlImage"]) ?>" class="thumbnail">
                     <div id="div_gr_new_right">
                       <a href="index.php?page=detail_new&&idnews=<?php echo($row["IdNews"]) ?>"><h4><?php echo($row["Title"]) ?></h4></a>
                       <p><?php echo($row["Discreption"]."[...]") ?></p>
                     </div>
                   </li>
                   <div style="clear: both;"></div>
                 <?php } ?>
                 </ul>
               </div>
             </div>
             <div class="detail_new_right ">
               <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                  <h3>Nhóm tin</h3>
                  <ul class="list-group">
                    <?php 
                      $sql= "select* from tbl_news_group ";
                      $result = mysqli_query($conn, $sql);
                      while($row = mysqli_fetch_array($result)){
                        $id=$row['IdNewsGroup'];
                        $sql1= "select count(*) as sl from tbl_news_detail where IdNewsGroup = '$id'";
                        $result1 = mysqli_query($conn, $sql1);
                        $row1 = mysqli_fetch_array($result1)
                    ?>
                      <a href="index.php?page=group_new&&id_news_group=<?php echo($id) ?>"><li class="list-group-item"><span class="glyphicon glyphicon-hand-right" style="margin-right: 5px"></span><?php echo($row["NameNewsGroup"]) ?>(<?php echo($row1["sl"]) ?>)</li></a>
                    <?php } ?>
                  </ul>
                  <img src="upload/left_image_ad.jpg"  class="img-responsive" style="margin-bottom: 10px">
                  <img src="upload/left_image_ad_2.jpg" class="img-responsive">
              </div>
               </div>
             </div>
           </div>
         </div>
       </div>