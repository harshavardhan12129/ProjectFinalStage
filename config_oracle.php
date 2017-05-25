<?php
//define constants for connection info
define("ORACLEUSER","team01mar17");
define("ORACLEPASS","Password1");
define("ORACLEDB","localhost/XE");

//make connection to database
function db_connect()
{
	$conn = oci_connect(ORACLEUSER, ORACLEPASS, ORACLEDB);
	if (!$conn) {
		$e = oci_error();
		trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
	}
	return $conn;
} 
?>

