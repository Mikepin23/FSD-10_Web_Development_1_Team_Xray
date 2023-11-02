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
    if(isset($_POST['email'])){
        // Prepare statement
        $stmt = $conn->prepare("INSERT INTO email_subscriber (EmailAddress) VALUES (?)");
        $stmt->bind_param("s", $_POST['email']);

        // Execute the statement
        if ($stmt->execute()) {
            echo "You have been subscribed!";
        } else {
            echo "There was an error. Please try again.";
        }

        $stmt->close();
    }
}

$conn->close();
?>