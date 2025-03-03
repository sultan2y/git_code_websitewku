<?php
session_start();
include 'connection.php';
$user = $_SESSION['User_Id'];
$log = $_SESSION['password'];
if ($log != "log"){
	header ("Location:manageuser.php");
}

$ctrl = $_REQUEST['key'];
	$update=mysql_query("update account set password='123' where User_Id='{$ctrl}'");
	if($update)
	{
	echo"Password is Rest Succssfully!!";
		header("Location:manageuser.php");
	}
	else
	{
		echo mysql_error();
	}
	
?>