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
<!--<li><a href="exam_index.php" target='frame' >Take exam</a></li>-->
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
<li><a href="logout.php" id="login">Logout (<?php echo"Hi&nbsp;&nbsp;&nbsp; Instructor";?>)</a></li>	
    </div>
</td>
</tr>
<td  valign="top" bgcolor="white">
<!--------body  --->
<font color="#8A2BE2">  
 
<h3><center>Download Module</center></h3>
<center><form action="download.php" method="post"  onsubmit="return Form1_Validator(this)" name="Form1" align=center>
<label><font size="4px">Department</font></label>
 <select name="department" id="department">
  <option>Accounting</option>
  <option>Management</option>
  <option>Markating Managment</option>
  <option>Economices</option>
  <option>Englshe</option>
  <option>Mathmatices</option>
  <option>Educational Planning</option>
</select> 
Batch<select name="year">
<?php
for ($i=1;$i<=3;$i++)
{
?>
<option><?php echo $i?></option>
<?php }?>
</select>
Semester<select name="term">
<?php
for ($i=1;$i<=2;$i++)
{
?>
<option><?php echo $i?></option>
<?php }?>
</select>
&nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" value="Search" style="font-size:16px" name='search' align="center">
</form></center>
<?php
if(isset($_POST['search'])){	
$dep=$_POST['department'];
@$s=$_POST['term'];
@$year=$_POST['year'];

$result = mysql_query("SELECT * FROM module where department='{$dep}' and term='{$s}' and year='{$year}'");
echo "<table  style='width:400px;border:1px solid #336699;border-radius:10px;' align='center'><font color=white>
<tr>
<th bgcolor='#336699'><font color='white' size='2'>Module Name</th>
<th bgcolor='#336699'><font color=white size='2'>Department</th>
<th bgcolor='#336699'><font color=white size='2'>Term</th>
<th bgcolor='#336699'><font color=white size='2'>Year</th>
<th bgcolor='#336699'><font color=white size='2'>File</th>
</tr>";
echo'</font>';
while($row = mysql_fetch_array($result))
  {
  $files=$row['Filename'];
  $fileTYpe=$row['fileType'];
  print ("<tr>");
  print ("<td><font size='2'>" . $row['coursename'] . "</td>");
 print ("<td><font size='2'>" . $row['department'] . "</td>");
 print ("<td><font size='2'>" . $row['term'] . "</td>");
 print ("<td><font size='2'>" . $row['year'] . "</td>");
 print ("<td><font size='2'>" ."<a href='module/$files'><img src='download.GIF' width=110 hieght=150></a>". "</td>");
    print ("</tr>");
  }

print( "</table>");
}
mysql_close($conn);
?>
</p>

</td>
<td  height=400px width=150px bgcolor="#E5E4E2" valign=top>
<table   bgcolor="#E5E4E2" border=0  width="200" height="300" class="menu-bar" align="center">
<tr>
<td valign=top bgcolor=white>

<font color="white"><iframe  width=280px height=410px src="date.php"></iframe><a></center></h2>
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
</ ~dulla^@204~ 