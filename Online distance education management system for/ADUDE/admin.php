<?php
include("connection.php");
session_start();

if (!isset($_SESSION['User_Id']) || $_SESSION['b'] !== 'admin') {
    echo "<script>
        alert('You Are Not Logged In or Not Authorized!! Please Login as Admin');
        window.location='login.php';
    </script>";
    exit();
}

$mail = $_SESSION['User_Id'];
$account_type = $_SESSION['b'];
$fname = $_SESSION['d'];
$lname = $_SESSION['c'];
$user_id = $_SESSION['a'];

echo "Debug: Welcome to admin.php - User: $fname $lname ($account_type)<br>";
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="3.css">
    <title>Admin Dashboard - Wolkite University</title>
</head>
<body>
    <table align="center" width="1000px" border="0" bgcolor="white">
        <tr>
            <td height="20px" colspan="4">
                <img src="2.jpg" width="120px" height="50"><img src="ima/c12.png" width="1000px" height="50"><img src="2.jpg" width="120px" height="50">
            </td>
        </tr>
        <tr>
            <td height="20px" colspan="3" bgcolor="#737CA1">
                <div id="dropdown">
                    <ul>
                        <li><a href="admin.php"><b>Admin Home</b></a></li>
                        <li><a href="manageuser.php"><b>Manage User Account</b></a></li>
                        <li><a href="create.php"><b>Create User Account</b></a></li>
                        <li><a href="#"><b>View</b></a>
                            <ul>
                                <li><a href="viewactiveuser.php">View Active User</a></li>
                                <li><a href="viewdeactivate.php">View Deactivate User</a></li>
                            </ul>
                        </li>
                        <li><a href="changepassword.php"><b>Change Password</b></a></li>
                        <li><a href="logout.php">Logout (Hi <?php echo htmlspecialchars($account_type); ?>)</a></li>
                    </ul>
                </div>
            </td>
        </tr>
        <tr>
            <td valign="top" bgcolor="white" colspan="2">
                <table>
                    <tr>
                        <td valign="top">
                            <iframe name="frame" width="730px" height="450px" src="slide.html" style="margin-left:100px" align="right"></iframe>
                        </td>
                    </tr>
                </table>
            </td>
            <td width="150px">
                <table border="0" width="150px" height="450px" bgcolor="white">
                    <tr>
                        <td valign="top" bgcolor="white">
                            <h2><center>
                                <font color="black" face="monotype corsiva" size="5">Wolkite University Distance Office works for change!!</font><br>
                                <iframe name="frame" width="300px" height="400px" src="date.php"></iframe>
                            </center></h2>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="3" bgcolor="gray">
                <table align="center">
                    <tr>
                        <td>
                            <font face="Times New Roman" color="white" size="3">
                                Wolkite University Distance Education Office All Rights Reserved © 2010 E.C.
                            </font>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>