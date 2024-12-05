<?php
session_start();
include 'db.php'; // Include database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    $id = $_POST['id'];

    // Fetch the image file associated with the service
    $query = "SELECT image FROM services WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row) {
        $imagePath = "uploads/" . $row['image'];

        // Delete the record from the database
        $deleteQuery = "DELETE FROM services WHERE id = ?";
        $deleteStmt = $conn->prepare($deleteQuery);
        $deleteStmt->bind_param("i", $id);

        if ($deleteStmt->execute()) {
            // Delete the image file if it exists
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $_SESSION['message'] = "Service deleted successfully!";
        } else {
            $_SESSION['message'] = "Error deleting service: " . $conn->error;
        }
    } else {
        $_SESSION['message'] = "Service not found.";
    }

    header("Location: services.php"); // Redirect back to the services page
    exit();
}
?>
