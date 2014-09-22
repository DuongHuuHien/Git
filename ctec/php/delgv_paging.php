<?php
include "ketnoi.php";

$idgiangvien = $_GET ["idgiangvien"];
$selkhoa = $_GET ["selkhoa"];
$ok = $_GET ["ok"];
$delete = "delete from giangvien ";
$delete .= "where idgiangvien='$idgiangvien'";
$kq = mysql_query ( $delete, $connect );
echo "<script>";
echo "alert('Đã xóa...');";
echo "</script>";
if (isset ( $_GET ['page'] )) {
	$page = $_GET ['page'];
	header ( "Location: QT.php?page=$page&&ok=$ok&&selkhoa=$selkhoa" );
} 

else {
	header ( "Location: QT.php?ok=$ok&&selkhoa=$selkhoa" );
}

?>