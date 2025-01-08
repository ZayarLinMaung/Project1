<?php
class Database {
    private $conn;
    private $stmt;

    public function __construct($user = 'root', $pass = '') {
        try {
            $this->conn = new PDO("mysql:host=127.0.0.1;dbname=project1", $user, $pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
    public function getConn() {
        return $this->conn;
    }

    // Fetch all products
    public function fetchAll() {
        $sql = "SELECT * FROM products";
        $this->stmt = $this->conn->prepare($sql);
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Find product by ID
    public function findById($id) {
        $sql = "SELECT * FROM products WHERE id = :id";
        $this->stmt = $this->conn->prepare($sql);
        $this->stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $this->stmt->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Delete product by ID
    public function delete($id) {
        $sql = "DELETE FROM products WHERE id = :id";
        $this->stmt = $this->conn->prepare($sql);
        $this->stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $this->stmt->execute();
    }

    // Add a new product
    
    public function update($id, $title, $desc) {
        $sql = "UPDATE products SET title = :title, `desc` = :desc WHERE id = :id";
        $this->stmt = $this->conn->prepare($sql);
        $this->stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $this->stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $this->stmt->bindParam(':desc', $desc, PDO::PARAM_STR); 
        return $this->stmt->execute();
    }
    public function updateImg($id, $img) {
        $sql = "UPDATE products SET image_path = :img WHERE id = :id";
        $this->stmt = $this->conn->prepare($sql);
        $this->stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $this->stmt->bindParam(':img', $img);
        return $this->stmt->execute();
    }
    public function checkUser($email){
        $sql = "SELECT * FROM users WHERE email = :email";
        $this->stmt = $this->conn->prepare($sql);
        $this->stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $this->stmt->execute();
        return $this->stmt->rowCount();
    }
    public function storeUser($username, $email, $password){
        $sql = 'INSERT INTO users (email, username, password) VALUES (:email, :username, :password)';
        $this->stmt = $this->conn->prepare($sql);
        $this->stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $this->stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $this->stmt->bindParam(':password', $password, PDO::PARAM_STR);
        if($this->stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error during registration.";
        }
    }
    public function fetchUser($email){
        $sql = "SELECT * FROM users WHERE email = :email";
        $this->stmt = $this->conn->prepare($sql);
        $this->stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $this->stmt->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
