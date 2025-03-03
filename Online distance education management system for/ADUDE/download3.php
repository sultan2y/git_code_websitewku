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
<table align=center width=1000px bgcolor="white" border="white">
<tr>
<td height=20px  colspan=4>

<img src="2.jpg" width="120px" height="50" ><img src="ima/c12.png" width="1000px" height="50" ><img src="2.jpg" width="120px" height="50" >
</td>

</tr>
<td  height=20px colspan=3 bgcolor=#737CA1 >
  <div id="dropdown">
 <li><a href="Instructor.php">&nbsp;&nbsp;Home</a></li>
 <li><a href="#">Download</a>
 <ul>
<li><a href="downloadModule.php"> Download Module</a></li>
<li><a href="download3.php"> download Assignment Answer</a></li>
</ul></li>
<!--<li><a href="#">ADD</a>
<ul>
<li><a href="testadd.php" target="frame"> Add Exam Type</a></li>
<li><a href="questionadd.php" target="frame"> Add Quotation</a></li>
</ul></li>-->
<li><a href="addresul.php"> Add Result</a></li>
<li><a href="updateresult.php"> Update Result</a></li>
<li><a href="assigmenupload.php"> Upload Assigment</a></li>
<li><a href="changepassword2.php" >Change Password </a></li>
<li><a href="feedback4.php"> Give Feedback </a></li>

	</li>		
<li><a href="logout.php" id="login">Logout (<?php echo"Hi&nbsp;&nbsp;&nbsp; Instructor";?>)</a></li>	
</div>			 	


</td>
</tr>
<td  valign="top" bgcolor="white"><br>
<h3><center>Download Student Assignment</center></h3>
<center><form action="download3.php" method="post"  onsubmit="return Form1_Validator(this)" name="Form1" align=center>
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
</select> &nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" value="Search" style="font-size:16px" name='search' align="center"></form></center>
<?php
if(isset($_POST['search'])){	
$dep=$_POST['department'];
@$dept=$_POST['stud_id'];
@$semester=$_POST['term'];
@$year=$_POST['year'];		
$result = mysql_query("SELECT * FROM studentassignment where department='{$dep}' and term='{$semester}' and year='{$year}'");
echo"<font color='#8A2BE2'><h3 align=center>Received Assignments from student</h3></font>";
echo "<table id='vtable' style='width:700px;border:1px solid #336699;border-radius:10px;'
 align='center'><font color=white>
<tr>
<th bgcolor='#336699'><font color='white' size='2'>Student Id</th>
<th bgcolor='#336699'><font color=white size='2'>Course Name</th>
<th bgcolor='#336699'><font color=white size='2'>Year</th>
<th bgcolor='#336699'><font color=white size='2'>Term</th>
<th bgcolor='#336699'><font color=white size='2'>Sunbition Date</th>
<th bgcolor='#336699'><font color=white size='2'>File</th>
</tr>";
echo'</font>';
while($row = mysql_fetch_array($result))
  {
  $files=$row['Filename'];
 print ("<tr>");
 print ("<td><font size='2'>" . $row['User_Id'] . "</td>");
 //print ("<td><font size='2'>" . $row['stName'] . "</td>");
 print ("<td><font size='2'>" . $row['coursename'] . "</td>");
  print ("<td><font size='2'>" . $row['year'] . "</td>");
 print ("<td><font size='2'>" . $row['term'] . "</td>");
 print ("<td><font size='2'>" . $row['Sumbtiondate'] . "</td>");
 print ("<td><font size='2'>" ."<a href='assignment/$files'><img src='download.GIF' width=90 hieght=90></a>". "</td>");
 print ("</tr>");
  }
print( "</table>");
}
mysql_close($conn);
?>
</p>
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
Admass University of Collage Distance Eduction Office All Right are Reservd &copy; 2010 E.C. 
 &nbsp; &nbsp; &nbsp; &nbsp;
</font></td></tr></table>
</td>
</tr>
</table>
</body>
</html>