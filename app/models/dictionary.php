<?php
require_once "../config/database.php";

class student {
    private $conn;
    private $table = "students";
   
    public function __construct() {
        $database = new database();
        $this->conn = $database->connect();
    }

    public function getAll() {
        $stmt = $this->conn->prepare("SELECT * FROM $this->table");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($student_Id, $name, $email, $phone, $course, $department) {
        $stmt = $this->conn->prepare(
            "INSERT INTO $this->table (student_id,name,email,phone,course,department) VALUES (?,?,?,?,?,?)"
        );
        return $stmt->execute([$student_Id,$name,$email,$phone,$course]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM $this->table WHERE id=?");
        return $stmt->execute([$id]);
    }
}

class users {
    private $conn;
    private $table = "users";
   
    public function __construct() {
        $database = new database();
        $this->conn = $database->connect();
    }

    public function getAll() {
        $stmt = $this->conn->prepare("SELECT * FROM $this->table");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($username, $password) {
        $stmt = $this->conn->prepare(
            "INSERT INTO $this->table (username,password) VALUES (?,?)"
        );
        return $stmt->execute([$username,$password]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM $this->table WHERE id=?");
        return $stmt->execute([$id]);
    }
}

class teachers {
    private $conn;
    private $table = "teachers";
   
    public function __construct() {
        $database = new database();
        $this->conn = $database->connect();
    }

    public function getAll() {
        $stmt = $this->conn->prepare("SELECT * FROM $this->table");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($teacher_Id, $name, $email, $phone, $course, $department) {
        $stmt = $this->conn->prepare(
            "INSERT INTO $this->table (teacher_id,name,email,phone,course,department) VALUES (?,?,?,?,?,?)"
        );
        return $stmt->execute([$teacher_Id,$name,$email,$phone,$course,$department]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM $this->table WHERE id=?");
        return $stmt->execute([$id]);
    }
}