<?php
include("connection.php");
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Wel come to Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
//extract($_POST);
//include("header.php");
//include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from account where User_Id='$user_id' and pass='$password'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION['User_Id']=$user_id;
	}
}
if (isset($_SESSION['User_Id']))
{
echo "<h1 class='style8' align=center>Wel come to Online Exam</h1>";
		echo '<table width="28%"  border="0" align="center">
  <tr>
    <td width="7%" height="65" valign="bottom"><img src="1.jpg" width="50" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="style4">Subject for Exam </a></td>
  </tr>
  <tr>
    <td height="58" valign="bottom"><img src="2.JPG" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom"> <a href="result.php" class="style4">Result </a></td>
  </tr>
</table>';
   
		exit;
}
?>
</body>
</html>