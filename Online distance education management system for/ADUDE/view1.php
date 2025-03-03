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
<img src="2.jpg" width="120px" height="50" ><img src="ima/c12.png" width="1000px" height="50" ><img src="2.jpg" width="120px" height="50" >
</td>
</tr>
<tr>
<td  height=20px colspan=3 bgcolor=#737CA1 >
  <div id="dropdown">
  <li><a href="registrar.php">&nbsp;&nbsp;Home</a>
  <li><a href="#">Register</a>
  <ul>
  <li><a href="regcourse.php">&nbsp;&nbsp;Course</a>
  <li><a href="regdep.php">&nbsp;&nbsp;Department</a>
  <li><a href="registerstudent.php">&nbsp;&nbsp;Student</a>
   </ul>
	</li>   
   <li><a href="rep1.php"> Generate Report</a></li>
    
  <li><a href="#">View</a>
      <ul>
	    <li><a href="viewapplication.php">Applicante</a></li>
		<li><a href="viewstud.php">student profile</a></li>
		<li><a href="Viewcurriclum.php">Currculem</a></li>
		</ul>
		</li>	
		<li><a href="feedback2.php" link="white" >Give Comment</a>
		<li><a href="changepassword3.php" link="white" >Change Password </a>
		</li> 
<li><a href="logout.php" ><font color="white">Logout </font><font color=green>[<?php echo $_SESSION['a'];?>]</font></a></li>	   
</div>
</td>
</tr>

<td  valign="top" width="100%" height="1000" bgcolor="white">
  <center><button onclick="PrintDiv()" title='Print'type="submit">Print</button></center>
<div id="divToPrint">
<!--------body  ---><br>
 <?php
$con=mysql_connect("localhost","root","") or die ("unable to connect");
$db=mysql_select_db("cde",$con);
if(isset($_POST['save'])){
@$dept=$_POST['department'];

$r12 = mysql_query("SELECT photo,firstname,middlename,lastname,birthdate,sex,age,town,woreda,adress,email,department,phone,semister,year FROM application where status='0' and department='{$dept}'");

print"<table border='3' width='1200'  bgcolor='white' border='red'>";
print"<tr bgcolor='gray'>";
print"<td>Photo</td>";
print"<td>First Name</td>";
print"<td>Middle Name</td>";
print"<td>Last name Name</td>";
print"<td>Date Of Birth</td>";
print"<td>Sex</td>";
print"<td>Age</td>";
print"<td>town</td>";
print"<td>woreda</td>";
print"<td>adress</td>";
print"<td>E-mail </td>";
print"<td>Department</td>";
//print"<td>Program</td>";
print"<td>Phone Number</td>";
print"<td>Simster</td>";
print"<td> Year</td>";
print"</tr>";
while($row = mysql_fetch_array($r12))
  {
    print ("<tr>");
 print ("<td>" . "<img   width=50 height=50 src='ima/".$row['photo'] . "'/>". "</td>");
 print ("<td>" . $row['firstname'] . "</td>");
 print ("<td>" . $row['middlename'] . "</td>");
 print ("<td>" . $row['lastname'] . "</td>");
 print ("<td>" . $row['birthdate'] . "</td>");
 print ("<td>" . $row['sex'] . "</td>");
 print ("<td>" . $row['age'] . "</td>");
 print ("<td>" . $row['town'] . "</td>");
 print ("<td>" . $row['woreda'] . "</td>");
 print ("<td>" . $row['adress'] . "</td>");
 print ("<td>" . $row['email'] . "</td>");
 print ("<td>" . $row['department'] . "</td>");
  //print ("<td>" . $row['program'] . "</td>");
 print ("<td>" . $row['phone'] . "</td>");
 print ("<td>" . $row['semister'] . "</td>");
 print ("<td>" . $row['year'] . "</td>");
 ?>
  <!--<input type="button" value='Print' onclick='PrintDiv()'>-->
 <?php
 print ("</tr>");
  }
print( "</table>");
}
mysql_close($conn);
?></div>
   <script type="text/javascript">     
					function PrintDiv() 
						{    
						   var divToPrint = document.getElementById('divToPrint');
						   var popupWin = window.open('', '_blank', 'width=600,height=600');
						   popupWin.document.open();
						   popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
							popupWin.document.close();
						}
			    </script>	
</td>

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
