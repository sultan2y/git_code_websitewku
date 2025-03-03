<?php
	include("connection.php");	
?>
<html>
<head>
<link style="text/css" href="3.css" rel="stylesheet">
<link style="text/css" href="3.css" rel="stylesheet">
  <script language="javascript">
  function check()
  {
   if(document.getElementById("name").value == "")
   {
    alert("please enter your full name !!");
    document.getElementById("name").focus();
    return false;
   }
     if(document.getElementById("email").value =="")
   {
    alert('Please Enter your email address !!');
    document.getElementById("email").focus();
    return false;
   }
     if(document.getElementById("comment").value =="")
   {
    alert('Please Enter Message !!');
    document.getElementById("comment").focus();
    return false;
   }
  }
 </script>

<html>
<head>
<link style="text/css" href="3.css" rel="stylesheet">

</head>
<body>
<table align=center width=1000px height= border="6" bgcolor="#ffebcd">
<tr>
<td height=20px  colspan=4>

<img src="2.jpg" width="120px" height="100" ><img src="ima/c12.png" width="1000px" height="100" ><img src="2.jpg" width="120px" height="100" >
</td>

</tr>
<tr>
<td  height=20px colspan=3 bgcolor=#00FFFF >
  <div id="dropdown">
   <li><a href="index.php">Home</a></li>
   <li><a href="About.php">About as</a></li>
   <li><a href="register.php">Apply to Register</a></li>
  <li><a href="#">Departments</a>
      <ul>
	    <li><a href="Accounting.php">Accounting</a></li>
		<li><a href="Managment.php">Managment</a></li>
		<li><a href="Marketing.php">Marketing Managment</a></li>
		<li><a href="Economics.php">Economics</a></li>		  
		<li><a href="English.php">English</a></li>
        <li><a href="Mathematics.php">Mathematics</a></li>
        <li><a href="Educational.php">Educational Planning and managment</a></li>
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
	</li>
	<li><a href="feedback.php">Feedback</a>
	</li>
	<li><a href="help.php">Help</a>
	</li>
	</li>
	
</div>	


	 
	 
</td>
</tr>
<tr>
<td  height=300px width=150px bgcolor="#hhhggg" valign=top>
<table   bgcolor="#47865432" border="0"  width="200" height="600" class="menu-bar" align="center">
<tr>
<td width="110" height="20"><b><font color="white">
<a href="#" link="white" >View Applicants</a></font></b></td></tr>

<tr><td width="110" height="20"><a href="#" link="white" >View Coures requst</a></font></b></td>
</tr>
<tr >
<td width="110" height="20"><b><font color="white">
<a href="#" link="white" >Register student</a></font></b></td></tr>
<tr><td width="110" height="20"><b><font color="white"><a href="regcourse.php" link="white" >
Register Course</a></font></b></td></tr>
<tr><td width="110" height="20"><b><font color="white">
<a href="regdep.php" link="white" >Register Department</a></font></b></td>
</tr>
<tr >
<td width="110" height="20"><b><font color="white">
<a href="#" link="white" >Genrate report</a></font></b></td>
</tr>
<tr><td width="110" height="20"><a href="#" link="white" >View Curriclum</a></font></b></td>
</tr>
<tr><td width="110" height="20"><a href="feedback1.php" link="white" >Give Comment</a></font></b></td>
</tr >
<td width="110" height="20"><b><font color="white">
<a href="changepassword3.php" link="white" >Change Password</a></font></b></td>
</tr>

   </td>
   </table>
<td bgcolor="#Trefrgh" valign="top"><br><br><br><br>
<!--------body  ---> 
<script language="javascript">
function formValidation(){
//assign the fields
        var name = document.getElementById('name');
		var email=document.getElementById('email');
	var comment = document.getElementById('comment');
	if(emailValidator(email,"check your E-mail format")){
if(isAlphabet(name, "please enter Your full name in letters only")){
if(lengthRestriction(name, 8, 30,"for your full name")){
if(lengthRestriction(comment, 3, 50,"for your comment")){
	return true;
	}}}
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
	
<form method="post" action="feedback.php" name="aform" onsubmit='return formValidation()'>
     <table bgcolor=gray valign="top" style="border:1px solid #336699;width:400px;height:350px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">
 <tr valign="top">
     <td><b><font size="4px">Name:</font></b></td><td>
	 <input name="name" size="32" id="name" type="text" placeholder="Your name"></td>
     </tr>
     <tr>
     <td><b><font size="4px">Gender:</font></b></td><td>
	 <select name="gender">
	 <option>male</option>
	 <option>female</option>
	 </select>
	 </td>
     </tr><tr>
     <td width="1000"><b><font size="4px">E-mail:</font></b></td><td><input name="email" size="32" id="email" type="text" placeholder="Enter Your Email"></td>
     </tr>
     <tr>
     <td colspan="2"><center><b><font size="4px">Write  Comment here</font></b></center></td>
     </tr>
     <tr>
     <td colspan="2"><center><textarea name="comment" id="comment" placeholder="Write comment here" cols="34" rows="7"></textarea></center></td>
     </tr>
     <tr>
     <td colspan="2"><center><input value="Send" name="sent" type="Submit" Onclick="return check(this.form);"/><input value="Reset" type="Reset"></center></td>
     </tr>
     </body></table>
</form>
<?php
 if(isset($_POST['sent']))
 {
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","cde");
$conn=mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cde", $conn);

$sql="INSERT INTO feedback (name,gender ,Email, comment )
VALUES
('$_POST[name]','$_POST[gender]','$_POST[email]','$_POST[comment]')";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
echo"<img src='correct.jpg' width='40' height='30'>Your comment has been Successfully sent!!";
echo' <meta content="4;feedback.php" http-equiv="refresh" />';
}
//mysql_close($conn)
?>
</td>
<td width=150px bgcolor=white>
<table border=0 width=150px height="100%" bgcolor=white>
<tr>
<td valign=top bgcolor=white>
<h2><center>
<font color="black" face="monotype corsiva" size="5">Admass University Distance Education  Office  works for change!!</font><br>
<font color="white"><a href="debre.php"><iframe name="frame" width=300px height=350px src="date.php"></iframe><a></center></h2>

</td>
</tr>
<tr>
<td >

<marquee direction="up"><font face="Lucida Calligraphy" color="black" size="4">
<center>AUDE OFFICE!!!</c ~dulla^@204~ ~dulla^@204~ ></tr>
<tr>
<td bgcolor="white"><im~dulla^@204~ 24.JPG" width="200" height="150"></fo~dulla^@204~ d>
</tr>
</table>

</td>
</tr>
~dulla^@204~ span=3 bgcolor=gray>
<table align="c~dulla^@204~ d><font face="Times New Roman" color=~dulla^@204~ 3">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&n~dulla^@204~ sp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&n~dulla^@204~ iversity Distance Education OFFICE Al~dulla^@204~ eservied &copy; 2010 E.C.
 &nbsp; &n~dulla^@204~ nbsp;

</font></td></tr></table>

</font>
</td>
</tr>
</table>
</body>
</html>