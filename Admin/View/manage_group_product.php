<div class="container" >
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 quanlysanpham animated zoomIn" >
                <h3>Danh sách nhóm sản phẩm </h3>
                <a href="index.php?page=add_group_product" class="btn btn-success btn_add"><span class="glyphicon glyphicon-plus" style="margin-right: 5px"></span>Thêm mới</a>
               <input class="form-control" id="myInput" type="text" placeholder="Search..">
               <table class="table table-bordered " >
                <thead style="text-align: center;">
                  <tr class="danger">
                    <th>IdGroupProduct</th>
                    <th>NameGroupProduct</th>
                    <th>function</th>
                  </tr>
                </thead>
                <tbody id="myTable">
                    <?php 
                          $sql="SELECT * FROM tbl_product_group ORDER BY IdGroupProduct DESC";
                          $query= mysqli_query($conn, $sql);
                          while($row = mysqli_fetch_array($query)){
                    ?>
                  <tr>
                    <td><?php echo($row["IdGroupProduct"]) ?></td>
                    <td><?php echo($row["NameGroupProduct"]) ?></td>
                    <td class="td_bill"><a href="index.php?page=update_group_pro&&id=<?php echo($row["IdGroupProduct"]) ?>" class="btn btn-success btn-xs " >Sửa</a>
                        <a href="View/delete.php?idgroupproduct=<?php echo($row["IdGroupProduct"]) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Bạn có chắc chắn muốn xóa')">Xóa</a></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
       </div>
   </div>
   
</div>