<?php
require 'DBconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['email'])){
        // Prepare statement
        $stmt = $conn->prepare("INSERT INTO email_subscriber (EmailAddress) VALUES (?)");
        $stmt->bind_param("s", $_POST['email']);

        // Execute the statement
        if ($stmt->execute()) {
            // Subscription successful, redirect to the "/ToyTower/" page
            header("Location: /ToyTower/");
            exit();
        } else {
            echo "There was an error. Please try again.";
        }

        $stmt->close();
    }
}

$conn->close();


?>