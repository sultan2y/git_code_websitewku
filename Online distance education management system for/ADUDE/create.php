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
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="JS/jquery-3.3.1.js" type="text/javascript"></script>
 <script type="text/JavaScript" src="js/create.js"></script>
<!--<script language="javascript">
  function check()
  {
   if(document.getElementById("fname").value == "")
   {
    alert("First Enter your first name!!");
    document.getElementById("fname").focus();
    return false;
   }
     if(document.getElementById("lname").value =="")
   {
    alert('First Enter your last Name!!');
    document.getElementById("lname").focus();
    return false;
   }
     if(document.getElementById("user_id").value =="")
   {
    alert('First Enter your user id!!');
    document.getElementById("user_id").focus();
    return false;
   }
      if(document.getElementById("phone_no").value =="")
   {
    alert('First Enter your phone_no!!');
    document.getElementById("phone_no").focus();
    return false;
   }
   if(document.getElementById("username").value == "")
   {
    alert("First Enter your user name!!");
    document.getElementById("username").focus();
    return false;
   }
   if(document.getElementById("password").value == "")
   {
    alert("First Enter your password!!");
    document.getElementById("password").focus();
    return false;
   }
   if(document.getElementById("accounttype").value == "")
   {
    alert("First Select your accounttype!!");
    document.getElementById("accounttype").focus();
    return false;
   }
  }
 </script>-->

</head>
<body>
<table align=center width=1000px bgcolor="white"border="white">
<tr>
<td height=20px  colspan=4>
<img src="2.jpg" width="120px" height="50" ><img src="ima/c12.png" width="1000px" height="50" ><img src="2.jpg" width="120px" height="50" >
</td>
</tr>
<tr>
<td  height=20px colspan=3 bgcolor=#737CA1 >
  <div id="dropdown">
   <li><a href="admin.php"><b>Admin Home</b></a></li>
   <li><a href="manageuser.php"><b>Manage User Account</b></a></li>	
   <li><a href="create.php"><b>Create User account</b></a></li>
   <li> <a href="#" ><b>View</b></a><ul>	
   <li> <a href="viewactiveuser.php">View Active User</a></li>
   <li> <a href="viewdactiev.php">View Deactivate User</a></li></ul></li> 	
   <li><a href="changepassword.php"><b>Change Password</b></a></li>
<li><a href="logout.php" id="login">Logout (<?php echo"Hi&nbsp;&nbsp;&nbsp;";?><?php echo $_SESSION['b'];?>)</a></li>	
	</div>
	 </td>
     </tr>
<td bgcolor="white" valign="top">
<!--------body  --->
<h3 align="center"><b><font color="blue" style="text-shadow: 4px 4px 4px gray;">Create Account page</font><hr></b></h3>
<br>
<script type='text/javascript'>

	</script>
<?php
if(isset($_POST['save']))
 {
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $user_id=$_POST['user_id'];
 $phone_no=$_POST['phone_no'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $actype=$_POST['accounttype'];
  $e_password=base64_encode("$password");
  if($actype=="admin"){
  $staus=1;
  }
  else if($actype=="Instructor"){
  $staus=7;
  }
   else if($actype=="Registrar"){
  $staus=2;
  }
else if($actype=="Student"){
  $staus=6;
  }
  else if($actype=="Coordnator"){
  $staus=3;
  }
  else{
  $staus=10;
  }
  
mysql_select_db("my_db", $conn);
						
$sql="INSERT INTO account (fname, lname ,User_Id,phone,username,password,accounttype,status,isActive)
VALUES
('$fname','$lname','$user_id','$phone_no','$username','$e_password','$actype','$staus',1)";

if (!mysql_query($sql,$conn))
  {
 echo'<p class="wrong">your detail is not correct</p>';
 echo' <meta content="4;create.php" http-equiv="refresh" />';
  }
  else
  {
echo'<p class="success">Successfully created!!</p>';
echo' <meta content="4;create.php" http-equiv="refresh" />';
}}
mysql_close($conn);

?>
<form action="create.php" id="crform" method="POST"name="form" onsubmit='return formValidation()'>
<table style="border:1px solid #336699;width:650px;height:350px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center" >
<tr><td><font color="black"><b>First Name</b></font></td><td><input type="text" name="fname"id="fname" Placeholder="First Nmae"/>
<i ><span class="error_fname" id="fname_error_message"></span></i ></td></tr>
<tr><td><font color="black"><b>Last Name</b></font></td><td><input type="text" name="lname" id="lname" Placeholder="Last Nmae"/>
<i ><span class="error_lname" id="lname_error_message"></span></i ></td></tr>
<tr><td><font color="black"><b>User ID</b></font></td><td><input type="text" name="user_id" id="user_id" Placeholder="User Id"/>
<i ><span class="error_user_id" id="user_id_error_message"></span></i ></td></tr>
<tr><td><font color="black"><b>Phone No</b></font></td><td><input type="text" name="phone_no"id="phone_no" Placeholder="Phone Number" value="+251"/>
<i ><span class="error_phone" id="phone_no_error_message"></span></i ></td></tr>
<tr><td><font color="black"><b>User name</b></font></td><td><input type="text"name="username"id="username" Placeholder="User Name"/>
<i ><span class="error_username" id="username_error_message"></span></i ></td></tr>
<tr><td><font color="black"><b>Password</b></font></td><td><input type="password" name="password"id="password" Placeholder="Password"/>
<i ><span class="error_password" id="password_error_message"></span></i ></td></tr>
<tr><td><font color=""><b>Account Type:</b></td><td><select name="accounttype" id="accounttype" style="width:244px; height:30;">
<option>select Account</option>
<option>admin</option>
<option>Instructor</option>
<option>Registrar</option>
<option>Student</option>
<option>Coordnator</option>
<option>DeP-Head</option>
</select><i><span class="error_accounttype" id="accounttype_error_message"></span></i></td></tr>
<!--<tr><td><font color="black"><b>Role</b></font></td><td>
<select name="status" required style="width:200px">
<option value="1">Administrator</option>
<option value="7">Instructor</option>
<option value="2">Registrar</option>
<option value="6">Student</option>
<option value="3">Coordnator</option>
<option value="10">DeP-Head</option>
</select>

</td></tr><br><br>-->
<tr><td>&nbsp;</td><td><input type="submit" name="save" value="Create" Onclick="return check(this.form);"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="RESET" name="RESET" value="Reset"/></td>
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
</ ~dulla^@204~ 