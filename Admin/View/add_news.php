<?php 
	if(isset($_POST["btn_add"])){
		$title = $_POST["txt_title"];
		$discreption = $_POST["txt_discreption"];
		$content = $_POST["txt_content"];
		$urlimage = $_POST["txt_urlimage"];
		$idnewsgroup = $_POST["sl_idnewsgroup"];
		$sql="INSERT INTO `tbl_news_detail`(`Title`, `Discreption`, `Content`, `UrlImage`, `IdNewsGroup`) VALUES ('	$title','	$discreption','	$content','	$urlimage','$idnewsgroup')";
		$query= mysqli_query($conn, $sql) or die("Thêm mới thất bại");
		echo('<script>swal({
              title: "Congratulation",
              text: "Thêm mới thành công thành công",
              icon: "success",
              button: "OK",
              });</script>');
	}
  


?>




<div class="container page_update ">
	<h3>Thêm danh sách chi tiết tin tức</h3>
	<form action="" method="post">
	  <div class="form-group">
	    <label>Title:</label>
	    <textarea class="form-control" rows="5" name="txt_title"></textarea>
	    <span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
	  </div>
	  <div class="form-group">
	    <label>Discreption:</label>
	    <textarea class="form-control" rows="5" name="txt_discreption"></textarea>
	    <span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
	  </div>
	  <div class="form-group">
	    <label>Content:</label>
	    <textarea class="form-control" rows="5" name="txt_content" id="editor3"></textarea>
	    <script> 
	    	CKEDITOR.replace( 'editor3' );
	    </script>
	    <span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
	  </div>
	  <div class="form-group">
	    <label >UrlImage:</label>
	    <input type="text" class="form-control" name="txt_urlimage" value="" >
			<span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
	  </div>
	  <div class="form-group">
	    <label for="sel1">IdNewsGroup</label>
	      <select class="form-control" id="sel1" name="sl_idnewsgroup">
	      	<?php 
	      		$sql="SELECT * FROM tbl_news_group";
				$query= mysqli_query($conn, $sql);
				while($row = mysqli_fetch_array($query)){
				
	      	?>
				 <option value="<?php echo($row["IdNewsGroup"])?>"><?php echo($row["IdNewsGroup"]."(".$row["NameNewsGroup"]).")" ?></option>

	        <?php }  ?>
	      </select>
	  </div>
	  <button type="submit" class="btn btn-success" name="btn_add">Add</button>
	</form>
</div>