<?php 
if(isset($_POST["btn_add"])){
	$namegroupdetail = $_POST["txt_namegroupdetail"];
	$idgroup = $_POST["sl_idgroup"];
	$sql="SELECT MAX(IdGroupDetail) as max FROM tbl_groupdetail";
	$query= mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($query);
	$idgroupdetail = $row["max"] + 1;
	$sql="INSERT INTO `tbl_groupdetail`(`IdGroupDetail`, `NameGroupDetail`, `IdGroupProduct`) VALUES ('$idgroupdetail','$namegroupdetail','$idgroup')";
	$query= mysqli_query($conn, $sql) or die("Thêm mới thất bại");
	header('location: index.php?page=manage_group_detail');
}
?>
<div class="container page_update ">
	<h3>Thêm danh sách nhóm sản phẩm chi tiết</h3>
	<div class="row">
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-lg-offset-4">
			<form action="" method="post">
				<div class="form-group">
					<label>NameGroupDetail:</label>
					<input type="text" class="form-control check_error" name="txt_namegroupdetail" value="" placeholder="Nhập tên nhóm chi tiết">
					<span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
				</div>
				<div class="form-group">
					<label for="sel1">IdGroupProduct</label>
					<select class="form-control" id="sel1" name="sl_idgroup">
						<?php 
						$sql="SELECT * FROM tbl_product_group";
						$query= mysqli_query($conn, $sql);
						while($row = mysqli_fetch_array($query)){

							?>
							<option value="<?php echo($row["IdGroupProduct"])?>"><?php echo($row["IdGroupProduct"]."(".$row["NameGroupProduct"]).")" ?></option>

						<?php }  ?>
					</select>
				</div>
				<button type="submit" class="btn btn-success" name="btn_add">Add</button>
			</form>
		</div>
	</div>
	
</div>