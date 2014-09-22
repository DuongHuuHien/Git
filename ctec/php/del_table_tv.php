<?php
include "ketnoi.php";


$delete = "drop table registered_members ";
$kq = mysql_query ( $delete, $connect );

	 if ($kq) {
	 	echo "<script>";
	 	echo "alert('Xóa thành công!');";
		echo "window.location=\"xemdulieu.php\";";
	 	echo "</script>";
	} else {
		echo "<script>";
		echo "alert('Xóa không thành công!');";
	echo "window.location=\"xemdulieu.php\";";
		echo "</script>";
	 }
?>






