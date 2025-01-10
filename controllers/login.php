<?php
    require_once __DIR__ . '/../database.php';
    $db = new Database();
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $email = $_POST['email'];
        $password = $_POST['password'];
        if(empty($email) || empty($password)){
            echo "Please enter all required information";
            exit;
        }
       $user = $db->fetchUser($email);
       if($user && password_verify($password, $user["password"])){
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['name'];
            echo "Login successful";
            $_SESSION['logged_in'] = true;
            header("Location: /");
            exit;
    }
    else{
            echo "Invalid email or password";
    }
}
    require('views/login.view.php');
?>