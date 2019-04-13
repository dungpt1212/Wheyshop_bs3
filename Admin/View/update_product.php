<style>
	img{
		width: 100%;
	}
</style>
<?php 
if(isset($_GET["id"])){
	$id=$_GET["id"];
	$sql="SELECT * FROM tbl_product_detail where IdProduct='$id'";
	$query= mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($query);
	

	if(isset($_POST["btn_update"])){
		/*$idproduct = $_POST["txt_idproduct"];*/
		$nameproduct = $_POST["txt_nameproduct"];
		$originalprice = $_POST["num_originalprice"];
		$oldprice = $_POST["num_oldprice"];
		$newprice = $_POST["num_newprice"];

		 //Xử lí upload ảnh start
		if($_FILES['upload']['error']>0 || !$_FILES['upload'] ){
			echo '<br> Co loi trong viec upload len serve';
			$urlimage = $row['UrlImage'];
		}else{
			move_uploaded_file($_FILES['upload']['tmp_name'], '../upload/'.$_FILES['upload']['name']);
			$urlimage = $_FILES['upload']['name'];
		}
		 //Xử lí upload ảnh end

		$note = $_POST["txt_note"];
		$description = $_POST["txt_description"];
		$content = $_POST["txt_content"];
		$amount_original = $_POST["num_amount_original"];
		$amount = $_POST["num_amount"];
		$idgroup = $_POST["sl_idgroup"];
		$idgroupdetail = $_POST["sl_idgroupdetail"];
		$idproducer = $_POST["sl_idproducer"];
		$sql="UPDATE tbl_product_detail SET NameProduct='$nameproduct',OriginalPrice='$originalprice',OldPrice='$oldprice',NewPrice='$newprice',UrlImage='$urlimage',Note='$note',Description='$description',ProductContent='$content',AmountOriginal='$amount_original',Amount='$amount',IdGroupProduct='$idgroup',IdGroupDetail='$idgroupdetail',IdProducer=idproducer WHERE IdProduct='$id'";
		$query= mysqli_query($conn, $sql) or die('Update that bai');
		/*echo('<script>swal({
			title: "Congratulation",
			text: "Update thành công",
			icon: "success",
			button: "OK",
		});</script>');*/
		header('location:index.php?page=manage_product');
	}
}


?>

