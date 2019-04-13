<style>
  img{
    width: 70px;
    height: 70px;
  }
</style>
<div class="container" style="position: relative;">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  animated zoomIn quanlysanpham" >
      <h3>Danh sách chi tiết sản phẩm </h3>
      <a href="index.php?page=add_product" class="btn btn-success btn_add"><span class="glyphicon glyphicon-plus" style="margin-right: 5px"></span>Thêm mới</a>
      <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <input class="form-control" id="myInput" type="text" placeholder="Search..">
        </div>
      </div>
      <table class="table table-bordered "  >
        <thead>
          <tr class="danger">
            <th>Ma</th>
            <th>Ten</th>
            <th>Giagoc</th>
            <th>Giacu</th>
            <th>Giamoi</th>
            <th>Anh</th>
            <th>SLnhap</th>
            <th>SLcon</th>
            <th>Manhom</th>
            <th>Manhomchitiet</th>
            <th>MaNSX</th>
            <th>Chucnang</th>
          </tr>
        </thead>
        <tbody id="myTable">
          <?php 
          //phan trang start
              $news_onepage = 10;//Xác định số bản tin trong một trang
              $sql = "select COUNT(IdProduct) as total from tbl_product_detail";
              $query = mysqli_query($conn, $sql);
              $row = mysqli_fetch_array($query);
              $total_record = $row['total'];//xác định tổng số bản ghi có trong database
              $total_page = ceil($total_record/$news_onepage);//Xác định tổng số trang
              if(isset($_GET["PageNo"])){//XĐ trang hiện tại
                $page = $_GET["PageNo"];
              }else $page = 1;
              $first_record = ($page-1)*$news_onepage;//xác định stt bản ghi bắt đầu của 1 trang
          //phan trang end
              $sql= "select* from tbl_product_detail  ORDER BY IdProduct DESC LIMIT $first_record,$news_onepage ";
              $query= mysqli_query($conn, $sql);
              while($row = mysqli_fetch_array($query)){
                ?>
                <tr style="max-height: 300px; overflow: hidden;">
                  <td><?php echo($row["IdProduct"]) ?></td>
                  <td><?php echo($row["NameProduct"]) ?></td>
                  <td><?php echo(number_format($row["OriginalPrice"])."đ") ?></td>
                  <td><?php echo(number_format($row["OldPrice"])."đ") ?></td>
                  <td><?php  echo(number_format($row["NewPrice"])."đ") ?></td>
                  <td><img src="../upload/<?php echo($row["UrlImage"]) ?>" alt=""></td>
                  <td><?php echo($row["AmountOriginal"]) ?></td>
                  <td><?php echo($row["Amount"]) ?></td>
                  <td><?php echo($row["IdGroupProduct"]) ?></td>
                  <td><?php echo($row["IdGroupDetail"]) ?></td>
                  <td><?php echo($row["IdProducer"]) ?></td>
                  <td class="td_bill"><a href="index.php?page=update_product&&id=<?php echo($row["IdProduct"]) ?>" class="btn btn-success btn-xs " ><span class="fa fa-wrench" style=" margin-right: 5px"></span>Sửa</a>
                    <a href="View/delete.php?idproduct=<?php echo($row["IdProduct"]) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Bạn có chắc chắn muốn xóa')"><span class="fa fa-trash-alt" style=" margin-right: 5px"></span>Xóa</a></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>

            <ul class="pagination">
              <?PHP
              //Tạo nút prev
              if($page>1){
                $prev=$page-1;
                echo("<li class=''><a href='index.php?page=manage_product&&PageNo=$prev'>Trước</a></li>");
              }
              //Tạo nút số thứ tự trang
              for($i=1; $i <= $total_page; $i++){
                if($i!=$page){
                  echo("<li><a href='index.php?page=manage_product&&PageNo=$i'>$i</a></li>");
                }else echo("<li class='active'><a href='index.php?page=manage_product&&PageNo=$i'>$i</a></li>");
              }
              //Tạo nút next
              if($page<$total_page){
                $next=$page+1;
                echo("<li class=''><a href='index.php?page=manage_product&&PageNo=$next'>Sau...</a></li>");
              }
              ?>
            </ul>

          </div>
        </div>
      </div>



