<?php 
  if(isset($_GET["id"])){
  	$id=$_GET["id"];
  	$sql="SELECT * FROM tbl_news_detail where IdNews='$id'";
	$query= mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($query);
	$idnewsgroup = $row["IdNewsGroup"];

	if(isset($_POST["btn_update"])){
		$idnews = $_POST["txt_idnews"];
		$title = $_POST["txt_title"];
		$discreption = $_POST["txt_discreption"];
		$content = $_POST["txt_content"];
		$urlimage = $_POST["txt_urlimage"];
		$idnewsgroup = $_POST["sl_idnewsgroup"];
		$sql="UPDATE `tbl_news_detail` SET `IdNews`='$idnews',`Title`='$title',`Discreption`='$discreption',`Content`='$content',`UrlImage`='$urlimage',`IdNewsGroup`='$idnewsgroup' WHERE IdNews='$id'";
		$query= mysqli_query($conn, $sql) or die("Update thất bại");
		echo('<script>swal({
              title: "Congratulation",
              text: "Update thành công",
              icon: "success",
              button: "OK",
              });</script>');
	}
  }




?>




<div class="container page_update ">
	<h3>Update danh sách chi tiết tin tức</h3>

	<form action="" method="post">
	  <div class="form-group">
	    <label >IdNews:</label>
	    <input type="text" class="form-control" name="txt_idnews" value="<?PHP echo($row["IdNews"]) ?>" readonly>
	  </div>
	  <div class="form-group">
	    <label>Title:</label>
	    <textarea class="form-control" rows="5" name="txt_title"><?PHP echo($row["Title"]) ?></textarea>
	    <span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
	  </div>
	  <div class="form-group">
	    <label>Discreption:</label>
	    <textarea class="form-control" rows="5" name="txt_discreption"><?PHP echo($row["Discreption"]) ?></textarea>
	    <span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
	  </div>
	  <div class="form-group">
	    <label>Content:</label>
	    <textarea class="form-control" rows="5" name="txt_content" id="editor3"><?PHP echo($row["Content"]) ?></textarea>
	    <script> 
	    	CKEDITOR.replace( 'editor3' );
	    </script>
	    <span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
	  </div>
	  <div class="form-group">
	    <label >UrlImage:</label>
	    <input type="text" class="form-control" name="txt_urlimage" value="<?PHP echo($row["UrlImage"]) ?>" >

	  </div>
	  <div class="form-group">
	    <label for="sel1">IdNewsGroup</label>
	      <select class="form-control" id="sel1" name="sl_idnewsgroup">
	      	<?php 
	      		$sql="SELECT * FROM tbl_news_group";
				$query= mysqli_query($conn, $sql);
				while($row = mysqli_fetch_array($query)){
					if($row["IdNewsGroup"] == $idnewsgroup){
	      	?>
	        <option value="<?php echo($row["IdNewsGroup"])?>" selected><?php echo($row["IdNewsGroup"]."(".$row["NameNewsGroup"]).")" ?></option>
	        <?php }else{ ?>
				 <option value="<?php echo($row["IdNewsGroup"])?>"><?php echo($row["IdNewsGroup"]."(".$row["NameNewsGroup"]).")" ?></option>

	        <?php } 

	    			} ?>
	      </select>
	  </div>
	  <button type="submit" class="btn btn-success" name="btn_update">Update</button>
	</form>
</div>