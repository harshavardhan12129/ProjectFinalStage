<?php
//define constants for connection info
define("ORACLEUSER","team05mar17");
define("ORACLEPASS","oracle_team05");
define("ORACLEDB","10.250.0.7/xe");
//define("ORACLEDB","192.168.56.101/orcl12c");

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
