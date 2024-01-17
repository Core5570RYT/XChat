<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="icon.ico" type="image/x-icon"/>
        <title>XChat</title>
    </head>

    <body>
        <div class="container-main">
            <div class="rowalign">
                <img src="./assets/xchat_logo.png" style="width:60px; height:60px; margin: auto;">
                <h1>XChat</h1>
            </div>
            <div>
                <h3>Welcome to XChat</h3><br>
                <p>Please login / sign-up to continue.</p>
            </div>
            <!--stuffs-->
            <div>
                <form action="index.php" method="post">
                <input type="text" placeholder="Username"><br>
                <input type="text" placeholder="Password">
                <div class="rowalign">
                    <button type="button" style="margin-right:10px;">LOGIN</button>
                    <button type="button">SIGN-UP</button>
                </form>
                </div>
            </div>
        </div>
    </body>
</html>