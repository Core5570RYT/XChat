<?php
$conn = new mysqli("localhost", "root", "", "user");
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

    // Verify password using password_verify
    if ($password == $row["password"]) {
        // Successful login
        session_start(); // Start a session to store user information
        $_SESSION['username'] = $username;
        header("Location: home.php"); // Redirect to home page
    } else {
        // Invalid password
        echo "Invalid password";
    }
} else {
    // Invalid username
    echo "Invalid username";
}

$conn->close();
?>