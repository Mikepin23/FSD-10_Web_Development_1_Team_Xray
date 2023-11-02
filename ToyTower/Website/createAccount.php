<?php
$servername = "localhost";
$username = "fsduser";
$password = "myDBpw";
$dbname = "fsd10_xray";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if POST variables are set
    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['postalcode'])){
        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO Users (Username, UserPass, UserFN, UserLN, UserEmail, Phone, PostalCode) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $_POST['username'], $_POST['password'], $_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['phone'], $_POST['postalcode']);

        // Execute the statement
        $stmt->execute();

        echo "New record created successfully";

        $stmt->close();

        header("Location: homepage.html");
        exit;
    }
}

$conn->close();
?>
