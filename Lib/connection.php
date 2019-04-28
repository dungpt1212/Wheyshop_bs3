<?php 
	//Kết nối csdl ở loaclhost start	

	$conn = mysqli_connect("localhost", "root","","webshop") or die("Kết nối thất bại");
	mysqli_query($conn, "SET NAMES 'UTF8'");
	$conn1 = mysqli_connect("localhost", "root","","don_vi_hanh_chinh") or die("Kết nối thất bại");
	mysqli_query($conn1, "SET NAMES 'UTF8'");

	//Kết nối csdl ở loaclhost end	


	//Kết nối csdl trên host start

	// $conn = mysqli_connect("localhost", "id7429096_1","matkhaudailam","id7429096_webshop") or die("Kết nối thất bại");
	// mysqli_query($conn, "SET NAMES 'UTF8'");
	/*$conn1 = mysqli_connect("localhost", "root","","don_vi_hanh_chinh") or die("Kết nối thất bại");
	mysqli_query($conn1, "SET NAMES 'UTF8'");*/
	
	//Kết nối csdl trên host start


 ?>
