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
    public function add($title, $desc) {
        $sql = "INSERT INTO products (title, `desc`) VALUES (:title, :desc)";
        $this->stmt = $this->conn->prepare($sql);
        $this->stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $this->stmt->bindParam(':desc', $desc, PDO::PARAM_STR);
        return $this->stmt->execute();
    }
    public function update($id, $title, $desc) {
        $sql = "UPDATE products SET title = :title, `desc` = :desc WHERE id = :id";
        $this->stmt = $this->conn->prepare($sql);
        $this->stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $this->stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $this->stmt->bindParam(':desc', $desc, PDO::PARAM_STR); 
        return $this->stmt->execute();
}

}
?>
