<?php
	@include("connection.php");  
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
<td  valign="top" bgcolor="white">
<!--------body  --->
<h3 align="center">Post students result</h3>
<center><form action="studentList.php" method="post" onsubmit='return formValidation()' align="center" bgcolor="hugut86">
<table style="border:1px solid #336699;width:450px;height:350px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">
<tr><td><b>Department</b></td><td><select name="department" id="department" style="width:246; height:30;" required>
 <?php 
$qurey = "select * from  department"; 
$result=mysql_query($qurey);
while($row = mysql_fetch_array($result)) 
{
$dep = $row['depname'];
echo "<option>$dep</option>";
}
?></select></td></tr>
<tr><td><b>Course_Name</b></td><td><input type='text' name="course_name" id="course_name" style="width:246; height:30;" required title='Enter course name'>
</td></tr>
<tr><td><b>Course_Code</b></td><td><input type='text' name="course_code"id="course_code" style="width:246; height:30;" required title='Enter course code'>
</td></tr>
<tr><td><b>Batch:</b></td><td>
<select type="text"  name="year"id="year" style="width:246; height:30;" required>
   <option value="1">1st</option>
    <option value="2">2nd</option>
    <option value="3">3rd</option>
     </select></td></tr>
   <tr><td><b>Semister:</b></td><td>
   <select type="text"  name="semister"id="simester" style="width:246; height:30;" required >
    <option value="1">1st</option>
    <option value="2">2nd</option>
 </select></td></tr>
<tr><td><b>Credit Hour:</b></td><td><input type="number" id="credit_hour" min='1' max="10" name="credit_hour"style="width:246; height:30;" required title='Enter Credite Hour'></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="save" value="Post" Onclick="return check(this.form);" />&nbsp;&nbsp;&nbsp;&nbsp;
<input type="RESET" name="rest" value="Reset" bgcolor="RED"></td></tr>
</form></center></table>
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
Admass University of Collage Distance Eduction Office All Right are Reserved &copy; 2010 E.C. 
&nbsp; &nbsp; &nbsp; &nbsp;
</font></td></tr></table>
</td>
</tr>
</table>
</body>
</html>
</html>
