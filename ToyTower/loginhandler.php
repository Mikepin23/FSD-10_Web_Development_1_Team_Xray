<?php
session_start();
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(isset($_POST['username']) && isset($_POST['password'])){
      // Prepare statement
      $stmt = $conn->prepare("SELECT * FROM Users WHERE Username=? AND UserPass=?");
      $stmt->bind_param("ss", $_POST['username'], $_POST['password']);

      // Execute the statement
      $stmt->execute();

      // Get the result
      $result = $stmt->get_result();

      if ($result->num_rows > 0) {
          $_SESSION['username'] = $_POST['username'];
          header('Location: /ToyTower/'); // TODO: Need to change to just "/" when uploading it to remote server
          exit;
      } else {
          $_SESSION['error'] = 'Invalid username / password combo. Please try again.';
          header('Location: login.html');
          exit;
      }

      $stmt->close();
  }
}

$conn->close();
?>