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
<td bgcolor="white" height="500" valign="top"><br>
<center><form method="post" action="">
Student ID:<input type="text" name="st" width="100">
Year<select name="year">
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
<input type='submit' name='view' value='Search'>
</form></center>
<?php
if(isset($_POST['view']))
{?>
	<div align="center">
	<input type="button" name="" value="Generate Report" onclick="Clickheretoprint()">
</div>
<div align="center" style="background: white; border: 1px solid black;" id="print_content">
<br>
<label style="color: black; font-size: 15px;"><img src="2.jpg" width="140" height="50"><b>Admass University of Collage Distance Education Student Grade Report </label><label style="color: black; font-size: 15px;"><img src="2.jpg" width="140" height="50"></b></label><br>
<?php
@$studenti=$_POST['st'];
$yea=$_POST['year'];
$sem=$_POST['semester'];
$r = mysql_query("SELECT *FROM result,student where 
  student.stud_id=result.stud_id and result.stud_id='$studenti' and result.year='$yea' and result.semister='$sem' order by result.semister ASC");
 if(mysql_num_rows($r) > 0)
 {
 $find=mysql_fetch_array($r);
print"<div align='center' ><p style='margin-left:2;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Student Full Name:<b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
.$find['firstname']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
.$find['Middlename']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
.$find['lastname']." </div></p>";
print" <div align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Student ID Number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>".$studenti."</u></div></p>";
print"<div align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>  Batch: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;<u>".$yea."</u></div></p>";
print"<div style='text-align:center;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Semester:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>".$sem."</u></p>";
print"<table border='2px' style='border:1px solid #336699;border-radius:1px;box-shadow:1px 10px 10px gray width:600 ' align='center' >";
print"<tr bgcolor='#F0FFFF'>";
print"<th>Course Name</th>";
print"<th>Course_code</th>";
print"<th> year</th>";
print"<th>Semister</th>";
print"<th>Crdite Houre</th>";
print"<th>Assignement</th>";
print"<th>Final exam</th>";
print"<th>Total Mark</th>";
print"<th>Grade </th>";
print"</tr>";
?>
<?php
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
 print ("<tr bgcolor=''>");
  print ("<td>" . $row['course_name'] . "</td>");
 print ("<td>" . $row['course_code'] . "</td>");
 print ("<td>" . $row['year'] . "</td>");
 print ("<td>" . $row['semister'] . "</td>");
 print ("<td>" . $row['credit_hour'] . "</td>");
 print ("<td>" . $row['assignment'] . "</td>");
 print ("<td>" . $row['final'] . "</td>");
 print ("<td>" . $row['total'] . "</td>");
 print ("<td>" . $grade . "</td>");
 print ("</tr>");
  }
  @$cgpa=$credittimes_letter_grade/$sumofcredit;
  echo "<tr bgcolor='#F0FFFF'><td>CGPA</td><td colspan='8'>".$cgpa."</td></tr>";
print( "</div'></table>");
}
else
{
echo "<font color='red'>This Student data is note Found</font>";
}
mysql_close($conn);
echo"<br><br>";
echo"<div align='center' style='font-size: 14px;'>";
	echo'<div><font size=4px>Generate By:'; echo $_SESSION['d'].$_SESSION['c'];
	echo"<div><font size=4px>Approved By: _____________</div>";
	echo"<div><br>";
	 $date=date('d-m-y'); echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size=4px>Generated date&nbsp;&nbsp;&nbsp;&nbsp;'.$date;Echo"</div>";
Echo"</div>";
echo"<br><br><br>";
Echo"</div>";
}
?>

<?php	
?>
<script language="javascript">
	function Clickheretoprint()
		{ 
		    var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
		      disp_setting+="scrollbars=yes,width=1000, height=400, left=300, top=250"; 
		    var content_vlue = document.getElementById("print_content").innerHTML; 
		  
		    var docprint=window.open("","",disp_setting); 
		    docprint.document.open(); 
		    docprint.document.write('<html><head><title>Student grade Report</title>'); 
		    docprint.document.write('</head><body onLoad="self.print()" st ~dulla^@204~ ~dulla^@204~ e:12px; font-family:times new romans;~dulla^@204~   
		    docprint.document.write(con~dulla^@204~         
		    docprint.document.wri~dulla^@204~ html>'); 
		    docprint.document.cl~dulla^@204~   docprint.focus(); 
		}
</script>~dulla^@204~ >
<td colspan=3 bgcolor=gray>
<tabl~dulla^@204~ er" bgcolor=""><tr><td><font face="Ti~dulla^@204~ " color="white" size="3">
&nbsp;&nbs~dulla^@204~ ;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;~dulla^@204~ nbsp;
Admass Univresity of Collage D~dulla^@204~ ion Office All Right are Reservd &cop~dulla^@204~ 
&nbsp; &nbsp; &nbsp; &nbsp;
</font~dulla^@204~ table>
</td>
</tr>
</table>
</body>
</html>
</html>