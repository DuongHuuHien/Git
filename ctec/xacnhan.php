<?php
include ('php/connectdb.php');

// mã xác nhận lấy từ link
$passkey = $_GET ['passkey'];

// Lấy dòng dữ liệu phù hợp vơi passkey này trong database
$sql1 = "SELECT * FROM temp_members_db WHERE maxacnhan ='$passkey'";

$result1 = mysql_query ( $sql1 );

// Nếu có dữ liệu
if ($result1) {
	
	// đếm xem có bao nhiêu passkey này
	$count = mysql_num_rows ( $result1 );
	
	// nếu tìm thấy, lấy dữ liệu từ table "temp_members_db"
	if ($count == 1) {
		
		$rows = mysql_fetch_array ( $result1 );
		$tendangnhap = $_GET ['tendangnhap'];
		$hodem = $_GET ['hodem'];
		$ten = $_GET ['ten'];
		$email = $_GET ['email'];
		$password = md5 ( $_GET ['password'] );
		
		$sql4 = "INSERT INTO taikhoan(tendangnhap, matkhau, quyen)VALUES
('$tendangnhap', '$password', 'SV')";
		$result4 = mysql_query ( $sql4, $connect );
		
		// chèn dữ liệu vừa lấy bên bảng "temp_members_db" đưa vào bảng "registered_members"
		$sql2 = "INSERT INTO registered_members(tendangnhap, hodem, ten, email, password)VALUES
('$tendangnhap', '$hodem', '$ten', '$email', '$password')";
		
		$result2 = mysql_query ( $sql2, $connect );
		
		if ($result2) {
			
			echo "<script>";
			echo "alert('Tài khoản của bạn đã được kích hoạt! Trở lại trang chủ...');";
			echo "window.location=\"index.php\";";
			echo "</script>";
			
			// Xoá thông tin của người dùng này từ bảng "temp_members_db" có passkey này
			$sql3 = "DELETE FROM temp_members_db WHERE maxacnhan = '$passkey'";
			$result3 = mysql_query ( $sql3, $connect );
			// thêm vào bảng tài khoản
		}
	} 	

	// nếu ko tìm thấy passkey, hiễn thị thông báo "Sai Mã Xác Nhận"
	else {
		echo "<script>";
		echo "alert('Sai mã xác nhận! Trở lại trang chủ...');";
		echo "window.location=\"index.php\";";
		echo "</script>";
	}
	
	// nếu di chuyển thành công dữ liệu từ bảng "temp_members_db" sang bảng "registered_members" hiển thị thông báo "tài khoản của bạn đã được kích hoạt" và đừng quên để xóa mã xác nhận từ bảng "temp_members_db"
}
?>