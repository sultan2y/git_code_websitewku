<?php
	include("connection.php");  
 session_start();
if(isset($_SESSION['User_Id']))
 {
  $mail=$_SESSION['User_Id'];
 } 
 else 
 {
 ?>

<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>
<html>
<head>
<link style="text/css" href="3.css" rel="stylesheet">

<body>
<table align=center width=1000px bgcolor="white"border="white">
<tr>
<td height=20px  colspan=4>
<img src="2.jpg" width="120px" height="50" ><img src="ima/c12.png" width="1000px" height="50" ><img src="2.jpg" width="120px" height="50" >
</td>
</tr>
<tr>
<td  height=20px colspan=3 bgcolor=#737CA1 >
  <div id="dropdown">
   <li><a href="admin.php"><b>Admin Home</b></a></li>
   <li><a href="manageuser.php"><b>Manage User Account</b></a></li>	
   <li><a href="create.php"><b>Create User account</b></a></li>
   <li> <a href="#" ><b>View</b></a><ul>	
   <li> <a href="viewactiveuser.php">View Active User</a></li>
   <li> <a href="viewdactiev.php">View Deactivate User</a></li></ul></li> 	
   <li><a href="changepassword.php"><b>Change Password</b></a></li>
<li><a href="logout.php" id="login">Logout (<?php echo"Hi&nbsp;&nbsp;&nbsp;";?><?php echo $_SESSION['b'];?>)</a></li>	
	</div>
	 </td>
     </tr>
<!--------body  --->
<td  valign="top" bgcolor="white">
<br>
<table bgcolor="#F0F8FF"  style="border:1px solid #336699;width:350px;height:15px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">
<tr>
<td>
<center><h3><p style="text-shadow: 4px 4px 4px blue;">Manage User Account</p></h3></center>
<form action="manageuser.php" method="post"  onsubmit="return Form1_Validator(this)" name="Form1">
<label><font size="4px">Account Type</font></label>
 <select name="accounttype" id="accounttype">
  <option>--select Account--</option>
<option>Admin</option>
<option>Instructor</option>
<option>Registrar</option>
<option>Student</option>
<option>Coordnator</option>
<option>DeP-Head</option>
    </select>
 <input type="submit" value="Search" name="save" style="font-size:16px" align="center"><br>

</form>
</tr></td></table>
<?php 
if(isset($_POST['save'])){
@$dept=$_POST['accounttype']; 
$rs = mysql_query("SELECT  * FROM  account where accounttype='$dept' ");

?><br>
<table align='center' border="1" bgcolor="" width='750'>
<tr>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'> <b>First Names</b></th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'><b>Middle name</b></th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'><b>User ID</b></th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'><b>User Name</b></th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'><b>Phone</b></th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'><b>Account Type</b></th>
<th colspan="2" style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size=''><b>Action</b></th>

</tr>  
<?php
$result = mysql_query("SELECT * FROM account");
while($row = mysql_fetch_array($rs))
  {
$ctrl = $row['User_Id'];
$fname=$row['fname'];
$lname=$row['lname'];
$name=$row['username'];
$phone=$row['phone'];
$actype=$row['accounttype'];
?>
<tr>
<td><?php echo $fname;?></td>
<td><?php echo $lname;?></td>
<td><?php echo $ctrl;?></td>
<td><?php echo $name;?></td>
<td><?php echo $phone;?></td>
<td><?php echo $actype;?></td>	
<?php
print("<td style='height:30px;'><a href = 'edituser.php?key=".$ctrl."'>
		<img src = 'edit.jpg' width='50px' height='45px' title='Edit' ></img></a></td>
		");
		?>
		<?php
print("<td style='height:30px;'><a href = 'Resetpassword.php?key=".$ctrl."'>
		Restpassword</a></td>
		");
		?>
		

		</tr>
<?php
  }
print( "</table>");

?>
<center><h3><p color="blue" style="text-shadow: 4px 4px 4px black;"><b>Active or Deactive User Account</b><p></h3><center>
<form action="account.php" method="post">
<table align='center' border="1" bgcolor="#F0FFFF" width='750'>
<tr>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'> <b>First Names</b></th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'><b>Middle name</b></th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'><b>User ID</b></th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'><b>Phone</b></th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'><b>User Name</b></th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'><b>Account Type</b></th>
<th colspan="2" style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size=''><b>Action</b></th>

</tr>
<?php					
$result = mysql_query("SELECT * FROM account where accounttype='$dept'");
while($row = mysql_fetch_array($result))
  { 
$isActive=$row['isActive'];
$status=$row['status'];								
$name=$row['fname'];								
$lname=$row['lname'];
$User_Id= $row['User_Id'];
$ge=$row['phone'];
$mail=$row['username'];
$acount=$row['accounttype'];									
?> 
<tr>
<td><?php echo $name?></td>
<td><?php echo $lname;?></td>
<td><?php echo $User_Id;?></td>
<td><?php echo $ge;?></td>
<td><?php echo $mail;?></td>
<td><?php echo $acount;?></td>	
		<td><?php
		if(($isActive)=='1')
		{
		?>
<a href="status.php?status=<?php echo $row['username'];?>" onclick="return confirm('Really you De-activate');"> 
<img src="activate.png" width="25 id="view" height="25"  />Activated</a>
                        <?php
						}
		if(($isActive)=='0')
						{
						?>
   <a href="status.php?status=<?php echo $row['username'];?>" onclick="return confirm('Really you Activate');">
   <img src="deactivate.png" id="view" width="35" height="35" alt="" onclick='isConfirmlog()'/>Deactivated </a>
                        <?php
						}
		
                        ?>
						
						</td>
		
		
		</tr>
<?php
  }
 
print( "</table>");
mysql_close($conn);
}
?>
						</form>
</td>
<td width=150px>
<table border=0 width=150px height="100" bgcolor=white>
<tr>
<td valign=top bgcolor=white>
<h2><center>
<font color="black" face="monotype corsiva" size="5">Admass university  distance Office  works for change!!</font><br>
<font color="white"><a href="debre.php"><iframe name="frame" width=300px height=400px src="date.php"></iframe><a></center></h2>
</td>
</tr>

</table>
</td>
</tr>
<tr>
<td colspan=3 bgcolor=gray>
<table align="center" bgcolor=""><tr><td><font face="Times New Roman" color="white" size="3">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Admass University of Collage Distance Eduction Office All Right are Reservd &copy; 2010 E.C. 
&nbsp; &nbsp; &nbsp; &nbsp;
</font></td></tr></table>
</td>
</tr>
</table>
</body>
</ ~dulla^@204~ 