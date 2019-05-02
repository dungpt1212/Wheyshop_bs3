<?php session_start();  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Whey-shop</title>
  <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Bootstrap/css/style.css" rel="stylesheet">
  <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qon ljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
  <!-- link đến font-awesome để chèn icon không có trong glyphicon của bootstrap -->
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"> <!-- link để tạo hiệu ứng animate.css -->
  <link href="Bootstrap/css/jquery-ui.min.css" rel="stylesheet">
  <script src="Bootstrap/js/jquery-ui.min.js"></script>
  <!--Font awesome start -->
  <link href="Font_awesome/css/all.css" rel="stylesheet"> 
  <script defer src="Font_awesome/js/all.js"></script> <!--load all styles -->
  <link href="Font_awesome/css/fontawesome.css" rel="stylesheet">
  <link href="Font_awesome/css/brands.css" rel="stylesheet">
  <link href="Font_awesome/css/solid.css" rel="stylesheet">
  <script defer src="Font_awesome/js/brands.js"></script>
  <script defer src="Font_awesome/js/solid.js"></script>
  <script defer src="Font_awesome/js/fontawesome.js"></script>
  <!--Font awesome end -->

  <!-- Sweet alert start -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script><!-- link sweet alert để tạo alert đẹp -->
  <!-- Sweet alert start -->

  


  <div id="fb-root"></div> <!-- bình luận facebook -->
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1&appId=1821877174600202&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

</head>

<body >

  <?php 
  include("Lib/connection.php");
  include("View/dangki_dangnhap.php"); 
  ?>
  <div id="cover">
    <?php require_once("View/menu.php");
    if (isset($_GET["page"])){
      $page = $_GET["page"];
      switch ($page) {
        case 'detail':
        include("View/detail.php");
        break;

        case 'group':
        include("View/group.php");
        break;

        case 'detail_new':
        include("View/detail_new.php");
        break;

        case 'group_new':
        include("View/group_new.php");
        break;

        case 'item':
        include("View/item.php");
        break;

        case 'cart':
        include("View/cart.php");
        break;

        default:
        {
          include("View/slide.php");
          include("View/main.php");
        }
        break;
      }
    }else{
      include("View/slide.php");
      include("View/main.php");
      
    }
    ?>
    
    
    
    <?php include("View/bottom.php") ?>
    <div class="contact">
      Subiz <script> (function(s, u, b, i, z){ u[i]=u[i]||function(){ u[i].t=+new Date(); (u[i].q=u[i].q||[]).push(arguments); }; z=s.createElement('script'); var zz=s.getElementsByTagName('script')[0]; z.async=1; z.src=b; z.id='subiz-script'; zz.parentNode.insertBefore(z,zz); })(document, window, 'https://widgetv4.subiz.com/static/js/app.js', 'subiz'); subiz('setAccount', 'acqcdeqzrfkxgdwnikfk'); </script> End Subiz
    </div>
  </div>
  

  
  <script type="text/javascript" src="Bootstrap/js/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="Bootstrap/js/jquery.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="Bootstrap/js/bootstrap.min.js"></script>


</body>
</html>