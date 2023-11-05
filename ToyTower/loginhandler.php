<?php
require 'DBconnect.php';
require 'session.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
    // Prepare statement
    $stmt = $conn->prepare("SELECT * FROM Users WHERE Username=? AND UserPass=?");
    $stmt->bind_param("ss", $_POST['username'], $_POST['password']);

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Set session variables
        $_SESSION['user'] = $row['Username'];
        $_SESSION['user_id'] = $row['UserID'];
        $_SESSION['first_name'] = $row['UserFN'];
        $_SESSION['last_name'] = $row['UserLN'];
        $_SESSION['email'] = $row['UserEmail'];
        $_SESSION['phone'] = $row['Phone'];
        $_SESSION['postal_code'] = $row['PostalCode'];


        
        header('Location: hp.php'); // TODO: Need to change to just "/" when uploading it to the remote server
        exit;
    } else {
        $_SESSION['error'] = 'Invalid username / password combo. Please try again.';
        header('Location: /ToyTower/login');
        exit;
    }

    $stmt->close();
}

$conn->close();