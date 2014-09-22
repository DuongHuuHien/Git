<?php
include "ketnoi.php";

$idgiangvien = $_GET ["idgiangvien"];
$page=$_GET["page"];
$delete = "delete from giangvien ";
$delete .= "where idgiangvien='$idgiangvien'";
$kq = mysql_query ( $delete, $connect );
header("location: QT.php?page=".$page);


?>