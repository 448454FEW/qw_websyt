<?php

class Qw {
    public $submit;
    public $user;
    public $p_assword;
    
    public function __construct() {
        $this->submit = htmlentities($_POST['submit']);
        $this->user = htmlentities($_POST['user']);
        $this->p_assword = htmlentities($_POST['password']);
        if(isset($this->submit)){
            if (empty($this->user) || empty($this->p_assword)) {
                echo  "<script>alert('لطفاً مقدارها را کامل پر کنید.')</script>";
            } else {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "loogin";
                $tableName = "login";
               
                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
                    
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $user = $this->user;
                    $password = $this->p_assword;

                    $checkQuery = "SELECT * FROM $tableName WHERE user = :user AND paswword = :password";
                    $checkStmt = $conn->prepare($checkQuery);
                    $checkStmt->bindParam(':user', $user);
                    $checkStmt->bindParam(':password', $password);
                    $checkStmt->execute();
                    $count = $checkStmt->rowCount();
            
                    if ($count > 0) {
                        echo "<script>alert('ورود موفقیت آمیز است.')</script>";
                    } else {
                        echo "<script>alert('اطلاعات در پایگاه داده موجود نیست.')</script>";
                    }
                    
                    $conn = null; 
                } catch (PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
                }
            }
        } else {
            echo  "<script>alert('لطفا تمام مقدارها را پر کنید.')</script>";
        }
    }
}

$dblogin = new Qw();


