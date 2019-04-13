<?php 
	session_start();
	if(isset($_GET["idcart"])){
	    $idcart = $_GET["idcart"];
	    unset($_SESSION["cart"][$idcart]);
	    header("location: ../index.php?page=cart");
	}

 ?>