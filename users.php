<?php
// users.php

include('config.php');

echo "<h1>Users List</h1>";
foreach ($users as $id => $user) {
    echo "<p><a href='profile.php?id=$id'>{$user['name']}</a></p>";
}
?>
