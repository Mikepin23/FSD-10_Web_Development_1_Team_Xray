<?php
require 'DBconnect.php';
require 'session.php';

// checker to see if anything is unput into the username and password boxes
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
    // if they are full checking the db for them
    $stmt = $conn->prepare("SELECT * FROM Users WHERE Username=? AND UserPass=?");
    // binding params
    $stmt->bind_param("ss", $_POST['username'], $_POST['password']);

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Set session variables for all the user's data
        $_SESSION['user'] = $row['Username'];
        $_SESSION['user_id'] = $row['UserID'];
        $_SESSION['first_name'] = $row['UserFN'];
        $_SESSION['last_name'] = $row['UserLN'];
        $_SESSION['email'] = $row['UserEmail'];
        $_SESSION['phone'] = $row['Phone'];
        $_SESSION['postal_code'] = $row['PostalCode'];


        
        header('Location: /ToyTower/');
        exit;
    } else {
        // returning to the same page so the user can try again if their login info is erroneous
        $_SESSION['error'] = 'Invalid username / password combo. Please try again.';
        header('Location: /ToyTower/login');
        exit;
    }

    $stmt->close();
}

$conn->close();