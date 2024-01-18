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
            <hr style="opacity: 0.3;">
            <div>
                <h3>Welcome</h3><br>
                <p>Let's customize your account.</p>
            </div>
            <div class="betterRow" style="padding-top: 20px;">
                <div id="uploadContainer">
                    <input type="file" id="uploadInput" accept="image/*" onchange="previewImage()">
                    <label for="uploadInput" id="placeholderImage">
                        <img id="preview" src="../assets/images/profile_placeholder.png" alt="Profile Picture">
                    </label>
                </div>
            </div>
            <div class="rowaligncentered">
                <p style="padding-top: 10px; width: 410px; margin: 0 auto; padding-bottom: 10px;">Display name</p>
                <input type="text" placeholder="Display name here" required id="displayname" name="displayname" style="margin: 0 auto;"><br>
                <button type="submit" id="logbutt" style="width: 100px;" name="login_button">Save</button> 
            </div>
            
        </div>
    </body>

    <script>
        function previewImage() {
            const input = document.getElementById('uploadInput');
            const preview = document.getElementById('preview');
            const file = input.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }

        function uploadImage() {
            document.getElementById('uploadInput').click();
        }
    </script>
</html>