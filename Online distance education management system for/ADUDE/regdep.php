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
<link style="text/css" href="3.css" rel="stylesheet">
 <script src="js/jquery.js"></script>
  <script src="js/jquery-3.3.1.js" type="text/javascript"></script>
 <script type="text/JavaScript" src="js/regdep.js"></script>
  <!--<script language="javascript">
  function check()
  {
   if(document.getElementById("faculity").value == "")
   {
    alert("First Enter faculity !!");
    document.getElementById("faculity").focus();
    return false;
   }
     if(document.getElementById("depid").value =="")
   {
    alert("Enter Department id !!");
    document.getElementById("depid").focus();
    return false;
   }
     if(document.getElementById("depname").value =="")
   {
    alert('select Department name!');
    document.getElementById("depname").focus();
    return false;
   }
  }
 </script>-->
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
<td  valign="top" bgcolor="white">
<!--------body  --->
<br><br>
<h2 align="center">Department Registation page</h2>
<br>
<?php
if(isset($_POST['save']))
 {
 $faculity=$_POST['faculity'];
 $depId=$_POST['depid'];
 $depname=$_POST['depname'];
mysql_select_db("cde", $conn);
						
$sql="INSERT INTO department VALUES('$faculity','$_SESSION[a]','$depId','$depname')";
if (!mysql_query($sql,$conn))
  {
 echo'<p class="wrong">your detail is not correct</p>';
 echo' <meta content="4;regdep.php" http-equiv="refresh" />';
  }
  else
  {
echo'<p class="success">Successfully Registerd!!</p>';
echo' <meta content="4;regdep.php" http-equiv="refresh" />';
}}
mysql_close($conn)
?>
<form action="regdep.php" method="POST" id="rform" name="aform"  onsubmit='return formValidation()'>
<table style="border:1px solid #336699;width:550px;height:250px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">
<tr><td><font color="red"></font><b>Faculity</b></td><td><input type="text" name="faculity" id="faculity" style="width:245px; height:30;" required/>
<i><span class="error_faculity" id="faculity_error_message"></span></i></td></tr>
<tr><td><font color=""></font><b>Department Id</b></td><td><input type="number" name="depid" id="depid" style="width:245px; height:30;" required/>
 <i><span class="error_depid" id="depid_error_message"></span></i></td></tr>
 <tr><td><font color=""></font><b>Department Name</b></td><td><input type="text" name="depname" id="depname"  style="width:245px; height:30;" required Pattern="[ a-z A-Z ]+" onInvalid=setCustomerValidity("Please Enter Only Number") />
 <i><span class="error_depname" id="depname_error_message"></span></i></td></tr>

<tr><td>&nbsp;</td><td><input type="submit" name="save" value="Register" Onclick="return check(this.form);"/> <input type='reset' value='Reset'></td>
</table>
</form>
</td><td width=150px>
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
Admass Univresity of Collage Distance Eduction Office All Right are Reservd &copy; 2010 E.C. 
&nbsp; &nbsp; &nbsp; &nbsp;
</font></td></tr></table>
</td>
</tr>
</table>
</body>
</html>
</html>