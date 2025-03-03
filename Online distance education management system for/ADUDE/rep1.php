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
<td  valign="top" bgcolor="white">
<br><br>
<table bgcolor="#F0F8FF"  style="border:1px solid #336699;width:520px;height:15px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">
<tr>
<td>
<h3><center><p style='text-shadow: 4px 4px 4px orange;'size=4px>
REPORT ON NEW APPLICANTS</center></h3>
<form action="report1.php" method="post"  onsubmit="return Form1_Validator(this)" name="Form1">
<label><font size="4px">Department</font></label>
 <select name="department" id="department">
  <option>Accounting</option>
  <option>Managment</option>
  <option>Markating Managment</option>
  <option>Economices</option>
  <option>Englshe</option>
  <option>Mathmatices</option>
  <option>Educational Planning</option>
</select>

batch:<select name="year">
<?php
for ($i=1;$i<=3;$i++)
{
?>
<option><?php echo $i?></option>
<?php }?>
</select>
Semester:<select name="simester">
<?php
for ($i=1;$i<=2;$i++)
{
?>
<option><?php echo $i?></option>
<?php }?>
</select><input type="submit" value="Search" name="save" style="font-size:16px" >
</form>
</table>
<?php
?>
<br>
</td>
<td width=150px>
<table border=0 width=150px height="100" bgcolor=white>
<tr>
<td valign=top bgcolor=white>
<h2><center>
<font color="black" face="monotype corsiva" size="5">Admass university  distance Office  works for change!!</font><br>
<font color="white"><a href="debre.php"><iframe name="frame" width=300px height=405px src="date.php"></iframe><a></center></h2>
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