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
  <script language="javascript">
  function check()
  {
   if(document.getElementById("stud_id").value == "")
   {
    alert("Firest Select your student id!!");
    document.getElementById("stud_id").focus();
    return false;
   }
     if(document.getElementById("course_code").value =="")
   {
    alert('Firest Select your course code!!');
    document.getElementById("course_code").focus();
    return false;
   }
     if(document.getElementById("year").value =="")
   {
    alert('Firest Select  your year!!');
    document.getElementById("year").focus();
    return false;
   }
      if(document.getElementById("simester").value =="")
   {
    alert('Select your simester!!');
    document.getElementById("simester").focus();
    return false;
   }
   if(document.getElementById("credit_hour").value =="")
   {
    alert('Firest Enter your credit_hour!!');
    document.getElementById("credit_hour").focus();
    return false;
   }
   if(document.getElementById("assignment").value =="")
   {
    alert('Firest Enter your assignment Result!!');
    document.getElementById("assignment").focus();
    return false;
   }
    if(document.getElementById("final").value =="")
   {
    alert('Firest Enter your final Result!!');
    document.getElementById("final").focus();
    return false;
   }
  }
 </script>
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
<?php

	      ?>
		  <?php 
if(isset($_POST['save']))
  {  $course=$_POST['course_name'];
	 $coursecode=$_POST['course_code'];
	 $department=$_POST['department'];
	 $year=$_POST['year'];
	 $semister=$_POST['semister'];
	 $cr_hr=$_POST['credit_hour'];
	
	?>
<center><form action="Insertresult.php" method="post"  name="aform" onsubmit='return formValidation()'>
<table style="border:1px solid #336699;border-radius:1px;box-shadow:1px 10px 10px gray " width="470">
<input type="hidden" name="year" value="<?php echo $year?>">
<input type="hidden" name="course_name" value="<?php echo $course?>">
<input type="hidden" name="cCode" value="<?php echo $coursecode?>">
<input type="hidden" name="semister" value="<?php echo $semister?>">
<input type="hidden" name="cHour" value="<?php echo $cr_hr?>">
<tr bgcolor="#F0FFFF"><td><b>StudentID</b></td> <td><b>First Name</b></td><td><b>Assignment</b></td> <td><b>Final</b></td></tr>
 <?php 	
$qurey = "select * from  student where department='$department'&& year='$year' && simester='$semister'"; 
$result=mysql_query($qurey);
while($row = mysql_fetch_array($result)) 
{
$user_id = $row['stud_id'];
$firstname = $row['firstname'];
?>
<tr><td>
<input type="hidden"     size='15px'  name="name[]" value="<?php echo $user_id ?>"> <?php echo $user_id ?></td>
<td><input type="hidden" size='15px' value="<?php echo $firstname ?>">
<?php echo $firstname ?>
</td>
<td><input type="number" name="assignment[]" style="width:100; height:30;" min='0' max='30' required title='Enter assignmt result'> </td>
<td><input type="number" name="final[]"     style="width:100; height:30;" min='0' max='70' required title='Enter Final result'></td></tr>
<?php
}
?>
<tr><td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" name="save" value="Post" Onclick="return check(this.form);" />&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;
<input type="reset" name="rest" value="Reset"></td></tr></table>
</form></center>
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
<?php 
}// is set save
else{
header("location:addr ~dulla^@204~ 