
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

</head>
<body>
<table align=center width=1000px height= border="6" bgcolor="#E5E4E2">
<tr>
<td height=20px  colspan=4>

<img src="2.jpg" width="140px" height="100" ><img src="in1.png" width="1000px" height="100" ><img src="2.jpg" width="150px" height="100" >
</td>

</tr>
<tr>
<td  height=20px colspan=3 bgcolor=#737CA1 >
  <div id="dropdown">
   <li><a href="index.php">Home</a></li>
   <li><a href="About.php">About as</a></li>
   <li><a href="register.php">Apply to Register</a></li>
  <li><a href="#">Departments</a>
      <ul>
	    <li><a href="Accounting.php">Accounting</a></li>
		<li><a href="Managment.php">Managment</a></li>
		<li><a href="Marketing.php">Marketing Managment</a></li>
		<li><a href="Economics.php">Economics</a></li>		  
		<li><a href="English.php">English</a></li>
        <li><a href="Mathematics.php">Mathematics</a></li>
        <li><a href="Educational.php">Educational Planning and managment</a></li>
		</ul>
		</li>	
	<li><a href="#">Login</a>
	   <ul>
		<li><a href="login.php">&nbsp;&nbsp;Admin</a>
		<li><a href="login.php">&nbsp;&nbsp;Instructor</a>
		<li><a href="login.php">&nbsp;&nbsp;Registrar</a>
		<li><a href="login.php">&nbsp;&nbsp;Student</a></li>	
		<li><a href="login.php">&nbsp;&nbsp;Coordinator</a></li>
		<li><a href="login.php">&nbsp;&nbsp;DeP-Head</a></li>
 </ul>
	</li>
	<li><a href="Contact.php">Contact as</a>
	</li>
	<li><a href="feedback.php">Feedback</a>
	</li>
	<li><a href="help.php">Help</a>
	</li>
	</li>
	

</div>
<a style="font-size:25px"href="logout.php" id="login">Logout</a> </font>
	 
	 </div>
</td>
</tr>
<tr>
<td  height="100%" width=250px bgcolor="#565051" valign=top>
<table   bgcolor="#565051" border="0"  width="200" height="110%" class="menu-bar" align="center">
<tr>
 <td width="150" height="20">
 <a href="assignmentsubmit1.php" id="drop"><b>Upload Assigment</b></a></td>
</tr>
<tr></br><br>
 <td width="150" height="20">
 <a href="assignmentdownload.php" id="drop"><b>Download Assigment</b></a></td></tr>
</tr></br><br>

 <tr><td width="150" height="20">
 <a href="#" id="drop"><b>Update Student Result</b></a></td>
</tr>
 <tr><td width="150" height="20">
 <a href="# id="drop"><b>prepare exam quation</b></a></td>
</tr> 
<tr >
<td width="110" height="20"><b><font color="white">
 <a href="changepassword1.php" id="drop"><b>Change Password</b></a></td>
</tr>

  
<tr>
<td>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

    </td>
   </tr>
   </table>
</td>
<td  valign="top">
<!--------body  --->
<br><br>
<form action="ChangePassword1.php" method="post" onsubmit='return formValidation()'>
<fieldset style="background-color:white" height="80%" width="(90%">
<p align="center"><img src="changepass.GIF" height="150" width="350"></p>
<p><font size="4px">Old Password:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" id='old'placeholder='OldPassword'><br><br>
<p><font size="4px">New Password:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="pass" id='new' placeholder='NewPassword'><br><br>
<p><font size="4px">Confirm New password:</font>&nbsp;<input type="password" name="rpass" id='confi' placeholder='ConfrimPassword'><br>
<p align="center"><input type="submit" name="update" value="update" Onclick="return check(this.form);"/>&nbsp;&nbsp;
<input type='reset' value='Reset'></p><br><br>

</fieldset>
</form>	
<?php
if(isset($_POST['update']))
{
$password =$_POST['password'];
$p=base64_encode("$password");
$pass = $_POST['pass'];
$p1=base64_encode("$pass");
$rpass = $_POST['rpass'];
$query="update account set password='$p1' where password='$p' and User_Id='$_SESSION[a]'";
$result=mysql_query($query);
if($result)
{
echo "<font color='green'>password changed Successfully";
echo' <meta content="3; changepassword1.php" http-equiv="refresh" />';
}
else
{
echo "Change password is not correct: please try again".mysql_error();
echo' <meta content="3;changepassword1.php" http-equiv="refresh" />';
}
}
?>
</div>
</td>
<td width=150px>
<table border=0 width=150px height="100" bgcolor=white>
<tr>
<td valign=top bgcolor=white>
<h2><center>
<font color="black" face="monotype corsiva" size="5">Admass university  distance Office  works for change!!</font><br>
<font color="white"><a href="debre.php"><iframe name="frame" width=300px height=300px src="date.php"></iframe><a></center></h2>
</td>
</tr>
<tr>
<td >
<marquee direction="up"><font face="Lucida Calligraphy" color="black" size="4">
<center>Admass university distance education!!!</center></font></marquee></td></tr>
<tr>
<td bgcolor="white"><img src="d4.JPG" width="200" height="150"></font></h3>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td colspan=3 bgcolor=gray>

<table align="center" bgcolor="kebede"><tr><td><font face="Times New Roman" color="green" size="3">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;Admass Univresity Distance Eduction Office All Right are Reservd   &copy; 2010 E.C.
 &nbsp; &nbsp; &nbsp; &nbsp;
</font></td></tr></table>
</td>
</tr>
</table>
</body>
</html>