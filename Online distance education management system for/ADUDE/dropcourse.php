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
   if(document.getElementById("fname").value == "")
   {
    alert("Enter your fname!!");
    document.getElementById("fname").focus();
    return false;
   }
     if(document.getElementById("mname").value =="")
   {
    alert('Enter your mname!!');
    document.getElementById("mname").focus();
    return false;
   }
     if(document.getElementById("lname").value =="")
   {
    alert('Enter your last name!!');
    document.getElementById("lname").focus();
    return false;
   }
      if(document.getElementById("studid").value =="")
   {
    alert('Enter your student id!!');
    document.getElementById("studid").focus();
    return false;
   }
      if(document.getElementById("dept").value =="")
   {
    alert('Select your department!!');
    document.getElementById("dept").focus();
    return false;
   }
      if(document.getElementById("sems").value =="")
   {
    alert('Select your semister!!');
    document.getElementById("sems").focus();
    return false;
   }
      if(document.getElementById("year").value =="")
   {
    alert('Enter your year!!');
    document.getElementById("year").focus();
    return false;
   }
     if(document.getElementById("cname").value =="")
   {
    alert('Enter your Course name!!');
    document.getElementById("cname").focus();
    return false;
   }
     if(document.getElementById("ccode").value =="")
   {
    alert('Enter your Course code!!');
    document.getElementById("ccode").focus();
    return false;
   }
     if(document.getElementById("credit_hour").value =="")
   {
    alert('Select your credit_hour!!');
    document.getElementById("credit_hour").focus();
    return false;
   }
    if(document.getElementById("prrqust").value =="")
   {
    alert('Enter your per rqust!!');
    document.getElementById("prrqust").focus();
    return false;
   }
  }
 </script>
</head>
<body bgcolor="white">
<table align=center width=1000px bgcolor="white">
<tr>
<td height=20px  colspan=4>

<img src="2.jpg" width="120px" height="50" ><img src="ima/c12.png" width="1000px" height="50" ><img src="2.jpg" width="120px" height="50" >
</td>

</tr>
<tr>
<td  height=20px colspan=3 bgcolor=#737CA1 >
  <div id="dropdown">
<li><a href="student.php" >&nbsp;&nbsp;Home</a></li>
<li><a href="#">Download</a><ul>
<li><a href="download.php">Download Module</a></li>
<li><a href="download2.php">Download Assigment</a></li></ul>
<li><a href="assignmentsubmit.php">Upload Assignment</a></li>
<!--<li><a href="exam_index.php" target='frame1' >Take exam</a></li>-->
<li><a href="#">View Basic </a>
<ul>
<li><a href="info.php"> View Anuonncment</a></li>
<li><a href="gpa.php"> View Grade</a></li> 
<li><a href="Viewcurriclum1.php"> View Curriculem</a></li>
</ul></li>
<li><a href="#"> Send Requst</a>
<ul>
<li><a href="Course_Add.php">Course_Add</a></li>
<li><a href="dropcourse.php">Drop Course</a></li>
</ul></li>
<li><a href="feedback3.php">Give Comment</a></li>
<li><a href="changepassword4.php" link="white" >Change Password </a></li>
<li><a href="logout.php" id="login">Logout (<?php echo"Hi&nbsp;&nbsp;&nbsp;";?><?php echo $_SESSION['b'];?>)</a></li>	
    </div>
