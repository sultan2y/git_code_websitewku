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
<link href="../quiz.css" rel="stylesheet" type="text/css">
<?php
extract($_POST);

echo "<BR>";

echo "<BR><center><h3 class=head1 style='font-size:40px;font-family:italic;'>Add Exam  </h3></center>";
if(isset($_POST['submit']))
{
extract($_POST);
$sql=mysql_query("insert into mst_test(sub_id ,test_name,total_que) values ('$subid','$testname','$totque')");
echo "<p align=center>Exam Added Successfully.</p>";
echo' <meta content="3; testadd.php" http-equiv="refresh" />';

unset($_POST);
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.testname.value;
if (mt.length<1) {
alert("Please Enter Test Name");
document.form1.testname.focus();
return false;
}
tt=document.form1.totque.value;
if(tt.length<1) {
alert("Please Enter Total Question");
document.form1.totque.value;
return false;
}
return true;
}
</script>
<form name="form1" action="testadd.php" method="post" onSubmit="return check();">
  <table width="58%"  border="0" align="center">
    <tr>
      <td width="49%" height="32"><div align="left"><strong>Enter Course Name </strong></div></td>
      <td width="3%" height="5">  
      <td width="48%" height="32"><select name="subid">
<?php
$rs=mysql_query("Select * from mst_subject order by  sub_name");
	  while($row=mysql_fetch_array($rs))
{
if($row[0]==$subid)
{
echo "<option value='$row[0]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[0]'>$row[1]</option>";
}
}
?>
</select>
        
    <tr>
        <td height="26"><div align="left"><strong> Enter Exam Type </strong></div></td>
        <td>&nbsp;</td>
	  <td><input name="testname" type="text" id="testname"></td>
    </tr>
    <tr>
      <td height="26"><div align="left"><strong>Enter Total Question </strong></div></td>
      <td>&nbsp;</td>
      <td><input name="totque" type="text" id="totque"></td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" value="Add" ><input type="Reset" value="Reset" ></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
