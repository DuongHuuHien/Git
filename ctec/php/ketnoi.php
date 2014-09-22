<?php
$connect = mysql_connect ( 'localhost', 'root', '' );
if (! $connect)
	echo "could not connect to Database!!";

mysql_select_db ( 'chuyennganh', $connect ) or die ( "Could not select database!!" );

mysql_set_charset ( "utf8", $connect );

$host= 'http://'.$_SERVER['HTTP_HOST'].'/';
$images=$host.'images/';
$php=$host.'php/';
$xdl=$php.'xemdulieu.php?ok=XEM&table=';
$page=$host.'index.php?page=';
$update_table=$host.'index.php?page=capnhat&&table=';
$inc=$_SERVER['DOCUMENT_ROOT'].'/includes/';
$suadulieu=$inc.'suadulieu/';
$capnhat=$inc.'capnhat/';
?>
