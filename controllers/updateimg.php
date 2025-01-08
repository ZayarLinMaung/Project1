<?php
require_once __DIR__ . '/../database.php';

echo "Form submitted.<br>"; 

$db = new Database();

// Get the product ID from the URL
$id = $_GET['id'] ?? null;

if (!$id) {
    echo "Product ID is missing.";
    exit;
}

// Fetch the product details (optional validation)
$product = $db->findById($id);
if (!$product) {
    echo "Product not found.";
    exit;
}

// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Define the upload directory
    $uploadDir = __DIR__ . '/../uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true); // Create the uploads directory if it doesn't exist
    }

    // Access uploaded file details
    $fileName = $_FILES['image']['name'] ?? '';
    $tmpName = $_FILES['image']['tmp_name'] ?? '';
    $error = $_FILES['image']['error'] ?? UPLOAD_ERR_NO_FILE;

    // Validate file upload
    if ($error === UPLOAD_ERR_OK) {
        $targetFile = $uploadDir . basename($fileName);

        // Move the uploaded file
        if (move_uploaded_file($tmpName, $targetFile)) {
            $path = 'uploads/' . basename($fileName); // Path relative to the project root
            $db->updateImg($pid,$path);
            try {
                // Update the database
                if ($db->updateImg($id, $path)) {
                    echo "Product updated successfully.<br>";
                    header("Location: /products");
                    exit;
                } else {
                    echo "Failed to update the database.<br>";
                }
            } catch (Exception $e) {
                echo "Error saving product: " . $e->getMessage() . "<br>";
            }
        } else {
            echo "Error moving the uploaded file.<br>";
        }
    } else {
        echo "File upload error: $error<br>";
    }
}

// Load the view only if not redirected
require_once __DIR__ . '/../views/updateimg.view.php';
?>
