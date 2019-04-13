<div class="container" >
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 quanlysanpham animated zoomIn" >
      <h3>Danh sách nhóm sản phẩm chi tiết</h3>
      <input class="form-control" id="myInput" type="text" placeholder="Search..">
      <a href="index.php?page=add_group_detail" class="btn btn-success btn_add"><span class="glyphicon glyphicon-plus" style="margin-right: 5px"></span>Thêm mới</a>
      <table class="table table-bordered " >
        <thead style="text-align: center;">
          <tr class="danger">
            <th>IdGroupDetail</th>
            <th>NameGroupDetail</th>
            <th>IdGroupProduct</th>
            <th>function</th>
          </tr>
        </thead>
        <tbody id="myTable">
          <?php 
          $sql="SELECT * FROM tbl_groupdetail ORDER BY IdGroupDetail DESC";
          $query= mysqli_query($conn, $sql);
          while($row = mysqli_fetch_array($query)){
            ?>
            <tr>
              <td><?php echo($row["IdGroupDetail"]) ?></td>
              <td><?php echo($row["NameGroupDetail"]) ?></td>
              <td><?php echo($row["IdGroupProduct"]) ?></td>
              <td class="td_bill"><a href="index.php?page=update_group_detail&&id=<?php echo($row["IdGroupDetail"]) ?>" class="btn btn-success btn-xs " ><span class="fa fa-wrench" style=" margin-right: 5px"></span>Sửa</a>
               <a href="View/delete.php?idgroupdetail=<?php echo($row["IdGroupDetail"]) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Bạn có chắc chắn muốn xóa')"><span class="fa fa-trash-alt" style=" margin-right: 5px"></span>Xóa</a></td>
             </tr>
           <?php } ?>
         </tbody>
       </table>
     </div>
   </div>
   
 </div>
