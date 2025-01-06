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
    
    
?>