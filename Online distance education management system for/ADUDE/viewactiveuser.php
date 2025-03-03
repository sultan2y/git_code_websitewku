<?php
include("connection.php");
session_start();

if (!isset($_SESSION['User_Id']) || $_SESSION['b'] !== 'admin') {
    echo "<script>alert('Please login as Admin'); window.location='login.php';</script>";
    exit();
}

$sql = "SELECT * FROM account WHERE isActive = 1";
$result = $conn->query($sql);
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="3.css">
    <title>View Active Users - Wolkite University</title>
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
                        <li><a href="logout.php">Logout (Hi <?php echo htmlspecialchars($_SESSION['b']); ?>)</a></li>
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
                <h2>Active Users</h2>
                <table border="1">
                    <tr><th>User ID</th><th>First Name</th><th>Last Name</th><th>Username</th><th>Account Type</th><th>Status</th></tr>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['User_Id']); ?></td>
                            <td><?php echo htmlspecialchars($row['fname']); ?></td>
                            <td><?php echo htmlspecialchars($row['lname']); ?></td>
                            <td><?php echo htmlspecialchars($row['username']); ?></td>
                            <td><?php echo htmlspecialchars($row['accounttype']); ?></td>
                            <td><?php echo $row['status']; ?></td>
                        </tr>
                    <?php endwhile; ?>
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
<?php $conn->close(); ?>