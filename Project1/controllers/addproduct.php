<?php
    require_once __DIR__ . '/../database.php';


    $db = new Database();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = $_POST['title'];
        $desc = $_POST['desc'];

        // Validate inputs
        if (empty($title) || empty($desc)) {
            echo "All fields are required.";
            header('Location: /addproducts');
        }

        // Add the product to the database
        $addition = $db->add($title, $desc);
        
        if ($addition) {
            echo "Added Successfully";
            header('Location: /products');
            exit;
        } else {
            echo "Error adding record.";
            die();
        }
    }

    require_once __DIR__ . '/../views/addproduct.view.php';  
?>
