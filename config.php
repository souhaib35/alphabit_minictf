<?php
// config.php

// Here we mock a simple user data structure (for simplicity, you don't need a real DB).
$users = [
    1 => ['name' => 'souhaib', 'email' => 'souhaib@example.com'],
    2 => ['name' => 'Bob', 'email' => 'bob@example.com'],
    3 => ['name' => 'fodhil', 'email' => 'fodhil@example.com']
];
// Simulate session for logged-in user
session_start();
$_SESSION['user_id'] = 1; // Assume Alice is logged in
?>
