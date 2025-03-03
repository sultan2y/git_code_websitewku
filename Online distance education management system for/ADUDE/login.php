<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
echo "Debug: Running login.php<br>";

include("connection.php");
echo "Debug: Connected to cde: " . ($conn ? "Yes" : "No") . "<br>";

session_start();

if (!$conn || $conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submitMain'])) {
    $user = trim($_POST['mail']);
    $password = trim($_POST['pass']);
    $pass = base64_encode($password);

    echo "Debug: Username: '" . htmlspecialchars($user) . "'<br>";
    echo "Debug: Password: '" . htmlspecialchars($password) . "'<br>";
    echo "Debug: Encoded Password: '" . $pass . "'<br>";

    $sql = "SELECT * FROM account WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("ss", $user, $pass);
        $stmt->execute();
        $result = $stmt->get_result();

        echo "Debug: Rows found: " . $result->num_rows . "<br>";

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "Debug: User found - User_Id: " . htmlspecialchars($row['User_Id']) . ", Status: " . $row['status'] . "<br>";

            $_SESSION['a'] = $row['User_Id'];
            $_SESSION['d'] = $row['fname'];
            $_SESSION['b'] = $row['accounttype'];
            $_SESSION['c'] = $row['lname'];
            $_SESSION['User_Id'] = $user;

            switch ($row['status']) {
                case 1: header("Location: admin.php"); break;
                case 2: header("Location: registrar.php"); break;
                case 3: header("Location: Coordinator.php"); break;
                case 7: header("Location: Instructor.php"); break;
                case 10: header("Location: DeP-Head.php"); break;
                case 6: header("Location: student.php"); break;
                default:
                    echo "<p class='wrong'>Invalid status. Try again!!</p>";
                    echo '<meta content="3;login.php" http-equiv="refresh" />';
            }
            $stmt->close();
            $conn->close();
            exit();
        } else {
            echo "<p class='wrong'>User Name & Password do not match. Try again!!</p>";
            echo "Debug: Check cde.account for 'username=$user', 'password=$pass'<br>";
            echo '<meta content="3;login.php" http-equiv="refresh" />';
        }
        $stmt->close();
    } else {
        echo "<p class='wrong'>Database error: " . $conn->error . "</p>";
    }
    $conn->close();
}
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="3.css">
    <title>Login - Wolkite University</title>
    <script language="javascript">
        function check() {
            if (document.getElementById("txt_username").value == "") {
                alert("Please Enter User name !!");
                document.getElementById("txt_username").focus();
                return false;
            }
            if (document.getElementById("txt_password").value == "") {
                alert("Please Enter your password !!");
                document.getElementById("txt_password").focus();
                return false;
            }
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
                        <li><a href="login.php">Login</a></li>
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
            <td>
                <form action="login.php" method="post" onsubmit="return check();">
                    <table style="background-color:#E5E4E2; border:1px solid #336699; width:450px; height:190px; border-radius:15px; box-shadow:1px 10px 10px gray" align="center">
                        <tr><td colspan="2" align="center"><img src="aa.jpg" width="250" height="80"></td></tr>
                        <tr><td colspan="2" align="center"><b><h3><font size="5" color="black">First Login</font></h3></b></td></tr>
                        <tr>
                            <td><font size="5" color="black"><b>Username:</b></font></td>
                            <td><input type="text" name="mail" value="" size="20%" id="txt_username" placeholder="Username"></td>
                        </tr>
                        <tr>
                            <td><font size="5" color="black"><b>Password:</b></font></td>
                            <td><input type="password" name="pass" value="" size="20%" id="txt_password" placeholder="Password"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" value="login" name="submitMain"/>
                                <input type="reset" value="Reset"/>
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
            <td width="150px">
                <table border="0" width="100px" height="450" bgcolor="white">
                    <tr>
                        <td valign="top" bgcolor="white">
                            <h2><center>
                                <font color="black" face="monotype corsiva" size="5">Wolkite University Distance Office works for change!!</font><br>
                                <iframe name="frame" width="350px" height="385px" src="date.php"></iframe>
                            </center></h2>
                            <a href="https://www.facebook.com"><img src="f.png" width="60" height="25"></a>
                            <a href="https://www.youtube.com"><img src="y.png" width="60" height="25"></a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="3" bgcolor="gray">
                <table align="center"><tr><td><font face="Times New Roman" color="white" size="3">
                    Wolkite University Distance Education Office All Rights Reserved © 2010 E.C.
                </font></td></tr></table>
            </td>
        </tr>
    </table>
</body>
</html>