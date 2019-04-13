<div class="container" >
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 quanlysanpham animated zoomIn" >
                <h3>Quản lý khách hàng</h3>
                <input class="form-control" id="myInput" type="text" placeholder="Search..">
               <table class="table table-bordered " >
                <thead style="text-align: center;">
                  <tr class="danger">
                    <th>IdCustomer</th>
                    <th>Username</th>
                    <th>NameCustomer</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Function</th>
                  </tr>
                </thead>
                <tbody id="myTable">
                    <?php 
                          $sql="SELECT * FROM tbl_customer";
                          $query= mysqli_query($conn, $sql);
                          while($row = mysqli_fetch_array($query)){
                    ?>
                  <tr>
                    <td><?php echo($row["IdCustomer"]) ?></td>
                    <td><?php echo($row["Username"]) ?></td>
                    <td><?php echo($row["NameCustomer"]) ?></td>
                    <td><?php echo($row["Email"]) ?></td>
                    <td><?php echo($row["Address"]) ?></td>
                    <td><?php echo("+84 ".$row["Phone"]) ?></td>
                    <td class="td_bill">
                         	<a href="View/delete.php?idcustomer=<?php echo($row["IdCustomer"]) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Bạn có chắc chắn muốn xóa')"><span class="fa fa-trash-alt" style=" margin-right: 5px"></span>Xóa</a></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
       </div>
   </div>
   
</div>
