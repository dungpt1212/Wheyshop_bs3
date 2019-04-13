<?php 
ob_start(); 
session_start(); 
include("../Lib/connection.php") ;
echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Whey-shop</title>
<link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="Bootstrap/css/style.css" rel="stylesheet">
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"> <!-- link để tạo hiệu ứng animate.css -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"><!-- link đến font-awesome để chèn icon không có trong glyphicon của bootstrap -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script><!-- link sweet alert để tạo alert đẹp  -->
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>';
if(isset($_SESSION["admin"])){
  include("View/menu.php") ;
  include("View/main_left.php") ;

  ?>

  <?php 
  if(isset($_GET["page"])){
    $page = $_GET["page"];

    switch ($page) {
      case "manage_product":
      include("View/manage_product.php");
      break;

      case "manage_group_product":
      include("View/manage_group_product.php");
      break;

      case "manage_news":
      include("View/manage_news.php");
      break;

      case "manage_news_group":
      include("View/manage_news_group.php");
      break;

      case "manage_group_detail":
      include("View/manage_group_detail.php");
      break;

      case "update_group_pro":
      include("View/update_group_pro.php");
      break;

      case "update_group_detail":
      include("View/update_group_detail.php");
      break;

      case "update_product":
      include("View/update_product.php");
      break;

      case "add_product":
      include("View/add_product.php");
      break;

      case "add_group_product":
      include("View/add_group_product.php");
      break;

      case "add_group_detail":
      include("View/add_group_detail.php");
      break;

      case "update_news":
      include("View/update_news.php");
      break;

      case "update_news_group":
      include("View/update_news_group.php");
      break;

      case "add_news":
      include("View/add_news.php");
      break;

      case "add_news_group":
      include("View/add_news_group.php");
      break;

      case "manage_bill":
      include("View/manage_bill.php");
      break;

      case "add_admin":
      include("View/add_admin.php");
      break;

      case "manage_statistics":
      include("View/manage_statistics.php");
      break; 

      case "manage_customer":
      include("View/manage_customer.php");
      break;

      default:
      include("View/home.php");
      break;
    }
  }else {
    include("View/home.php");
  }

  if(isset($_GET["alert"])){
    echo('<script>swal({
      title: "Congratulation",
      text: "Delete thành công",
      icon: "success",
      button: "OK",
    });</script>');
  }
}else
include("View/login.php");
ob_flush();
?>
<script type="text/javascript" src="Bootstrap/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="Bootstrap/js/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="Bootstrap/js/bootstrap.min.js"></script>
</html>