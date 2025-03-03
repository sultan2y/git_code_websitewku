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
<!--<li><a href="exam_index.php">Take exam</a></li>-->
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
<td  valign="top" bgcolor="white">
<br><br>
<table bgcolor="#F0F8FF"  style="border:1px solid #336699;width:520px;height:10px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">
<tr>
<td>
<h2><center><p style='text-shadow: 4px 4px 4px blue;'size=4px color=pink>View  Currculem</center></h2>
<form action="Viewcurriclum1.php" method="post"  onsubmit="return Form1_Validator(this)" name="Form1">
<label><font size="4px">Department</font></label>
 <select name="department" id="department">
  <option>Accounting</option>
  <option>managment</option>
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
Semester<select name="semister">
<?php
for ($i=1;$i<=2;$i++)
{
?>
<option><?php echo $i?></option>
<?php }?>
 <input type="submit" value="Search" name="save" style="font-size:16px" align="center"><br>

</form>
</tr></td></table>

<?php
/* header("Content-Type:application/msword");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("content-disposition: attachment;filename=report.docx");
//include("rep1.php");*/
$con=mysql_connect("localhost","root","") or die ("unable to connect");
$db=mysql_select_db("cde",$con);
if(isset($_POST['save'])){
@$dept=$_POST['department'];
@$dept=$_POST['department'];
@$d=$_POST['year'];
@$det=$_POST['semister'];
$rs = mysql_query("SELECT  course_name,course_code,crdite_houre,Pre_requst,semister,year FROM   curriculem
 where curriculem.department='$dept' and curriculem.year='$d' and curriculem.semister='$det' ");
echo"<table border='0' align='center'><tr><td><br><br>";
print "In  ".$dept." Department have the following Curriculum  : ".'<br><br>';
$r = mysql_query("SELECT  course_name,course_code,crdite_houre,Pre_requst,semister,year FROM   curriculem
 where curriculem.department='$dept' and curriculem.year='$d' and curriculem.semister='$det'");

print"<table border='2' width='655'  bgcolor='' align='center' >";
print"<tr color='green'>";
print"<th>course_name</th>";
print"<th>course_code</th>";
print"<th>crdite_houre</th>";
print"<th>Pre_requst </th>";
print"<th>semister</th>";
print"<th>year </th>";

print"</tr>";
while($row = mysql_fetch_array($r))
  {
    print ("<tr>");
 print ("<td>" . $row['course_name'] . "</td>"); 
 print ("<td>" . $row['course_code'] . "</td>"); 
 print ("<td>" . $row['crdite_houre'] . "</td>");
 print ("<td>" . $row['Pre_requst'] . "</td>");
 print ("<td>" . $row['semister'] . "</td>");
 print ("<td>" . $row['year'] . "</td>");
  print ("</tr>");
  }
print( "</table>");

mysql_close($conn);
echo"</tr>";
echo"</td>";
echo"</table>";
}
?>
</td>


<td  height=400px width=150px bgcolor="#E5E4E2" valign=top>
<table   bgcolor="#E5E4E2" border=0  width="200" height="300" class="menu-bar" align="center">
<tr>
<td valign=top bgcolor=white>

<font color="white"><iframe name="frame" width=280px height=415px src="date.php"></iframe><a></center></h2>
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
Admass Univresity of Collage Distance Eduction Office All Right are Reservd &copy; 2010 E.C. 
&nbsp; &nbsp; &nbsp; &nbsp;
</font></td></tr></table>
</td>
</tr>
</table>
</body>
</html>
</html>