<?php
require_once 'database.php';

$db = new Database();

// Fetch all products
$products = $db->fetchAll();

// Include the view to display products
require('views/products.view.php');
?>
