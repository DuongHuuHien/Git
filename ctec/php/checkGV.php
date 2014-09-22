<?php
include "ketnoi.php";

for($i = 0; $i < count ( $_POST ['checkbox'] ); $i ++) {
	$sql = "DELETE FROM giangvien WHERE idgiangvien='" . $_POST ['checkbox'] [$i] . "'";
	$result = mysql_query ( $sql );
}

if ($result) {
	echo "<script>";
	echo "alert('Xóa Giảng Viên thành công!');";
	echo "window.location=\"QT.php\";";
	echo "</script>";
} else {
	echo "<script>";
	echo "alert('Xóa không thành công! Trở lại?');";
	echo "window.location=\"QT.php\";";
	echo "</script>";
}

?>