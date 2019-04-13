<?php 
  include("../../Lib/connection.php");
  if(isset($_GET["id"]));{
    $id = $_GET["id"];
  }
  $sql="SELECT * FROM tbl_bill where IdBill = '$id'";
  $query= mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($query);

?>
      <div class="container-fluid view_bill">
         <div class="row menu">
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <p>Trạng thái: <?PHP echo($row["Status"]) ?></p>
              <p>Ngày đặt hàng: <?PHP echo($row["Time"]) ?></p>
           </div>
         </div>
         <div class="row">
           <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" >
             <p>Người đặt hàng</p>
             <table class="table">
               <tbody>
                 <tr>
                   <th>User name:</th>
                   <td>
                    <?PHP 
                        $idcustomer = $row["IdCustomer"];
                        $sql1="SELECT * FROM tbl_customer where IdCustomer = '$idcustomer'";
                        $query1= mysqli_query($conn, $sql1);
                        $row1 = mysqli_fetch_array($query1);
                        echo($row1["Username"]);
                    ?>
                   </td>
                 </tr>
                 <tr>
                   <th>Tên:</th>
                   <td><?PHP echo($row1["NameCustomer"]) ?></td>
                 </tr>
                 <tr>
                   <th>Địa chỉ:</th>
                   <td><?PHP echo($row1["Address"]) ?></td>
                 </tr>
                 <tr>
                   <th>SĐT:</th>
                   <td><?PHP echo("+84".$row1["Phone"]) ?></td>
                 </tr>
                 <tr>
                   <th>Email:</th>
                   <td><?PHP echo($row1["Email"]) ?></td>
                 </tr>
               </tbody>
             </table>
           </div>
           <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
             <p>Người nhận hàng</p>
            <table class="table ">
               <tbody>
                 <tr>
                   <th>Hình thức thanh toán:</th>
                   <td><?PHP echo($row["Pay"]) ?></td>
                 </tr>
                 <tr>
                   <th>Tên:</th>
                   <td><?PHP echo($row["NameRecevier"]) ?></td>
                 </tr>
                 <tr>
                   <th>Địa chỉ:</th>
                   <td><?PHP echo($row["AddressRecevier"]) ?></td>
                 </tr>
                 <tr>
                   <th>SĐT:</th>
                   <td><?PHP echo("+84".$row["PhoneReceiver"]) ?></td>
                 </tr>
                 <tr>
                   <th>Email:</th>
                   <td><?PHP echo($row1["Email"]) ?></td>
                 </tr>
               </tbody>
             </table>
           </div>
         </div>
         <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Mã SP</th>
                    <th>Tên SP</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Tổng tiền</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $idbill = $row["IdBill"];
                  $sql1="SELECT * FROM tbl_bill_detail where IdBill = '$idbill'";
                  $query1= mysqli_query($conn, $sql1);
                  while($row1 = mysqli_fetch_array($query1)){
                    $idproduct = $row1["IdProduct"];
                    $sql2="SELECT * FROM tbl_product_detail where IdProduct = '$idproduct'";
                    $query2= mysqli_query($conn, $sql2);
                    $row2 = mysqli_fetch_array($query2);
                  
                ?>
                  <tr>
                    <td><?PHP echo($row2["IdProduct"]) ?></td>
                    <td><?PHP echo($row2["NameProduct"]) ?></td>
                    <td><?PHP echo(number_format($row2["NewPrice"])) ?></td>
                    <td><?PHP echo($row1["Number"]) ?></td>
                    <td><?PHP 
                          $tongtien = $row2["NewPrice"] * $row1["Number"];
                          echo(number_format($tongtien));
                       ?>
                    </td>
                  </tr>
                  <?PHP
                    }
                  ?>
                  <tr class="tr_tongthanhtoan">
                    <th>Tổng thanh toán</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><?PHP echo(number_format($row["Total"])) ?></th>
                  </tr>
                </tbody>
            </table>
           </div>
         </div>
       </div>

      
      


   
   

    
































    
   