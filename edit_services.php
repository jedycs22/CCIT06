<?php
session_start();
include 'db.php'; // Include database connection

// Fetch service details for editing
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM services WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $service = $result->fetch_assoc();

    if (!$service) {
        $_SESSION['message'] = "Service not found.";
        header("Location: services.php");
        exit();
    }
}

// Handle the form submission for updating the service
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $imageName = $service['image']; // Keep the old image by default

    // Check if a new image is uploaded
    if (!empty($_FILES['image']['name'])) {
        $targetDir = "uploads/";
        $newImageName = basename($_FILES['image']['name']);
        $targetFile = $targetDir . $newImageName;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $uploadOk = 1;

        // Validate the uploaded image
        if (!empty($_FILES['image']['tmp_name'])) {
            $check = getimagesize($_FILES['image']['tmp_name']);
            if ($check === false) {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        if ($_FILES['image']['size'] > 2000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        if (!in_array($imageFileType, ["jpg", "jpeg", "png", "gif"])) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // If image validation passes, upload the new image and delete the old one
        if ($uploadOk === 1) {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
                // Delete the old image
                $oldImagePath = "uploads/" . $service['image'];
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
                $imageName = $newImageName; // Update the image name
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    // Update the service record in the database
    $query = "UPDATE services SET title = ?, description = ?, image = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssi", $title, $description, $imageName, $id);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Service updated successfully!";
        header("Location: services.php");
        exit();
    } else {
        echo "Error updating service: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Service</title>
    <!-- Add Bootstrap 5.2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <h1>Edit Service</h1>
        <a href="services.php" class="btn btn-primary mb-3">Back to Services</a>

        <!-- Edit Service Form -->
        <form method="POST" action="edit_services.php?id=<?= $service['id'] ?>" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $service['id'] ?>">
            
            <div class="mb-3">
                <label for="title" class="form-label">Service Title:</label>
                <input type="text" name="title" id="title" class="form-control" value="<?= $service['title'] ?>" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea name="description" id="description" class="form-control" required><?= $service['description'] ?></textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Current Image:</label><br>
                <img src="uploads/<?= $service['image'] ?>" alt="Image" width="100">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Upload New Image (optional):</label>
                <input type="file" name="image" id="image" class="form-control" accept="image/*">
            </div>

            <button type="submit" name="update" class="btn btn-success">Update Service</button>
        </form>
    </div>
</body>

</html>
