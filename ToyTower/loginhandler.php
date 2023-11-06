<?php
require 'DBconnect.php';
require 'session.php';

//Checking if anything was input into the boxes. otherwise it wont work
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
    
    // If they were full they get bound to variables
    $stmt = $conn->prepare("SELECT * FROM Users WHERE Username=? AND UserPass=?");
    $stmt->bind_param("ss", $_POST['username'], $_POST['password']);

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Checking if there is a user in the db with those credentials
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Setting all the user session variables
        $_SESSION['user'] = $row['Username'];
        $_SESSION['user_id'] = $row['UserID'];
        $_SESSION['first_name'] = $row['UserFN'];
        $_SESSION['last_name'] = $row['UserLN'];
        $_SESSION['email'] = $row['UserEmail'];
        $_SESSION['phone'] = $row['Phone'];
        $_SESSION['postal_code'] = $row['PostalCode'];


        // redirecting to the homepage if successful
        header('Location: /ToyTower/');
        exit;
    } else {
        // redirecting here to try again
        $_SESSION['error'] = 'Invalid username / password combo. Please try again.';
        header('Location: /ToyTower/login');
        exit;
    }

    $stmt->close();
}

$conn->close();