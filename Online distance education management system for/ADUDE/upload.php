
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
 if(isset($_POST['uploadFile'])){
    $fileName= $_FILES["file"]["name"];
    if($fileName!=""){
   $ext_str="gif,jpg,jpeg,bmb,doc,docx,ppt,pptx,txt,pdf,png";
   $canupload=false;
   $canupload1=false;
   $allowdexstation=explode(',',$ext_str);
  $maxfile_size=10485760;
  $errofileTYpe=" only ".$ext_str." files are allowed to upload";
  echo' <meta content="3;upload.php" http-equiv="refresh" />';

  $errorLargeFileSize="only the file lessthan".$maxfile_size."mb allowed to upload";
    echo' <meta content="3;upload.php" http-equiv="refresh" />';

  $_FILES["file"]['size'];
  $ext=substr($fileName,strrpos($fileName,'.'));
  if($ext==".gif"||$ext==".jpg"||$ext==".jpeg"||$ext==".bmb"||$ext==".pptx"||$ext==".ppt"||$ext==".pdf"||$ext==".docx"||$ext==".doc"||$ext==".txt"||$ext==".png")
    {
   $canupload=true;
   $errofileTYpe="";
     }
    if($_FILES["file"]['size']<=$maxfile_size){
    $canupload1=true;
	$errorLargeFileSize="";
     }
	//our work
         if($canupload&&$canupload1){
             $fileExtension=substr($fileName,strrpos($fileName, '.'));
			 $date=date('Ymdhis');
			 $destination="module/";   
			   $coursename=$_POST['coursename'];	
				//$modulenum=$_POST['modulenum'];
			    $dept=$_POST['department'];	 
				$term=$_POST['term'];
				$year=$_POST['year'];			
				$tmpName=$_FILES['file']['tmp_name'];
				$fileSize=$_FILES['file']['size'];
			    $fileType=$_FILES['file']['type'];
				$newFileName=$coursename;
				move_uploaded_file($_FILES["file"]["tmp_name"],$destination.$newFileName);
				mysql_select_db("cde", $conn);
		 $in= "INSERT INTO module values('$_SESSION[a]','$coursename','','$dept','$term','$year','$newFileName','$tmpName','$fileSize','$fileType')";
			if(mysql_query($in,$conn)){
			$result="Sucessfully Uploaded";
			  echo' <meta content="3;upload.php" http-equiv="refresh" />';

			}
			else{
			echo "not inserted";
			}
			mysql_close($conn);
			      }//end of $canupload
				  }//file not empty
				  else{
				   $emptyfile="please chosse the file first";
				     echo' <meta content="3;upload.php" http-equiv="refresh" />';

				  }
				  }//end is set upload file
?>

<html>
<head>
<link style="text/css" href="3.css" rel="stylesheet">
<script type="text/javascript">
function check()
{
 if (document.myform.elements["file"].value == "")
          {
             alert("please select file!");
             document.myform.elements["file"].focus();
             return false;  
         }

      var ccode = document.getElementById('ccode');
	  var number = document.getElementById('number');
	 if(isAlphanumeric(ccode,"please fill course code")){
		 
	 	 if(isNumeric(number,"please fill assignment number")){			  
			  if(madeSelection(assignment,"please choose assignmenttype"))
			  {
			 
			 return true;
	 }}}
						
	return false;
}
	function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z /]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
	
  function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9,-,/]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}
	else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function madeSelection(elem, helperMsg)
{
	if(elem.value =="..select..")
	{
	alert(helperMsg);
		elem.focus();
		return false;
		}
	else{
		return true;
	}
	
}
</script>
<script type="text/javascript">
function validate(form)
{
var file = form.file.value;
var coursename = form.coursename.value;
var modulenum = form.modulenum.value;
var dept = form.dept.value;
var term = form.term.value;
var year=form.year.value;
  if (file.length ==0) {
  alert("please browse a file");
  return false;
  }

if (coursename.length ==0) {
  alert("please enter course name");
  return false;
  }
if (modulename.length ==0) {
  alert("please enter module name");
  return false;
  }
if (modulenum.length ==0) {
  alert("please enter your modulenum");
  return false;
  }
if (dept.length ==0) {
  alert("please enter your department");
  return false;
  }
if (term.length ==0) {
  alert("please enter your term to upload module");
  return false;
}
if (year.length ==0) {
  alert("please enter year to upload module");
  return false;
  }
 return true;
}
</script>
</head>
<body>
<table align=center width=1000px height= border="6">
<tr>
<td height=20px  colspan=4>
<img src="2.jpg" width="140px" height="50" ><img src="ima/c12.png" width="1000px" height="50" ><img src="2.jpg" width="140px" height="50" >
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
<li><a href="notice.php" link="white" >Post notice </a></li>
<li><a href="new2.php" link="white" >Delet Announcment</a></li>
		</ul>
		</li>
				<li><a href="#">View</a>
      <ul>
