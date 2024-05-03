<?php

class Dbconnection {
    public $conn;

    public function __construct() {
        $this->conn = new mysqli('localhost', 'root', '', 'tryanderror');
    }

    // public function getConnection() {
    //     return $this->conn;
    // }

    // public function createDb($dbname) {
    //     $this->conn = new mysqli('localhost', 'root', '');
    //     $this->conn->query("CREATE DATABASE IF NOT EXISTS $dbname");
    // }
}
?>
