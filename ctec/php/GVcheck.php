<?php
include "ketnoi.php";

$idgiangvien=$_POST['idgiangvien'];
for($i = 0; $i < count ( $_POST ['checkbox'] ); $i ++) {
			$sql = "DELETE from giangvien_day_hocphan
			where idgiangvien='$idgiangvien' && idhocphan='" . $_POST ['checkbox'] [$i] . "'";
			$result = mysql_query ( $sql );

}
if ($result) {
	echo "<script>";
	echo "alert('Xóa học phần thành công!');";
	echo "window.location=\"GV.php\";";
	echo "</script>";
} else {
	echo "<script>";
	echo "alert('Xóa không thành công! Trở lại?');";
	echo "window.location=\"GV.php\";";
	echo "</script>";
}


?>