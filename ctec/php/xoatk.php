<?php
include "ketnoi.php";


	for($i = 0; $i < count ( $_POST ['checkbox'] ); $i ++) {
	$sql = "DELETE FROM taikhoan WHERE tendangnhap='" . $_POST ['checkbox'] [$i] . "'";
	$result = mysql_query ( $sql );
}


	 if ($result) {
	 	echo "<script>";
	 	echo "alert('Xóa tài khoản thành công!');";
		echo "window.location='xemdulieu.php?ok=XEM&&table=10';";
	 	echo "</script>";
	} else {
		echo "<script>";
		echo "alert('Xóa không thành công!');";
	echo "window.location='xemdulieu.php?ok=XEM&&table=10';";
		echo "</script>";
	 }

?>