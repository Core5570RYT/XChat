<?php
include 'dbconnect.php'; //make this shit to load the dbconnect php

if (isset($_POST['login_button'])) {
mysqli_set_charset($conn, "utf8mb4");
if ($conn->connect_error) {
    die("Connection failed, bro.". $conn->connect_error);
}

$username = $conn->real_escape_string($_POST['username']);
$password = $conn->real_escape_string($_POST['password']);
echo "" . $username . " ". $password ."";

$sql = "SELECT * FROM user WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    if ($password == $row["password"]) {

        session_start();
        $_SESSION['username'] = $username;
        header("Location: home.php");
    } else {

        echo "Invalid password";
    }
} else {
    echo "Invalid username";
}

} 
else if (isset($_POST['register_button'])) {

    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    if (strlen($password) < 8) {
        echo "Password must be at least 8 characters long.";
        exit();
    }
    

    $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
    

    if ($conn->query($sql) === TRUE) {
        header("Location: index.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
}
$conn->close();
?>