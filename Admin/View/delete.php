<?php 
	include("../../Lib/connection.php");
	if(isset($_GET["idproduct"])){
		$idproduct = $_GET["idproduct"];
		$sql="DELETE FROM `tbl_product_detail` WHERE IdProduct = '$idproduct'";
        $query= mysqli_query($conn, $sql) or die("Không thể xóa");
        header("location: ../index.php?page=manage_product&&alert=success");

	} /*Xóa chi chi tiết sản phẩm end*/

	if(isset($_GET["idgroupproduct"])){
		$idgroupproduct = $_GET["idgroupproduct"];
		$sql="DELETE FROM `tbl_product_group` WHERE IdGroupProduct='$idgroupproduct'";
        $query= mysqli_query($conn, $sql) or die("Không thể xóa");
        header("location: ../index.php?page=manage_group_product&&alert=success");

	} /*Xóa nhóm sản phẩm end*/

	if(isset($_GET["idgroupdetail"])){
		$idgroupdetail = $_GET["idgroupdetail"];
		$sql="DELETE FROM `tbl_groupdetail` WHERE IdGroupDetail='$idgroupdetail'";
        $query= mysqli_query($conn, $sql) or die("Không thể xóa");
        header("location: ../index.php?page=manage_group_detail&&alert=success");

	} /*Xóa nhóm sản phẩm chi tiết end*/

	if(isset($_GET["idnews"])){
		$idnews = $_GET["idnews"];
		$sql="DELETE FROM `tbl_news_detail` WHERE IdNews='$idnews'";
        $query= mysqli_query($conn, $sql) or die("Không thể xóa");
        header("location: ../index.php?page=manage_news&&alert=success");

	} /*Xóa danh sach chi tiet tin tưc end*/
	if(isset($_GET["idnewsgroup"])){
		$idnewsgroup = $_GET["idnewsgroup"];
		$sql="DELETE FROM `tbl_news_group` WHERE IdNewsGroup='$idnewsgroup'";
        $query= mysqli_query($conn, $sql) or die("Không thể xóa");
        header("location: ../index.php?page=manage_news_group&&alert=success");

	} /*Xóa danh sach nhom tin tưc end*/

	if(isset($_GET["idbill"])){
		$idbill = $_GET["idbill"];
		$sql="DELETE FROM `tbl_bill_detail` WHERE IdBill='$idbill' ";
        $query= mysqli_query($conn, $sql) or die("Không thể xóa chi tiết hóa đơn");
        $sql="DELETE FROM `tbl_bill` WHERE IdBill='$idbill' ";
        $query= mysqli_query($conn, $sql) or die("Không thể xóa hóa đơn");
        header("location: ../index.php?page=manage_bill&&alert=success");

	} /*Xóa danh sach hóa đơn end*/

	if(isset($_GET["idcustomer"])){
		$idcustomer = $_GET["idcustomer"];
		$sql="DELETE FROM `tbl_customer` WHERE IdCustomer = '$idcustomer' ";
        $query= mysqli_query($conn, $sql) or die("<h3 align='center'>Không thể xóa tài khoản khách hàng này</h3>");
        header("location: ../index.php?page=manage_customer");

	} /*Xóa tài khoản khách hàng end*/


 ?>