<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" href="imgs/FavIcon/favicon-32x32.png" type="image/x-icon">
    <link rel="shortcut icon" href="imgs/FavIcon/android-chrome-192x192.png" type="image/x-icon">
    <link rel="shortcut icon" href="imgs/FavIcon/apple-touch-icon.png" type="image/x-icon">

    <!-- Bootstrap stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Css Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <title>Contact Us</title>

    <style>
        .contact-info form {
            display: flex;
            flex-direction: column;
            width: 60%;
            box-shadow: 0 0 15px grey;
            text-align: center;
            color: grey;
            border-radius: 5px;
            padding: 7px;
        }

        .contact-info form input {
            margin: 6px 12px;
            height: 30px;
            padding: 7px;
        }

        .contact-info form input[type="tel"] {
            direction: rtl;
        }

        .contact-info textarea {
            height: 150px;
            margin: 8px 12px;
            padding: 7px;
        }

        .contact-info form button {
            width: 100px;
            margin-right: 10px;
        }

        .contact-info .details_info {
            display: flex;
            flex-direction: column;
            width: 40%;
            background-color: #ff9800;
            color: white;
            border-radius: 5px;
            padding: 7px;
            box-shadow: 0 0 15px #ff9800;
        }

        .details_info .contact-items>span.metrial-icons {
            width: 12px;
            margin: 5px;
        }

        .details_info .contact-items>p {
            margin: 0 10px;
        }

        @media screen and (max-width:780px) {
            .contact-info {
                flex-direction: column;
                width: 90%;
            }

            .contact-info form {
                width: 100%;
                margin-bottom: 5px;
            }

            .contact-info .details_info {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <!-- Navigation -->
    <div class="banner"><a href="#" class="banner">%20 تخفیف </a></div>
    <nav class="navbar navbar-expand-lg py-3 fixed-top ">
        <div class="container">
            <a class="navbar-brand" href="/index.html">
                <img src="imgs/Logo.webp" alt="Logo icon" class="logo-img">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i id="bar" class="fa-solid fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse navbar-nav" id="navbarSupportedContent">
                <ul class="navbar-nav me-3 mt-3 mb-2 mb-lg-0 gap-3">
                    <li class="nav-item">
                        <a class="nav-link " href="index.html">صفحه اصلی</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="shop.html">محصولات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">بلاگ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="about us.html">درباره ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="Contact us.php">ارتباط با ما</a>
                    </li>
                </ul>
            </div>
            <div class="" id="secondary_">
                <ul class=" me-3 mt-3 mb-2 mb-lg-0 d-flex align-items-center justify-content-center ">
                    <li class="nav-item m-2">
                        <a href="/cart.html"><i class="fa-solid fa-bag-shopping px-3"></i></a>
                    </li>
                    <li class="nav-item m-2 ps-2">
                        <img src="imgs/dark theme icon/moon.png" id="toggle-icon" alt="dark mode toggle">
                    </li>
                    <li class="nav-item m-2 ">
                        <a href="sabt nam.html">
                            <button class="btn sign-in">ثبت نام / ورود</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- About Us Section -->
    <section id="blog-home" class="pt-5 mt-5 container">
        <h2 class="pt-5">ارتباط با ما</h>
            <hr>
    </section>

    <section class="container pt-5 ">
        <div class="row">
            <div class="contact-info d-flex">

<form action="" method="post">
    <h3 class="my-2">برا ما بنویس</h3>
    <input type="text" name="fullname" id="fullname" placeholder="نام و نام خوانوادگی" required>
    <input type="email" name="email" id="email" placeholder="ایمیل" required>
    <input type="tel" name="tel" id="tel" placeholder="تلفن: 09111111111" class="rtl" required>
    <textarea name="msg" id="msg" cols="30" rows="10" placeholder="پیام خود را اینجا بنویسید "></textarea>
    <button name="are" type="submit" class="buy-btn">ارسال</button>
</form>

                <div class="details_info ">
                    <h3 class="text-center">ارتباط با ما</h3>
                    <div class="contact-items-wrapper p-4">
                        <div class="contact-items d-flex align-items-center mb-4">
                            <span class="metrial-icons"><i class="fa-solid fa-location-dot"></i></span>
                            <p><strong> آدرس : </strong>
                                "13 تهران , خیابان امیر کبیر , کوچه "</p>
                        </div>
                        <div class="contact-items d-flex align-items-center mb-4">
                            <span class="metrial-icons"><i class="fa-solid fa-phone"></i></span>
                            <p><strong> تلفن : </strong>
                                +98911234567</p>
                        </div>
                        <div class="contact-items d-flex align-items-center mb-4">
                            <span class="metrial-icons"><i class="fa-regular fa-envelope"></i></span>
                            <p><strong>ایمیل : </strong>
                                <a href="#" class="text-white">LosterRoyal.email.com</a>
                            </p>
                        </div>
                        <div class="contact-items d-flex align-items-center mb-4">
                            <span class="metrial-icons"><i class="fa-solid fa-earth-americas"></i></span>
                            <p><strong> وب سايت : </strong>
                                <a href="#" class="text-white">www.LosterRoyal.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer  -->
    <footer class="mt-5 py-5">
        <div class="row container mx-auto pt-5 text-center">
            <div class="footer-one col-lg-4 col-md-4 col-12">
                <a href="/index.html"><img src="imgs/Logo.webp" alt="Logo icon" class="w-25"></a>
                <p class="pt-3">سبک خود را روشن کنید : طیف متنوعی از لوسترها را در رویال لوستر کاوش کنید.
                    از کلاسیک های کریستالی بی انتها گرفته تا مارول های مدرن، بیانیه نورپردازی عالی را برای فضای خود
                    بیابید
                </p>
            </div>
            <div class="footer-one col-lg-4 col-md-4 col-12 mb-3" id="footer-features">
                <h5 class="pb-2 mt-5">محصولات</h5>
                <ul class="list-unstyled">
                    <li><a href="#">لوستر کریستالی</a></li>
                    <li><a href="#">لوستر مولوکولی</a></li>
                    <li><a href="#">لوستر فلزی</a></li>
                    <li><a href="#">لوستر برنزی</a></li>
                    <li><a href="#">لوستر بلوری</a></li>
                    <li><a href="#">لوستر چوبی</a></li>
                </ul>
            </div>
            <div class="footer-one col-lg-4 col-md-4 col-12 mb-3">
                <h5 class="pb-2 mt-5">درباره</h5>
                <div>
                    <h6>آدرس</h6>
                    <p>تهران,خیابان امیر کبیر, کوچه 13</p>
                </div>
                <div>
                    <h6>تلفن</h6>
                    <p>021-3456789</p>
                </div>
                <div>
                    <h6>ایمیل</h6>
                    <p>LosterRoyal@email.com</p>
                </div>
            </div>
        </div>
        <!-- Copy Right -->
        <div class="copyright mt-5">
            <div class="row container mx-auto">
                <div class="col-lg-3 col-md-2 col-12 text-center">
                    <img src="imgs/enamad.png" alt="enamad">
                </div>
                <div class="col-lg-6 col-md-6 col-12 text-nowrap text-center">
                    <p dir="ltr" class="mt-5">&copy; 2023 Royal Loster. All rights reserved.</p>
                </div>
                <div class="col-lg-3 col-md-4 col-12 pt-5 text-center">
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#"><i class="fa-brands fa-telegram"></i></a>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>
<?php
$are = htmlentities($_POST['are']);
    
if (isset($are)) {
    $fullname = htmlentities($_POST['fullname']);
    $email    = htmlentities($_POST['email']);
    $tel      = htmlentities($_POST['tel']);
    $msg      = htmlentities($_POST['msg']);

    if (!empty($fullname) && !empty($email) && !empty($tel) && !empty($msg)) {
        $pyam_kol = 'اسم' . $fullname . "<br>" . $tel . 'shomare' . '<br>' . 'ppyamesh :' . $msg;
            $params = [
                'to'    => 'UA3ABNUFM0SwZ7PTwwf1vfGrbYVPi8nw0GiQXxTg',
                'text'  => $pyam_kol
            ];
    
            $ch = curl_init('https://notificator.ir/api/v1/send');
    
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
    
            $result = curl_exec($ch);
    
            curl_close($ch);
    
            $result = json_decode($result);
            echo '<script>alert("ارسال شد")</script>';
        } else {
            echo '<script>alert("لطفاً تمام فیلدها را پر کنید")</script>';
        }
    }
?>