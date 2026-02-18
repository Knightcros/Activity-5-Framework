<?php
class Database {
    private $host = "localhost";
    private $db_name = "framework_db";
    private $username = "admin";
    private $password = "admin123";

    public function connect() {
        $conn = new PDO(
            "mysql:host=$this->host;dbname=$this->db_name",
            $this->username,
            $this->password
        );
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}