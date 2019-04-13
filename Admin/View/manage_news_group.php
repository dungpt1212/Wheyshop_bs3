<div class="container" >
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  animated zoomIn quanlysanpham" >
                <h3>Danh sách nhóm tin tức </h3>
                <input class="form-control" id="myInput" type="text" placeholder="Search..">
                <a href="index.php?page=add_news_group" class="btn btn-success btn_add"><span class="glyphicon glyphicon-plus" style="margin-right: 5px"></span>Thêm mới</a>
               <table class="table table-bordered "  >
                <thead>
                  <tr class="danger">
                    <th>IdNewsGroup</th>
                    <th>NameNewsGroup</th>
                    <th>function </th>
                  </tr>
                </thead>
                <tbody id="myTable">
                    <?php 
                          $sql="SELECT * FROM tbl_news_group";
                          $query= mysqli_query($conn, $sql);
                          while($row = mysqli_fetch_array($query)){
                    ?>
                  <tr>
                    <td><?php echo($row["IdNewsGroup"]) ?></td>
                    <td><?php echo($row["NameNewsGroup"]) ?></td>
                    <td class="td_bill"><a href="index.php?page=update_news_group&&id=<?php echo($row["IdNewsGroup"]) ?>" class="btn btn-success btn-xs " ><span class="fa fa-wrench" style=" margin-right: 5px"></span>Sửa</a>
                        <a href="View/delete.php?idnewsgroup=<?php echo($row["IdNewsGroup"]) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Bạn có chắc chắn muốn xóa')"><span class="fa fa-trash-alt" style=" margin-right: 5px"></span>Xóa</a></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
       </div>
   </div>
   
</div>



    