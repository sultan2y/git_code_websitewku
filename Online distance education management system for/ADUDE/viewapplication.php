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

<td  valign="top" width="100%" height="650" bgcolor="white">
<!--------body  ---><br>
<table bgcolor="GRAY"  style="border:1px solid #336699;width:390px;height:20px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">
<tr>
<td>
<h3><center>Approve Applicants</center></h3>
<form action="viewapplication.php" method="post"  onsubmit="return Form1_Validator(this)" name="Form1">
<label><font size="4px"><b>Department</b></font></label>&nbsp;&nbsp;&nbsp;
 <select name="department" id="department" STYLE="width:170;height:30">
 <option>Select department</option>
<option>Accounting</option>
<option>Managment</option>
<option>Markating Managment</option>
<option>Economices</option>
<option>English</option>
<option>Mathmatices</option>
<option>Educational Planning</option>
    </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Search" name="save" style="font-size:16px" width='160' align="center">

</form>
</tr></td></table></br></br>
<?php
$con=mysql_connect("localhost","root","") or die ("unable to connect");
$db=mysql_select_db("cde",$con);
if(isset($_POST['save'])){
@$dept=$_POST['department'];

$r12 = mysql_query("SELECT RegId,photo,grade,firstname,middlename,lastname,birthdate,sex,town,woreda,adress,email,department,phone,semister,year FROM application where status='0' and department='{$dept}'");

print"<table border='1'>";
print"<tr bgcolor='#F0FfFF'>";
print"<td>Reg id</td>";
print"<td>Grade 10 file</td>";
print"<td>Grade 12 file</td>";
print"<td>First Name</td>";
print"<td>Middle Name</td>";
print"<td>Last Name</td>";
print"<td>Date Of Birth</td>";
print"<td>Sex</td>";
//print"<td>Age</td>";
print"<td>town</td>";
print"<td>woreda</td>";
print"<td>adress</td>";
print"<td>E-mail </td>";
print"<td>Department</td>";
print"<td>Phone Number</td>";
print"<td>Semester</td>";
print"<td>Batch</td>";
print"<td ><font color=green  size=px ><b>Approve?</font></b></td>";
print"<td  ><font color=green  size=px ><b>Disapprove?</font></b></td>";
print"</tr>";
while($row = mysql_fetch_array($r12))
  {
  @$files=$row['photo'];
  @$file=$row['grade'];
 print ("<tr>");
  print ("<td>" . $row['RegId'] . "</td>");
 print ("<td><font size='2'>" ."<a href='ima/$files' target='_blank' ><img src='download.GIF' width=110 hieght=150></a>". "</td>");
 print ("<td><font size='2'>" ."<a href='ima/$file' target='_blank'><img src='download.GIF' width=110 hieght=150></a>". "</td>");
 print ("<td>" . $row['firstname'] . "</td>");
 print ("<td>" . $row['middlename'] . "</td>");
 print ("<td>" . $row['lastname'] . "</td>");
 print ("<td>" . $row['birthdate'] . "</td>");
 print ("<td>" . $row['sex'] . "</td>");
 //print ("<td>" . $row['age'] . "</td>");
 print ("<td>" . $row['town'] . "</td>");
 print ("<td>" . $row['woreda'] . "</td>");
 print ("<td>" . $row['adress'] . "</td>");
 print ("<td>" . $row['email'] . "</td>");
 print ("<td>" . $row['department'] . "</td>");
 print ("<td>" . $row['phone'] . "</td>");
 print ("<td>" . $row['semister'] . "</td>");
 print ("<td>" . $row['year'] . "</td>");
 ?>
<td bgcolor='pink'><a href="approve.php?id=<?php echo $row['RegId'];?>"><b><font color=green size=px style="text-decoration:none;">Approve?</font></b></a></td>
<td bgcolor='pink'><a href="disapprove.php?id=<?php echo $row['RegId'];?>"><b><font color=red size=px style="text-decoration:none;">Disapprove?</font></b></a></td>
 <?php
 print ("</tr>");
  }
print( "</table>");
}
mysql_close($conn);
?>
</td>

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
