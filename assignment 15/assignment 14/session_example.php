<?php
session_start();

$username = "Neha";

if (!isset($_SESSION['visited'])) {
    $_SESSION['visited'] = true;
    $message = "Hello $username! It's your first time here.";
} else {
    $message = "Hello $username! You are visiting again.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Example</title>
</head>
<body>
    <h1>Welcome</h1>
    <p><?php echo $message; ?></p>
</body>
</html>