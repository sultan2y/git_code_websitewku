<?php
$conn=mysql_connect("localhost","root","") or die(mysql_error());
	$sdb=mysql_select_db("cde",$conn) or die(mysql_error()); 
if(isset($_GET['status']))
{
	$status=$_GET['status'];
	
	$select_status=mysql_query("select * from account where username='$status'");
	while($row=mysql_fetch_object($select_status))
	{
	$st=$row->isActive;
	if($st=='0'){
	$status2=1;
	}
	else{
	$status2=0;
	}
	
	/*#################################################################
	 if($st=='2'){
	
	$status2=4;
	}
	else if($st=='3'){
	
	$status2=5;
	}
	
else if($st=='5'){
	
	$status2=3;
	}
	else if($st=='4'){
	
	$status2=2;
	}
	else if($st=='6'){
	
	$status2=8;
	
	}
	else if($st=='8'){
	
	$status2=6;
	}
		else if($st=='7'){
	
	$status2=9;
	
	}
	else if($st=='9'){
	
	$status2=7;
	}
		else if($st=='10'){
	
	$status2=11;
	
	}
	else if($st=='11'){
	
	$status2=10;
	}
	###############################################################	
	*/
		
	$update=mysql_query("update account set isActive='$status2' where username='$status' ");
	if($update)
	{
		header("Location:manageuser.php");
	}
	else
	{
		echo mysql_error();
	}
	}
	?>
     
    <?php
}
?>