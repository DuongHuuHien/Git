<?php
session_start ();
include "ketnoi.php";
$tendangnhap = $_POST ['user'];
$matkhau = md5 ( $_POST ['password'] );

$query = "select * from taikhoan where tendangnhap='".mysql_real_escape_string($tendangnhap)."' 
		and matkhau='".mysql_real_escape_string($matkhau)."'";
$kq = mysql_query ( $query, $connect );

$somautin = mysql_num_rows ( $kq );
if ($somautin > 0) {
	$row = mysql_fetch_array ( $kq );
	$_SESSION ["tendangnhap"] = $row [0];
	$_SESSION ["quyen"] = $row [2];
	if ($_SESSION ["quyen"] == "QT")
		Header ( "Location: QT.php" );
	else if ($_SESSION ["quyen"] == "GV")
		Header ( "Location: GV.php" );
	else
		Header ( "Location: SV.php" );
} else {
	
	Header ( "Location: ../dangnhap.php" );
}
?>