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
<td  valign="top" bgcolor="white" height="500">
<br><br>
 <center><button onclick="PrintDiv()" title='Print'type="submit">Print</button></center>
<div id="divToPrint">

<?php
if(isset($_POST['save'])){
@$dept=$_POST['department'];
@$semister=$_POST['simester'];
@$year=$_POST['year'];

$r12 = mysql_query("select firstname,Middlename,lastname,birthdate,sex,town,woreda,adress,Email,phone FROM student where  department='$dept' and simester='$semister' and year='$year' ");
echo"<table style='border:1px solid #336699;border-radius:1px;box-shadow:1px 10px 10px gray ' align=center>
<tr><td><br><br>";
print "<center>Total number of new applicants Accepted in ".$dept." departments is: ".mysql_num_rows($r12).'</center><br><br>';
$r13 = mysql_query("select firstname,Middlename,lastname,birthdate,sex,town,woreda,adress,Email,phone FROM student where  department='$dept' and simester='$semister' and year='$year' ");

print"<table border='3' width='1200'  bgcolor='white' border='red'>";
print"<tr bgcolor='#F0FFFF'>";
print"<td>First Name</td>";
print"<td>Middle Name</td>";
print"<td>Last name Name</td>";
print"<td>Date Of Birth</td>";
print"<td>Sex</td>";
print"<td>town</td>";
print"<td>woreda</td>";
print"<td>adress</td>";
print"<td>E-mail </td>";
print"<td>Phone Number</td>";
print"</tr>";
while($row = mysql_fetch_array($r13))
  {
    print ("<tr>");
 print ("<td>" . $row['firstname'] . "</td>");
 print ("<td>" . $row['Middlename'] . "</td>");
 print ("<td>" . $row['lastname'] . "</td>");
 print ("<td>" . $row['birthdate'] . "</td>");
 print ("<td>" . $row['sex'] . "</td>");
 print ("<td>" . $row['town'] . "</td>");
 print ("<td>" . $row['woreda'] . "</td>");
 print ("<td>" . $row['adress'] . "</td>");
 print ("<td>" . $row['Email'] . "</td>");
 print ("<td>" . $row['phone'] . "</td>");
  }
print( "</table><br><br>");
$r14 = mysql_query("SELECT firstname,middlename,lastname,birthdate,sex,town,woreda,adress,email,phone FROM application where department='$dept' and status='1'");
print "<center>Total number of applicants Rejected in ".$dept." departments is: ".mysql_num_rows($r14).'</center><br><br>';

print"<table border='3' width='1200'  bgcolor='white' border='red'>";
print"<tr bgcolor='#F0FFFF'>";
print"<td>First Name</td>";
print"<td>Middle Name</td>";
print"<td>Last name Name</td>";
print"<td>Date Of Birth</td>";
print"<td>Sex</td>";
print"<td>town</td>";
print"<td>woreda</td>";
print"<td>adress</td>";
print"<td>E-mail </td>";
print"<td>Phone Number</td>";
print"</tr>";
while($row = mysql_fetch_array($r14))
  {
    print ("<tr>");
 print ("<td>" . $row['firstname'] . "</td>");
 print ("<td>" . $row['middlename'] . "</td>");
 print ("<td>" . $row['lastname'] . "</td>");
 print ("<td>" . $row['birthdate'] . "</td>");
 print ("<td>" . $row['sex'] . "</td>");
 print ("<td>" . $row['town'] . "</td>");
 print ("<td>" . $row['woreda'] . "</td>");
 print ("<td>" . $row['adress'] . "</td>");
 print ("<td>" . $row['email'] . "</td>");
 print ("<td>" . $row['phone'] . "</td>");

 
  }
print( "</table>");

mysql_close($conn);
echo"</tr>";

echo"</table>";
}
?>
</div>
   <script type="text/javascript">     
					function PrintDiv() 
						{    
						   var divToPrint = document.getElementById('divToPrint');
						   var popupWin = window.open('', '_blank', 'width=600,height=600');
						   popupWin.document.open();
						   popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
							popupWin.document.close();
						}
			    </script></td>

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
</ ~dulla^@204~ 