</td>
</tr>
<td BGCOLOR="WHITE" height='520'>
<center><table bgcolor="gray">
<?PHP
 if(isset($_POST['submit'])){

$e=$_POST['dept'];
$f=$_POST['sems'];
$g=$_POST['year'];
$h=$_POST['cname'];
$i=$_POST['ccode'];
$j=$_POST['prrqust'];
$addc=$_POST['accode'];
$addn=$_POST['adcname'];
$select="select start_date ,end_date from date where semister = '$f'";
 $ttt=mysql_query($select)or die (mysql_error());
 while($row = mysql_fetch_array($ttt))
	{
$date1 = $row['start_date'];
$date2= $row['end_date'];
    }
 $current_date = date('Y-m-d');
	  
      if ($current_date >=$date1&& $date2 >=$current_date)
        {
		  // check course code exist or not in the database
		            $select1="select credit_hour,course_code from student_course where course_code = '$i'";
					$result1=mysql_query($select1);
					if(mysql_num_rows($result1)>0)
                     {
                     while($row=mysql_fetch_array($result1))
                     {
					$course_code = $row['course_code'];
	                $credit_hour = $row['credit_hour'];
					//echo $credit_hour;
					 }
                 			$select2 = "select credit_hour from student_course where stud_id = '$_SESSION[a]' and year = '$g' and semister ='$f'";		
							$result2 = mysql_query($select2);
							$totalcredithour = '0';
							   while($row=mysql_fetch_array($result2))
							   {
							   $credit = $row['credit_hour'];
							   $totalcredithour = $totalcredithour + $credit;
							    //echo $totalcredithour;
													
							   
							   }
								  
							$totalcredithour1 = $totalcredithour - $credit;
							 //echo $totalcredithour1;
															
						//f begin

                 $select2 = "select grade from result where stud_id = '$_SESSION[a]' and course_code= '$addc'";
                 //$select2 = "select grade from result where stud_id = '$_SESSION[a]' and course_code= '$addc'";				 
							   $result2 = mysql_query($select2);
							   if(mysql_num_rows($result2)>0)
							   {
							   while($row=mysql_fetch_array($result2))
							   {
							   $grade = $row['grade'];
							    
							   }
							   if($grade=='F'){													
								$select1="select * from student_course where course_code = '$addc'";
					             $result1=mysql_query($select1);
					                                           if(mysql_num_rows($result1)>0)
                                                               {
                                                               while($row=mysql_fetch_array($result1))
                                                               {
					                                           $course_code1 = $row['course_code'];
	                                                           $credit_hour1 = $row['credit_hour'];
					                                           }							  											   
															   
															    $totalcredithour2 = $credit_hour1 + $totalcredithour1;
																//echo $totalcredithour2;
																
																if($totalcredithour2 < 22){
																
											                                  $res=mysql_query("insert into acourse values
										                                           ('$_SESSION[a]','$e','$f',
														                           '$g','$addn','$addc','$j')");
										                                           if($res){
                                 	                                               echo"<font color=green size=5px><center>Successfully Add Course</center></font>";
	                                                                               echo' <meta content="15;dropcourse.php" http-equiv="refresh" />';
									                                               }else{
										                                            echo"<font color=green size=5px><center>not Add Course  </center></font>";
	                                                                                echo' <meta content="15;dropcourse.php" http-equiv="refresh" />';
										                                           }
																				   $res=mysql_query("insert into dcourse values
										                                           ('$_SESSION[a]','$e','$f',
														                           '$g','$h','$i','$j')");										                                          
																	           }else{
																	            echo"<font size='5px' color='red'>course Over Load</font>";
								    ~dulla^@204~ ~dulla^@204~                   echo' <meta content~dulla^@204~ se.php" http-equiv="refresh" />';
		~dulla^@204~ 		            }											
									~dulla^@204~ 																												//f end
~dulla^@204~ 				
															   }else{
					~dulla^@204~           echo"<font size='5px' color~dulla^@204~ n not Add This Course / Over Load</fo~dulla^@204~ 		                                   ~dulla^@204~ meta content="5;dropcourse.php" http-~dulla^@204~ h" />';
															   }         ~dulla^@204~     		   
							   	            }
~dulla^@204~  else{
							   echo"<font size='5p~dulla^@204~ '>Your Grade is Satisfactory</font>";~dulla^@204~ echo' <meta content="5;dropcourse.php~dulla^@204~ "refresh" />';
							   }
					   ~dulla^@204~ {
                    echo"<font siz~dulla^@204~ ='red'>Your Drop Choice Is Not Exist<~dulla^@204~ 		echo' <meta content="15;dropcourse.~dulla^@204~ iv="refresh" />';
                  ~dulla^@204~  		  		}else{
           echo"<font ~dulla^@204~ lor='red'>Sorry the Course drop date ~dulla^@204~ assed</font>";
		    }
	}
	}
			~dulla^@204~ ter><h1 >Drop course!</h1>
<form act~dulla^@204~ se.php" method="post"onSubmit="return~dulla^@204~ ()" name="fr">
<table style="border:~dulla^@204~ 6699;width:450px;height:350px;border-~dulla^@204~ ox-shadow:1px 10px 10px gray" align="~dulla^@204~ ><td><b>Department:</td><td><select n~dulla^@204~ "dept" style="width:246;height:30" >~dulla^@204~ uery="select depname from department"~dulla^@204~ ysql_query($query);
 while($row=mysq~dulla^@204~ ($result)){
 $depname=$row['depname'~dulla^@204~ row['depid'];
 echo"<option value='$~dulla^@204~ name</option>";
 
 }
 ?></select><~dulla^@204~ <tr><td><b>semester</td><td>
<select~dulla^@204~ d="sems" style="width:246;height:30" ~dulla^@204~ <option value="1">1st</option>
  <op~dulla^@204~ ">2nd</option>
 
</select>
</td></~dulla^@204~ <b>year</td><td><select name="year"id~dulla^@204~ ="width:246;height:30" required>
<op~dulla^@204~ ar"value="1">1st</option > 
<option ~dulla^@204~ lue="2">2nd</option>
  <option name=~dulla^@204~ "3">3rd</option>
   </td>
</tr>
<t~dulla^@204~  Course Name:</td><td><input type="te~dulla^@204~ me" id="cnmae" style="width:246;heigh~dulla^@204~ d>
 </td></tr>
<tr><td><b>Drop Cour~dulla^@204~ <td><input type="text" name="ccode" i~dulla^@204~ le="width:246;height:30" required>
 ~dulla^@204~ <tr><td><b>Add Course Name:</td><td><~dulla^@204~ ext" name="adcname" id="cnmae" style=~dulla^@204~ ight:30" required>
</td></tr>
<tr><~dulla^@204~ rse Code:</td><td><input type="text" ~dulla^@204~  id="ccode" style="width:246;height:3~dulla^@204~ 
</td></tr>
<tr><td><b>Pre_Requst:</~dulla^@204~  type="text" name="prrqust"id="prrqus~dulla^@204~ th:246;height:30" required></td></tr>~dulla^@204~ bsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &n~dulla^@204~ sp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbs~dulla^@204~ ;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;~dulla^@204~ nbsp;<input type="submit" value="Drop~dulla^@204~ t" size="12">&nbsp;&nbsp;&nbsp;&nbsp;~dulla^@204~ pe="reset" value="Reset" size="12"></~dulla^@204~                                      ~dulla^@204~                          
</table>
~dulla^@204~ nter>
</TD>
<td  height=400px width~dulla^@204~ r="#E5E4E2" valign=top>
<table   bgc~dulla^@204~ " border=0  width="200" height="300" ~dulla^@204~ ar" align="center">
<tr>
<td valign~dulla^@204~ white>

<font color="white"><iframe~dulla^@204~  width=280px height=400px src="date.p~dulla^@204~ <a></center></h2>
</td>
</tr>
<tr>~dulla^@204~ ="white"><img src="d4.JPG" width="200~dulla^@204~ ></font></h3>
</td>
</tr>
 </table~dulla^@204~ >
<td colspan=3 bgcolor=gray>
<tabl~dulla^@204~ er" bgcolor=""><tr><td><font face="Ti~dulla^@204~ " color="white" size="3">
&nbsp;&nbs~dulla^@204~ ;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;~dulla^@204~ nbsp;
Admass University of Collage D~dulla^@204~ ion Office All Right are Reservd &cop~dulla^@204~ 
 &nbsp; &nbsp; &nbsp; &nbsp;
</fon~dulla^@204~ /table>
</td>
</tr>
</table>
</body>
</html>