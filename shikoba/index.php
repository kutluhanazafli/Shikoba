<?php

session_start();
include("mysql/baglan.php");

?>


<!doctype html>
<html lang="tr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

        .container-fluid {
            border-top: 4px solid #ffc107;
        }

        .dropdown .btn-primary {
            background-color: #ffc107;
        }

        .dropdown-menu {
            background-color: #ffc107;
        }

    </style>
    <!--Black Background-->
    <title>☕ Shikoba</title>
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
                <li><a href="index.php" class="nav-link px-2 text-secondary">Anasayfa</a></li>
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
                    <a  type="button" class="btn btn-outline-light me-2"><?php echo $_SESSION['user_name']; ?></a>
                    <?php
                } else { ?>
                    <a href="login.php" type="button" class="btn btn-outline-light me-2">Giriş Yap</a>
                    <a href="register.php" type="button" class="btn btn-warning">Kayıt Ol</a>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    </div>
</header>
<!--Header End-->
<div class="container-fluid">

    <!-- Carousel Start -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style=" width:100%; height: 700px !important;">
            <div class="carousel-item active">
                <img src="images/carousel/slider1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/carousel/slider2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/carousel/slider3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--Carousel End-->
    <br>
    <br>
    <!--Cards Start-->
    <div class="card-group">
        <div class="card bg-dark">
            <img src="images/cards2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a class="btn btn-secondary btn-lg btn-block" href="menu/menu.php"
                       style="background-color: rgb(200, 150, 0);" type="button">MENÜ</a>
                </div>
                <p class="card-text"></p>
            </div>
        </div>
        <div class="card bg-dark">
            <img src="images/cards3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a class="btn btn-secondary btn-lg btn-block" href="urunler.php"
                       style="background-color: rgb(200, 150, 0);" type="button">ÜRÜNLER</a>
                </div>
                <p class="card-text"></p>
            </div>
        </div>
        <div class="card bg-dark">
            <img src="images/cards1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a class="btn btn-secondary btn-lg btn-block" href="kendinyap.php"
                       style="background-color: rgb(200, 150, 0);" type="button">KENDİN YAP</a>
                </div>
                <p class="card-text"></p>
            </div>
        </div>
    </div>
    <!--Cards End-->

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

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>