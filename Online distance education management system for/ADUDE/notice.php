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
<table align=center width=1000px height= border="6">
<tr>
<td height=20px  colspan=4>
<img src="2.jpg" width="140px" height="50" ><img src="ima/c12.png" width="1000px" height="50" ><img src="2.jpg" width="140px" height="50" >
</td>
</tr>
<tr>
<td  height=20px colspan=3 bgcolor=#737CA1 >
  <div id="dropdown">
<li><a href="Addcurrculm.php" id="drop">Add Curriclum</a></li>
<li> <a href="Upload.php" id="drop">Upload Module</a></li>
<li><a href="#" link="white" >Assign </a>

<ul>
<li><a href="assign.php" link="white" >Assign Insturacor</a></li>
<li><a href="assigncourse_student.php" link="white" >Assign student</a></li>
</ul></li>
<li><a href="#" link="white" >Announcment</a>
      <ul>
<li><a href="new.php" link="white" >Post Announcment</a></li>
<li><a href="notice.php" link="white" >Post notice </a></li>
<li><a href="new2.php" link="white" >Delet Announcment</a></li>
		</ul>
		</li>
				<li><a href="#">View</a>
      <ul>
<!--<li><a href="rep11.php" >View Report</a></li>-->
<li><a href="viewcomment.php" >View Comments</a></li>
<li><a href="assigncourse.php" >View Assigned course</a></li>
<!---<li><a href="assign.php" link="white" >Assign Insturacor</a></li>-->

</ul>
</li>
<li><a href="changepassword5.php" >Change Password</a></li>   
<li><a href="logout.php" id="login">Logout (<?php echo"Hi&nbsp;&nbsp;&nbsp;";?><?php echo $_SESSION['b'];?>)</a></li>	
    </div>
</td>
</tr>
<!--------body  --->
<td  valign="top" bgcolor="white">
<!--------body  --->
<h2 align="center"><b><hr color=green><font color="blue"> Post Information</font></b></h2>

<?php
if(isset($_POST['save']))
 {
$not=$_POST['notice'];
$year=$_POST['year'];
$Semister=$_POST['semister'];
$start=$_POST['start_date'];
$end=$_POST['end_date'];
mysql_select_db("cde", $conn);						
$sql="INSERT INTO  date VALUES('$not','$year','$Semister','$start','$end')";

if (!mysql_query($sql,$conn))
  {
  
     echo'<p class="wrong">your detail is not correct</p>';
     echo' <meta content="4;notice.php" http-equiv="refresh" />';

  }
  
  else
  {
  echo'<p class="success">Successfully POsted!!</p>';
echo'<meta content="4;notice.php" http-equiv="refresh" />';
}}
mysql_close($conn)


?>
<form action="notice.php" method="POST"name="forms"id="adform" onsubmit='return formValidation()'>
<table style="border:1px solid #336699;width:450px;height:250px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">
<tr><td><font color="red">*</font><b>Start Date</b></td><td><input type="date" name="start_date"  id="start_date" style="width:250; height:30;" required>
<i ><span id="Code_error_message"></span></i ></td></tr>
<tr><td><font color="red">*</font><b>End date</b></td><td><input type="date" name="end_date" id="end_date" style="width:250; height:30;" required >
<i ><span id="crdite_error_message"></span></i ></td></tr>
<tr><td><font color="red">*</font><b>Notice</b></td><td><input type="text" name="notice"  id="notice" style="width:250; height:100;" required/>
<i ><span id="Course_error_message"></span></i ></td></tr>
 <tr><td><font color="red">*</font><font color=""><b>year:</b></td><td><select name="year" id="year" style="width:250; height:30;" required>
<option>select year</option>
<option value="1">1st</option>
<option value="2">2nd</option>
<option value="3">3rd</option>
</select><i><span id="yea_error_message"></span></i></select></td></tr><br>
<tr><td><font color="red">*</font><b>semester:</b></td><td><select name="semister" id="semister" style="width:250; height:30;" required>
<option>select semester</option>
<option value="1">I</option>
<option value="2">II</option>
</select><i><span id="semis_error_message"></span></i></td></tr>


  </tr> <tr><td>&nbsp;</td><td><input type="submit" name="save" value="Post Here" Onclick="return check(this.forms);"/><input type="reset" name="save" value="Reset"/></td>
</table>
</form>

</td>

<td width=150px>
<table border=0 width=150px height="100" bgcolor=white>
<tr>
<td valign=top bgcolor=white>
<h2><center>
<font color="black" face="monotype corsiva" size="5">Admass university  distance Office  works for change!!</font><br>
<font color="white"><a href="debre.php"><iframe name="frame" width=300px height=405px src="date.php"></iframe><a></center></h2>
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
