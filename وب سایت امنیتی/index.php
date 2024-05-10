<?php
require_once('php.php')
?>
<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>qw security</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body class="container">
    <div class="loding">
        <div class="custom-loader"></div>
    </div>
    <div>
        <h1 id="timer">0 : 0 : 0</h1>
    </div>
    <div id="pedar">
        <div class="dis_block" id="main">
            <h1 id="h1">login</h1>
            <div class="dis_block" id="profil">
                <h2 id="h2">profil</h2>
            </div>
            <form method="post" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="user name">
                <br>
                <input type="password" name="pas" id="password" placeholder="password">
                <i class="bi bi-eye-fill" id="aye"></i>
                <br>
                <input type="file" name="file" placeholder="فایل">
                <br>
                <div id="axs">

                    <img src="captcha.php" alt="ok">
                </div>
                <br>
                <input type="text" name="kapcha" placeholder="kapcha">

                <br>
                <input style="margin-left: 6%;" name="ersal" type="submit" value="ارسال">
            </form>
        </div>
    </div>
</body>
<script src="mian.js"></script>

</html>