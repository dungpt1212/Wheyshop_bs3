<?php 
  if(isset($_POST["bt_dangnhap"])){//Chức năng đăng nhập
    $user = $_POST["txt_user"];
    $pass = md5($_POST["txt_pass"]);
    $sql= "SELECT * FROM tbl_customer where Username='$user' and Pass='$pass'";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) >0){
      $_SESSION["user"]=$user;
      echo('<script>swal({
        title: "Congratulation",
        text: "Bạn đã đăng nhập thành công",
        icon: "success",
        button: "OK",
      });</script>');
      /*header("location: Index.php?page=cart");*/
      }else  echo('<script>swal({
        text: "Tên tài khoản hoặc mật khẩu không chính xác",
        icon: "warning",
        button: "OK",
      });</script>');
    }



  if(isset($_POST["bt_dangky"])){//chức năng đăng ký
    $user = $_POST["txt_user_dk"];
    $pass = md5($_POST["txt_pass_dk"]);
    $email = $_POST["txt_email"];
    $name = $_POST["txt_name"];
    $phone = $_POST["txt_phone"];
    $addr = $_POST["txt_addr"];
    $sql= "SELECT * FROM tbl_customer where Username='$user' or Email='$email'";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) >0){
      echo('<script>swal({
        title: "Tên đăng nhập hoặc email đã tồn tại",
        icon: "warning",
        button: "OK",
      });</script>');
    }else{
      $sql="INSERT INTO `tbl_customer` (`IdCustomer`, `Username`, `Pass`, `NameCustomer`, `Email`, `Address`, `Phone`) VALUES (NULL, '$user', '$pass', '$name', '$email', '$addr', '$phone');";
      $query = mysqli_query($conn, $sql);
      echo('<script>swal({
        title: "Đăng ký thành công",
        icon: "success",
        button: "OK",
      });</script>');
    }
  }




  ?>





  <div id="form">
    <div class="form_dangnhap ">
      <h2 style="text-align: center; margin-bottom: 25px">Đăng nhập</h2>
      <div class="thoat glyphicon glyphicon-remove "></div>
      <form method="post" data-toggle="validator" role="form"> <!-- form start -->
        <div class="form-group" style="position: relative;">
          <label for="inputName" class="control-label">User:</label>
          <input type="text" class="form-control" id="inputName" name="txt_user" placeholder="Nhập tài khoản..." required>
          <span class="glyphicon glyphicon-user" style="font-size: 12px;font-weight: bold;position: absolute;top: 36px;color: #c5b9b9;"></span>
        </div>
        <div class="form-group">
          <label for="inputPassword" class="control-label">Password:</label>
          <div class="form-inline row">
            <div class="form-group col-sm-6" style="position: relative;">
              <input type="password" data-minlength="8" class="form-control" id="inputPassword" name="txt_pass" placeholder="Nhập mật khẩu..." required style="">
              <span class="glyphicon glyphicon-lock" style="font-size: 12px;color: #c5b9b9;position: absolute;top: 9px;"></span>
            </div>
          </div>
          <div class="form-group">
            <label>
              <input type="checkbox" checked="checked" name="remember"> Nhớ mật khẩu
            </label>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-block" name="bt_dangnhap">Đăng nhập</button>
          </div>
          <p>Bạn chưa có tài khoản: <span class="glyphicon glyphicon-share-alt" style="margin-left: 8px;
          font-size: 20px;"></span><span  id="click_dangky" style="color: #83ff00; font-size: 20px; cursor: pointer; margin-left: 10px; text-decoration: none; font-style: italic;">Đăng ký tại đây</span></p>
        </form> <!-- form-begin -->
      </div>

      <div class="form_dangky ">
        <div class="thoat glyphicon glyphicon-remove "></div>
        <h2 style="text-align: center;
        margin-bottom: 25px;">Đăng ký</h2>
        <form method="post">
          <div class="form-group" style="position: relative;">
            <label for="Username">Username:</label>
            <input type="text" class="form-control" id="txt_user_dk" placeholder="Nhập tên tài khoản..." name="txt_user_dk">
            <span class="label label-danger pull-right" id="lb_user"></span>
            <span class="glyphicon glyphicon-user" style="font-size: 12px;font-weight: bold;position: absolute;top: 36px;color: #c5b9b9;"></span>
          </div>
          <div class="form-group" style="position: relative;">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="txt_pass_dk" placeholder="Nhập mật khẩu..." name="txt_pass_dk">
            <span class="label label-danger pull-right" id="lb_pass"></span>
            <span class="glyphicon glyphicon-lock" style="font-size: 12px;font-weight: bold;position: absolute;top: 36px;color: #c5b9b9;"></span>
          </div>
          <div class="form-group" style="position: relative;">
            <label for="Email">Email:</label>
            <input type="email" class="form-control" id="txt_email" placeholder="Nhập Email..." name="txt_email">
            <span class="label label-danger pull-right" id="lb_email"></span>
            <span class="glyphicon glyphicon-envelope" style="font-size: 12px;font-weight: bold;position: absolute;top: 36px;color: #c5b9b9;"></span>
          </div>
          <div class="form-group" style="position: relative;">
            <label for="Email">Tên:</label>
            <input type="text" class="form-control" placeholder="Nhập tên của bạn..." name="txt_name">
            <span class="label label-danger pull-right" id="lb_name"></span>
            <span class="glyphicon glyphicon-envelope" style="font-size: 12px;font-weight: bold;position: absolute;top: 36px;color: #c5b9b9;"></span>
          </div>
          <div class="form-group" style="position: relative;">
            <label for="Email">SDT:</label>
            <input type="number" class="form-control"  placeholder="Nhập số điện thoại của bạn..." name="txt_phone">
            <span class="label label-danger pull-right" id="lb_phone"></span>
            <span class="glyphicon glyphicon-envelope" style="font-size: 12px;font-weight: bold;position: absolute;top: 36px;color: #c5b9b9;"></span>
          </div>
          <div class="form-group" style="position: relative;">
            <label for="Email">Địa chỉ:</label>
            <input type="text" class="form-control"  placeholder="Nhập địa chỉ của bạn..." name="txt_addr">
            <span class="label label-danger pull-right" id="lb_addr"></span>
            <span class="glyphicon glyphicon-envelope" style="font-size: 12px;font-weight: bold;position: absolute;top: 36px;color: #c5b9b9;"></span>
          </div>
          <button type="submit" class="btn btn-block" name="bt_dangky">Đăng ký</button>
        </form>
      </div>
    </div>