<?php 
if(isset($_POST["btn_add"])){
	$taikhoan = $_POST["txt_taikhoan"];
	$matkhau = md5($_POST["txt_matkhau"]);
	$sql="SELECT * FROM tbl_admin where Username = '$taikhoan' ";
	$query= mysqli_query($conn, $sql);
	if(mysqli_num_rows($query) > 0){
		echo('<script>swal({
			title: "Tên đăng nhập bị trùng",
			icon: "warning",
			button: "OK",
		});</script>');
	}else{
		$sql="INSERT INTO `tbl_admin`(`Username`, `Pass`, `NameAdmin`, `Email`, `Address`, `Phone`) VALUES ('$taikhoan','$matkhau','','','','')";
		$query= mysqli_query($conn, $sql) or die("Thêm mới thất bại");
		echo('<script>swal({
			title: "Congratulation",
			text: "Thêm mới thành công thành công",
			icon: "success",
			button: "OK",
		});</script>');
	}
	
}
?>
<div class="container page_update animated flash ">
	<h3>Thêm tài khoản admin</h3>
	<div class="row">
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-lg-offset-4">
			<form method="post">
				<div class="form-group">
					<label for="email">Tên tài khoản</label>
					<input type="text" class="form-control" name="txt_taikhoan">
					<span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
				</div>
				<div class="form-group">
					<label for="pwd">Mật khẩu:</label>
					<input type="password" class="form-control" name="txt_matkhau">
					<span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
				</div>
				<div class="form-group confirm_pass">
					<label for="pwd">Xác nhận mật khẩu:</label>
					<input type="password" class="form-control" name="txt_xacnhanmatkhau">
					<span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
					<div class="alert_confirm_pass"><span class="glyphicon glyphicon-remove"></span></div>
					<div class="vuong_confirm_pass"></div>
				</div>
				<button type="submit" class="btn btn-success" name="btn_add">Thêm</button>
			</form>
		</div>
	</div>
	
</div>