<?php
include "ketnoi.php";
$idgiangvien=$_POST['idgiangvien'];

echo $idgiangvien;
	for($i = 0; $i < count ( $_POST ['checkbox'] ); $i ++) {
	$sql = "DELETE FROM giangvien_day_hocphan WHERE idgiangvien='$idgiangvien' and idhocphan='" . $_POST ['checkbox'] [$i] . "'";
	$result = mysql_query ( $sql );
}


	 
?>