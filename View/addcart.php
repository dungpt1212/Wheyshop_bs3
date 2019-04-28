<?php
session_start();

if(isset($_POST["btn_buy"])){
	$huongvi = $_POST["sel_huongvi"];
	$quatang = $_POST["sel_quatang"];
}

include("../Lib/connection.php");
$product_arr = array();
$sql= "select * from tbl_product_detail";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){
	$product_arr[$row["IdProduct"]]["NameProduct"] = $row["NameProduct"];
	$product_arr[$row["IdProduct"]]["OldPrice"] = $row["OldPrice"];
	$product_arr[$row["IdProduct"]]["NewPrice"] = $row["NewPrice"];
	$product_arr[$row["IdProduct"]]["UrlImage"] = $row["UrlImage"];
}


if(isset($_GET["idproduct"])){
	$idproduct = $_GET["idproduct"];
	if(isset($_SESSION["cart"])){
		if(array_key_exists($idproduct, $_SESSION["cart"])){
			$_SESSION["cart"][$idproduct]["number"] +=1;
		}else{
			$product_arr[$idproduct]["number"] = 1;
			if(isset($huongvi) && isset($quatang) ){
				$product_arr[$idproduct]["huongvi"] = $huongvi;
				$product_arr[$idproduct]["quatang"] = $quatang;
			}
			$_SESSION["cart"][$idproduct] = $product_arr[$idproduct];
		}
	}else{
		$product_arr[$idproduct]["number"] = 1;
		if(isset($huongvi) && isset($quatang) ){
			$product_arr[$idproduct]["huongvi"] = $huongvi;
			$product_arr[$idproduct]["quatang"] = $quatang;
		}
		$_SESSION["cart"][$idproduct] = $product_arr[$idproduct];

	}

	header("location: ../index.php?page=cart");
}





?>