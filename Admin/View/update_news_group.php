<?php 
if(isset($_GET["id"])){
	$id=$_GET["id"];
	$sql="SELECT * FROM tbl_news_group where IdNewsGroup='$id'";
	$query= mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($query);

	if(isset($_POST["btn_update"])){
		$idnewsgroup = $_POST["txt_idnewsgroup"];
		$namenewsgroup = $_POST["txt_namenewsgroup"];
		$sql="UPDATE `tbl_news_group` SET `IdNewsGroup`='$idnewsgroup',`NameNewsGroup`='$namenewsgroup' WHERE IdNewsGroup ='$id'";
		$query= mysqli_query($conn, $sql) or die("Update thất bại");
		header('location: index.php?page=manage_news_group');
	}
}


?>
<div class="container page_update ">
	<h3>Update danh sách nhóm tin tức</h3>
	<div class="row">
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-lg-offset-4">
			<form action="" method="post">
				<div class="form-group">
					<label >IdNewsGroup:</label>
					<input type="text" class="form-control" name="txt_idnewsgroup" value="<?PHP echo($row["IdNewsGroup"]) ?>" readonly>
				</div>
				<div class="form-group">
					<label >NameNewsGroup:</label>
					<input type="text" class="form-control" name="txt_namenewsgroup" value="<?PHP echo($row["NameNewsGroup"]) ?>" >
					<span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
				</div>
				
				<button type="submit" class="btn btn-success" name="btn_update">Update</button>
			</form>
		</div>
	</div>
</div>