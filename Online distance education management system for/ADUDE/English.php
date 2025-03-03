<?php
session_start();
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="3.css">
    <title>English - Wolkite University</title>
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
                        <li><a href="register.php">Apply</a></li>
                        <li><a href="#">Departments</a>
                            <ul>
                                <li><a href="Accounting.php">Accounting</a></li>
                                <li><a href="Managment.php">Management</a></li>
                                <li><a href="Marketing.php">Marketing Management</a></li>
                                <li><a href="Economics.php">Economics</a></li>
                                <li><a href="English.php">English</a></li>
                                <li><a href="Mathematics.php">Mathematics</a></li>
                                <li><a href="Educational.php">Educational Planning Management</a></li>
                            </ul>
                        </li>
                        <li><a href="Contact.php">Contact Us</a></li>
                        <li><a href="feedback.php">Feedback</a></li>
                        <li><a href="help.php">Help</a></li>
                        <li><a href="new1.php">Announcement</a></li>
                        <?php if (isset($_SESSION['User_Id'])): ?>
                            <li><a href="logout.php">Logout (<?php echo htmlspecialchars($_SESSION['b']); ?>)</a></li>
                        <?php else: ?>
                            <li><a href="login.php">Login</a></li>
                        <?php endif; ?>
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
                <h2>English Department</h2>
                <p>Explore our English programs offered through distance education.</p>
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