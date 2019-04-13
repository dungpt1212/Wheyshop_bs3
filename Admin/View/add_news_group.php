<?php 
if(isset($_POST["btn_add"])){
	$sql="SELECT MAX(IdNewsGroup) as max FROM tbl_news_group";
	$query= mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($query);
	$idnewsgroup = $row["max"] + 1;
	$namenewsgroup = $_POST["txt_namenewsgroup"];
	$sql="INSERT INTO `tbl_news_group`(`IdNewsGroup`, `NameNewsGroup`) VALUES ('$idnewsgroup','$namenewsgroup')";
	$query= mysqli_query($conn, $sql) or die("Thêm mới thất bại");
	header('location: index.php?page=manage_news_group');
}
?>
<div class="container page_update ">
	<h3>Thêm danh sách nhóm tin tức</h3>
	<div class="row">
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-lg-offset-4">
			<form action="" method="post">
				<div class="form-group">
					<label >NameNewsGroup:</label>
					<input type="text" class="form-control" name="txt_namenewsgroup" value="" >
					<span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
				</div>

				<button type="submit" class="btn btn-success" name="btn_add">Add</button>
			</form>
		</div>
	</div>
	
</div>