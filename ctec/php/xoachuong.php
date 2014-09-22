<?php
include "ketnoi.php";


	for($i = 0; $i < count ( $_POST ['checkbox'] ); $i ++) {
	$sql = "DELETE FROM chuong WHERE idchuong='" . $_POST ['checkbox'] [$i] . "'";
	$result = mysql_query ( $sql );
}


	 if ($result) {
	 	echo "<script>";
	 	echo "alert('Xóa chuong thành công!');";
		echo "window.location='xemdulieu.php?ok=XEM&&table=5';";
	 	echo "</script>";
	} else {
		echo "<script>";
		echo "alert('Xóa không thành công!');";
	echo "window.location='xemdulieu.php?ok=XEM&&table=5';";
		echo "</script>";
	 }

?>