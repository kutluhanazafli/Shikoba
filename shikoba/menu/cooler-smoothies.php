<?php

session_start();
include("../mysql/baglan.php");

?>
<!doctype html>
<html>
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

    <title>☕ Shikoba</title>
    <!--Header Start-->
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <img src="../images/logo.png" width="60px"/>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="../../shikoba/index.php" class="nav-link px-2 text-white">Anasayfa</a></li>
                    <li><a href="menu.php" class="nav-link px-2 text-secondary">Menü</a></li>
                    <li><a href="../../shikoba/urunler.php" class="nav-link px-2 text-white">Ürünler</a></li>
                    <li><a href="../../shikoba/kendinyap.php" class="nav-link px-2 text-white">Kendin Yap</a></li>
                    <li><a href="../../shikoba/hakkimizda.php" class="nav-link px-2 text-white">Hakkımızda</a></li>
                </ul>
                <a class="btn btn-outline-light btn-floating m-1" href="../../shikoba/cart.php" role="button"><i
                            class="fas fa-shopping-cart"></i></a>
                <div class="text-end">
                    <?php
                    if (!empty($_SESSION['user_mail'])) { ?>
                        <a href="../../shikoba/logout.php" type="button" class="btn btn-outline-light me-2">Çıkış Yap</a>
                        <a  type="button" class="btn btn-outline-light me-2"><?php echo $_SESSION['user_name']; ?></a>
                        <?php
                    } else { ?>
                        <a href="../../shikoba/login.php" type="button" class="btn btn-outline-light me-2">Giriş Yap</a>
                        <a href="../../shikoba/register.php" type="button" class="btn btn-warning">Kayıt Ol</a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </header>
    <!--Header End-->
    <style>
        body {
            background: url(../images/bg.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;

        }

        .container-fluid {
            border-top: 4px solid #ffc107;
        }

        /*kategori*/
        body .menu {
            list-style-type: none;

            margin: auto;

            padding: 0;

            overflow: hidden;

            width: 36.15%;
        }

        .menu li {
            float:left;
            text-align: center;
            margin: auto;
        }

        .menu li a {
            display: block;

            color: white;

            text-align: center;

            padding: 14px 16px;

            text-decoration: none;
        }

        .menu li  a:hover:not(.active) {

            background-color: #111;
        }

        .active {

            background-color: #f39c12;
        }

        /*end*/


    </style>
</head>
<body>
<div class="container-fluid" style="width: %65" >
    <br>
    <br>
    <br>
    <ul class="menu">

        <li><a href="sicak.php">Sıcak Kahveler</a></li>


        <li><a href="soguk.php">Soğuk Kahveler</a></li>

        <li><a href="caylar.php">Çaylar</a></li>


        <li><a class="active" href="cooler-smoothies.php">Cooler & Smoothies</a></li>

        <li><a href="atistirmaliklar.php">Atıştırmalıklar</a></li>

        <li><a href="tatlilar.php">Tatlılar</a></li>



    </ul>
</div>
<!--     cards start-->
<div class="container" style="width: %65">
    <br>
    <br>
    <br>



    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-3 g-4">
        <div class="col">
            <div class="card text-white bg-dark h-100">
                <img src="../images/menu/avokadolu-smoothie.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Avokadolu Smoothie</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-white bg-dark h-100">
                <img src="../images/menu/cilekli-smoothie.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Çilekli Smoothie</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-white bg-dark h-100">
                <img src="../images/menu/karpuzlu-smoothie.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Kapuzlu Smoothie</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--cards end-->

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

</body>


