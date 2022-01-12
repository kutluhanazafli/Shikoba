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
                <li><a href="index.php" class="nav-link px-2 text-white">Anasayfa</a></li>
                <li><a href="menu/menu.php" class="nav-link px-2 text-white">Menü</a></li>
                <li><a href="urunler.php" class="nav-link px-2 text-white">Ürünler</a></li>
                <li><a href="kendinyap.php" class="nav-link px-2 text-secondary">Kendin Yap</a></li>
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
    </div>
</header>
<!--Header End-->
<main class="site-wrapper">
    <div class="pt-table desktop-768">
        <div class="pt-tablecell page-home relative" style="background-image: url(https://scontent.fesb3-2.fna.fbcdn.net/v/t1.6435-9/37904225_688725644825738_6160377175833837568_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=e3f864&_nc_ohc=mmYcEQ-g-N4AX9lbi4P&_nc_ht=scontent.fesb3-2.fna&oh=00_AT9iEiiSnIY863LcnCZ-Mg5islvP-jmzDMbr1QG03OxayQ&oe=620128D6);
    background-position: center;
    background-size: cover;">
            <div class="overlay"></div>


            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card text-white bg-dark h-100">
                            <img src="images/kendinyap/frenchpress.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">French Press</h5>
                                <p class="card-text">Evde buzlu kahve yapmak, favori Içeceğinizi ferahlatıcı bir deneyim
                                    ile tatmanız Için harika bir yöntemdir. Buzlu kahve hazırlamak Için pour over
                                    Işleminin küçük adımlarını uygulayarak siz de zengin bir tada sahip olan buzlu
                                    kahvenizi hazırlayabilirsiniz.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-white bg-dark h-100">
                            <img src="images/kendinyap/pourover.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pour Over</h5>
                                <p class="card-text">Bazen mükemmel hazırlanmış bir fincan kahve istersiniz. Pour over
                                    yöntemi size kahvenin tat derinliğini ve suyun akışını kontrol edebilme imkanı
                                    sağlayan eşsiz bir çözüm sunar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-white bg-dark h-100">
                            <img src="images/kendinyap/buzlukahve.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Buzlu Kahve</h5>
                                <p class="card-text">Evde buzlu kahve yapmak, favori içeceğinizi ferahlatıcı bir deneyim
                                    ile tatmanız için harika bir yöntemdir. Buzlu kahve hazırlamak için Pour Over
                                    işleminin küçük adımlarını uygulayarak siz de zengin bir tada sahip olan buzlu
                                    kahvenizi hazırlayabilirsiniz.</p>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</body>
</html>
</main>