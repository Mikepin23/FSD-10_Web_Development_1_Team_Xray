<?php
require 'DBconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
    // Prepare statement
    $stmt = $conn->prepare("SELECT * FROM Users WHERE Username=? AND UserPass=?");
    $stmt->bind_param("ss", $_POST['username'], $_POST['password']);

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Successful login: Set the session
        session_start();
        $_SESSION['user'] = $_POST['username'];
        header('Location: /ToyTower/'); // TODO: Need to change to just "/" when uploading it to the remote server
        exit;
    } else {
        $_SESSION['error'] = 'Invalid username / password combo. Please try again.';
        header('Location: /ToyTower/login');
        exit;
    }

    $stmt->close();
}

$conn->close();