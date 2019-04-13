<div class="container" >
   <div class="row thongke">
   	<h3>Quản lý thống kê</h3>
	
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="container-fluid">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<p>Chọn thời gian thống kê</p>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<div class="form-group">
				  <select class="form-control sl_year">
				  	<?php for($i=2018; $i <= 2030; $i++){ ?>
				    <option value="<?php echo($i); ?>"><?php echo("Năm ".$i); ?></option>
					<?php } ?>
				  </select>
				</div>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<div class="form-group">
				  <select class="form-control sl_month">
				  	<?php for($j=1; $j <= 12; $j++){ ?>
				    <option value="<?php echo($j); ?>"><?php echo("Tháng ".$j); ?></option>
				    <?php } ?>
				  </select>
				</div>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<div class="btn btn-primary btn_thongke">Thống kê</div>
			</div>
		</div>
	</div>

     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 quanlysanpham animated zoomIn" >
     	<h3>Vui lòng chọn thời gian thống kê</h3>
     </div>
   </div>
   
</div>