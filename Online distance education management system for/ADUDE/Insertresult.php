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
<td bgcolor="white">
		 <?php
   $insert=0;
if(isset($_POST['save']))
  {  
    $coursecode=$_POST['cCode'];
	$course=$_POST['course_name'];
	 $UserID=$_POST['name'];
	 $assignment=$_POST['assignment'];
	 $final=$_POST['final'];
	 sizeof($UserID);
	 sizeof($final);
	 sizeof($assignment);
	 $year=$_POST['year'];
	 $semister=$_POST['semister'];
	 $cr_hr=$_POST['cHour'];
	 
	 $i1=0; $i2=0; $i3=0;
	$b=sizeof($UserID);
   for($i1;$i1<$b; $i1++){
   for($i2;$i2<$b;$i2++){
        if($i2<$i1){
         continue;
          }
    else if($i2==$i1){
      for($i3;$i3<$b;$i3++){
          if($i3<$i1){
         continue;
              }
        else if($i3==$i1){
		 $total=$assignment[$i2]+$final[$i3];
   $grade="";
   $gpa="";
  if($total>=90)
	{
	$grade="A+";
	$gpa=4;
	}
	
		else if($total>=85)
	{
	$grade="A";
	$gpa=4;
	}
		else if($total>=80)
	{
	$grade="A-";
	$gpa=3.75;
	}
	else if($total>=75)
	{
	$grade="B+";
	$gpa=3.5;
	}
	else if($total>=70)
	{
	$grade="B";
	$gpa=3;
	}
	else if($total>=65)
	{
	$grade="B-";
	$gpa=2.75;
	}
	else if($total>=60)
	{
	$grade="C+";
	$gpa=2.5;
	}
	else if($total>=50)
	{
	$grade="C";
	$gpa=2;
	}
	else if($total>=45)
	{
	$grade="C-";
	$gpa=1.5;
	}
	else if($total>=40)
	{
	$grade="D";
	$gpa=1;
	}
	else if($total>=35)
	{
	$grade="FX";
	$gpa=0;
	}
	else if($total<=35)
	{
	$grade="F";
	$gpa=0;
	}
	mysql_select_db("my_db", $conn);
	$sql="insert into result values('','$_SESSION[a]','$UserID[$i1]','$course','$coursecode','$year','$semister','$cr_hr','$assignment[$i2]','$final[$i3]','$total','$grade','$gpa','0')";
	if(mysql_query($sql,$conn)){
     $insert=1;
		        }
           }
  else{
       break;
       }

     }
       }
      else{
        	break;
          }
       }
      }//end of foreach
	  mysql_close($conn);
	  }//end of is set save
      	 if($insert!=0){
        echo $suceess="<font color='green' size='6px'>Great Successfully Posted</font>";
		 echo' <meta content="5;addresul.php" http-equiv="refresh" />';

          }
		  
      else{
       echo $falir="Failur to Registere because of internal problem";
	   echo' <meta content="1;addresul.php" http-equiv="refresh" />';
      }	
	?></td>
<td width=150px>
<table border=0 width=150px height="100" bgcolor=white>
<tr>
<td valign=top bgcolor=white>
<h2><center>
<font color="black" face="monotype corsiva" size="5">Admass university  distance Office  works for change!!</font><br>
<font color="white"><a href="debre.php"><iframe name="frame" width=300px height=400px src="date.php"></iframe><a></center></h2>
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