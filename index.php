<?php
// index.php

echo "<h1>Welcome to our ctf challenge</h1>";
echo "<p>Click the link below to view your profile:</p>";
echo "<a href='profile.php?id=" . $_SESSION['user_id'] . "'>View My Profile</a>";
?>
