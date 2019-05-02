<hr style="opacity: 0">
<div id="slide">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">

            <?php 
            $sql="SELECT * FROM tbl_slide";
            $query= mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($query)){
              ?>

              <div class="item <?php if($row['Active'] == 1) echo("active") ?>">
                <img src="<?php echo($row['Link']) ?>" style="width: 752px; height: 383px">
                <div class="carousel-caption">
                 <h3>Whey shop</h3>
                 <p>Chăm sóc thể hình của bạn</p>
               </div>
             </div>

           <?php } ?>

         </div>

         <!-- Left and right controls -->
         <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div><!-- end slide left col-->
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 slide_right">
      <a href="Index.php?page=home"><img src="upload/img_slide_right1.jpg" alt="" style="width: 100%; height: 190px; margin-bottom: 2px"></a>
      <a href="Index.php?page=home"><img src="upload/img_slide_right2.jpg" alt="" style="width: 100%; height: 190px"></a>
    </div><!--  end slide right col -->
  </div> 
</div> <!-- end div slide -->
</div>

<script type="text/javascript">
  $(document).ready(function(){
   $("#myCarousel").carousel({
     interval : 100000,
     pause: false
   });
 });
</script>