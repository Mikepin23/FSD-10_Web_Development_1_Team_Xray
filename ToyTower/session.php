<!-- session start for calling when needed -->

<?php
session_start();

// Function to check if a user is logged in
function isUserLoggedIn() {
    return isset($_SESSION['user']);
}


?>