<?php
session_start();
include 'connection.php';
$user = $_SESSION['User_Id'];
$log = $_SESSION['password'];
if ($log != "log"){
	header ("Location:new1.php");
}

$ctrl = $_REQUEST['key'];


$SQL = "DELETE FROM userinfo WHERE User_Id = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'new1.php'< ~dulla^@204~ 