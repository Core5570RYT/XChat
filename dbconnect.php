<?php
$servername = "localhost"; //for god sake, even tho this doesn't needed i think its better to make this so its easier for later changes.
$username = "root";
$password = "";
$dbname = "main";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    echo "error??";
    die("Connection failed: " . $conn->connect_error);
}

function createDatabase($conn, $dbname) {
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
}

function createTable($conn, $dbname, $table) {
    $conn->select_db($dbname);
    $sql = "CREATE TABLE IF NOT EXISTS $table (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(16) UNIQUE NOT NULL,
        password VARCHAR(32) NOT NULL
    )";
}

$conn->select_db($dbname);

createDatabase($conn, $dbname);
createTable($conn, $dbname, 'user');
?>