<!--<li><a href="rep11.php" >View Report</a></li>-->
<li><a href="viewcomment.php" >View Comments</a></li>
<li><a href="assigncourse.php" >View Assigned course</a></li>
<!---<li><a href="assign.php" link="white" >Assign Insturacor</a></li>-->

</ul>
</li>
<li><a href="changepassword5.php" >Change Password</a></li>   
<li><a href="logout.php" id="login">Logout (<?php echo"Hi&nbsp;&nbsp;&nbsp;";?><?php echo $_SESSION['b'];?>)</a></li>	
    </div>
</td>
</tr>
<td  valign="top" bgcolor="white">

<h2 align="center"><b><font color="blue">Upload File</font></b></h2>
<!--body  -->
<div style="position:absolute; widtht:230px;color:white; background-color:green; text-align:center; font-size:20px;">
<?php echo @$errorLargeFileSize;
echo @$errofileTYpe;
echo @$emptyfile;
echo @$result;
?>
</div>
<form action="upload.php" method="post" enctype="multipart/form-data">
<table bgcolor="white"  style="border:1px solid #336699;width:460px;height:250px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center"><tr><td>
<tr><td><b>Filename:</b></td><td><input type="file" name="file" id="file" size=20mb style="width:245;height:30;" required /></td></tr>
 <tr><td><b>Module name</b></td><td><input type="text" name="coursename" id="coursename" style="width:245;height:30;" required>
</td></tr>
<tr><td><b>Deprtment:<b></td><td><select name="department"id="department" style="width:245;height:30;" required>
<option > </option>
<option>Accounting</option>
<option>Management</option>
<option>Management Markating</option>
<option>Economics</option>
<option>Englishe</option>
<option>Mathimatices</option>
<option>Educational planing</option>
</select></td></tr>
<tr><td><b>Semister:</b></td><td><select name="term"id="term" style="width:245;height:30;" required/>
<option > </option>
<option value="1"> 1st Simester</option>
<option value="2"> 2nd Simeter</option>
</select></td></tr>
<tr><td><b>Batch:</td><td><select name="year"id="year" style="width:245;height:30;" required/>
<option > </option>
<option value="1"> 1st Year</option>
<option value="2"> 2nd Year</option>
<option value="3"> 3rd Year</option>
</select></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="uploadFile" value="Upload" />&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset" /></td></tr>
</table>
</form>
</td>
<td width=150px>
<table border=0 width=150px height="100" bgcolor=white>
<tr>
<td valign=top bgcolor=white>
<h2><center>
<font color=" ~dulla^@204~ ~dulla^@204~ va" size="5">Admass university  dista~dulla^@204~ orks for change!!</font><br>
<font c~dulla^@204~ <a href="debre.php"><iframe name="fra~dulla^@204~ px height=405px src="date.php"></ifra~dulla^@204~ r></h2>
</td>
</tr>

</table>
</~dulla^@204~ 
<tr>
<td colspan=3 bgcolor=gray>
~dulla^@204~ ="center" bgcolor=""><tr><td><font fa~dulla^@204~  Roman" color="white" size="3">
&nbs~dulla^@204~ ;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;~dulla^@204~ nbsp;&nbsp;
Admass Univresity of Col~dulla^@204~  Eduction Office All Right are Reserv~dulla^@204~  E.C. 
&nbsp; &nbsp; &nbsp; &nbsp;
~dulla^@204~ /tr></table>
</td>
</tr>
</table>
</body>
</html>
</html>