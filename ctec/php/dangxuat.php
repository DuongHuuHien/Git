<?php
session_start ();
if (isset ( $_SESSION ['quyen'] )) {
	session_destroy ();
	session_unset ();
	header ( "Location: ../index.php" );
}
?>