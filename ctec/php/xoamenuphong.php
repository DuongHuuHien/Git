<?php
include "ketnoi.php";


	for($i = 0; $i < count ( $_POST ['checkbox'] ); $i ++) {
	$sql = "DELETE FROM menu_phong WHERE idphong='" . $_POST ['checkbox'] [$i] . "'";
	$result = mysql_query ( $sql );
}


	 if ($result) {
	 	echo "<script>";
	 	echo "alert('Xóa menu khoa thành công!');";
		echo "window.location='xemdulieu.php?ok=XEM&&table=7';";
	 	echo "</script>";
	} else {
		echo "<script>";
		echo "alert('Xóa không thành công!');";
	echo "window.location='xemdulieu.php?ok=XEM&&table=7';";
		echo "</script>";
	 }

?>