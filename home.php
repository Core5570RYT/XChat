<?php
    session_start();
    if (isset($_SESSION['username'])) {
        echo "Welcome, " . $_SESSION['username'] . "!";
        header("Location: pages/accountcreation.html");
    } else {
        header("Location: login.php");
    }
?>