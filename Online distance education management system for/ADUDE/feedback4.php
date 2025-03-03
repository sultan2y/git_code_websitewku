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
   if(document.getElementById("name").value == "")
   {
    alert("First enter your full name !!");
    document.getElementById("name").focus();
    return false;
   }
     if(document.getElementById("Email").value =="")
   {
    alert('First Enter your Email address !!');
    document.getElementById("Email").focus();
    return false;
   }
     if(document.getElementById("comment").value =="")
   {
    alert('First Enter comment !!');
    document.getElementById("comment").focus();
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
<td  bgcolor=white valign="top"><br>
<script language="javascript">
function formValidation(){
//assign the fields
     var name = document.getElementById('name');
	var email=document.getElementById('email');
	var comment = document.getElementById('comment');
if(isAlphabet(name, "Enter Your name in letters only")){
if(lengthRestriction(name, 2, 30,"for your full name")){
if(emailValidator(email,"check your E-mail format")){
if(lengthRestriction(comment, 3, 50,"for your comment")){
	return true;
	}}}}	
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
	<center><h2> Feedback here</h2></center>
<form method="post" action="feedback4.php" name="form" onsubmit='return formValidation()'>
     <table bgcolor=#E5E4E2 valign="top" style="border:1px solid;width:400px;height:250px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">
 <tr valign="top">
     <td><b><font size="4px">Name:</font></b></td><td>
	 <input name="name" size="32" id="name" type="text" placeholder="Your name" reqiured></td>
     </tr>
     <tr>
     <td width="850"><b><font size="4px">Email:</font></b></td><td><input name="Email" size="32" id="Email" type="text" placeholder="Enter Your Email"  reqiured></td>
     </tr>
     <tr>
     <td colspan="2"><center><b><font size="4px">Write  feedback </font></b></center></td>
     </tr>
     <tr>
     <td colspan="2"><center><textarea name="comment" id="comment" placeholder="Write comment here" cols="34" rows="3"></textarea></center></td>
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

$sql="INSERT INTO feedback (name,Email, comment )
VALUES
('$_POST[name]','$_POST[Email]','$_POST[comment]')";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
echo"<img src='correct.jpg' width='40' height='30'>Your comment has been Successfully sent!!";
echo' <meta content="4;feedback4.php" http-equiv="refresh" />';
}
//mysql_close($conn)
?>
</td>
<td  height=400px width=150px bgcolor="#E5E4E2" valign=top>
<table   bgcolor="#E5E4E2" border=0  width="200" height="440" class="menu-bar" align="center">
<tr>
<td valign=top bgcolor=white>

<font color="white"><iframe name="frame" width=280px height=450px src="date.php"></iframe><a></center></h2>
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