<?php
$conn = new mysqli("localhost", "root", "");

if ($conn->connect_error) {
    echo "error??";
    die("Connection failed: " . $conn->connect_error);
}

$conn->query("CREATE DATABASE IF NOT EXISTS main");
$conn->select_db("main");
$conn->query("CREATE TABLE IF NOT EXISTS user (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(16) UNIQUE NOT NULL,
                password VARCHAR(32) NOT NULL
            )");
?>