<?php 	
		if(isset($_POST["result"])){
			$result = $_POST["result"];
			
		}
?>

<div class="list-group">
<?php
	include("../Lib/connection.php");
	$sql="SELECT * FROM tbl_product_detail where IdGroupProduct !=7 AND NameProduct like '%$result%'";
    $query= mysqli_query($conn, $sql);
    if(mysqli_num_rows($query)>0){
    	$number = mysqli_num_rows($query);
    	echo("<h4>Tìm thấy $number sản phẩm</h4>");
	while($row = mysqli_fetch_array($query)){ ?>
	  <a href="index.php?page=detail&&idproduct=<?php echo($row['IdProduct']) ?>" class="list-group-item">
	  	<img src="upload/<?php echo($row["UrlImage"]) ?>" alt="" class="img-thumbnail">
	  	<p><?php echo($row["NameProduct"]) ?></p>
	  </a>
  	<?php 
  			}
  		}else{
  			$sql="SELECT * FROM tbl_product_detail where IdGroupProduct = 7 AND NameProduct like '%$result%'";
		    $query= mysqli_query($conn, $sql);
		    if(mysqli_num_rows($query)>0){
		    	$number = mysqli_num_rows($query);
		    	echo("<h4>Tìm thấy $number sản phẩm</h4>");
			while($row = mysqli_fetch_array($query)){ ?>
			  <a href="index.php?page=item&&idgroupproduct=7&&idgroupdetail=21" class="list-group-item">
			  	<img src="upload/<?php echo($row["UrlImage"]) ?>" alt="" class="img-thumbnail">
			  	<p><?php echo($row["NameProduct"]) ?></p>
			</a>
  	<?php }
  		}else{
  	 ?>
  	<p>Không tìm thấy sản phẩm nào</p>
  <?php } } ?>
</div>