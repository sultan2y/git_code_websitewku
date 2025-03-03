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

<td  valign="top" bgcolor="white">
<!--------body  --->
<center><h3><hr><font color="blue">Update User Account </font></h3></center>

<?php
@$ctrl = $_REQUEST['key'];
$query="SELECT * FROM account where User_Id='{$ctrl}'";

$result=mysql_query($query);
$count=mysql_num_rows($result);
if(!$result){
die("user not registered!".mysql_error());
}
if($count==1){
while($row=mysql_fetch_array($result)){
$r0=$row[0];
$r1=$row[1];
$r2=$row[2];
$r3=$row[3];
$r4=$row[4];
$r5=$row[5];
$r6=$row[6];
}
?>
  <form id="form1" method="POST" action="edituser.php"  onsubmit='return formValidation()'>
<table bgcolor="#F0F8FF"  style="border:1px solid #336699;width:440px;height:15px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">
<tr>
<tr><td><b>First Name:</b></td><td><input type='text' name='fname' value="<?php echo "$r0"?>"></td></tr>
<tr><td><b>Last Name:</b></td><td><input type='text' name='lname' value="<?php echo "$r1"?>"></td></tr>
<tr><td><b>User ID:</b></td><td bgcolor="red"><input  type='text' name='user_id' readonly="readonly" value="<?php echo "$r2"?>"></td></tr>
<tr><td><b>Phone No:</b></td><td><input type='text' name='phone_no' value="<?php echo "$r3"?>"></tr></td>
<tr><td><b>User Name:</b></td><td><input type='text' name='username' value="<?php echo "$r4"?>"></tr></td>
<!--<tr><td><b>Password:</b></td><td><input type='text' name='password' value="<//?php// echo "$r5"?>"></tr></td>-->
<tr><td><b>Account Type:</b></td><td><input type='text' name='actype' value="<?php echo "$r6"?>"></tr></td>
<tr><td colspan=2 align='center'><input type='submit' name='update' value='Update Account' class="button_example"></tr></td>
</table>
 <?php
}
?>
 
 <?php
  if(isset($_POST['update']))
  {
  
	            $fname=$_POST['fname'];
				$lname=$_POST['lname'];
				$user_id=$_POST['user_id'];
				$phone_no=$_POST['phone_no'];
				$username=$_POST['username'];
				//$password=$_POST['password'];
				$actype=$_POST['actype'];
										
  $update = mysql_query("update account set fname='$fname',lname='$lname',
	User_Id='$user_id', phone='$phone_no' ,username='$username',accounttype='$actype'
  WHERE User_Id='{$user_id}'") or die(mysql_error());
  if($update){
  echo'<font color="green" align="center">data is updated successfully!</font>';
			echo' <meta content="3;manageuser.php" http-equiv="refresh" />';
  }
 else
 {
 echo 'not updated'; 
echo' <meta content="2;manageuser.php" http-equiv="refresh" />';
}
  }
  ?>
</td>
<td width=150px>
<table border=0 width=150px height="100" bgcolor=white>
<tr>
<td valign=top bgcolor=white>
<h2><center>
<font color="black" face="monotype corsiva" size="5">Admass university  distance Office  works for change!!</font><br>
<font color="white"><a href="debre.php"><iframe name="frame" width=300px height=415px src="date.php"></iframe><a></center></h2>
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
</html>