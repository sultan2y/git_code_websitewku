<html>
<head>
<link style="text/css" href="3.css" rel="stylesheet">

</head>
<body>
<table align=center width=1000px height= border="6" bgcolor="#E5E4E2">
<tr>
<td height=20px  colspan=4>

<img src="2.jpg" width="120px" height="100" ><img src="1.jpg" width="1000px" height="100" ><img src="2.jpg" width="120px" height="100" >
</td>

</tr>
<tr>
<td  height=20px colspan=3 bgcolor=#737CA1 >
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
<a style="font-size:25px"href="logout.php" id="login">Logout</a> </font>
	 
	 </div>
	 </td>
</tr>
<tr>
<td  height=300px width=150px bgcolor="#ADD8E6" valign=top>
<table   bgcolor="#ADD8E6" border="0"  width="200" height="600" class="menu-bar" align="center">
<tr>
<td width="110" height="20"><b><font color="white">
<a href="viewapplication.php" link="white" >View Applicants</a></font></b></td></tr>
<tr>
<td width="110" height="20"><b><font color="white">
<a href="viewstudent.php" link="white" >View student profile</a></font></b></td></tr>
<tr><td width="110" height="20"><a href="coures.php" link="white" >View Coures requst</a></font></b></td>

</tr>
<tr >
<td width="110" height="20"><b><font color="white">

<a href="reg1.php" link="white" >Register student</a></font></b></td></tr>
<tr><td width="110" height="20"><b><font color="white"><a href="regcourse.php" link="white" >
Register Course</a></font></b></td></tr>
<tr><td width="110" height="20"><b><font color="white">
<a href="regdep.php" link="white" >Register Department</a></font></b></td>
</tr>
<tr >
<td width="110" height="20"><b><font color="white">
<a href="rep1.php" link="white" >Genrate report</a></font></b></td>
</tr>
<tr >
<td width="110" height="20"><b><font color="white">
<a href="changepassword.php" link="white" >Change Password</a></font></b></td>
</tr>

   </td>
   </table>
<tr>
<td  height=500px width=150px bgcolor=black valign=top>
<table   bgcolor="#abebaw" border="3"  width="200" height="900" class="menu-bar" align="center">
<tr>
<fieldset>
<font face="origram" size="10" color="aquayellow"><u><center>student data update form</center></u></font>
 <form action="updatestudentdata1.php" method="post" name="f">
    <center><table bgcolor="#00AEAE">
	  <td><p>ID Number: </p>
	    <p>
	      <label>
	      <input name="phone" type="number" id="phone">
	      </label>
	    </p>
	    <p><font face="snow for santa" size="5" color="">First Name:</font></p></td>
	  <tr><td><input name="name" type="text" id="name" value="" required="required"></td></tr>
	      <td><font face="snow for santa" size="5" color="">sex:</font><font face="snow for santa" size="5"></font><font face="snow for santa" size="5" color=""></font></td>
	  <tr><td><input name="sex" type="text" id="sex" value="" required="required"></td></tr>
		 <tr><td><font face="snow for santa" size="5" color="">Age:</font></td>
	  <tr><td><input name="age" type="text" id="age" value="" required="required"></td></tr>
	  <tr><td><font face="snow for santa" size="5" color="">Id:</font></td></tr>
      <tr><td><input name="id" type="text" id="id" value="" required="required"></td></tr>
      <tr><td><font face="snow for santa" size="5" color="">Course1:</font></td></tr>
      <tr><td><input name="wereda" type="text" id="wereda" value="" required="required" /></td></tr>
      <tr><td><font face="snow for santa" size="5" color="">course2:</font></td></tr>
      <tr><td><input name="kebele" type="text" id="kebele" value="" required="required"></td></tr>
      <tr><td><font face="snow for santa" size="5" color="">Course3:</font></td></tr>
      <tr><td><input name="phone" type="text" id="phone" value="" required="required"></td></tr>
      <tr><td><font face="snow for santa" size="5" color="">course4:</font></td></tr>
      <tr><td><input name="result" type="text" id="result" value="" required="required"></td></tr>
      <tr><td><font face="snow for santa" size="5" color="">course5:</font></td></tr>
      <tr><td><input name="agent" type="text" id="agent" value="" required="required"></td></tr>
       <tr><td><font face="snow for santa" size="5" color="">Rank among class:</font></td></tr>
      <tr><td><input name="agentphone" type="text" id="agentphone" value="" required="required"></td></tr>
		</td></tr> </table></br>
      <input name="Submit" type="submit"onclick="as();"value="Update">
      <input type="reset" value="Reset">
      </center>
</form></fieldset>
		<center>
	<div id="info_box" bgcolor="aquablue" height="51" weight="36" >
<form>

	<table>
		<tr>
			<td align=left><a href="../real1.php" align="left">Go to Home </a>| <a href="adminpage.php" align="left">Back to Admin Page</a></td>
	  </tr>
			</table></div>
    </body>
</html>
</bo ~dulla^@204~ 