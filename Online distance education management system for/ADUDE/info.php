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
<td  bgcolor="white" valign="top" height="500">
<!--------body  --->

	<br>
	<br>	
	 <?php
$result = mysql_query("SELECT * FROM date");
print( "<table border='2' style='border-color:green;' ='pink' align='center' bgcolor='white' width='600'>" );
print("<tr>");
print("<th><font size=6px>Information</font> </th>");
print("<th><font size=6px> Start dates </font></th>");
print("<th><font size=6px> End dates </font></th>");
while($row = mysql_fetch_array($result))
  {
  print ("<tr>");
  print ("<td>" . $row['note'] . "</td>");
  print ("<td>" . $row['start_date'] . "</td>");
  print ("<td>" . $row['end_date'] . "</td>"); 
  print( "</tr>");
  }
  print("</table>");

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