<?php
session_start();         // Start the session
session_unset();         // Clear all session variables
session_destroy();       // Destroy the session

// Redirect to login page
header("Location: login-page.php");
exit();
?>