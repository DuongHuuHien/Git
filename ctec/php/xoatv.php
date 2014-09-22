<?php
include "ketnoi.php";


	for($i = 0; $i < count ( $_POST ['checkbox'] ); $i ++) {
	$sql = "DELETE FROM registered_members WHERE tendangnhap='" . $_POST ['checkbox'] [$i] . "'";
	$result = mysql_query ( $sql );
}


	 if ($result) {
	 	echo "<script>";
	 	echo "alert('Xóa thành viên thành công!');";
		echo "window.location='xemdulieu.php?ok=XEM&&table=11';";
	 	echo "</script>";
	} else {
		echo "<script>";
		echo "alert('Xóa không thành công!');";
	echo "window.location='xemdulieu.php?ok=XEM&&table=11';";
		echo "</script>";
	 }

?>