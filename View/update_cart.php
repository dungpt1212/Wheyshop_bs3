<?php 
		session_start();
		if(isset($_POST["btn_update_cart"])){
	      $number = $_POST["txt_number"];
	      foreach ($number as $key1=>$val1) {
	      $_SESSION["cart"][$key1]["number"] = $val1;
	      header("location: ../index.php?page=cart");
	     }
} ?>

