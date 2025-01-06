<?php
     require_once __DIR__ . '/../database.php';
    $db = new Database();
    
    // Check if 'id' is passed in the query string (GET)
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])  && $_POST['action'] == 'delete'){
        $id = $_POST['id'];
        $deletion = $db->delete($id);
        if($deletion) {
            header('Location: /products');
        }
    }
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        // Fetch product by id
        $product = $db->findById($id);
        
        if (!$product) {
            echo "Product not found.";
            exit;
        }
        
    } else {
        echo "Product ID is missing.";
        exit;
    }

    require ('views/product.view.php');
?>
