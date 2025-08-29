<?php
// Start session if you want to store user info later
session_start();

// Example: set a username (could come from login or database)
$username = "Guest";
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            color: #333;
            text-align: center;
            padding: 50px;
        }
        .container {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            display: inline-block;
        }
        h1 {
            color: #0077b6;
        }
        p {
            font-size: 18px;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #0077b6;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
        }
        .btn:hover {
            background: #023e8a;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, <?php echo htmlspecialchars($username); ?> 🎉</h1>
        <p>We’re glad to have you here. This is your PHP welcome page!</p>
        <a class="btn" href="about.php">Learn More</a>
    </div>
</body>
</html>