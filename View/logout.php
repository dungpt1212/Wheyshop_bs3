<?php 
	session_start();
	if(isset($_SESSION["user"])){
		session_destroy();
		header("location: ../index.php?page=home");
	}
	if(isset($_SESSION["admin"])){
		session_destroy();
		header("location: ../Admin/index.php");
	}

 ?>