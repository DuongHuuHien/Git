<?php
include "ketnoi.php";

$idsinhvien = $_GET ["idsinhvien"];
$selkhoa = $_GET ["selkhoa"];
$ok = $_GET ["ok"];
$delete = "delete from sinhvien ";
$delete .= "where idsinhvien='$idsinhvien'";
$kq = mysql_query ( $delete, $connect );
echo "<script>";
echo "alert('Đã xóa...');";
echo "</script>";
if (isset ( $_GET ['page'] )) {
	$page = $_GET ['page'];
	header ( "Location: QLSV.php?page=$page&&ok=$ok&&selkhoa=$selkhoa" );
} 

else {
	header ( "Location: QLSV.php?ok=$ok&&selkhoa=$selkhoa" );
}

?>