<?php
// profile.php

include('config.php');

// Get user ID from URL parameter
$userId = $_GET['id'];

// Fetch user data (normally, we'd get this from a database)
if (isset($users[$userId])) {
    $user = $users[$userId];
    echo "<h1>Profile of " . $user['name'] . "</h1>";
    echo "Name: " . $user['name'] . "<br>";
    echo "Email: " . $user['email'] . "<br>";

    // Simulate a "flag" hidden in another user's profile
    if ($userId == 2) {
        echo "<p><strong>Flag: FLAG{IDOR_is_easily_exploitable}</strong></p>";
    }
} else {
    echo "User not found.";
}
?>
