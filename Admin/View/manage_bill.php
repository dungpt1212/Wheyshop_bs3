<div class="container" >
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 quanlysanpham animated zoomIn" >
                <h3>Danh sách hóa đơn</h3>
                <input class="form-control" id="myInput" type="text" placeholder="Search..">
               <table class="table table-bordered " >
                <thead style="text-align: center;">
                  <tr class="danger">
                    <th>Mã HĐ</th>
                    <th>Tên người đặt</th>
                    <th>Tên người nhận</th>
                    <th>Sdt người nhận</th>
                    <th>Địa chỉ <br> nhận hàng</th>
                    <th>Tổng tiền</th>
                    <th>Hình thức thanh toán</th>
                    <th>Thời gian đặt hàng</th>
                    <th>Trạng thái</th>
                    <th>Chức năng</th>
                  </tr>
                </thead>
                <tbody id="myTable">
                    <?php 
                          $sql="SELECT * FROM tbl_bill order by IdBill DESC";
                          $query= mysqli_query($conn, $sql);
                          while($row = mysqli_fetch_array($query)){
                            $idcustomer = $row["IdCustomer"];
                    ?>
                  <tr>
                    <td><?php echo($row["IdBill"]) ?></td>
                    <td><?php 
                          $sql1   ="SELECT * FROM tbl_customer where IdCustomer = '$idcustomer'";
                          $query1 = mysqli_query($conn, $sql1);
                          $row1 = mysqli_fetch_array($query1);
                                echo($row1["NameCustomer"]); 
                          ?>
                    </td>
                    <td><?php echo($row["NameRecevier"]) ?></td>
                    <td><?php echo("+84".$row["PhoneReceiver"]) ?></td>
                    <td><?php echo($row["AddressRecevier"]) ?></td>
                    <td><?php echo(number_format($row["Total"])."VNĐ") ?></td>
                    <td><?php echo($row["Pay"]) ?></td>
                    <td><?php echo($row["Time"]) ?></td>
                    <td class="td_status">
                       <?php
                              $stt = $row["Status"]; 
                              if($stt == "Hoàn tất"){
                        ?>     
                        <a class="btn btn-primary btn-xs btn_trangthai"  style="background: red; color: yellow" idbill="<?php echo($row["IdBill"]) ?>"><span class="fa fa-check" style="margin-right: 5px"></span><?php echo($row["Status"]); ?></a>
                        <?php }else{ ?>
                        <a class="btn btn-primary btn-xs btn_trangthai" idbill="<?php echo($row["IdBill"]) ?>"><?php echo($row["Status"]."..."); ?></a>
                        <?php } ?>
                          <div class="to">
                            <select class="form-control sl_trangthai" >
                              <option value="Đang xử lý">Đang xử lý</option>
                              <option value="Hoàn tất">Hoàn tất</option>
                            </select>
                            <a href="#" class="fa fa-check-circle"></a>
                          </div>
                          <div class="nho"></div>
                    </td>
                    <td class="td_bill"><a href="#" class="btn btn-success btn-xs xemhoadon " idbill="<?php echo($row["IdBill"]) ?>" ><span class="fa fa-eye " style=" margin-right: 5px"></span>Xem</a>
                         <a href="View/delete.php?idbill=<?php echo($row["IdBill"]) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Bạn có chắc chắn muốn xóa')"><span class="fa fa-trash-alt" style=" margin-right: 5px"></span>Xóa</a></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
       </div>
   </div>
   
</div>
      
       
<div class="bill_detail">

</div>
