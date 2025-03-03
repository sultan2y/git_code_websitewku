<?php
include("connection.php");
session_start();

if (isset($_POST['submit'])) {
    $firstname = trim($_POST['firstname']);
    $middlename = trim($_POST['middlename']);
    $lastname = trim($_POST['lastname']);
    $birthdate = $_POST['birthdate'];
    $sex = $_POST['sex'];
    $town = trim($_POST['town']);
    $woreda = trim($_POST['woreda']);
    $address = trim($_POST['address']);
    $email = trim($_POST['email']);
    $department = $_POST['department'];
    $phone = trim($_POST['phone']);

    $sql = "INSERT INTO application (firstname, middlename, lastname, birthdate, sex, town, woreda, adress, email, department, phone, status, semister, year) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 0, '1', '1')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssss", $firstname, $middlename, $lastname, $birthdate, $sex, $town, $woreda, $address, $email, $department, $phone);
    if ($stmt->execute()) {
        echo "<script>alert('Application submitted successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }
    $stmt->close();
    $conn->close();
}
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="3.css">
    <title>Apply - Wolkite University</title>
    <script language="javascript">
        function check() {
            if (!document.getElementById("firstname").value) {
                alert("Please Enter First Name !!");
                document.getElementById("firstname").focus();
                return false;
            }
            /* Add more validation as needed */
            return true;
        }
    </script>
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
                <h2>Apply</h2>
                <form method="post" onsubmit="return check();">
                    <label>First Name:</label><input type="text" name="firstname" id="firstname"><br>
                    <label>Middle Name:</label><input type="text" name="middlename"><br>
                    <label>Last Name:</label><input type="text" name="lastname"><br>
                    <label>Birthdate:</label><input type="date" name="birthdate"><br>
                    <label>Sex:</label><select name="sex"><option value="male">Male</option><option value="female">Female</option></select><br>
                    <label>Town:</label><input type="text" name="town"><br>
                    <label>Woreda:</label><input type="text" name="woreda"><br>
                    <label>Address:</label><input type="text" name="address"><br>
                    <label>Email:</label><input type="email" name="email"><br>
                    <label>Department:</label><select name="department">
                        <option value="Accounting">Accounting</option>
                        <option value="Management">Management</option>
                        <!-- Add more as needed -->
                    </select><br>
                    <label>Phone:</label><input type="text" name="phone"><br>
                    <input type="submit" name="submit" value="Submit">
                </form>
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