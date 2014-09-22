<?php
include "../php/ketnoi.php";
if (isset ( $_POST ['up'] )) { // Người dùng đã ấn submit
	if ($_FILES ['file'] ['name'] != NULL) { // Đã chọn file
	                                         // Tiến hành code upload file
		$allowedExts = array (
				"doc",
				"docx",
				"xls",
				"xlsx",
				"pdf" 
		);
		$extension = end ( explode ( ".", $_FILES ["file"] ["name"] ) );
		if (in_array ( $extension, $allowedExts )) {
			
			// Tiến hành code upload
			if ($_FILES ['file'] ['size'] > 104857688888888888888) {
				echo "<script>alert('{$_FILES["file"]["name"]} file không được lơn hơn 1048576!!');";
				echo "window.location='".$page."tailieu';";
				echo "</script>";
			} else {
				// file hợp lệ, tiến hành upload
				$path = "../php/upload/"; // ảnh upload sẽ được lưu vào thư mục upload
				$tmp_name = $_FILES ['file'] ['tmp_name'];
				$name = $_FILES ['file'] ['name'];
				$type = $_FILES ['file'] ['type'];
				$size = $_FILES ['file'] ['size'];
				

				$select = "select * ";
				$select .= "from upload ";
				$select .= "where name='$name'";
				
				$kq = mysql_query ( $select, $connect );
						$row = mysql_num_rows ( $kq );
						if ($row > 0) {
							echo "Tài liệu đã tồn tại...";
							echo "<script>alert('{$_FILES["file"]["name"]} Vui lòng upload file khác!');";
							echo "window.location='".$page."thongtinchuong';";
							echo "</script>";

						}else {
							$sel = "insert into ";
				$sel.= "upload values('$name','$type', '$size')";
				$kq = mysql_query ( $sel, $connect );
							if($kq){
									// Upload file
				move_uploaded_file ( $tmp_name, $path . $name );
				$tenchuong=$_POST['tenchuong'];
				$tomtat=$_POST['tomtat'];
				$idhocphan=$_POST['idhocphan'];
				$sel1 = "insert into ";
				$sel1.= "chuong values('NULL', '$tenchuong','$tomtat', '$idhocphan', 'null')";
				$kq1 = mysql_query ( $sel1, $connect );
				echo "File đã được upload thành công! <br />";
				echo "Tên file : " . $name . "<br />";
				echo "Kiểu file : " . $type . "<br />";
				echo "File size : " . $size;
										}
							
							
				
			} 
				
			}//FILE HỢP LỆ
		} else {
			// không phải file office
			echo "<script>alert('{$_FILES["file"]["name"]} Kiểu file không hợp lệ!');";
			echo "window.location='".$page."thongtinchuong';";
			echo "</script>";
		}
	} else {
		
		echo "<script>alert('{$_FILES["file"]["name"]} Vui lòng chọn file!');";
		echo "window.location='".$page."thongtinchuong';";
		echo "</script>";
	}
}

?>