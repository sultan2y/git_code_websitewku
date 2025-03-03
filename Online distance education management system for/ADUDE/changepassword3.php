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
  <script language="javascript">
  function check()
  {
   if(document.getElementById("oldpass").value == "")
   {
    alert("First Enter your old password!!");
    document.getElementById("oldpass").focus();
    return false;
   }
     if(document.getElementById("newpass").value =="")
   {
    alert('First Enter your new password!!');
    document.getElementById("newpass").focus();
    return false;
   }
     if(document.getElementById("confipass").value =="")
   {
    alert('First Enter your Conformation password !!');
    document.getElementById("confipass").focus();
    return false;
   }
  }
 </script>
</head>
<body>
<table align=center width=1000px height= border="">
<tr>
<td height=20px  colspan=4>
<img src="2.jpg" width="140px" height="50" ><img src="ima/c12.png" width="1052px" height="50" ><img src="2.jpg" width="140px" height="50" >
</td>
</tr>
<tr>
<td  height=20px colspan=3 bgcolor=#737CA1 >
  <div id="dropdown">
  <li><a href="registrar.php" >&nbsp;&nbsp;Home</a>
  <li><a href="#">Register</a>
  <ul>
  <li><a href="regcourse.php">&nbsp;&nbsp;Course</a>
  <li><a href="regdep.php">&nbsp;&nbsp;Department</a>
   </ul>
	</li>
  <li><a href="update1.php"> Update </a></li>	
   <li><a href="rep1.php"> Generate Report</a></li>
    <li><a href="grade.php">Grade Report</a></li>
   <li><a href="#">View</a>
      <ul>
	  	<li><a href="viewstud.php">student profile</a></li>
		<li><a href="Viewcurriclum.php">Currculem</a></li>
		<li><a href="reject.php">reject student</a></li>
		</ul>
		</li>	
		<li><a href="#">Approve</a><ul>
<li><a href="viewapplication.php" >Approve applicant</a></li>
</ul></li>
<li><a href="feedback2.php" link="white" >Give Comment</a></li>
<li><a href="changepassword3.php" link="white" >Change Password </a></li>
		</li>		
<li><a href="logout.php" id="login">Logout (<?php echo"Hi&nbsp;&nbsp;&nbsp;";?><?php echo $_SESSION['b'];?>)</a></li>	
    </div>
</td>
</tr>
<!--------body  --->
<td  valign="top" bgcolor="white" width=><br>
<h2><center><p style='text-shadow: 4px 4px 4px blue;'size=4px color=pink>
Change your Password</center></h2>
<center><form action="ChangePassword3.php" method="post" border="4"  align="center" onsubmit='return formValidation()'>
<table style="border:1px solid #336699;width:450px;height:250px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">
<tr><td><font size="4px">Old Password:</td><td></font><input type="password" name="password"id='old' placeholder="Old password" required></td></tr>
<tr><td><font size="4px">New Password:</td><td></font><input type="password" name="pass"id='new' placeholder="New password" required></td></tr>
<tr><td><font size="4px">Confirm password:</td><td></font><input type="password" name="rpass"id='confi' placeholder="Confirm password" required></td></tr>
<tr><td>&nbsp;&nbsp;</td><td><input type="submit" name="update" value="Change" Onclick="return check(this.form);"/>&nbsp;&nbsp;
<input type='reset' value='Reset'></td></tr>
</table>
</form></center>
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
echo' <meta content="3; changepassword3.php" http-equiv="refresh" />';
}
else
{
echo "Change password is not correct: please try again".mysql_error();
echo' <meta content="3;changepassword3.php" http-equiv="refresh" />';
}
}
?>
</div>
</td>
<td width=150px>
<table border=0 width=150px height="250" bgcolor=white>
<tr>
<td valign=top bgcolor=white>
<h2><center>
<font color="black" face="monotype corsiva" size="5">Admass university  distance Office  works for change!!</font><br>
<font color="white"><a href="debre.php"><iframe name="frame" width=300px height=422px src="date.php"></iframe><a></center></h2>
</td>
</tr>

</table>
</td>
</tr>

<tr>
<td colspan=3 bgcolor=gray>

<table align="center" bgcolor=""><tr><td><font face="Times New Roman" color="white" size="3">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Admass Univresity of Collage Distance Eduction Office All Right are Reservd &copy; 2010 E.C. 
&nbsp; &nbsp; &nbsp; &nbsp;
</font></td></tr></table>
</td>
</tr>
</table>
</body>
</html>
</html>