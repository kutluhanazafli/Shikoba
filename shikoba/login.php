<?php
session_start();
error_reporting(0);

include("mysql/baglan.php");

if (isset($_POST["login"])) {
    $email = $_POST["user_mail"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM users WHERE user_mail='$email'AND password='$password'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $sql1 = "SELECT * FROM admins WHERE user_name='$email'AND password='$password'";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();

    $_SESSION['user_mail'] = $row['user_mail'];
    $_SESSION['user_name'] = $row['user_name'];
    $_SESSION['password'] = $row['password'];

    $_SESSION['id'] = $row['id'];

    if ($email = $row1["user_name"] and $password = $row1["password"]) {
        header('location: ../panel/index.php');}
        elseif($email = $row["user_mail"] and $password = $row["password"]){
          header('location: index.php');
    }
        else{
            echo "<script>
            alert('Kullanıcı Adı veya Şifre Yanlış')
            window.location.href='login.php'
        </script>";
        }
}





?>





<!doctype html>
<html lang="tr">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/jpg" href="images/logo.png"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <!--Black Background-->
    <style>
        body {
            background: url(images/bg.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .dropdown .btn-primary{
            background-color: #ffc107;
        }
        .dropdown-menu{
            background-color: #ffc107;
        }
        /*------------------------------------------------
           Home Page
       -------------------------------------------------*/

        .hexagon-item:first-child {
            margin-left: 0;
        }

        .page-home {
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            vertical-align: middle;
            border-top: 4px solid #ffc107;
        }

        .page-home .overlay {
            background-color: rgba(14, 17, 24, 0.97);
        }

        .pt-table {
            display: table;
            width: 100%;
            height: -webkit-calc(100vh - 4px);
            height: -moz-calc(100vh - 4px);
            height: calc(100vh - 4px);
        }

        .pt-tablecell {
            display: table-cell;
            vertical-align: middle;
        }

        .overlay {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }

        .relative {
            position: relative;
        }

        .preloader.active .loading-mask {
            width: 0;
        }
        /* end */
        .container h-100{
            background-color: #ffc107;
        }
        .btn-primary {
            color: #fff;
            background-color: #ffc107;
            border-color: #ffc107;
        }
    </style>
    <!--Black Background-->
    <title>Giriş Yap</title>
</head>
<body>
<!--Header Start-->
<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <img src="images/logo.png" width="60px"/>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php" class="nav-link px-2 text-white">Anasayfa</a></li>
                <li><a href="menu/menu.php" class="nav-link px-2 text-white">Menü</a></li>
                <li><a href="urunler.php" class="nav-link px-2 text-white">Ürünler</a></li>
                <li><a href="kendinyap.php" class="nav-link px-2 text-white">Kendin Yap</a></li>
                <li><a href="hakkimizda.php" class="nav-link px-2 text-white">Hakkımızda</a></li>
            </ul>
            <a class="btn btn-outline-light btn-floating m-1" href="cart.php" role="button"><i
                        class="fas fa-shopping-cart"></i></a>
            <div class="text-end">
                <?php
                if (!empty($_SESSION['user_mail'])) { ?>
                    <a href="logout.php" type="button" class="btn btn-outline-light me-2">Çıkış Yap</a>
                    <?php
                } else { ?>
                    <a href="login.php" type="button" class="btn btn-outline-light me-2">Giriş Yap</a>
                    <a href="register.php" type="button" class="btn btn-warning">Kayıt Ol</a>
                    <?php
                }
                ?>
            </div>
    </div>
</header>
<!--Header End-->
<main class="site-wrapper">
    <div class="pt-table desktop-768">
        <div class="pt-tablecell page-home relative" style="background-image: url(https://scontent.fesb3-2.fna.fbcdn.net/v/t1.6435-9/37904225_688725644825738_6160377175833837568_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=e3f864&_nc_ohc=mmYcEQ-g-N4AX9lbi4P&_nc_ht=scontent.fesb3-2.fna&oh=00_AT9iEiiSnIY863LcnCZ-Mg5islvP-jmzDMbr1QG03OxayQ&oe=620128D6);
    background-position: center;
    background-size: cover;">
            <div class="overlay"></div>

<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Giriş Yap</p>

                                <form method="POST" action="login.php" class="mx-1 mx-md-4">
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" id="email" name="user_mail" class="form-control"/>
                                            <label class="form-label" for="form3Example3c">Email</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" id="password" name="password" class="form-control"/>
                                            <label class="form-label" for="form3Example4c">Şifre</label>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button name="login" class="btn btn-primary btn-lg">Giriş Yap</button>
                                    </div>
                                    <br>
                                    <br>
                                    <p class="mb-5 pb-lg-2" style="color: #cccc00;">Hesabınız yok mu? <a
                                                href="register.php" style="color: #cccc00;">Hesap Oluştur</a></p>

                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="images/login.png" class="img-fluid" alt="Sample image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Start-->
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/ShikobaCoffee/"
                   role="button" target="_blank"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>
                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/shikobacoffee/"
                   role="button" target="_blank"><i class="fab fa-instagram"></i></a>

            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white" href="www.shikoba.com">shikoba.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!--Footer End-->

</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
</main>