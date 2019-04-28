<style>
  img{
    width: 200px;
    height: 100px;
  }
</style>
<?php 
if(isset($_POST["btn_add"])){
  //Xử lí upload ảnh start
  if($_FILES['upload']['error']>0){
    echo '<br> Co loi trong viec upload len serve';
  }else
  move_uploaded_file($_FILES['upload']['tmp_name'], '../upload/'.$_FILES['upload']['name']);
  $urlimage = "upload/".$_FILES['upload']['name'];
   //Xử lí upload ảnh end
  $sql="INSERT INTO `tbl_slide`(`Link`, `Active`) VALUES ('$urlimage', '0')";
  $query= mysqli_query($conn, $sql) or die('Them moi that bai');
  /*echo('<script>swal({
    title: "Congratulation",
    text: "Thêm mới thành công thành công",
    icon: "success",
    button: "OK",
  });</script>');*/
  header('location:index.php?page=manage_slide');
}
?>
<div class="container" >
  <div class="row">
    <h3>Danh sách slider </h3>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6  animated zoomIn quanlysanpham" >
     <table class="table table-bordered "  >
      <thead>
        <tr class="danger">
          <th>#</th>
          <th>Hình ảnh</th>
          <th>Link</th>
          <th>Active</th>
          <th>#</th>
        </tr>
      </thead>
      <tbody id="myTable">
        <?php 
        $stt = 0;
        $sql="SELECT * FROM tbl_slide";
        $query= mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($query)){
          $stt++;
          ?>
          <tr>
            <td><?php echo($stt) ?></td>
            <td><img src="<?php echo('../'.$row["Link"]) ?>" alt=""></td>
            <td><?php echo($row["Link"]) ?></td>
            <td><input type="radio" name="active" value="<?php echo($row["id"]) ?>" <?php if($row["Active"] == 1) echo "checked" ?> class="radio"></td>
            <td class="td_bill">
              <a href="View/delete.php?idslide=<?php echo($row["id"]) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Bạn có chắc chắn muốn xóa')"><span class="fa fa-trash-alt" style=" margin-right: 5px"></span>Xóa</a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
     <div class="thumbnail">
      <form action="" method="post" enctype="multipart/form-data">
       <div class="form-group">
        <label>Thêm mới slide:</label>
        <input type="file" class="form-control check_error" name="upload" value="">
      </div>
      <div class="form-group">
       <input type="submit" class="btn btn-primary" name="btn_add" value="Thêm"> 
     </div>
   </form> 
 </div>
</div>

</div>
<script type="text/javascript" src="Bootstrap/js/jquery-3.3.1.js"></script>
<script>
$(document).ready(function(){
   $('input[name="active"]').click(function(event) {
     var id = $(this).val();
     $.post('View/update_slide.php', {id: id}, function(data) {
            
    });
   });
}) 
</script>


