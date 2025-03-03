<?php
$con=mysqli_connect("localhost","root","","bluenilesims");?>
<form method="post" action="">
Student ID<select name='st'>
<?php
$sid=mysqli_query($con,"select STUDENT_ID from student_result");
while($stid=mysqli_fetch_array($sid))
{
?>
<option><?php echo $stid['STUDENT_ID']?></option>
<?php }
?>
</select>
Year<select name="yea">
<?php
for ($i=1;$i<=6;$i++)
{
?>
<option><?php echo $i?></option>
<?php }?>
</select>
Semester<select name="sem">
<?php
for ($i=1;$i<=2;$i++)
{
?>
<option><?php echo $i?></option>
<?php }?>
</select>
<input type='submit' name='view' value='view'>
</form>

<?php
if(isset($_POST['view']))
{
	$studentid=$_POST['st'];
	$semister=$_POST['sem'];
	$year=$_POST['yea'];
$x=mysqli_query($con,"select *from student_result,student where student_result.STUDENT_ID='$studentid'
 and student_result.SEMESTER='$semister' and 
 student_result.YEAR='$year' and student_result.STUDENT_ID=student.STUDENT_ID order by student_result.YEAR ASC");
$studentinfo=mysqli_query($con,"select *from student where STUDENT_ID='$studentid'");
$info=mysqli_fetch_array($studentinfo);
if(mysqli_num_rows($x) > 0)
{
	?>
	<div align="right">
	<input type="button" name="" value="Generate Report" onclick="Clickheretoprint()">
</div>
<div align="center" style="background: white; border: 1px solid black;" id="print_content">
<br><br>
<label style="color: black; font-size: 24px;"><img src="../arma.jpg" width="180" height="70">Blue Nile College Student Grade Report</label>
	<?php
echo"<table  cellpadding='3'>
<tr style='height:30;background:white;color:Black'><td colspan='7'> Student Name</td>
<td colspan='4'>".
"&nbsp;".$info['FIRST_NAME']."&nbsp;".$info['MIDDLE_NAME']."&nbsp;".$info['LAST_NAME']."</td>
</tr>
<tr style='height:30;background:white;color:Black'><td colspan='7'>Student ID</td><td colspan='4'>$studentid</td></tr>
<tr style='height:30;background:white;color:Black'><td colspan='7'>Department </td><td colspan='4'>".$info['DEPARTMENT']."</td></tr>
<tr style='height:30;background:white;color:Black'><td colspan='7'>Year</td><td colspan='4'>$year</td></tr>
<tr style='height:30;background:white;color:Black'><td colspan='7'>Semester</td><td colspan='4'>$semister</td></tr>
<tr><td colspan='12'></td></tr>
<tr bgcolor='#f5f5f5' style='font-family:cambria;font-weight:bold'><th>coursecode</th><th>course title</th>
<th>credit</th><th>year</th><th>semester</th><th>Test 1</th>
<th>Test 2</th> <th>ASS/Project </th> <th>Quiz</th><th>Final</th><th>Total</th><th>grade</th></tr>";
$sumcredit=0;//to sum up total credit hour assign initial sum grade=0;
$credittimeslettergrade=0;
while($row=mysqli_fetch_array($x))
{
$sumcredit+=$row['CREDIT_HOUR'];
$grade=$row['TOTAL'];
$num="";
$gpa="";
if($grade>=90)
{
$num="A+";
$gpa=4;
}
else 
if($grade>=85)
{
$num="A";
$gpa=4;
}
else 
if($grade>=80)
{
$num="A-";
$gpa=3.75;
}
else 
if($grade>=75)
{
$num="B+";
$gpa=3.5;
}
else 
if($grade>=70)
{
$num="B";
$gpa=3;
}
else
 if($grade>=65)
{
$num="B-";
$gpa=2.75;
}
else 
if($grade>=60)
{
$num="C+";
$gpa=2.5;
}
else 
if($grade>=50)
{
$num="C";
$gpa=2;
}
else 
if($grade>=45)
{
$num="C-";
$gpa=1.5;
}
else 
if($grade>=40)
{
$num="D";
$gpa=1;
}
else 
if($grade>=35)
{
$num="Fx";
$gpa=0;
}
else
{
$num="F";
$gpa=0;
}
$credittimeslettergrade+=($row['CREDIT_HOUR']*$gpa);
echo "<tr><td>".$row['COURSE_CODE']."</td>"."<td>".$row['COURSE_TITLE']."</td>"."<td>".$row['CREDIT_HOUR'].
"</td>"."<td>".$row['YEAR']."</td>"."<td>".$row['SEMESTER']."</td>".
"<td>".$row['TEST_ONE']."</td>".
"<td>".$row['TEST_ONE']."</td>".
"<td>".$row['ASS_OR_PROJ']."</td>".
"<td>".$row['QUIZ']."</td>".
"<td>".$row['FINAL']."</td>".
"<td>".$row['TOTAL']."</td>".
"<td>".$num."</td></tr>";
}
$total=$credittimeslettergrade/$sumcredit;
include '../student/student_class.php';
$newclass=new student();
$previousgpa=$newclass->privous_grade($studentid,$semister,$year);
$allcommulative_gpa=$newclass->commulative_gpa($studentid);
echo "<tr style='font-size:14;font-family:cambria;color:black;background:#f5f5f5;border:none;'>
<td colspan='8'></td><td colspan='2'>PCGPA</td><td colspan='2'>".$previousgpa."</td></tr>";
echo "<tr style='font-size:14;font-family:cambria;color:black;background:#f5f5f5;border:none;'>
<td colspan='8'></td><td colspan='2'>SGPA</td><td colspan=2>".$total."</td></tr>";
echo "<tr style='font-size:14;font-family:cambria;color:black;background:#f5f5f5;border:none;'>
<td colspan='8'></td><td colspan='2'>CGPA</td><td colspan=2>".$allcommulative_gpa."</td></tr>";
echo "</table>";
?>
<br><br>
<div align="right" style="font-size: 20px;">
	<div>Generate By: _____________</div>
	<div>approved By: _____________</div>
	<div><br>
	<?php $date=date("d-m-y"); echo "generated date".$date;?></div>
</div>
<br><br><br><br><br>
</div>
<?php	
?>
<script language="javascript">
	function Clickheretoprint()
		{ 
		    var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
		      disp_setting+="scrollbars=yes,width=1000, height=400, left=300, top=250"; 
		    var content_vlue = document.getElementById("print_content").innerHTML; 
		  
		    var docprint=window.open("","",disp_setting); 
		    docprint.document.open(); 
		    docprint.document.write('<html><head><title>Student Information System</title>'); 
		    docprint.document.write('</head><body onLoad="self.print()" style="width: 680px; font-size:12px; font-family:times new romans;">');          
		    docprint.document.write(content_vlue);          
		    docprint.document.write('</body></html>'); 
		    docprint.document.close(); 
		    docprint.focus(); 
		}
</script>
<?php
}
else{
	echo '<script type="text/javascript">alert("empty data")</script>'; 
}
}
?>