<?php
	include("connection.php");  
 session_start();
if(isset($_SESSION['user_id']))
 {
  $mail=$_SESSION['user_id'];
 } else {
 ?>

 <script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>

<?php
$user_id=$_SESSION['user_id'];
$result=mysql_query("select * from account where user_id='$user_id'")or die(mysql_error);
$row=mysql_fetch_array($result);
$FirstName=$row['FNAME'];
$middleName=$row['mNAME'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admass University of Collage Distance Education managent system</title>
<link rel="icon" type="image/png" href="img/dbuicon.png"/>
<link href="adminstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="slideshow/js-image-slider.css" rel="stylesheet" type="text/css" />
<script src="slideshow/js-image-slider.js" type="text/javascript"></script>
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
<script src="aa.js" type="text/javascript"></script>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>
</head>
<body>
<table  border="0" align="center">
<!--Header-->
<tr>
<td width="500px"></td>
<td><?php 
echo '<img src="img/people.png" width="40px" height="30px">&nbsp;'.'<font face="times new roman" color="white" size="3">'.$FirstName."&nbsp;".$middleName." ".'</font>';?></td>
<td id="logoutlink" align="center"><a href="logout.php" id="log">Logout</a></td>
</tr>
<tr>
<td width="750px" colspan="3" height="100px">
<p><a href="index.php"><img src="img/logo.png" align="left" width="150px" height="120px"></a><img src="img/admin.png" align="center" width="490px" height="120px"></p>
</td>
</tr>
<!--End Of Header-->
<!--Main menus-->
<tr>
<td colspan="3">
<div id="sse2">
        <div id="sses2"  >
         <ul>
         <li><a href="admin.php">Home</a></li>
         <li><a href="viewcom.php">View Comment</a></li>
         <li><a href="postinfo.php">Post Info</a></li>
		 <li><a href="viewstudenta.php">View StudentInfo</a></li>
         </ul>
         </div>
    </div>

</td>
</tr>
<!--End of main menus-->
<!--Slide shows-->
<!--End of Slide shows-->
<table align="center" id="insides" width="890px">
<tr>
<!--Sub menus-->
<td width="190px" height="500px" valign="top" id="insides">
<table>
<tr>
<th align="center" width="450px" height="25px" bgcolor="#336699"><font face="arial" color="white" size="2">Manage Record</font></th>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="#">Search</a></td>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="#">Update</a></td>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="#">Delete</a></td>
</tr>
</table>
<br>
<br>
<table border="0">
<tr>
<th width="300px" bgcolor="#336699" height="25px"><font face="arial" color="white" size="2">Manage Account</font></th>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="cua.php">Create User Account</a></td>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="raccount.php">Remove User Account</a></td>
</tr>
</table>
<br>
<br>
<?php 
include "cal.php"; 
?>
</td>
<!--End Of Sub menus-->
<!--Body section-->
<td valign="top">
<br>
<br>
<font face="Arial" size="2px">Our Home page......</font>
  <div style="width:480px; height:510px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">
<!--Form Validation-->
<script type='text/javascript'>
function formValidation(){
//assign the fields
    var firstname=document.getElementById('fname');
	var middlename= document.getElementById('mname');
    var lastname= document.getElementById('lname');
	var user_id = document.getElementById('user_id');
	var phone = document.getElementById('phone');
	var username = document.getElementById('username');
	var password = document.getElementById('password');
	var cpassword = document.getElementById('cpassword');
if(isAlphabet(firstname, "please enter Your First name in letters only")){
if(lengthRestriction(firstname, 3, 30,"for your First name")){
if(isAlphabet(middlename, "please enter Your Middle name in letters only")){
if(lengthRestriction(middlename, 3, 30,"for your Middle name")){
if(isAlphabet(lastname, "please enter Your Last name in letters only")){
if(lengthRestriction(lastname, 3, 30,"for your Last name")){
if(isAlphanumeric(user_id,"Please Enter the Correct ID No (!@#$%^&*()*+=~`) Not allowed")){
if(lengthRestriction(user_id, 3, 15,"for your ID No")){
if(isAlphanumeric(password,"Please Enter the Correct Password (!@#$%^&*()*+=~`) Not allowed")){
if(lengthRestriction(password, 5, 10,"for your Password")){
if(isAlphanumeric(cpassword,"Please Enter the Correct Confirmation Password (!@#$%^&*()*+=~`) Not allowed")){
if(lengthRestriction(cpassword, 5, 10,"for your Confirmation Password")){
if(isAlphanumeric(username,"Please Enter the Correct Username(!@#$%^&*()*+=~`) Not allowed")){
if(lengthRestriction(username, 5, 10,"for your username")){
if(isNumeric(phone, "please enter Number only For Phone Number")){
if(lengthRestriction(phone, 10, 10,"for your Phone number")){
	return true;
	}}}}
	}
	}
	}}
	}}}}
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
	var alphaExp = /^[0-9a-zA-Z\/]+$/;
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

  <form id="form1" name="login" method="POST" action="cua.php"  onsubmit='return formValidation()'>
 <div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 
 
 <div style="float:left;" ><strong><font color="white" size="2px">Create User Account</font></strong></div>
<div style="float:right; margin-right:20px; background-color:#cccccc; width:25px;  text-align:center; border-radius:10px; height:12px;"><a href="admin.php" title="Close"><img src="img/close_icon.gif"></a></div> 
 
 </div><br>
  <table width="426px" align="center">
	<tr>
	<td></td>
	<td><font color="red">*</font>&nbsp;<font size="1">required.</font></td>
	</tr>
         <tr>
	       <td cl ~dulla^@204~ ~dulla^@204~ px"><font color="red">*</font> First ~dulla^@204~ ><input type="text" name="fname" id="~dulla^@204~ ed x-moz-errormessage="Enter Your Fir~dulla^@204~ d>
	     </tr>
		 <tr>
	       <td~dulla^@204~ _text' width="220px"><font color="red~dulla^@204~ ddle Name:</td><td><input type="text"~dulla^@204~  id="mname" required x-moz-errormessa~dulla^@204~ r Middle name" ></td>
	     </tr>
	~dulla^@204~    <td class='para1_text' width="220p~dulla^@204~ r="red">*</font> Last Name:</td><td><~dulla^@204~ ext" name="lname" id="lname" required~dulla^@204~ essage="Enter Your Last name" ></td>~dulla^@204~ 
		 <tr>
	       <td class='para1_te~dulla^@204~ 0px"><font color="red">*</font> User ~dulla^@204~ input type="text" name="user_id" id="~dulla^@204~ ired x-moz-errormessage="Enter Your L~dulla^@204~ td>
	     </tr>
		 <tr>
          ~dulla^@204~            <td class='para1_text' wid~dulla^@204~ ont color="red">*</font> Sex:</td>
 ~dulla^@204~   <td><input type="radio"  name="sex"~dulla^@204~  title="choose either male by clickin~dulla^@204~ red />
                  Male
     ~dulla^@204~ <input type="radio" name="sex" value=~dulla^@204~ e='choose female by clicking here' re~dulla^@204~                 Female</td>
        ~dulla^@204~ 		 <tr>
	       <td class='para1_tex~dulla^@204~ px"><font color="red">*</font> Phone ~dulla^@204~    <td><input type="text" name="phone~dulla^@204~ value="+251" onKeyPress="return isNum~dulla^@204~ " required x-moz-errormessage="Enter ~dulla^@204~ mber" ></td>
	     </tr>
          ~dulla^@204~            <td style="padding-top:12p~dulla^@204~ or="red" size="3">*</font>Access Type~dulla^@204~           <td style="padding-top:12px~dulla^@204~ me="actype" required maxlength="5">
~dulla^@204~      <option ></option>
            ~dulla^@204~  value='1'>Admin</option>
          ~dulla^@204~ on value='2'>Proctor manager</option>~dulla^@204~        <option value='3'>Proctor</opt~dulla^@204~          </select></td>
            ~dulla^@204~  <tr>
              <td style="paddi~dulla^@204~ ><font color="red" size="3"></font>&n~dulla^@204~ sp;Block Number :</td>
             ~dulla^@204~ value=" " name="block" id="keyword" t~dulla^@204~  ID"   class="txt_field">
          ~dulla^@204~            <option>
            <?ph~dulla^@204~ result = mysql_query("SELECT blockno ~dulla^@204~ ;
									while($row = mysql_fetch_~dulla^@204~ ))
										{  
											echo '<~dulla^@204~ "'.$row['blockno'].'">';
											~dulla^@204~ ockno'];
											echo '</option>'~dulla^@204~ }
									?>
          </select></~dulla^@204~ nal)</td>			 
              </tr>  ~dulla^@204~ >
	       <td class='para1_text' wid~dulla^@204~ ont color="red">*</font> Username:</t~dulla^@204~ type="text" name="username" required ~dulla^@204~ ssage="Enter Username" ></td>
	     ~dulla^@204~ >
	       <td class='para1_text'><fo~dulla^@204~ ">*</font> Password:</td><td><input t~dulla^@204~ " name="password" required x-moz-erro~dulla^@204~ er password" id="username"></td>
	  ~dulla^@204~ <tr>
	       <td class='para1_text' ~dulla^@204~ "red">*</font> Confirm Password:</td>~dulla^@204~ nput type="password" name="confirmpas~dulla^@204~ ed x-moz-errormessage="Re-enter passw~dulla^@204~ sword"></td>
	     </tr>
<tr>
	<br~dulla^@204~ 
	<td colspan="2">&nbsp;&nbsp;&nbsp;&~dulla^@204~ bsp;&nbsp;&nbsp;&nbsp;<input type="ch~dulla^@204~ "condition" value="checkbox" style="w~dulla^@204~ required x-moz-errormessage="Please c~dulla^@204~ " /> I agree the <a rel="facebox" hre~dulla^@204~ ition.php">terms and condition</a> of~dulla^@204~ d>
	</tr><tr>
	<td>&nbsp;</td>
   ~dulla^@204~ type="submit" name="save" value="Save~dulla^@204~ on_example"/></td>
  </tr>  
</tabl~dulla^@204~ >  
  <?php
 if(isset($_POST['save'~dulla^@204~ vel=$_POST['actype'];
 $block=$_POST~dulla^@204~ $password=md5($_POST['password']);
 ~dulla^@204~ 5($_POST['confirmpassword']);
 $quer~dulla^@204~ ROM users where username='$_POST[user~dulla^@204~ sultw=mysql_query($query);
$count=my~dulla^@204~ $resultw);
if($count==1){
while($ro~dulla^@204~ _array($resultw)){
$user=$row[8];
}~dulla^@204~ _POST['username'])
{
echo'  <p alig~dulla^@204~ ont color="red" size="3">
<img src="~dulla^@204~ ">&nbsp;&nbsp;User Name is used by an~dulla^@204~ ont></p></p>';
echo'<meta content="3~dulla^@204~ p-equiv="refresh" />';
}
}
else
{~dulla^@204~ d==$cpassword)
{
$sql="INSERT INTO ~dulla^@204~ mname,lname,user_id,sex,level,block,p~dulla^@204~ ame ,password,confirmpassword)
VALUE~dulla^@204~ name]','$_POST[mname]','$_POST[lname]~dulla^@204~ r_id]','$_POST[sex]','$_POST[actype]'~dulla^@204~ k]','$_POST[phone]','$_POST[username]~dulla^@204~ sword]','$_POST[confirmpassword]')";~dulla^@204~ _query($sql,$conn))
  {
         ec~dulla^@204~ ="center"><font color="red" size="3">~dulla^@204~ /error.png">&nbsp;&nbsp;Already Regis~dulla^@204~ /p></p>';
  die('Error: '.'Already E~dulla^@204~ rror());
  }
  else
  {
echo'<met~dulla^@204~ thank_you.php" http-equiv="refresh" /~dulla^@204~ se
{
echo'<br><br><br>';
       ec~dulla^@204~ ="center"><font color="red" size="3">~dulla^@204~ /error.png">&nbsp;&nbsp;Your Password~dulla^@204~ ch!! </font></p>        </p>';
	   e~dulla^@204~ tent="3;cua.php" http-equiv="refresh"~dulla^@204~ 
	   
	   }
}
mysql_close($conn)
~dulla^@204~ iv>                 


</td>
</tr~dulla^@204~ <!--End Body of section-->
</table>~dulla^@204~ >

<div id="sample">
      <footer~dulla^@204~   <div align="right">
<a href="#top"~dulla^@204~ g/arrow_up.png" width="40px" title="S~dulla^@204~  Top"></a>
</div>
        <p align=~dulla^@204~ t face="Times New Roman" color="white~dulla^@204~ font></p>
		<br><br>
		<div class="~dulla^@204~ ot" align="center">
		&nbsp;&nbsp;&n~dulla^@204~ e="Times New Roman" color="white" siz~dulla^@204~ href="admin.php">Home</a>&nbsp;|&nbsp~dulla^@204~ wcom.php">View Comment</a>&nbsp;|&nbs~dulla^@204~ stinfo.php">Post Info</a>&nbsp;|&nbsp~dulla^@204~ wstudent.php">View StudentInfo</a></f~dulla^@204~ >

      </footer>
</div>

<!--End of Footer-->
</body>
</html>