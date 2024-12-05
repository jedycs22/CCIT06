<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header('Location: login.php'); // Redirect to login if not logged in
    exit();
}


// Logout functionality
if (isset($_GET['logout'])) {
    session_unset(); // Unset all session variables
    session_destroy(); // Destroy the session
    header('Location: login.php'); // Redirect to login page after logout
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>Welcome!</h1>

        <!-- Dashboard Actions -->
        <div class="mt-4">
            <a href="manage_services.php" class="btn btn-primary btn-lg mb-3">Manage Services</a>
            <a href="manage_reviews.php" class="btn btn-secondary btn-lg mb-3">Manage Reviews</a>
            <a href="?logout=true" class="btn btn-danger btn-lg mb-3">Logout</a>
        </div>
    </div>
</body>



</html>


