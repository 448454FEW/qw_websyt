<?php
session_start();
error_reporting(0);      


$allowed_paths = array(
    'php.php',
    'captcha.php',
    'font.TTF' 
);


$path = $_GET['path'];

// جایگزینی مسیر‌های خطرناک
$safe_path = str_replace($allowed_paths, "", $path);

// خواندن فایل
$file_content = file_get_contents("files/" . $safe_path);
echo $file_content;


class pardazesh
{
    public string $name;
    public string $pas;
    public string $file;
    public string $ersal;
    public        $file_name;
    public string $kapcha;
    public function ip()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
    public function file_name($usernames)

    {
        $this->file_name = $usernames . rand() * 7  . rand(27, 9999999999) / 27 . substr(time(), -6);
        $loc = "uploads/" . $this->file_name;
        $counter = 1;
        while (file_exists($loc)) {
            $loc = "uploads/" .  $usernames . rand() * 7  . rand(27, 9999999999) / 27 . substr(time(), -6);
            $counter++;
        }
        return $this->file_name;
    }
    public function __construct()
    {
        $this->filter_kkardan();
        echo '<br>';
    }
    public function sql()
    {

        try {
            $conn = new PDO('mysql:host=localhost;dbname=qw', 'root', '');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = 'INSERT INTO qw_security (username,paswword,img_loc,Captcha_input,ip,Captcha_itself) VALUES (:name,:password ,:loc , :vorodi , :ip , :kapcha)';
            $stmt = $conn->prepare($sql);
            // تعریف متغیرها
            $name_encrypted = openssl_encrypt($this->name, 'AES-128-CBC', '!@#$%^&*()_+=-/*-.qwertyuiop[];lkjhgfddsazxcvbnm,./><?sdfr1478529630', 0, '7418529631593570');
            $password_encrypted = openssl_encrypt($this->pas, 'AES-128-CBC', '!@#$%^&*()_+=-/*-.qwertyuiop[];lkjhgfddsazxcvbnm,./><?sdfr1478529630', 0, '7418529631593570');
            $loc_encrypted = openssl_encrypt($this->file_name, 'AES-128-CBC', '!@#$%^&*()_+=-/*-.qwertyuiop[];lkjhgfddsazxcvbnm,./><?sdfr1478529630', 0, '7418529631593570');
            $vorodi_encrypted = openssl_encrypt($this->kapcha, 'AES-128-CBC', '!@#$%^&*()_+=-/*-.qwertyuiop[];lkjhgfddsazxcvbnm,./><?sdfr1478529630', 0, '7418529631593570');
            $ip_encrypted = openssl_encrypt($this->ip(), 'AES-128-CBC', '!@#$%^&*()_+=-/*-.qwertyuiop[];lkjhgfddsazxcvbnm,./><?sdfr1478529630', 0, '7418529631593570');
            $kapcha_encrypted = openssl_encrypt($_SESSION['kkapcha'], 'AES-128-CBC', '!@#$%^&*()_+=-/*-.qwertyuiop[];lkjhgfddsazxcvbnm,./><?sdfr1478529630', 0, '7418529631593570');
            $stmt->bindParam(':name', $name_encrypted, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password_encrypted, PDO::PARAM_STR);
            $stmt->bindParam(':loc', $loc_encrypted, PDO::PARAM_STR);
            $stmt->bindParam(':vorodi', $vorodi_encrypted, PDO::PARAM_STR);
            $stmt->bindParam(':ip', $ip_encrypted, PDO::PARAM_STR);
            $stmt->bindParam(':kapcha', $kapcha_encrypted, PDO::PARAM_STR);

            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
    public function filter_kkardan()
    {
        $this->ersal = htmlentities($_POST['ersal']);
        if (isset($this->ersal)) {
            $this->kapcha = htmlspecialchars($_POST['kapcha']);
            if (!empty($this->kapcha)) {
                if (($this->kapcha) == htmlspecialchars($_SESSION['kkapcha'])) {
                    if (!empty(htmlspecialchars($_POST['name'])) && !empty(htmlspecialchars($_POST['pas']))) {
                        $this->name = htmlspecialchars($_POST['name']);
                        $this->pas = htmlspecialchars($_POST['pas']);
                        $this->file = move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $this->file_name($this->name) . '.jpg');
                        $this->sql();
                    } else {
                        echo "<script>alert('لطفا ت مام فیلد هارو پر کرده سپس کلید ثبت رو فشار دهید ')</script>";
                    }
                } else {
                    echo "<script>alert('لطفا اطلعات کپچا را درست وارد کنید  ')</script>";
                }
            }
        }
    }
}

$a = new pardazesh();
