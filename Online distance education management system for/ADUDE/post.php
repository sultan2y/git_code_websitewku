<?php
	include("connection.php");  
 session_start();
if(isset($_SESSION['user_id']))
 {
  $mail=$_SESSION['user_id'];
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
<body bgcolor="white">
<table align=center width=1000px bgcolor="white"bgcolor="#ffebcd">
<tr>
<td height=20px  colspan=4>

<img src="2.jpg" width="100px" height="140" ><img src="1.jpg" width="1000px" height="140" ><img src="2.jpg" width="100px" height="140" >
</td>

</tr>
<tr>
<td  height=20px colspan=3 bgcolor=tan >
  <div id="dropdown">
   <li><a href="index.php">Home</a></li>
   <li><a href="About.php">About as</a></li>
   <li><a href="register.php">Apply to Register</a></li>
      <li><a href="#">Departments</a>
      <ul>
	    <li><a href="#">Accounting</a></li>
		<li><a href="#">Managment</a></li>
		<li><a href="#">Marketing Managment</a></li>
		<li><a href="#">Economics</a></li>		  
		<li><a href="#">Teachers Education Branch</a></li>
		<li><a href="#">English</a></li>
        <li><a href="#">Mathematics</a></li>
        <li><a href="#">Educational Planning and managment</a></li>
		</ul>
		</li>
	<li><a href="#">Login</a>
	   <ul>
		<li><a href="login.php">&nbsp;&nbsp;Admin</a>
		<li><a href="login.php">&nbsp;&nbsp;Instructor</a>
		<li><a href="login.php">&nbsp;&nbsp;Registrar</a>
		<li><a href="login.php">&nbsp;&nbsp;Student</a></li>	
		<li><a href="login.php">&nbsp;&nbsp;Coordinator</a></li>
		<li><a href="login.php">&nbsp;&nbsp;DeP-Head</a></li>
 </ul>
	</li>
	<li><a href="Contact.php">Contact as</a>
	<li><a href="feedback.php">Feedback</a>
	<li><a href="help.php">Help</a>
	</li>
	
	
	  
	  
	 </div>
	  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 <font size="2"><a href="logout.php" id="login">Logout</a> </font>
</td>
</tr>
<tr>
<td  height=500px width=150px bgcolor=black valign=top>
<table   bgcolor="#abebaw" border="3"  width="200" height="900" class="menu-bar" align="center">
<tr>
 <td width="150" height="20">
 <a href="manageuser.php" id="drop"><b>Manage User Account</b></a></td>
</tr>
<tr>
 <td width="150" height="20">
 <a href="create.php" id="drop"><b>Create User account</b></a></td>
</tr>
<tr>
 <td width="150" height="20">
 <a href="viewcomment.php" id="drop"><b>View Comments</b></a></td>
</tr> 
<tr>
 <td width="150" height="20">
 <a href="account.php" id="drop"><b>Activate/Deactivate</b></a></td>
</tr> 
<tr>
 <td width="150" height="20">
 <a href="changepassword.php" id="drop"><b>Change Password</b></a></td>
</tr>  
<tr>
<td>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

    </td>
   </tr>
   </table>
</td>
<td  valign="top">
<!--------body  --->
<br><br>
<h2 align="center">Create Account page</h2>
<br>
<script type='text/javascript'>
function formValidation(){
//assign the fields
       var fname=document.getElementById('fname');
		var lname=document.getElementById('lname');
	var phone_no = document.getElementById('phone_no');
	var username = document.getElementById('username');
	var password = document.getElementById('password');
if(isAlphabet(fname, "please enter Your First name in letters only")){
if(lengthRestriction(fname, 3, 30,"for your First name")){
if(isAlphabet(lname, "please enter Your Last name in letters only")){
if(lengthRestriction(lname, 3, 30,"for your Last name")){
if(lengthRestriction(password, 3, 10,"for your Password")){
if(lengthRestriction(username, 3, 25,"for your username")){
if(lengthRestriction(phone_no, 10, 13,"for your Phone number")){
	return true;
	}}}}
	}
	}
	}
	
return false;
		
}	
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function lengthRestriction(elem, min, max, helperMsg){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters" +helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
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
  $actype=$_POST['actype'];
mysql_select_db("my_db", $conn);
						
$sql="INSERT INTO account (fname, lname ,User_Id,phone,username,password,accounttype)
VALUES
('$fname','$lname','$user_id','$phone_no','$username','$password','$actype')";

if (!mysql_query($sql,$conn))
  {
 echo'<p class="wrong">your detail is not correct</p>';
  }
  else
  {
echo'<p class="success">Successfully created!!</p>';
echo' <meta content="4;create.php" http-equiv="refresh" />';
}}
mysql_close($conn)

?>
<form action="create.php" method="POST" onsubmit='return formValidation()'>
<table style="border:1px solid #336699;width:350px;height:350px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">
<tr><td><font color="red">*</font>First Name</td><td><input type="text" name="fname" required id="fname"/></td></tr>
<tr><td><font color="red">*</font>Last Name</td><td><input type="text" name="lname" required id="lname"/></td></tr>
<tr><td><font color="red">*</font>User ID</td><td><input type="text" name="user_id" required id="user_id"/></td></tr>
<tr><td><font color="red">*</font>Phone No</td><td><input type="text" id="phone_no" onKeyPress="return isNumberKey(event)" name="phone_no" required/></td></tr>
<tr><td><font color="red">*</font>User name</td><td><input type="text" id="username" name="username" required/></td></tr>
<tr><td><font color="red">*</font>Password</td><td><input type="password" id="password" name="password" required/></td></tr>
<tr><td><font color="red">*</font>Account Type</td><td>
<select name="actype" required>
<option value="admin">Administrator</option>
<option value="Instructor">Instructor</option>
<option value="Registrar">Registrar</option>
<option value="Student">Student</option>
<option value="Coordnator">Coordnator</option>
<option value="DeP-Head">DeP-Head</option>
</select>

</td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="save" value="Save"/></td>
</table>
</form>

</td>
<td width=150px>
<table border=0 width=150px height=500px>
<tr>
<td valign=top bgcolor=gray>
<h2><center>
<font color="black" face="monotype corsiva" size="5">AUDE Office works for change!!</font><br>
<font color="white"><a href="debre.php"><img src="tot1.jpg" width="100"><a></center></h2>
<font color="black" face="arial" class="just">
<p s ~dulla^@204~ ~dulla^@204~ fice plays a great role 
in producin~dulla^@204~ ledgeable citizen
 for the developme~dulla^@204~ ntry.</font>
</td>
</tr>
<tr>
<td~dulla^@204~ e direction="up"><font face="Lucida C~dulla^@204~ olor="black" size="4">
<center>AUDE ~dulla^@204~ nter></font></marquee></td></tr>
<tr~dulla^@204~ r="white"><img src="DSC01924.JPG" wid~dulla^@204~ ht="260"></font></h3>
</td>
</tr>
~dulla^@204~ /td>
</tr>
</tr>

<tr>
<td colsp~dulla^@204~ gray>
<table align="center" bgcolor=~dulla^@204~ ont face="Times New Roman" color="whi~dulla^@204~ 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp~dulla^@204~ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp~dulla^@204~ esity Distance Eduction Office All Ri~dulla^@204~ vd&copy; 2010 E.C.
 &nbsp; &nbsp; &n~dulla^@204~ </font></td></tr></table>
</td>
</tr>
</table>
</body>
</html>