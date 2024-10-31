<?php
include 'db.php';

// Capture visitor details
$ipAddress = $_SERVER['REMOTE_ADDR'];
$httpReferer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'Direct';

// Insert visitor data into the database
$sql = "INSERT INTO visitor_logs (ip_address, http_referer) VALUES (:ip_address, :http_referer)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['ip_address' => $ipAddress, 'http_referer' => $httpReferer]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to Our Landing Page!</h1>
        <p>Thank you for visiting. We hope you find what you're looking for!</p>
    </div>
</body>
</html>
