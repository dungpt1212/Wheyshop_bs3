<?php 
if(isset($_POST["btn_add"])){
	$nameproduct = $_POST["txt_nameproduct"];
	$originalprice = $_POST["num_originalprice"];
	$oldprice = $_POST["num_oldprice"];
	$newprice = $_POST["num_newprice"];
 	//Xử lí upload ảnh start
	if($_FILES['upload']['error']>0){
		echo '<br> Co loi trong viec upload len serve';
	}else
	move_uploaded_file($_FILES['upload']['tmp_name'], '../upload/'.$_FILES['upload']['name']);
	$urlimage = $_FILES['upload']['name'];
	 //Xử lí upload ảnh end
	$note = $_POST["txt_note"];
	$description = $_POST["txt_description"];
	$content = $_POST["txt_content"];
	$amount_original = $_POST["num_amount_original"];
	$amount = $_POST["num_amount"];
	$idgroup = $_POST["sl_idgroup"];
	$idgroupdetail = $_POST["sl_idgroupdetail"];
	$idproducer = $_POST["sl_idproducer"];
	$sql="INSERT INTO tbl_product_detail(NameProduct,OriginalPrice, OldPrice, NewPrice, UrlImage, Note, Description, ProductContent, AmountOriginal, Amount, IdGroupProduct, IdGroupDetail, IdProducer) VALUES ('$nameproduct','$originalprice','$oldprice','$newprice','$urlimage','$note','$description','$content','$amount_original','$amount','$idgroup','$idgroupdetail','$idproducer')";
	$query= mysqli_query($conn, $sql) or die('Them moi that bai');
	/*echo('<script>swal({
		title: "Congratulation",
		text: "Thêm mới thành công thành công",
		icon: "success",
		button: "OK",
	});</script>');*/
	header('location:index.php?page=manage_product');
}
?>

<div class="container page_update ">
	<h3>Thêm mới danh sách sản phẩm</h3>
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Tên sản phẩm:</label>
					<input type="text" class="form-control check_error" name="txt_nameproduct" value="">
					<span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
				</div>
				<div class="form-group">
					<label>Giá nhập kho:</label>
					<input type="number" class="form-control check_error" name="num_originalprice" value="">
					<span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
				</div>
				<div class="form-group">
					<label>Giá bán cũ:</label>
					<input type="number" class="form-control check_error" name="num_oldprice" value="">
					<span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
				</div>
				<div class="form-group">
					<label>Giá bán mới:</label>
					<input type="number" class="form-control check_error" name="num_newprice" value="">
					<span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
				</div>
				<div class="form-group">
					<label>Hình ảnh:</label>
					<input type="file" class="form-control check_error" name="upload" value="">
					<span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="form-group">
					<label>Chú thích:</label>
					<input type="text" class="form-control check_error" name="txt_note" value="">
					<span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
				</div>
				<div class="form-group">
					<label>Tóm tắt:</label>
					<input type="text" class="form-control check_error" name="txt_description" value="">
					<span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
				</div>
				<div class="form-group">
					<label>Nội dung:</label>
					<textarea class="form-control" rows="5" name="txt_content" id="editor1"></textarea>
					<script> 
						CKEDITOR.replace( 'editor1' );
					</script>
					<span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
				</div>
				<div class="form-group">
					<label>Số lượng nhập vào kho:</label>
					<input type="number" class="form-control check_error" name="num_amount_original" value="">
					<span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
				</div>
				<div class="form-group">
					<label>Số lượng còn lại:</label>
					<input type="number" class="form-control check_error" name="num_amount" value="">
					<span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
				</div>
				<div class="form-group">
					<label for="sel1">Nhóm sản phẩm</label>
					<select class="form-control" id="sel1" name="sl_idgroup">
						<?php 
						$sql1="SELECT * FROM tbl_product_group";
						$query1= mysqli_query($conn, $sql1);
						while($row1 = mysqli_fetch_array($query1)){

							?>
							<option value="<?php echo($row1["IdGroupProduct"])?>"><?php echo($row1["IdGroupProduct"]."(".$row1["NameGroupProduct"]).")" ?></option>

						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="sel1">Nhóm sp chi tiết</label>
					<select class="form-control" id="sel1" name="sl_idgroupdetail">
						<?php 
						$sql1="SELECT * FROM tbl_groupdetail";
						$query1= mysqli_query($conn, $sql1);
						while($row1 = mysqli_fetch_array($query1)){

							?>
							<option value="<?php echo($row1["IdGroupDetail"])?>"><?php echo($row1["IdGroupDetail"]."(".$row1["NameGroupDetail"]).")" ?></option>

						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="sel1">Nhà sản xuất</label>
					<select class="form-control" id="sel1" name="sl_idproducer">
						<?php 
						$sql1="SELECT * FROM tbl_producer";
						$query1= mysqli_query($conn, $sql1);
						while($row1 = mysqli_fetch_array($query1)){	
							?>

							<option value="<?php echo($row1["IdProducer"])?>"><?php echo($row1["IdProducer"]."(".$row1["NameProducer"]).")" ?></option>

						<?php } ?>
					</select>
				</div>

				<button type="submit" class="btn btn-success" name="btn_add">Add</button>
			</form>
		</div>
	</div>
</div>