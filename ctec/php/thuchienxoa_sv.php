<?php
include "connectdb.php";

$idsinhvien = $_GET ["idsinhvien"];
$delete = "delete from sinhvien ";
$delete .= "where idsinhvien='$idsinhvien'";
$kq = mysql_query ( $delete, $connect );
Header ( "Location: QLSV.php" );
?>