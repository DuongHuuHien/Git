﻿<?php
include ('php/ketnoi.php');
require 'PHPMailer/class.phpmailer.php';

// mã xác nhận ngẫu nhiên
$confirm_code = md5 ( uniqid ( rand () ) );

// giá trị nhập từ người dùng
$tendangnhap = $_POST ['user'];
$hodem = $_POST ['hodem'];
$ten = $_POST ['ten'];
$email = $_POST ['email'];
$password = $_POST ['password'];

// chèn dữ liệu vào database
$sql = "INSERT INTO temp_members_db(maxacnhan, tendangnhap, hodem, ten, email, password)
VALUES('$confirm_code', '$tendangnhap', '$hodem', '$ten', '$email', '$password')";
$result = mysql_query ( $sql );

// nếu chèn thành công sẽ gởi link xác nhận vào email người đăng ký
if ($result) {
	
	$mail = new PHPMailer ();
	$mail->IsSMTP ();
	$mail->Host = 'smtp.gmail.com'; // host smtp để gửi mail
	$mail->Port = 587; // cổng để gửi mail
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true; // Xác thực SMTP
	
	$mail->CharSet = "windows-1251";
	$mail->CharSet = "utf-8";
	
	// ---------------- Form gởi mail ----------------
	
	// gởi mail đến địa chỉ mail mà người dùng sử dụng đăng ký ...
	$mail->Username = "ntctuyen_cth12@ctec.edu.vn"; // Tên đăng nhập tài khoản Gmail
	$mail->Password = "hpdhntb120710"; // Mật khẩu của gmail
	$mail->AddAddress ( '' . $email ); // Email của người nhận
	                                   // Tiêu Đề Email
	$mail->Subject = 'Xác Nhận Tài Khoản Từ Website http://chuyennganhctec.freevnn.com'; // Tiêu đề của thư
	                                                                                     // gởi từ
	                                                                                     
	// nội dung mail
	$message = "Tài khoản đăng nhập: $tendangnhap \r\n<br />";
	$message .= "Mật khẩu: $password\r\n<br />";
	$message .= "Xác Nhận Tài Khoản \r\n";
	$message .= "Vui lòng bấm vào link dưới đề hoàn tất việc đăng ký \r\n";
	$message .= "http://localhost:7070/chuyennganh/xacnhan.php?passkey=$confirm_code&tendangnhap=
$tendangnhap&hodem=$hodem&ten=$ten&email=$email&password=$password";
	$mail->MsgHTML ( "" . $message ); // Nội dung của bức thư.
}

// Tiến hành gửi email và kiểm tra lỗi
if (! $mail->Send ()) {
	echo "Không thể gởi link xác nhận !" . $mail->ErrorInfo;
} else {
	
	echo "<script>";
	echo "alert('Kiểm tra mail để xác nhận việc đăng ký! Trở lại trang chủ...');";
	echo "window.location=\"index.php\";";
	echo "</script>";
}

?>