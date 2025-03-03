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
<table align=center width=1000px height= border="6" bgcolor="white">
<tr>
<td height=20px  colspan=4>
<img src="2.jpg" width="120px" height="50" ><img src="ima/c12.png" width="1000px" height="50" ><img src="2.jpg" width="120px" height="50" >
</td>
</tr>
<tr>
<td  height=20px colspan=3 bgcolor=#737CA1 >
<div id="dropdown">
<li><a href="vc.php" id="drop">view Currciulm</a></li>    
<li><a href="resultapp.php" id="drop">Approve Result</a></li>
<li><a href="vs1.php" id="drop">View Student </a></li>  
<li><a href="feedback5.php" id="drop">Give Comments</a></li>	
<li><a href="changepassword6.php" id="drop">Change Password</a></li>
<li><a href="logout.php" id="login">Logout (<?php echo"Hi&nbsp;&nbsp;&nbsp;";?><?php echo $_SESSION['b'];?>)</a></li>	
   
</div>
</td>
</tr>
<!--------body  --->
<br>
<td  valign="top" width="" height="500" bgcolor="white">
<form action="resultapp.php" method="post">
<table cellpadding="4" cellspacing="0" border=1 bgcolor="white" align="center">
<tr bgcolor="gray">
<th>Student Id</th>
<th>Course Name</th>
<th>Course Code</th>
<th>year</th>
<th>Semester</th>
<th> Credit Hour </th>						
<th> Assignment</th>
<th> Final</th>
<th> Total</th>								
<th color=green>
 <a href="approveall.php?id=<?php echo $row['stud_id'];?>" 
	 onclick="return confirm('Really Approved');"> 
     <b>Approve All</b></a>
</th>
<hr>
</tr>
<?php					
$result = mysql_query("SELECT * FROM result,curriculem where result.course_code=curriculem.course_code");
while($row = mysql_fetch_array($result))
  { 
$status=$row['status'];
$Stud_id=$row['stud_id'];
$coursename=$row['course_name'];								
$course_code=$row['course_code'];								
$year=$row['year'];
$semister= $row['semister'];
$crdite_hour=$row['credit_hour'];
$assignment=$row['assignment'];
$final=$row['final'];
$total=$row['total'];										
?> 
<tr>
<td><?php echo $Stud_id?></td>
<td><?php echo $coursename?></td>
<td><?php echo $course_code;?></td>
<td><?php echo $year;?></td>
<td><?php echo $semister;?></td>
<td><?php echo $crdite_hour;?></td>
<td><?php echo $assignment;?></td>
<td><?php echo $final;?></td>	
<td><?php echo $total;?></td>		
		<td><?php
		if(($status)=='1')
		{
		?>
        <a href="mangresult.php?id=<?php echo $row['stud_id'];?>" 
	 onclick="return confirm('Really Approved');"> 
     <img src="activate.png" width="25 id="view" height="25"/>Approved</a>
                        <?php
						}
		if(($status)=='0')
						{
						?>
                       			 <a href="manageresult.php?status=<?php echo $row['stud_id'];?>" onclick='isConfirmlog()'>
                        		<img src="deactivate.png" id="view" width="35" height="35" onclick='isConfirmlog()'/>Not Approved </a>
                        <?php
						}	?>	
						</td>
		
		
		</tr>
<?php
  }
 
print( "</table>");

?>
</form>
</td>
<td valign=top bgcolor=white>
<h2><center>
<font color="black" face="monotype corsiva" size="5">Admass university  distance Office<br>  works for change!!</font><br>
<font color="white"><a href="debre.php"><iframe name="frame" width=300px height=385px src="date.php"></iframe><a></center></h2>
</td>
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
</html>