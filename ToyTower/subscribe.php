<?php
require 'DBconnect.php';

// If email is input it gets input into the db table email_subscriber
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['email'])){
        // Prepare statement
        $stmt = $conn->prepare("INSERT INTO email_subscriber (EmailAddress) VALUES (?)");
        $stmt->bind_param("s", $_POST['email']);

        // Execute the statement
        if ($stmt->execute()) {
            // redirect to the "/ToyTower/" page
            header("Location: /ToyTower/");
            exit();
        } else {
            // error message
            echo "There was an error. Please try again.";
        }

        $stmt->close();
    }
}

$conn->close();
?>