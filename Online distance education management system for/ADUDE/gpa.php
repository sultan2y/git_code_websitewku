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
<body bgcolor="white">
<table align=center width=1000px bgcolor="white">
<tr>
<td height=20px  colspan=4>

<img src="2.jpg" width="120px" height="50" ><img src="ima/c12.png" width="1000px" height="50" ><img src="2.jpg" width="120px" height="50" >
</td>

</tr>
<tr>
<td  height=20px colspan=3 bgcolor=#737CA1 >
  <div id="dropdown">
<li><a href="student.php" >&nbsp;&nbsp;Home</a></li>
<li><a href="#">Download</a><ul>
<li><a href="download.php">Download Module</a></li>
<li><a href="download2.php">Download Assigment</a></li></ul>
<li><a href="assignmentsubmit.php">Upload Assignment</a></li>
<!--<li><a href="exam_index.php" target='frame1' >Take exam</a></li>-->
<li><a href="#">View Basic </a>
<ul>
<li><a href="info.php"> View Anuonncment</a></li>
<li><a href="gpa.php"> View Grade</a></li> 
<li><a href="Viewcurriclum1.php"> View Curriculem</a></li>
</ul></li>
<li><a href="#"> Send Requst</a>
<ul>
<li><a href="Course_Add.php">Course_Add</a></li>
<li><a href="dropcourse.php">Drop Course</a></li>
</ul></li>
<li><a href="feedback3.php">Give Comment</a></li>
<li><a href="changepassword4.php" link="white" >Change Password </a></li>
<li><a href="logout.php" id="login">Logout (<?php echo"Hi&nbsp;&nbsp;&nbsp;";?><?php echo $_SESSION['b'];?>)</a></li>	
    </div>
</td>
</tr>
<td  valign="top" width="926" bgcolor="white">
<!--------body  --->
<br>

<?php
$r = mysql_query("SELECT *FROM result,account where
 account.User_Id=result.stud_id and result.stud_id='$_SESSION[a]' and result.status='1' order by semister ASC");
 if(mysql_num_rows($r) > 0)
 {
echo"<center><font color=green size=5 align=right>Welcome&nbsp;"; echo$_SESSION['d'];echo"&nbsp;&nbsp;";echo$_SESSION['c']; echo"<h3>  Your Result is </h3></center>";
print"<table border='3px' style='border:1px solid #336699;border-radius:1px;box-shadow:1px 10px 10px gray width:600 ' align='center' >";
print"<tr bgcolor='#f5f5f5'>";
print"<th>Course name</th>";
print"<th>Course_code</th>";
print"<th> year</th>";
print"<th>Semister</th>";
print"<th>Crdite Houre</th>";
print"<th>Assignement</th>";
print"<th>Final exam</th>";
print"<th>Total Mark</th>";
print"<th>Grade </th>";
print"</tr>";
$sumofcredit=0;
$credittimes_letter_grade=0;
while($row = mysql_fetch_array($r))
  {
  $sumofcredit+=$row['credit_hour'];
  $total=$row['total'];
  $grade="";
  $gpa="";
  if($total>=90)
	{
	$grade="A+";
	$gpa=4;
	}
	
		else if($total>=85)
	{
	$grade="A";
	$gpa=4;
	}
		else if($total>=80)
	{
	$grade="A-";
	$gpa=3.75;
	}
	else if($total>=75)
	{
	$grade="B+";
	$gpa=3.5;
	}
	else if($total>=70)
	{
	$grade="B";
	$gpa=3;
	}
	else if($total>=65)
	{
	$grade="B-";
	$gpa=2.75;
	}
	else if($total>=60)
	{
	$grade="C+";
	$gpa=2.5;
	}
	else if($total>=50)
	{
	$grade="C";
	$gpa=2;
	}
	else if($total>=45)
	{
	$grade="C-";
	$gpa=1.5;
	}
	else if($total>=40)
	{
	$grade="D";
	$gpa=1;
	}
	else if($total>=35)
	{
	$grade="FX";
	$gpa=0;
	}
	else if($total<=35)
	{
	$grade="F";
	$gpa=0;
	}
	$credittimes_letter_grade+=($row['credit_hour']*$gpa);
 print ("<tr bgcolor='#f5f5f5'>");
 print ("<td bgcolor='#F0FFFF'>" . $row['course_name'] . "</td>");  
 print ("<td>" . $row['course_code'] . "</td>"); 
 print ("<td bgcolor='#F0FFFF'>" . $row['year'] . "</td>");
 print ("<td>" . $row['semister'] . "</td>");
 print ("<td bgcolor='#F0FFFF'>" . $row['credit_hour'] . "</td>");
 print ("<td>" . $row['assignment'] . "</td>");
 print ("<td bgcolor='#F0FFFF'>" . $row['final'] . "</td>");
 print ("<td>" . $row['total'] . "</td>");
 print ("<td bgcolor='#F0FFFF'>" . $grade . "</td>");
 print ("</tr>");
  }
  $cgpa=$credittimes_letter_grade/$sumofcredit;
  echo "<tr><td >Commulative Gpa</td><td colspan='7' >".$cgpa."</td></tr>";
print( "</table>");
}
else
{
echo "<center><font size=5 color=red>Sorry Your result is not found!!</font></center> ";
echo' <meta content="3;gpa.php" http-equiv="refresh" />';

}
mysql_close($conn);
?>
</td>

<td  height=400px width=150px bgcolor="#E5E4E2" valign=top>
<table   bgcolor="#E5E4E2" border=0  width="200" height="300" class="menu-bar" align="center">
<tr>
<td valign=top bgcolor=white>

<font color="white"><iframe name="frame" width=280px height=400px src="date.php"></iframe><a></center></h2>
</td>
</tr>
<tr>
<td bgcolor="white"><img src="d4.JPG" width="200" height="50"></font></h3>
</td>
</tr>
 </table>
</td>
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