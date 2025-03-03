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
   if(document.getElementById("old").value == "")
   {
    alert("First Enter your old password!!");
    document.getElementById("old").focus();
    return false;
   }
     if(document.getElementById("new").value =="")
   {
    alert('First Enter your new password!!');
    document.getElementById("new").focus();
    return false;
   }
     if(document.getElementById("confi").value =="")
   {
    alert('First Enter your Conformation password !!');
    document.getElementById("confi").focus();
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
<!--------body  --->
<td  valign="top" bgcolor="white" height="500">
<script language="javascript">
function formValidation(){
//assign the fields
var old = document.getElementById('old');
var new=document.getElementById('new');
var confi = document.getElementById('confi');
if(isAlphanumeric(old, " Enter old password!")){
if(lengthRestriction(old, 3, 30,"for your old password")){
if(isAlphanumeric(new, "Enter new password!")){
if(lengthRestriction(new, 3, 30,"for new password!")){
if(isAlphanumeric(confi, "Enter Your conformation password!")){
if(lengthRestriction(confi, 3,30, "for your rpass")){
	return true;
	}}}}}}	
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
	</script>	
<h2><center>Change Your password</center></h2>
<table style="border:1px solid #336699;width:470px;height:250px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">
<form action="ChangePassword2.php" method="post" onsubmit='return formValidation()'>
<tr><td><p><font size="4px">Old Password:</td><td></font><input type="password" name="password"id='old' placeholder='OldPassword'></td></tr><br>
<tr><td><font size="4px">New Password:</td><td></font><input type="password" name="pass"id='new' placeholder='NewPassword'></td></tr><br>
<tr><td><font size="4px">Confirm New password:</td><td></font><input type="password" name="rpass"id='confi' placeholder='ConfrimPassword'></td></tr><br>
<tr><td><p align="center">&nbsp;<input type="submit" name="update" value="Change"size="25" Onclick="return check(this.form);"/>&nbsp;&nbsp;&nbsp;&nbsp;
<input type='reset' size="25" value='Reset'></td></tr></form></table></center>
<?php
if(isset($_POST['update']))
{
$password =$_POST['password'];
$p=base64_encode("$password");
$pass = $_POST['pass'];
$p1=base64_encode("$pass");
$rpass = $_POST['rpass'];
$query="update account set password='$p1' where password='$p' and User_Id='$_SESSION[a]'";
$result=mysql_query($query);
if($result)
{
echo "<font color='green'>password changed Successfully";
echo' <meta content="3; changepassword2.php" http-equiv="refresh" />';
}
else
{
echo "Change password is not correct: please try again".mysql_error();
echo' <meta content="3;changepassword2.php" http-equiv="refresh" />';
}
}
?>
</div>
</td>
<td  height=400px width=150px bgcolor="#E5E4E2" valign=top>
<table   bgcolor="#E5E4E2" border=0  width="200" height="350" class="menu-bar" align="center">
<tr>
<td valign=top bgcolor=white>

<font color="white"><iframe name="frame" width=280px height=440px src="date.php"></iframe><a></center></h2>
</td>
</tr>
<tr>
</td>
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
</html>