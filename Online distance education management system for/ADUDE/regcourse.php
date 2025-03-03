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
  <script language="javascript">
  function check()
  {
   if(document.getElementById("course_code").value == "")
   {
    alert("Enter your course_code!!");
    document.getElementById("course_code").focus();
    return false;
   }
     if(document.getElementById("course_name").value =="")
   {
    alert('Enter your Course Name!!');
    document.getElementById("course_name").focus();
    return false;
   }
     if(document.getElementById("crdite_houre").value =="")
   {
    alert('Enter your Credit Hour!!');
    document.getElementById("crdite_houre").focus();
    return false;
   }
      if(document.getElementById("pre_requst").value =="")
   {
    alert('Enter your Pre requst!!');
    document.getElementById("pre_requst").focus();
    return false;
   }
  }
 </script>
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
<!--------body  --->
<td  valign="top" bgcolor="white">
<br>
<h2 align="center">Register Course page</h2>
<?php
if(isset($_POST['save']))
 {
$Course_Code=$_POST['course_code'];
$Course_Name=$_POST['course_name'];
$Crdite_houre=$_POST['crdite_houre'];
$Pre_requst=$_POST['pre_requst'];
mysql_select_db("cde", $conn);
						
$sql="INSERT INTO course VALUES('$_SESSION[a]','$Course_Code','$Course_Name','$Crdite_houre','$Pre_requst')";

if (!mysql_query($sql,$conn))
  {
 echo'<p class="wrong">your detail is not correct</p>';
 echo' <meta content="4;regcourse.php" http-equiv="refresh" />';
 
  }
  else
  {
echo'<p class="success" size=5px>Successfully Registerd!!</p>';
echo' <meta content="4;regcourse.php" http-equiv="refresh" />';
}}
mysql_close($conn)

?>
<form action="regcourse.php" method="post"  name="aform" onsubmit='return formValidation()'>
<table style="border:1px solid #336699;width:350px;height:350px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">
<tr><td><font color="red"></font>Course Code</td><td><input type="text" name="course_code" id="course_code" style="width:246; height:30;" required></td></tr>
<tr><td><font color="red"></font>Course Name</td><td><input type="text" name="course_name" id="course_name" style="width:246; height:30;" required></td></tr>
<tr><td><font color="red"></font>Credite Houre</td><td><input type="number" name="crdite_houre" id="crdite_houre" max='10' min='1'style="width:246; height:30;" required></td></tr>
<tr><td><font color="red"></font>Pre Requst</td><td><input type="text" name="pre_requst"  id="pre_requst" style="width:246; height:30;" required></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="save" value="Register" Onclick="return check(this.form);" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="RESET" name="rest" value="Reset" bgcolor="RED"></td>
</table>
</form>
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
</html>