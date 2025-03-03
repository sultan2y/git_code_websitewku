<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "wku_distance"; // Replace "wku_distance" with your actual database name

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>