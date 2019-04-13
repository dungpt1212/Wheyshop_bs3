 	 <?php 
      $user="";
      if(isset($_SESSION["admin"])){
        $user = $_SESSION["admin"];
      }
    ?>

    <!-- div menu start -->
    <nav class="navbar navbar-default menu_nav navbar-fixed-top" role="navigation">
      <div id="menu">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php"><span class="glyphicon glyphicon-arrow-left animated zoomIn" style="margin-right: 5px;"></span >Home/wheyshop</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          
          
          <ul class="nav navbar-nav navbar-right">
            <li style="color: white"><a style="color: #ccc">Xin chào Admin: <span style="color: #17ff08; font-weight: 700"><?php echo($user) ?></span></a></li>
            <li><a href="../View/logout.php"><span class="glyphicon glyphicon-log-out" style="margin-right: 5px;"></span>Đăng xuất</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
       </div>
    </nav>
    <div id="icon_menu_left" ><a href="" class="glyphicon glyphicon-align-justify"></a></div>
    <div class="black"> <!-- div black start -->
    </div><!-- div black end -->
   <!-- div menu end -->