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
<td  valign="top" bgcolor="#E5E4E2" height="500">
<!--------body  --->
<br>
<h3 align="center"><font color="blue">Edited Student Result</font></h3>
<center><form action="updateresult.php" method="post"  onsubmit="return Form1_Validator(this)" name="Form1" align=center>
<label><font size="4px">Student Id</font></label>
 <input type='number' name="stud_id" id="stud_id">

 
Batch<select name="year">
<?php
for ($i=1;$i<=3;$i++)
{
?>
<option><?php echo $i?></option>
<?php }?>
</select>
Semester<select name="simester">
<?php
for ($i=1;$i<=2;$i++)
{
?>
<option><?php echo $i?></option>
<?php }?>
</select> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 <input type="submit" value="Search" style="font-size:16px" name='search' align="center"></form></center>
<?php
if(isset($_POST['search'])){
@$dept=$_POST['stud_id'];
@$semester=$_POST['simester'];
@$year=$_POST['year'];?>
<table align='center' border="1" bgcolor="#F0FFFF">
<tr>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'> <b>Id</b></th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'> <b>stud_id</b></th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'><b>course_code</b></th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'><b>year</b></th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'><b>semister</b></th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'><b>credit_hour</b></th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'><b>assignment</b></th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'><b>final</b></th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'><b>Total</b></th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'><b>Grade</b></th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size='2'><b>GPA</b></th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'>
<font color='white' size=''><b>Edit</b></th>
</tr>  
<?php
$result = mysql_query("SELECT * FROM result where semister='$semester' and year='$year' and stud_id='$dept'");
while($row = mysql_fetch_array($result))
  {
    $ctrl = $row['id'];
    $fname=$row['stud_id'];
    $ctr = $row['course_code'];
    $lname=$row['year'];
    $phone=$row['semister'];
    $actype=$row['credit_hour'];
    $assign=$row['assignment'];
    $final=$row['final'];
   $total=$row['total'];
   $tot=$row['grade'];
   $to=$row['gpa'];
?>
<tr>
<td><?php echo $ctrl;?></td>
<td><?php echo $fname;?></td>
<td><?php echo $ctr;?></td>
<td><?php echo $lname;?></td>
<td><?php echo $phone;?></td>
<td><?php echo $actype;?></td>
<td><?php echo $assign;?></td>
<td><?php echo $final;?></td>
<td><?php echo $total;?></td>
<td><?php echo $tot;?></td>
<td><?php echo $to;?></td>
<?php
print("<td style='height:30px;'><a href = 'editeresult.php?key=".$ctrl."'>
		<img src = 'edit.jpg' width='45px' height='45px' title='Edit' ></img></a></td>
		");
		?>
		</tr>
<?php
  }
  }
print( "</table>");
mysql_close($conn);
?>
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
</bo ~dulla^@204~ 