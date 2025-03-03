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
<img src="2.jpg" width="120px" height="50" ><img src="ima/c12.png" width="1000px" height="50" ><img src="2.jpg" width="120px" height="50" >
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
<li><a href="new2.php" link="white" >Delet Announcment</a></li>
		</ul>
		</li>
				<li><a href="#">View</a>
      <ul>
<li><a href="rep11.php" >View Report</a></li>
<li><a href="viewcomment.php" >View Comments</a></li>
</ul>
</li>
<li><a href="changepassword5.php" >Change Password</a></li>
<li><a href="logout.php" >Logout(<?php echo $_SESSION['a'];?>)</a></li>	   
    </div>
</td>
</tr>
<td  valign="top" bgcolor="white">
<br><br>
<table bgcolor="#F0F8FF"  style="border:1px solid #336699;width:350px;height:60px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">
<tr>
<td>
<h3>VIEW  NEW APPLICANTS</h3>
<form action="rep11.php" method="post"  onsubmit="return Form1_Validator(this)" name="Form1">
<label><font size="4px">Department</font></label>
 <select name="department" id="department" style="width:170;height:30;">
  <option>Accounting</option>
  <option>Markating</option>
  <option>Markating Managment</option>
  <option>Economices</option>
  <option>Englshe</option>
  <option>Mathmatices</option>
  <option>Educational Planning</option>
    </select><input type="submit" value="VIEW" name="view" style="font-size:16px" align="center"><br>

</form>
</tr></td></table>

<?php
 if(isset($_POST['view'])){
//include("rep1.php");

@$dept=$_POST['department'];
$rs = mysql_query("SELECT *FROM application where department='$dept' ");
echo"<table border='0' align='center'><tr><td>";
print "Total number of new applicants Registred in ".$dept." departments is: ".mysql_num_rows($rs);
echo"</tr>";
echo"</td>";
echo"</table>";
print"<table border='1' width='925'  bgcolor='white' >";
print"<tr>";
print"<td>Photo</td>";
print"<td>First Name</td>";
print"<td>Middle Name</td>";
print"<td>Date Of Birth</td>";
print"<td>Sex</td>";
print"<td>Age</td>";
print"<td>town</td>";
print"<td>woreda</td>";
print"<td>E-mail </td>";
print"<td>Department</td>";
print"<td>Phone Number</td>";
print"</tr>";
while($row = mysql_fetch_array($rs))
  {
    print ("<tr>");
 print ("<td>" . $row['photo'] . "</td>");
 print ("<td>" . $row['firstname'] . "</td>");
 print ("<td>" . $row['middlename'] . "</td>");
 print ("<td>" . $row['birthdate'] . "</td>");
 print ("<td>" . $row['sex'] . "</td>");
 print ("<td>" . $row['age'] . "</td>");
  print ("<td>" . $row['town'] . "</td>");
   print ("<td>" . $row['woreda'] . "</td>");
 print ("<td>" . $row['email'] . "</td>");
 print ("<td>" . $row['department'] . "</td>");
 print ("<td>" . $row['phone'] . "</td>");
 print ("</tr>");
  }
print( "</table>");
}

mysql_close($conn);
?>

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
Admass University of Collage Distance Eduction Office All Right are Reserved &copy; 2010 E.C. 
&nbsp; &nbsp; &nbsp; &nbsp;
</font></td></tr></table>
</td>
</tr>
</table>
</body>
</html>
</html>