<?php
$servername = "localhost";
$port = "3304";
$username = "fsduser";
$password = "myDBpw";
$dbname = "fsd10_xray";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>