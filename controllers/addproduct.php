<?php
require_once __DIR__ . '/../database.php';
require_once __DIR__ . '/../functions.php';

$db = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $desc = $_POST['desc'] ?? '';
    $uploadDir = __DIR__ . '/../uploads/';
    
    // Ensure upload directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Handle file upload
    $fileName = $_FILES['file']['name'] ?? '';
    $tmpName = $_FILES['file']['tmp_name'] ?? '';
    $error = $_FILES['file']['error'] ?? UPLOAD_ERR_NO_FILE;

    if (empty($title) || empty($desc)) {
        echo "Title and description are required.";
        exit;
    }

    if ($error === UPLOAD_ERR_OK) {
        $targetFile = $uploadDir . basename($fileName);
        if (move_uploaded_file($tmpName, $targetFile)) {
            $path = 'uploads/' . basename($fileName); // Path relative to the project
            try {
                validateItem($title, $path, $desc, $db); // Insert data into the database
                echo "Product added successfully.";
                header("Location: /products");
                exit;
            } catch (Exception $e) {
                echo "Error saving product: " . $e->getMessage();
            }
        } else {
            echo "Error moving uploaded file.";
        }
    } else {
        echo "File upload error: $error";
    }
}
require('views/addproduct.view.php');
?>
