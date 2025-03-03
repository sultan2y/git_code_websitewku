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

$select="select start_date ,end_date from date where semister = $f";
   $ttt=mysql_query($select)or die (mysql_error());
    while($row = mysql_fetch_array($ttt))
	{
	@$date1 = $row['start_date'];
	@$date2= $row['end_date'];
    }
      $current_date = date('Y-m-d');
	  
      if ($current_date >= @$date1&& @$date2>=$current_date)
        {
		  // check course code exist or not in the database
		            $select1="select * from result where course_code = '$i'";
					$result1=mysql_query($select1);
					if(mysql_num_rows($result1)>0)
                     {
                     while($row=mysql_fetch_array($result1))
					
                     {
					$course_code = $row['course_code'];
	                $credit_hour = $row['credit_hour'];
					}
                               $select2 = "select grade from result where stud_id = '$_SESSION[a]' and course_code ='$i'";		
							   $result2 = mysql_query($select2);
							   if(mysql_num_rows($result2)>0)
							   {
							   while($row=mysql_fetch_array($result2))
							   {
							   $grade = $row['grade'];
							   }
							   if($grade=='F'){
							   $select2 = "select credit_hour from student_course where stud_id = '$_SESSION[a]' and year = '$g' and semister ='$f'";		
							   $result2 = mysql_query($select2);
							   $totalcredithour = '0';
							   while($row=mysql_fetch_array($result2))
							   {
							  $credit = $row['credit_hour'];
							  $totalcredithour = $totalcredithour + $credit;						 
							   
							   }
								  
							 $totalcredithour1 = $totalcredithour + $credit_hour;							 
								 
						       echo' <meta content="5;Course_Add.php" http-equiv="refresh" />';
								  if($totalcredithour1 < 22 ){
								  
                                        $res=mysql_query("insert into acourse values
										                ('$_SESSION[a]','$e','$f',
														'$g','$h','$i','$j')");
										if($res){
                                 	    echo"<font color=green size=14px><center>Successfully Added Course</center></font>";
	                                    echo' <meta content="5;Course_Add.php" http-equiv="refresh" />';
										}
										else{
										echo"<font color=red size=14px><center>Course Not Added !</center></font>";
	                                    echo' <meta content="5;Course_Add.php" http-equiv="refresh" />';
										}
			                         
	 								 

								 }else
								  {
								  echo"<font size='5px' color='red'>You Can not Add This Course / Over Load</font>";
								   echo' <meta content="10;Course_Add.php" http-equiv="refresh" />';
								  }						  
								  
							   }else{
							   echo"<font size='5px' color='red'>Your Grade is Satisfactory don't add</font>";
							    echo' <meta content="10;Course_Add.php" http-equiv="refresh" />';
							   }
							   }else{
							    echo"<font size='5px' color='red'>course grade not Exist</font>";
								 echo' <meta content="10;Course_Add.php" http-equiv="refresh" />';
							   }
		            }else{
                    echo"<font size='5px' color='red'>course Code Does not Exist</font>";
					 echo' <meta content="2;Course_Add.php" http-equiv="refresh" />';
                    }		  
		}else{
           echo"<font size='5px' color='red'>Sorry the Course Add date was already passed</font>";
		     echo' <meta content="10;Course_Add.php" http-equiv="refresh" />';
         }
		}
