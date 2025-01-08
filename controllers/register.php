<?php
    require_once __DIR__ . '/../database.php';
    $db = new Database();
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confpassword = $_POST['confpassword'];
        if(empty($username) || empty($email) || empty($password) || empty($confpassword)){
            echo "Please enter all required information";
            exit;
        }
        else if($password!==$confpassword){
            echo "Passwords do not match";
            exit;
        }
        else if($db->checkUser($email)===true){
            echo "The user already exists";
        }
        else{
            // Store the user in the database
            // Hash the password for security
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $db->storeUser($username,$email,$hashedPassword);
            header('Location: /login');
            exit;
        }
    
    }
    
    require('views/register.view.php');
?>
