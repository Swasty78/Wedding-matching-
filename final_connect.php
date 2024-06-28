<?php 
function OpenCon()
{
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$db = "final";

	$conn=new mysqli($dbhost,$dbuser,$dbpass,$db)
	or die("Connect failed: ".$conn->error);
	
	return $conn;
}
function CloseConn($conn)
{
	$conn->close();
}
OpenCon();
?>