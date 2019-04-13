<?php 
if(isset($_GET["id"])){
	$id=$_GET["id"];
	$sql="SELECT * FROM tbl_groupdetail where IdGroupDetail='$id'";
	$query= mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($query);
	$idgroupproduct = $row["IdGroupProduct"];

	if(isset($_POST["btn_update"])){
		$idgroupdetail = $_POST["txt_idgroupdetail"];
		$namegroupdetail = $_POST["txt_namegroupdetail"];
		$idgroup = $_POST["sl_idgroup"];
		$sql="UPDATE `tbl_groupdetail` SET `IdGroupDetail`= '$idgroupdetail',`NameGroupDetail`='$namegroupdetail', IdGroupProduct='$idgroup' WHERE IdGroupDetail='$id' ";
		$query= mysqli_query($conn, $sql) or die("Update thất bại");
		header('location: index.php?page=manage_group_detail');
	}
}
?>
<div class="container page_update ">
	<h3>Update danh sách nhóm sản phẩm chi tiết</h3>
	<div class="row">
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-lg-offset-4">
			<form action="" method="post">
				<div class="form-group">
					<label >IdGroupDetail:</label>
					<input type="text" class="form-control" name="txt_idgroupdetail" value="<?PHP echo($row["IdGroupDetail"]) ?>" readonly>

				</div>
				<div class="form-group">
					<label>NameGroupDetail:</label>
					<input type="text" class="form-control check_error" name="txt_namegroupdetail" value="<?PHP echo($row["NameGroupDetail"]) ?>">
					<span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
				</div>
				<div class="form-group">
					<label for="sel1">IdGroupProduct</label>
					<select class="form-control" id="sel1" name="sl_idgroup">
						<?php 
						$sql="SELECT * FROM tbl_product_group";
						$query= mysqli_query($conn, $sql);
						while($row = mysqli_fetch_array($query)){
							if($row["IdGroupProduct"] == $idgroupproduct){
								?>
								<option value="<?php echo($row["IdGroupProduct"])?>" selected><?php echo($row["IdGroupProduct"]."(".$row["NameGroupProduct"]).")" ?></option>
							<?php }else{ ?>
								<option value="<?php echo($row["IdGroupProduct"])?>"><?php echo($row["IdGroupProduct"]."(".$row["NameGroupProduct"]).")" ?></option>

							<?php } 

						} ?>
					</select>
				</div>
				<button type="submit" class="btn btn-success" name="btn_update">Update</button>
			</form>
		</div>
	</div>
	
</div>