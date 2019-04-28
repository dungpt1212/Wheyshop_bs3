<?php
include('../../Lib/connection.php');
if(isset($_POST['id'])){
	$id = $_POST['id'];
	$sql = "UPDATE tbl_slide SET Active='0'";
  	$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
  	$sql = "UPDATE tbl_slide SET Active='1' where id = '$id'";
  	$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
 ?>
