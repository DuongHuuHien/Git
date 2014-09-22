<?php
include "ketnoi.php";


	for($i = 0; $i < count ( $_POST ['checkbox'] ); $i ++) {
	$sql = "DELETE FROM hocphan WHERE idhocphan='" . $_POST ['checkbox'] [$i] . "'";
	$result = mysql_query ( $sql );
}


	 if ($result) {
	 	echo "<script>";
	 	echo "alert('Xóa học phần thành công!');";
		echo "window.location='xemdulieu.php?ok=XEM&&table=12';";
	 	echo "</script>";
	} else {
		echo "<script>";
		echo "alert('Xóa không thành công!');";
	echo "window.location='xemdulieu.php?ok=XEM&&table=12';";
		echo "</script>";
	 }

?>