<?php
    function dd($value){
        var_dump($value);
    }

    function uri( $value ){
        return $_SERVER['REQUEST_URI']===$value;
    }
    function abort( $status ){
        http_response_code($status);
        require('views/404.php');
        die();
    }
    function route($request,$routes){
        if(array_key_exists($request,$routes)){
        require $routes[$request];
        }
        else{
            abort(404);
        }
    }
    function validateItem($title, $path, $desc, $db) {
        try {
            $conn = $db->getConn();
            $stmt = $conn->prepare("INSERT INTO products (title, image_path, `desc`) VALUES (:title, :path, :desc)");
            $stmt->bindParam(":title", $title);
            $stmt->bindParam(":path", $path);
            $stmt->bindParam(":desc", $desc);
            if ($stmt->execute()) {
                echo "Product added successfully.";
                header('Location: /products');
                exit;
            } else {
                echo "Error saving product to database.";
            }
        } catch (PDOException $e) {
            echo "Database error: " . $e->getMessage();
        }
    }
    
    
?>