<?php
include "ketnoi.php";

$idtailieu=$_POST['idtailieugiangday'];

	for($i = 0; $i < count ( $_POST ['checkbox'] ); $i ++) {
	$sql = "DELETE FROM hocphan_tailieugiangday WHERE idtailieugiangday='$idtailieu' and idhocphan='" . $_POST ['checkbox'] [$i] . "'";
	
	echo $sql;
	$result = mysql_query ( $sql );
}


	 
?>