<?php
include "ketnoi.php";
$page=$_GET["page"];
$idsinhvien = $_GET ["idsinhvien"];
$delete = "delete from sinhvien ";
$delete .= "where idsinhvien='$idsinhvien'";
$kq = mysql_query ( $delete, $connect );

header("location: QLSV.php?page=".$page);

?>