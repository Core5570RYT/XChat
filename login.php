<?php
session_start();

$conn = new mysqli('localhost', 'root', '', "main");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

$error = "";

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
    }
} else {
    $error = "Invalid username or password";
}

if ($error !== "") {
?>
<script>
    var errorMessage = "<?php echo $error; ?>";
</script>
<?php
}

$stmt->close();
$conn->close();
?>
