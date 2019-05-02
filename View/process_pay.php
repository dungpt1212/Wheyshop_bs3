<?php 
	session_start();
	include('../Lib/connection.php');
	include "../libraries/send_email/src/PHPMailer.php";
	include "../libraries/send_email/src/Exception.php";
	include "../libraries/send_email/src/OAuth.php";
	include "../libraries/send_email/src/POP3.php";
	include "../libraries/send_email/src/SMTP.php";

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
													/*Trang xử lý giao hàng và thanh toán*/
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	include("../Lib/connection.php");
    if(isset($_SESSION["user"])){ 					/*Lấy ID khách hàng từ session*/ 
    	$user = $_SESSION["user"];
    	$sql="Select * from tbl_customer where Username = '$user'";
		$query= mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($query);
		$idcustomer = $row["IdCustomer"];
    } 
    if(isset($_SESSION["total_money"])){				/*Lấy tổng tiền từ session cart*/
    	$total_money = $_SESSION["total_money"];   
    }


 	if(isset($_POST["btn_luu"])){						/*Lấy dữ liệu vừa nhập từ form thanh toán*/
 		$name = $_POST["txt_name1"];
 		$phone = $_POST["txt_phone1"];
 		$hinhthucthanhtoan = $_POST["sl_hinhthucthanhtoan"];
 		$addr = $_POST["txt_addr1"];
 		
 		$tinhthanhpho = $_POST["sl_tinhthanhpho"];			/*Truy vấn lấy ra tên tỉnh*/
 		$sql="Select * from devvn_tinhthanhpho where matp = '$tinhthanhpho'";
		$query= mysqli_query($conn1, $sql);
		$row = mysqli_fetch_array($query);
		$tinhthanhpho = $row["name"];
 		
 		$quanhuyen = $_POST["sl_quanhuyen"];			/*Truy vấn lấy ra tên huyện*/
 		$sql="Select * from devvn_quanhuyen where maqh = '$quanhuyen'";
		$query= mysqli_query($conn1, $sql);
		$row = mysqli_fetch_array($query);
		$quanhuyen = $row["name"];

 		if(isset($_POST["sl_xaphuong"])){			/*Truy vấn lấy ra tên xã*/
 			$xaphuong = $_POST["sl_xaphuong"];
 			$sql="Select * from devvn_xaphuongthitran where xaid = '$xaphuong'";
			$query= mysqli_query($conn1, $sql);
			$row = mysqli_fetch_array($query);
			$xaphuong = $row["name"];
 		}else {
 			$xaphuong ="";
 		}

		$trangthai = "Đang xử lý";

 		$AddressRecevier = "$addr "."$xaphuong".", $quanhuyen".", $tinhthanhpho";
 		
 		$time = date('Y-m-d H:i:s');
 		/*INSERT dữ liệu vào bảng hóa đơn*/
 		$sql="INSERT INTO `tbl_bill`(`IdCustomer`, `NameRecevier`, `PhoneReceiver`, `AddressRecevier`, `Total`, `Pay`, `Time`, `Status`) VALUES ('$idcustomer','$name','$phone','$AddressRecevier','$total_money','$hinhthucthanhtoan','$time','$trangthai')";
		$query= mysqli_query($conn, $sql) or die("Không thành công");


		/*INSERT dữ liệu vào bảng chi tiết hóa đơn*/
		$sql="SELECT MAX(IdBill) as max FROM tbl_bill";
		$query= mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($query);
		$idbill = $row["max"];


		if(isset($_SESSION["cart"])){
			foreach ($_SESSION["cart"] as $key => $val) {
				$number = $val["number"];
				/*echo("<pre>");
					print_r($_SESSION["cart"]);
				echo("</pre>");*/
				$sql="INSERT INTO `tbl_bill_detail`(`IdBill`, `IdProduct`, `Number`) VALUES ('$idbill','$key', '$number')";
		        $query= mysqli_query($conn, $sql) or die("Không thể thêm");
		       unset($_SESSION["cart"]);
				header("location: ../index.php?page=cart&&alert=paysuccess");
		}


		// code gửi email.

		$mail = new PHPMailer(true); // Passing `true` enables exceptions
	    try {
	        //Server settings
	        $mail->SMTPDebug = 2; // hiện lỗi.
	        $mail->isSMTP();
	        $mail->Host = 'smtp.gmail.com'; // ssử dụng gmail
	        $mail->SMTPAuth = true; // Enable SMTP authentication
	        $mail->Username = 'nguyentattrunghaha@gmail.com'; // SMTP username
	        $mail->Password = '0983560075'; // SMTP password
	        $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
	        $mail->Port = 587; // TCP port to connect to

	        // lấy thông tin khách hàng.
			$user = $_SESSION["user"];
	    	$sql="Select * from tbl_customer where Username = '$user'";
			$query= mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($query);
			$emailkhachhang = $row["Email"];

	        //Recipients
	        $mail->CharSet = "utf-8";
	        $mail->setFrom('nguyentattrunghaha@gmail.com', 'Trung');
	        $mail->addAddress($emailkhachhang);

	        // cấu hình email.
	        $mail->isHTML(true);
	        $mail->Subject = 'Thông tin sản phẩm thuê của cửa hàng Wheyshop';
	        $mail->Body = 'Bạn đã mua hàng thành công từ Wheyshop !';

	        $mail->send();
	        echo 'Đã gửi tin';
	    } catch (Exception $e) {
	        echo 'không thể gửi tin ', $mail->ErrorInfo;
	    }


	}
} else header("location: ../index.php?page=cart&&alert=paysuccess");

 	






 ?>