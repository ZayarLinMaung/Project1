<?php
require_once __DIR__ . '/../database.php';

$db = new Database();

// Get the product ID from the URL
$id = $_GET['id'] ?? null;

if (!$id) {
    echo "Product ID is missing.";
    exit;
}

// Fetch the product details
$product = $db->findById($id);
if (!$product) {
    echo "Product not found.";
    exit;
}

// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $desc = $_POST['desc'];

    if (empty($title) || empty($desc)) {
        echo "All fields are required.";
    } else {
        // Update the product in the database
        $update = $db->update($id, $title, $desc);
        if ($update) {
            header('Location: /products');
            exit;
        } else {
            echo "Error updating product.";
        }
    }
}

require_once __DIR__ . '/../views/updateproduct.view.php';
?>
