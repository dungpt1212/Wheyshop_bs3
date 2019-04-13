<?php 
include("../../Lib/connection.php");
if(isset($_POST["year"]) && isset($_POST["month"])){
	$year = $_POST["year"];
	$month = $_POST["month"];
	$sql = "SELECT tbl_product_detail.IdProduct,tbl_product_detail.NameProduct,tbl_product_detail.AmountOriginal, tbl_product_detail.NewPrice, tbl_product_detail.OriginalPrice, SUM(tbl_bill_detail.Number) as soluongban, COUNT(tbl_bill_detail.IdProduct) as songuoimua FROM tbl_bill INNER JOIN tbl_bill_detail ON tbl_bill.IdBill = tbl_bill_detail.IdBill INNER JOIN tbl_product_detail on tbl_bill_detail.IdProduct = tbl_product_detail.IdProduct WHERE YEAR(Time) = $year AND MONTH(Time) = $month AND tbl_bill.Status = 'Hoàn tất' GROUP BY tbl_product_detail.IdProduct  ORDER BY soluongban DESC";
	$query = mysqli_query($conn, $sql);
	if(mysqli_num_rows($query) > 0){
		?>
		<p>Thống kê doanh thu tháng <?php echo($month) ?> năm <?php echo($year) ?></p>
		<table class="table table-bordered">
			<thead>
				<tr class="danger">
					<th>STT</th>
					<th>TenSP</th>
					<th>Số lượng bán</th>
					<th>Số hóa đơn</th>
					<th>Tiền thu về</th>
					<th>Tiền lãi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$stt = 0;
				$soluongban = 0;
				$soluongnguoimua = 0;
				$tongtienthuve = 0;
				$tongtienlai=0;
				while($row = mysqli_fetch_array($query)){ 
					$stt++;
					$idproduct = $row["IdProduct"];
					?>
					<tr>
						<td><?php echo($stt) ?></td>
						<td><?php echo($row["NameProduct"]) ?></td>
						<td>
							<?php 
							echo($row["soluongban"]);
							$soluongban += $row["soluongban"];
							?>	
						</td>
						<td>
							<?php 
							echo($row["songuoimua"]);
							$soluongnguoimua += $row["songuoimua"];
							?>
						</td>
						<td>
							<?php 
							echo(number_format($row["NewPrice"]*$row["soluongban"])."đ");
							$tongtienthuve += $row["NewPrice"]*$row["soluongban"];
							?>
						</td>
						<td>
							<?php 
							echo(number_format(($row["NewPrice"]-$row["OriginalPrice"])*$row["soluongban"])."đ");
							$tongtienlai += ($row["NewPrice"]-$row["OriginalPrice"])*$row["soluongban"];
							?>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table> 


		<div class="container thongketq">
			<div class="row">
				<h4>Tổng quan</h4>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<th>Tổng sản phẩm bán ra:</th>
								<td><?php echo($soluongban); ?></td>
							</tr>
							<tr>
								<th>Tổng số hóa đơn: </th>
								<td><?php 
									$sql = "SELECT COUNT(*) as total FROM tbl_bill  WHERE YEAR(Time) = $year AND MONTH(Time) = $month AND tbl_bill.Status = 'Hoàn tất'";
									$query = mysqli_query($conn, $sql);
									$row = mysqli_fetch_array($query);
									echo $row['total'];
								?>
								</td>
							</tr>
							<tr>
								<th>Tổng tiền thu về:</th>
								<td><?php echo(number_format($tongtienthuve)."đ"); ?></td>
							</tr>
							<tr>
								<th>Tổng tiền lãi:</th>
								<td><?php echo(number_format($tongtienlai)."đ"); ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>       


	<?php }else{ ?>
		<h3>Chưa có số liệu thống kê cho tháng <?php echo($month) ?> năm <?php echo($year) ?></h3>
	<?php }
}
?>