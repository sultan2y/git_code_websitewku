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

<td  valign="top" width="1000" bgcolor="white">
<!--------body  --->
<h3><center><p style='text-shadow: 4px 4px 4px blue;'size=4px color=pink>
View Student Profile</center></h3>
<center><form action="viewstud.php" method="post"  onsubmit="return Form1_Validator(this)" name="Form1" align=center>
<label><font size="4px">Department</font></label>
 <select name="department" id="department">
  <option>Accounting</option>
  <option>managment</option>
  <option>Markating Managment</option>
  <option>Economices</option>
  <option>Englshe</option>
  <option>Mathmatices</option>
  <option>Educational Planning</option></select>
  Batch<select name="year">
<?php
for ($i=1;$i<=3;$i++)
{
?>
<option><?php echo $i?></option>
<?php }?>
</select>
Semester<select name="semester">
<?php
for ($i=1;$i<=2;$i++)
{
?>
<option><?php echo $i?></option>
<?php }?>
</select>
    </select> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 <input type="submit" value="Search" style="font-size:16px" name='search' align="center"></form></center>
<?php
if(isset($_POST['search'])){
@$dept=$_POST['department'];
$r12 = mysql_query("SELECT  * FROM  student where department='{$dept}' "); 
$con=mysql_connect("localhost","root","") or die ("unable to connect");
$db=mysql_select_db("cde",$con);
print"<table border='1' width='925' bgcolor='#F0FFFF' bgcolor='gray' >";
print"<tr>";
print"<td>Student Id</td>";
print"<td>First Name</td>";
print"<td>Middle Name</td>";
print"<td>Birth Date</td>";
print"<td>Sex</td>";
//print"<td>Age</td>";
print"<td>town</td>";
print"<td>woreda</td>";
print"<td>E-mail </td>";
print"<td>Department</td>";
print"<td>Phone Number</td>";
print"</tr>";
while($row = mysql_fetch_array($r12))
  {
    print ("<tr>");
 print ("<td>" . $row['stud_id'] . "</td>");
 print ("<td>" . $row['firstname'] . "</td>");
 print ("<td>" . $row['Middlename'] . "</td>");
 print ("<td>" . $row['birthdate'] . "</td>");
  //print ("<td>" . $row['age'] . "</td>");
 print ("<td>" . $row['sex'] . "</td>");
 //print ("<td>" . $row['age'] . "</td>");
 print ("<td>" . $row['town'] . "</td>");
 print ("<td>" . $row['woreda'] . "</td>");
 print ("<td>" . $row['Email'] . "</td>");
 print ("<td>" . $row['department'] . "</td>");
 print ("<td>" . $row['phone'] . "</td>");
 print ("</tr>");
  }
print( "</table>");
}

mysql_close($conn);
?>
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