<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sing</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<style>
    @media only screen and (max-width: 400px) {
        body {
            font-size: 10px !important;
        }
    }

    .main {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    body {
        height: 97vh;
        background: linear-gradient(black, rgb(179, 178, 178));
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .form {
        background: linear-gradient(rgba(240, 4, 4, 0.479), rgba(0, 38, 255, 0.541));
        border-radius: 30px;
        display: flex;
        justify-content: center;
        flex-flow: column;
        align-items: center;
        height: 100%;
        width: 400px;
        box-shadow: inset 1px 40px 40px rgba(240, 4, 4, 0.479), inset 1px 40px 40px rgba(0, 38, 255, 0.541);
    }

    .btn {
        width: 170px;
        height: 60px;
        font-size: 18px;
        background: lightblue;
        border: none;
        border-radius: 50px;
        color: #000;
        outline: none;
        cursor: pointer;
        transition: all 0.4s;
        margin-left: 30%;
        padding: 0px;
        margin: 0px;
    }

    .btn:hover {
        box-shadow: inset 0 0 0 4px #ef476f,
            inset 0 0 0 8px #ffd166,
            inset 0 0 0 12px #06d6a0,
            inset 0 0 0 16px #118ab2;
        background: #073b4c;
        color: #fff;
    }

    .form-control {
        position: relative;
        margin: 20px 0 40px;
        width: 190px;
    }

    .form-control input {
        background-color: transparent;
        border: 0;
        border-bottom: 2px #fff solid;
        display: block;
        width: 100%;
        padding: 15px 0;
        font-size: 18px;
        color: #fff;
    }

    .form-control input:focus,
    .form-control input:valid {
        outline: 0;
        border-bottom-color: lightblue;
    }

    .form-control label {
        position: absolute;
        top: 15px;
        left: 0;
        pointer-events: none;
    }

    .form-control label span {
        display: inline-block;
        font-size: 18px;
        min-width: 5px;
        color: #fff;
        transition: 0.1s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .form-control input:focus+label span,
    .form-control input:valid+label span {
        color: lightblue;
        transform: translateY(-30px);
    }

    .taga {
        --color: #00A97F;
        padding: 0.8em 1.7em;
        background-color: transparent;
        border-radius: .3em;
        position: relative;
        overflow: hidden;
        cursor: pointer;
        transition: .5s;
        font-weight: 400;
        font-size: 17px;
        border: 1px solid;
        font-family: inherit;
        text-transform: uppercase;
        color: var(--color);
        z-index: 1;
    }

    .taga::before,
    .taga::after {
        content: '';
        display: block;
        width: 50px;
        height: 50px;
        transform: translate(-50%, -50%);
        position: absolute;
        border-radius: 50%;
        z-index: -1;

        transition: 1s ease;
    }

    .taga::before {
        top: -1em;
        left: -1em;
    }

    .taga::after {
        left: calc(100% + 1em);
        top: calc(100% + 1em);
    }

    .taga:hover::before,
    .taga:hover::after {
        height: 410px;
        width: 410px;
    }

    .taga:hover {
        color: rgb(10, 25, 30);
    }

    .taga:active {
        filter: brightness(.8);
    }

    .button-sing {
        margin-top: 5vh;
    }
</style>

<body class="main">

    <div class="form">
        <div id="w1">
            <form action="" method="post">
            <div class="form-control">
                <input type="value" required="" name="name">
                <label>
                    <span style="transition-delay:0ms">n</span><span style="transition-delay:50ms">a</span><span
                        style="transition-delay:100ms">m</span><span style="transition-delay:150ms">e</span>
                </label>
            </div>
            <div class="form-control">

                <input type="value" required="" name="username">

                <label>
                    <span style="transition-delay:0ms">U</span><span style="transition-delay:50ms">s</span><span
                        style="transition-delay:100ms">e</span><span style="transition-delay:150ms">r</span><span
                        style="transition-delay:200ms">n</span><span style="transition-delay:250ms">a</span><span
                        style="transition-delay:300ms">m</span><span style="transition-delay:350ms">e</span>
                </label>
            </div>
            <div class="form-control">
                <input type="text" required="" name="email">
                <label>
                    <span style="transition-delay:0ms">e</span><span style="transition-delay:50ms">m</span><span
                        style="transition-delay:100ms">a</span><span style="transition-delay:150ms">i</span><span
                        style="transition-delay:200ms">l</span>

                </label>
            </div>
            <div class="form-control">
                <input type="password" required="" name="password">
                <label>
                    <span style="transition-delay:0ms">p</span><span style="transition-delay:50ms">a</span><span
                        style="transition-delay:100ms">s</span><span style="transition-delay:150ms">s</span><span
                        style="transition-delay:200ms">w</span><span style="transition-delay:250ms">o</span><span
                        style="transition-delay:300ms">r</span><span style="transition-delay:350ms">d</span>


                </label>
            </div>
        </div>
        <div class="main">
            <button id="e" class="btn" name="e">submit</button>
        </div>
        <div class="button-sing">
            <a class="taga" href="sabtnam.php"> sing up</a>
            <a class="taga" style="margin-left: 50px;" href="singin.php"> sing in</a>
        </form>
        </div>
    </div>

</body>

</html>
<?php
if(isset($_POST['e'])){
try {
    $servername = "localhost";
    $username = "root";
    $password2 = "";

    $conn = new PDO("mysql:host=$servername;dbname=aref", $username, $password2);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $name = htmlentities($_POST['name']);
    $user = htmlentities($_POST['username']);
    $email = htmlentities($_POST['email']);
    $passwordd = htmlentities($_POST['password']);

    // بررسی خالی بودن فیلدها
    if (empty($name) || empty($user) || empty($email) || empty($passwordd)) {
        echo "لطفاً فیلد را پر کنید.";
    } else {
        $tableName = "qw";
        $sql = "INSERT INTO $tableName (name, username, email, paswoord) VALUES (:name, :user, :email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':user', $user);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $passwordd);

        if ($stmt->execute()) {
           echo "<script>alert('ارسال شد')</script>";
        }
    }

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}}else{

}


    
    
?>