?>
<center><h1 > Add course!</h1>
<script language="javascript">
function formValidation(){
//assign the fields

var dept = document.getElementById('dept');
var sems = document.getElementById('sems');
var year = document.getElementById('year');
var cname = document.getElementById('cname');
var ccode = document.getElementById('ccode');
var credit_hour = document.getElementById('credit_hour');
var credit_hour = document.getElementById('prrqust');
if(isAlphabet(fname, "Enter your firest name in letter only!")){
if(lengthRestriction(fname, 2, 30,"for your fname")){
if(isAlphabet(mname, "Enter your Middel name in letter only!")){
if(lengthRestriction(mname, 2, 30,"for mname!")){
if(isAlphabet(lname, "Enter your last name in letter only!")){
if(lengthRestriction(lna ~dulla^@204~ ~dulla^@204~ if(isAlphanumeric(studid, " Enter You~dulla^@204~ in both number and letter only!")){
~dulla^@204~ riction(studid, 1,2, "for your studid~dulla^@204~ phabet(dept, "Select your department ~dulla^@204~ (lengthRestriction(dept, 2, 30,"for y~dulla^@204~ 
if(isNumeric(sems, "Select your semi~dulla^@204~ (isNumeric(year, "Select your year!")~dulla^@204~ abet(cname, "Enter your course name i~dulla^@204~ !")){
if(lengthRestriction(cname, 2,~dulla^@204~  cname")){
if(isAlphanumeric(ccode, ~dulla^@204~ Course code in both number and letter~dulla^@204~ f(lengthRestriction(ccode, 1,2, "for ~dulla^@204~ {
if(isNumeric(prrqust, "Select your~dulla^@204~ 
	return true;
	}}}}}}}}}}}}}}}}}	~dulla^@204~ ;		
}	
function isAlphabet(elem, he~dulla^@204~ ar alphaExp = /^[a-zA-Z]+$/;
	if(ele~dulla^@204~ (alphaExp)){
		return true;
	}else{~dulla^@204~ perMsg);
		elem.focus();
		return f~dulla^@204~ 

function emailValidator(elem, help~dulla^@204~  emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9~dulla^@204~ -z0-9]{2,4}$/;
	if(elem.value.match(~dulla^@204~ 		return true;
	}else{
		alert(help~dulla^@204~ em.focus();
		return false;
	}
}
~dulla^@204~ meric(elem, helperMsg){
	var numeric~dulla^@204~ /^[0-9]+$/;
	if(elem.value.match(num~dulla^@204~ n)){
		return true;
	}else{
		aler~dulla^@204~ 
		elem.focus();
		return false;
	~dulla^@204~ n lengthRestriction(elem, min, max, h~dulla^@204~ var uInput = elem.value;
	if(uInput.~dulla^@204~  && uInput.length <= max){
		return ~dulla^@204~ {
		alert("Please enter between " +m~dulla^@204~ max+ " characters" +helperMsg);
		el~dulla^@204~ 		return false;
	}
}
function isAl~dulla^@204~ em, helperMsg){
	var alphaExp = /^[0~dulla^@204~ 
	if(elem.value.match(alphaExp)){
	~dulla^@204~ 
	}else{
		alert(helperMsg);
		ele~dulla^@204~ 	return false;
	}
	}
	</script>
<~dulla^@204~ Course_Add.php" method="post"onSubmit~dulla^@204~ dateForm()" name="fr">
<table style=~dulla^@204~ olid #336699;width:450px;height:350px~dulla^@204~ s:15px;box-shadow:1px 10px 10px gray"~dulla^@204~ r">
<tr><td><b>Department:</td><td><~dulla^@204~ dept" id="dept" style="width:246;heig~dulla^@204~ ed>

 <?php 
 $query="select depna~dulla^@204~ tment";
 $result=mysql_query($query)~dulla^@204~ w=mysql_fetch_array($result)){
 $dep~dulla^@204~ pname'];
 echo"<option vallue='$depn~dulla^@204~ </option>";
 
 }
 ?></select></td>~dulla^@204~ <td><b>semester</td><td>
<select nam~dulla^@204~ ems" style="width:246;height:30" requ~dulla^@204~ ion value="1">1st</option>
  <option~dulla^@204~ d</option>
 
</select>
</td></tr>~dulla^@204~ ear</td><td><select name="year"id="ye~dulla^@204~ dth:246;height:30" required>
<option~dulla^@204~ st</option > 
<option value="2">2nd<~dulla^@204~ tion value="3">3rd</option>
  </td>~dulla^@204~ td><b>Course Name:</td><td><input typ~dulla^@204~ ="cname"id="cname" style="width:246;h~dulla^@204~ uired></td></tr>
<tr><td><b>Course c~dulla^@204~ <input type="text" name="ccode"id="cc~dulla^@204~ idth:246;height:30" required></td></t~dulla^@204~ ><b>Pre_Requst:</td><td><input type="~dulla^@204~ rrqust"id="prrqust" style="width:246;~dulla^@204~ quired></td></tr>
 <tr><td> &nbsp;&n~dulla^@204~ sp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbs~dulla^@204~ ;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;~dulla^@204~ 
 <input type="submit" value="Add" na~dulla^@204~ ize="12">&nbsp;&nbsp;&nbsp;&nbsp;<td>~dulla^@204~ reset" value="Reset" size="12"></td><~dulla^@204~                                      ~dulla^@204~                      
</table>
</fo~dulla^@204~ >
</TD>
<td  height=400px width=150~dulla^@204~ E5E4E2" valign=top>
<table   bgcolor~dulla^@204~ rder=0  width="200" height="300" clas~dulla^@204~ align="center">
<tr>
<td valign=top~dulla^@204~ e>

<font color="white"><iframe nam~dulla^@204~ th=280px height=400px src="date.php">~dulla^@204~ /center></h2>
</td>
</tr>
<tr>
<t~dulla^@204~ ite"><img src="d4.JPG" width="200" he~dulla^@204~ ont></h3>
</td>
</tr>
 </table>
<~dulla^@204~ td colspan=3 bgcolor=gray>

<table ~dulla^@204~ " bgcolor=""><tr><td><font face="Time~dulla^@204~ color="white" size="3">
&nbsp;&nbsp;~dulla^@204~ nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&n~dulla^@204~ sp;
Admass Univresity of Collage Dis~dulla^@204~ n Office All Right are Reservd &copy;~dulla^@204~ &nbsp; &nbsp; &nbsp; &nbsp;
</font><~dulla^@204~ ble>
</td>
</tr>
</table>
</body>
</html>
</html>