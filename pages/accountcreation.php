<?php
    session_start();
    if (!isset($_SESSION['username'])) {
    header("Location: ../index.html");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="acc.css">
        <link rel="icon" href="../icon.ico" type="image/x-icon" />
        <title>XChat</title>
    </head>

    <body>
        <div class="container-main">
            <div class="rowalign">
                <img src="../assets/xchat_logo.png" style="width:60px; height:60px;">
                <h1>XChat</h1>
            </div>
            <div>
                <h3>Welcome</h3><br>
                <p>Let's customize your account.</p>
            </div>
    </body>

</html>