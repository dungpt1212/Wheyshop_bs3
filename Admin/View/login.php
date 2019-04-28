<?PHP
$user = "";
$pass = "";
if(isset($_POST["bt_dangnhap"])){
  $user = $_POST["txt_user"];
  $pass = $_POST["txt_pass"];
  $pass_md5 = md5($_POST["txt_pass"]);
  if($user =="" || $pass ==""){
    echo '<script>alert("Vui lòng nhập đầy đủ thông tin")</script>';
  }else{
    $sql= "SELECT * FROM tbl_admin where Username='$user' and Pass='$pass_md5'";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) >0){
      $_SESSION["admin"]=$user;
      header("location: index.php");
    }else{
      echo '<script>alert("Sai thông tin đăng nhập")</script>';
    }
  }
}
?>


<div class="full">
  <div class="login">
    <div class="tren">
      <h3>WHEY SHOP - ADMIN</h3>
      <form method="post">
        <div class="form-group">
          <label for="email">Tài khoản:</label>
          <input type="text" class="form-control" name="txt_user" value="<?PHP echo($user) ?>">
        </div>
        <div class="form-group">
          <label for="pwd">Mật khẩu:</label>
          <input type="password" class="form-control" name="txt_pass" value="<?PHP echo($pass) ?>">
        </div>
        <div class="checkbox">
          <!-- <label><input type="checkbox">Nhớ mật khẩu</label> -->
        </div>
        <button type="submit" class="btn btn-block bt_dangnhap" name="bt_dangnhap">Đăng nhập</button>
      </form>
      <div class="bottom">
        <a href="">Đăng nhập để vào trang quản trị</a>
      </div>
    </div>
    <div class="duoi"></div>
  </div>
  </div