<?php
session_start(); // Start the session

// Check if the user is logged in
if(isset($_SESSION["Id"])) {
    // If the user is logged in, destroy the session and unset the session variables
    session_unset();
    session_destroy();
    
    // Redirect the user to the login page
    header("Location: index.php");
    exit;
} else {
    // If the user is not logged in, redirect the user to the login page
    header("Location: index.php");
    exit;
}
?>
