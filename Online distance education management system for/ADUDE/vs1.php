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
<table align=center width=1000px height= border="6" bgcolor="white">
<tr>
<td height=20px  colspan=4>
<img src="2.jpg" width="120px" height="50" ><img src="ima/c12.png" width="1000px" height="50" ><img src="2.jpg" width="120px" height="50" >
</td>
</tr>
<tr>
<td  height=20px colspan=3 bgcolor=#737CA1 >
<div id="dropdown">
<li><a href="vc.php" id="drop"><b>view Currciulm</b></a></li>    
<li><a href="resultapp.php" id="drop"><b>Approve Result</b></a></li>
<!--<li><a href="mangresult.php" id="drop"><b> manage Result</b></a></li>-->
<li><a href="vs1.php" id="drop"><b> View Student </b></a></li>  
<li><a href="feedback5.php" id="drop"><b>Give Comments</b></a></li>	
<li><a href="changepassword6.php" id="drop"><b>Change Password</b></a></li>
<li><a href="logout.php" id="login">Logout (<?php echo"Hi&nbsp;&nbsp;&nbsp;";?><?php echo $_SESSION['b'];?>)</a></li>	
    </div>
</td>
</tr>
<td  valign="top" bgcolor="white" height="520">
<br><br>
<table bgcolor="#F0F8FF"  style="border:1px solid #336699;width:550px;height:15px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">
<tr>
<td>
<h3><center>View Student Profile<center></h3>
<form action="vs1.php" method="post"  onsubmit="return Form1_Validator(this)" name="Form1">
<label><font size="4px">Department</font></label>
 <select name="department" id="department">
  <option>Accounting</option>
  <option>managment</option>
  <option>Markating Managment</option>
  <option>Economices</option>
  <option>Englshe</option>
  <option>Mathmatices</option>
  <option>Educational Planning</option></select>
batch<select name="year">
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
</select> <input type="submit" value="Search" name="save" style="font-size:16px" align="center"><br>

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
$d=$_POST['semester'];
$d1=$_POST['year'];
$rs = mysql_query("SELECT * FROM  student,result where student.department='{$dept}' and student.stud_id=result.stud_id and student.simester=result.semister and student.simester='{$d}' and student.year='{$d1}' order by student.stud_id");
echo"<table border='0' align='center'><tr><td><br><br>";
print "<center>Total number of Student in ".$dept." departments is:".mysql_num_rows($rs).'</center> <br><br>';
$r = mysql_query("SELECT * FROM  student,result where student.department='{$dept}' and student.stud_id=result.stud_id and student.simester=result.semister and student.simester='{$d}' and student.year='{$d1}' order by student.stud_id");
print"<table border='2' width='855'  bgcolor='' align='center' >";
print"<tr color='green'>";
print("<td align='center'>Student Id</td>");
print("<td>First name</td>");
print("<td>Middle name</td>");
print("<td>Last name</td>");
print("<td>Sex</td>");
print("<td>year</td>");
print("<td>semester</td>");
print("<td>Course Name</td>");
print("<td>Assigment</td>");
print("<td>Final</td>");
print("<td>Grade</td>");
print("<td>GPA</td>");
print"</tr>";
while($row = mysql_fetch_array($r))
  {
    print ("<tr>");
 print ("<td>" . $row['stud_id'] . "</td>"); 
 print ("<td>" . $row['firstname'] . "</td>"); 
 print ("<td>" . $row['Middlename'] . "</td>");
 print ("<td>" . $row['lastname'] . "</td>");
 print ("<td>" . $row['sex'] . "</td>");
 //print ("<td>" . $row['Age'] . "</td>");
 print ("<td>" . $row['year'] . "</td>");
 print ("<td>" . $row['semister'] . "</td>");
 print ("<td>" . $row['course_name'] . "</td>");
 print ("<td>" . $row['assignment'] . "</td>");
  print ("<td>" . $row['final'] . "</td>");
 print ("<td>" . $row['grade'] . "</td>");
  print ("<td>" . $row['gpa'] . "</td>");
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

<td width=150px>
<table border=0 width=150px height="100" bgcolor=white>
<tr>
<td valign=top bgcolor=white>
<h2><center>
<font color="black" face="monotype corsiva" size="5">Admass university  distance Office  works for change!!</font><br>
<font color="white"><a href="debre.php"><iframe name="frame" width=300px height=400px src="date.php"></iframe><a></center></h2>
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