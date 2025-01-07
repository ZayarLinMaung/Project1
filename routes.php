<?php
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    $routes = [
        '/' => 'controllers/index.php',
        '/products' => 'controllers/products.php',
        '/product' => 'controllers/product.php',
        '/addproduct' => 'controllers/addproduct.php',
        '/updateproduct' => 'controllers/updateproduct.php',
        '/about' => 'controllers/about.php',
        '/contact' => 'controllers/contact.php',
        '/login' => 'controllers/login.php',
        '/register' => 'controllers/register.php' 
    ];
?>
