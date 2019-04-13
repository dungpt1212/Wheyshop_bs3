<?php 
	if(isset($_GET["trangthai"]) && isset($_GET["idbill"])){
        $idbill = $_GET["idbill"];
        $trangthai = $_GET["trangthai"];
        include("../../Lib/connection.php");
        $sql   ="UPDATE tbl_bill SET Status='$trangthai' WHERE IdBill='$idbill'";
        $query = mysqli_query($conn, $sql) or die("update không thành công");
        if($trangthai == "Hoàn tất"){
            $sql   ="select * from tbl_bill_detail where IdBill = '$idbill'";  //Nếu trạng thái đơn hàng hoàn tất thì trừ đi số lượng hàng đã 
            $query = mysqli_query($conn, $sql);                                 //bán trong csdl
            while($row = mysqli_fetch_array($query)){
                $idproduct = $row["IdProduct"];
                $number = $row["Number"];
                $sql1   ="select * from tbl_product_detail where IdProduct = '$idproduct' ";  
                $query1 = mysqli_query($conn, $sql1);
                $row1 = mysqli_fetch_array($query1);
                $amount = $row1["Amount"] - $number;
                $sql2   ="UPDATE tbl_product_detail SET Amount='$amount' WHERE IdProduct='$idproduct'";  
                $query2 = mysqli_query($conn, $sql2) or die("Trừ thất bại");
            }
        	echo('<span class="fa fa-check" style="margin-right: 5px"></span>'.$trangthai);
        }else {
            $sql   ="select * from tbl_bill_detail where IdBill = '$idbill'";  //Nếu trạng thái đơn hàng đang xử lý thì cộng vs số lượng hàng 
            $query = mysqli_query($conn, $sql);                              
            while($row = mysqli_fetch_array($query)){
                $idproduct = $row["IdProduct"];
                $number = $row["Number"];
                $sql1   ="select * from tbl_product_detail where IdProduct = '$idproduct' ";  
                $query1 = mysqli_query($conn, $sql1);
                $row1 = mysqli_fetch_array($query1);
                $amount = $row1["Amount"] + $number;
                $sql2   ="UPDATE tbl_product_detail SET Amount='$amount' WHERE IdProduct='$idproduct'";  
                $query2 = mysqli_query($conn, $sql2) or die("Trừ thất bại");
            }
        	echo($trangthai."...");
        }
    }

?>