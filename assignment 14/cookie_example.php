<?php
$username = "Neha";
$cookie_name = "user_visit";

if (!isset($_COOKIE[$cookie_name])) {
    setcookie($cookie_name, "1", time() + 120); // 2 minute cookie
    $message = "Hello $username! It's your first time here.";
} else {
    $message = "Hello $username! You are visiting again.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Example</title>
</head>
<body>
    <h1>Welcome</h1>
    <p><?php echo $message; ?></p>
</body>
</html>