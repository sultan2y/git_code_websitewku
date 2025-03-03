<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "wku_distance"; // Replace "wku_distance" with your actual database name

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}<?php
include("connection.php");
session_start();

if (!isset($_SESSION['User_Id']) || $_SESSION['b'] !== 'Coordnator') {
    echo "<script>alert('Please login as Coordinator'); window.location='login.php';</script>";
    exit();
}
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="3.css">
    <title>Coordinator Dashboard - Wolkite University</title>
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="About.php">About Us</a></li>
                        <li><a href="Coordinator.php">Coordinator Dashboard</a></li>
                        <li><a href="logout.php">Logout (<?php echo htmlspecialchars($_SESSION['b']); ?>)</a></li>
                    </ul>
                </div>
            </td>
        </tr>
        <tr>
            <td height="250px" width="150px" bgcolor="#E5E4E2" valign="top">
                <table bgcolor="#E5E4E2" border="0" width="150" height="400" class="menu-bar" align="center">
                    <tr><td width="110" height="20"><b><font color="white"></font></b></td></tr>
                    <tr><td width="110" height="20"><b><font color="white"><a href="dir.php" style="color:white">Office Director</a></font></b></td></tr>
                    <tr><td width="150" height="20"><a href="regulation.php" id="drop"><b>Rule and Regulation</b></a></td></tr>
                    <tr><td><img src="b3.gif" width="200" height="150"></td></tr>
                </table>
            </td>
            <td colspan="2">
                <h2>Coordinator Dashboard</h2>
                <p>Welcome, <?php echo htmlspecialchars($_SESSION['d'] . " " . $_SESSION['c']); ?>!</p>
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
?>