<div class="container page_update ">
	<div class="row">
		<h3>Update danh sách sản phẩm</h3>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label >MaSP:</label>
					<input type="text" class="form-control" name="txt_idproduct" value="<?PHP echo($row["IdProduct"]) ?>" readonly>
				</div>
				<div class="form-group">
					<label>Tên sản phẩm:</label>
					<input type="text" class="form-control check_error" name="txt_nameproduct" value="<?PHP echo($row["NameProduct"]) ?>">
					<span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
				</div>
				<div class="form-group">
					<label>Giá nhập kho:</label>
					<input type="number" class="form-control check_error" name="num_originalprice" value="<?PHP echo($row["OriginalPrice"]) ?>">
					<span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
				</div>
				<div class="form-group">
					<label>Giá bán cũ:</label>
					<input type="number" class="form-control check_error" name="num_oldprice" value="<?PHP echo($row["OldPrice"]) ?>">
					<span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
				</div>
				<div class="form-group">
					<label>Giá bán mới:</label>
					<input type="number" class="form-control check_error" name="num_newprice" value="<?PHP echo($row["NewPrice"]) ?>">
					<span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
				</div>
				<div class="form-group">
					<label>Hình ảnh:</label>
					<input type="file" class="form-control check_error" name="upload">
					<span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
				</div>
				<img src="../upload/<?PHP echo($row["UrlImage"]) ?>" alt="">
				
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="form-group">
					<label>Chú thích:</label>
					<input type="text" class="form-control check_error" name="txt_note" value="<?PHP echo($row["Note"]) ?>">
					<span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
				</div>
				<div class="form-group">
					<label>Tóm tắt:</label>
					<input type="text" class="form-control check_error" name="txt_description" value="<?PHP echo($row["Description"]) ?>">
					<span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
				</div>
				<div class="form-group">
					<label>Nội dung:</label>
					<textarea class="form-control" rows="5" name="txt_content" id="editor1"><?PHP echo($row["ProductContent"]) ?></textarea>
					<script> 
						CKEDITOR.replace( 'editor1' );
					</script>
					<span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
				</div>
				<div class="form-group">
					<label>Số lượng nhập vào kho:</label>
					<input type="number" class="form-control check_error" name="num_amount_original" value="<?PHP echo($row["AmountOriginal"]) ?>">
					<span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
				</div>
				<div class="form-group">
					<label>Số lượng còn lại:</label>
					<input type="number" class="form-control check_error" name="num_amount" value="<?PHP echo($row["Amount"]) ?>">
					<span class="label label-warning lb_error"><span class="glyphicon glyphicon-remove" style="margin-right: 5px"></span>Không được để trống</span>
				</div>
				<div class="form-group">
					<label for="sel1">Nhóm sản phẩm</label>
					<select class="form-control" id="sel1" name="sl_idgroup">
						<?php 
						$sql1="SELECT * FROM tbl_product_group";
						$query1= mysqli_query($conn, $sql1);
						while($row1 = mysqli_fetch_array($query1)){
							if($row1["IdGroupProduct"] == $row["IdGroupProduct"]){
								?>
								<option value="<?php echo($row1["IdGroupProduct"])?>" selected><?php echo($row1["IdGroupProduct"]."(".$row1["NameGroupProduct"]).")" ?></option>
							<?php }else{ ?>
								<option value="<?php echo($row1["IdGroupProduct"])?>"><?php echo($row1["IdGroupProduct"]."(".$row1["NameGroupProduct"]).")" ?></option>

							<?php } 

						} ?>
					</select>
				</div>
				<div class="form-group">
					<label for="sel1">Nhóm sản phẩm chi tiết</label>
					<select class="form-control" id="sel1" name="sl_idgroupdetail">
						<?php 
						$sql1="SELECT * FROM tbl_groupdetail";
						$query1= mysqli_query($conn, $sql1);
						while($row1 = mysqli_fetch_array($query1)){
							if($row1["IdGroupDetail"] == $row["IdGroupDetail"]){
								?>
								<option value="<?php echo($row1["IdGroupDetail"])?>" selected><?php echo($row1["IdGroupDetail"]."(".$row1["NameGroupDetail"]).")" ?></option>
							<?php }else{ ?>
								<option value="<?php echo($row1["IdGroupDetail"])?>"><?php echo($row1["IdGroupDetail"]."(".$row1["NameGroupDetail"]).")" ?></option>

							<?php } 

						} ?>
					</select>
				</div>
				<div class="form-group">
					<label for="sel1">Nhà sản xuất</label>
					<select class="form-control" id="sel1" name="sl_idproducer">
						<?php 
						$sql1="SELECT * FROM tbl_producer";
						$query1= mysqli_query($conn, $sql1);
						while($row1 = mysqli_fetch_array($query1)){
							if($row["IdProducer"] != ""){
								if($row1["IdProducer"] == $row["IdProducer"]){
									?>
									<option value="<?php echo($row1["IdProducer"])?>" selected><?php echo($row1["IdProducer"]."(".$row1["NameProducer"]).")" ?></option>
								<?php }else{ ?>
									<option value="<?php echo($row1["IdProducer"])?>"><?php echo($row1["IdProducer"]."(".$row1["NameProducer"]).")" ?></option>

								<?php } 
							}else echo("aaa");
						} ?>
					</select>
				</div>

				<button type="submit" class="btn btn-success" name="btn_update">UPDATE</button>
			</form>
		</div>
	</div>
</div>