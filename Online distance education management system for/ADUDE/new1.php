<?php
include("connection.php");
?>
<html>
<head>
<link style="text/css" href="3.css" rel="stylesheet">
</head>
<body>
<table align="center" width="1000px" border="" bgcolor="white">
<tr>
  <td height="20px" colspan="4">
    <img src="2.jpg" width="120px" height="50"><img src="ima/c12.png" width="1000px" height="50"><img src="2.jpg" width="120px" height="50">
  </td>
</tr>
<tr>
  <td height="20px" colspan="3" bgcolor="#737CA1">
    <div id="dropdown">
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
          <li><a href="Educational.php">Educational Planning and Management</a></li>
        </ul>	
      </li>
      <li><a href="Contact.php">Contact Us</a></li>
      <li><a href="feedback.php">Feedback</a></li>
      <li><a href="help.php">Help</a></li>
      <li><a href="new1.php">Announcement</a></li>
      <li><a href="login.php">Login</a></li>
    </div>	 
  </td>
</tr>
<tr>
  <td width="150px" bgcolor="#E5E4E2" valign="top">
    <table bgcolor="#E5E4E2" border="0" width="150" height="380" class="menu-bar" align="center">
      <tr><td width="110" height="20"><b><font color="white"></font></b></td></tr>
      <tr><td width="110" height="20"><b><font color="white"><a href="dir.php" style="color:white">Office Director</a></font></b></td></tr>
      <tr><td width="150" height="20"><a href="regulation.php" id="drop"><b>Rule and Regulation</b></a></td></tr>
      <tr><td><img src="b3.gif" width="200" height="150"></td></tr>
    </table>
  </td>
  <td bgcolor="white" valign="top" height="400">
    <!--------body --->
    <br>
    <?php
    $result = mysqli_query($conn, "SELECT dates, types, info FROM userinfo");
    
    if($result) {
      print("<table align='center' bgcolor='white' width='650' border='1'>");
      print("<tr bgcolor='#E5E4E2'>");
      print("<td><b><font>Dates</font></b></td>");
      print("<td><b><font>Information Types</font></b></td>");
      print("<td><b><font>Information</font></b></td>");
      print("</tr>");

      while($row = mysqli_fetch_array($result)) {
        print("<tr>");
        print("<td>" . $row['dates'] . "</td>");
        print("<td>" . $row['types'] . "</td>");
        print("<td>" . $row['info'] . "</td>");
        print("</tr>");
      }
      print("</table>");
    } else {
      echo "Query failed: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    ?>	
  </td>
  <td width="150px">
    <table border="0" width="100px" height="450" bgcolor="white">
      <tr>
        <td valign="top" bgcolor="white">
          <h2><center>
            <font color="black" face="monotype corsiva" size="5">Wolkite University Distance Office works for change!!</font><br>
            <iframe name="frame" width="350px" height="370px" src="date.php"></iframe>
          </center></h2>
          <a href="https://www.facebook.com"><img src="f.png" width="88" height="44"></a>
          <a href="https://www.youtube.com"><img src="y.png" width="88" height="44"></a>
        </td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td colspan="3" bgcolor="gray">
    <table align="center" bgcolor=""><tr><td><font face="Times New Roman" color="white" size="3">
      Wolkite University of College Distance Education Office All Rights Reserved © 2010 E.C. 
    </font></td></tr></table>
  </td>
</tr>
</table>
</body>
</html>