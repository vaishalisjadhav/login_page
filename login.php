<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login Page</title>
</head>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // You can add your authentication logic here
    // For example, checking against a database or a predefined list of credentials

    if ($username === "vaishali" && $password === "12345") {
        // Successful login
        echo "Login successful!";
    } else {
        // Failed login
        echo "Invalid credentials. Please try again.";
    }
}
?>
</html>