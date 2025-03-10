<?php
include("connection.php");
session_start();

if (!isset($_SESSION['User_Id']) || $_SESSION['b'] !== 'admin') {
    echo "<script>alert('Please login as Admin'); window.location='login.php';</script>";
    exit();
}

if (isset($_POST['submit'])) {
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $user_id = trim($_POST['User_Id']);
    $phone = trim($_POST['phone']);
    $username = trim($_POST['username']);
    $password = base64_encode(trim($_POST['password']));
    $accounttype = $_POST['accounttype'];
    $status = (int)$_POST['status'];
    $isActive = isset($_POST['isActive']) ? 1 : 0;

    $sql = "INSERT INTO account (fname, lname, User_Id, phone, username, password, accounttype, status, isActive) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssii", $fname, $lname, $user_id, $phone, $username, $password, $accounttype, $status, $isActive);
    if ($stmt->execute()) {
        echo "<script>alert('User created successfully!');</script>";
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
    <title>Create User - Wolkite University</title>
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
                <h2>Create User Account</h2>
                <form method="post">
                    <label>First Name:</label><input type="text" name="fname"><br>
                    <label>Last Name:</label><input type="text" name="lname"><br>
                    <label>User ID:</label><input type="text" name="User_Id"><br>
                    <label>Phone:</label><input type="text" name="phone"><br>
                    <label>Username:</label><input type="text" name="username"><br>
                    <label>Password:</label><input type="password" name="password"><br>
                    <label>Account Type:</label><select name="accounttype">
                        <option value="admin">Admin</option>
                        <option value="Student">Student</option>
                        <option value="Registrar">Registrar</option>
                        <option value="Coordnator">Coordinator</option>
                        <option value="Instructor">Instructor</option>
                        <option value="DeP-Head">Department Head</option>
                    </select><br>
                    <label>Status:</label><select name="status">
                        <option value="1">1 (Admin)</option>
                        <option value="2">2 (Registrar)</option>
                        <option value="3">3 (Coordinator)</option>
                        <option value="6">6 (Student)</option>
                        <option value="7">7 (Instructor)</option>
                        <option value="10">10 (Dept Head)</option>
                    </select><br>
                    <label>Active:</label><input type="checkbox" name="isActive" value="1" checked><br>
                    <input type="submit" name="submit" value="Create">
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