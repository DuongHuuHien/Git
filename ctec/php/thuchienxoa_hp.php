<?php
include "connectdb.php";

$idhocphan = $_GET ["idhocphan"];
$delete = "delete from hocphan ";
$delete .= "where idhocphan='$idhocphan'";

$kq = mysql_query ( $delete, $connect );
Header ( "Location: GV.php" );
?>