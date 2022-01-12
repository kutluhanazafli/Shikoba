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
    </style>
    <!--Black Background-->
    <style>
        .social-link {
            width: 30px;
            height: 30px;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            border-radius: 50%;
            transition: all 0.3s;
            font-size: 0.9rem;
        }

        .social-link:hover,
        .social-link:focus {
            background: #ddd;
            text-decoration: none;
            color: #555;
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
                <li><a href="index.php" class="nav-link px-2 text-white">Anasayfa</a></li>
                <li><a href="menu/menu.php" class="nav-link px-2 text-white">Menü</a></li>
                <li><a href="urunler.php" class="nav-link px-2 text-white">Ürünler</a></li>
                <li><a href="kendinyap.php" class="nav-link px-2 text-white">Kendin Yap</a></li>
                <li><a href="hakkimizda.php" class="nav-link px-2 text-secondary">Hakkımızda</a></li>
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
</header>
<!--Header End-->
            <div class="container-fluid" style="padding:revert">
                <div class="bg-dark">
                    <div class="container py-5">
                        <div class="row h-100 align-items-center py-5">
                            <div class="col-lg-6">
                                <h1 class="display-4 text-light">Shikoba Coffee</h1>
                                <p class="lead text-warning mb-0">☕ 3rd wave coffee</p>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block"><img src="images/cards3.jpg" alt=""
                                                                         class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-dark py-5">
                    <div class="container py-5">
                        <div class="row align-items-center mb-5">
                            <div class="col-lg-6 order-2 order-lg-1"><i
                                        class="fa fa-bar-chart fa-2x mb-3 text-light"></i>
                                <h2 class="font-weight-light text-light">1949'dan beri ilham verir</h2>
                                <p class="font-italic text-warning mb-4">Shikoba'nın başarı hikâyesi 1949 yılında Hamburglu bir tüccar olan Max Herz'in posta ile yanında pratik kavanozlarla ya da mutfak bezleri ile kahve gönderimi fikriyle başladı. Almanya'da Shikoba kısa zamanda en çok tüketilen kahve markası oldu. Zamanla ev, dekorasyon, moda ve spor koleksiyonlarıyla gelişti ve büyüdü. Günümüzde dünya çapında 1.000'den fazla mağazası bulunan Shikoba'nın ilk mağazası, 1955 yılında Hamburg'da açıldı. Bunu Avrupa ülkelerindeki 9 adet internet mağazası takip etti. Bugün Shikoba, müşterilerine her hafta yeni bir koleksiyon sunuyor -her zaman farklı, her zaman yeni.</p><a href="#"
                                                                                                         class="btn btn-light px-5 rounded-pill shadow-sm">Learn
                                    More</a>
                            </div>
                            <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="images/cards1.jpg" alt=""
                                                                                       class="img-fluid mb-4 mb-lg-0">
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-5 px-5 mx-auto"><img src="images/cards2.jpg" alt=""
                                                                    class="img-fluid mb-4 mb-lg-0"></div>
                            <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-success"></i>
                                <h2 class="font-weight-light text-light">En kaliteli kahve keyfi</h2>
                                <p class="font-italic text-warning mb-4">60 yılı aşkın süredir Shikoba, dünyanın en iyi üreticilerinin eşsiz kahvelerini sunar. Sürdürülebilir kaynaklardan elde edilen, küçük çiftliklerden sağlanan özel Shikoba kahveleri, kendilerine özgü şekilde harmanlanarak mükemmel kahve keyfini garanti eder.</p><a href="#"
                                      class="btn btn-light px-5 rounded-pill shadow-sm">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-dark py-5">
                    <div class="container py-5">
                        <div class="row mb-4">
                            <div class="col-lg-5">
                                <h2 class="display-4 font-weight-light text-light">Takımımız</h2>
                                <p class="font-italic text-warning">Sanatı sizlerle buluşturmamızı sağlayanlar</p>
                            </div>
                        </div>

                        <div class="row text-center">
                            <!-- Team item-->
                            <div class="col-xl-3 col-sm-6 mb-5">
                                <div class="bg-dark rounded shadow-sm py-5 px-4"><img
                                            src="https://media-exp1.licdn.com/dms/image/C4E03AQFPG_jTog2Vbw/profile-displayphoto-shrink_800_800/0/1597756260716?e=1647475200&v=beta&t=MTx0ebMRzyOzR-m4zpr-VwdYMjzHeUi6C9uQ3aGb0J0" alt=""
                                            width="100"
                                            class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                    <h5 class="mb-0 text-light">Kutluhan Azaflı</h5><span
                                            class="small text-uppercase text-warning">CEO - Founder</span>
                                    <section class="mb-4">
                                        <!-- Facebook -->
                                        <a class="btn btn-outline-light btn-floating m-1" style="border-radius: 25px"
                                           href="https://www.facebook.com/ShikobaCoffee/" role="button" target="_blank"
                                        ><i class="fab fa-facebook-f"></i
                                            ></a>

                                        <!-- Twitter -->
                                        <a class="btn btn-outline-light btn-floating m-1" style="border-radius: 25px"
                                           href="#!"
                                           role="button"
                                        ><i class="fab fa-twitter"></i
                                            ></a>
                                        <!-- Instagram -->
                                        <a class="btn btn-outline-light btn-floating m-1" style="border-radius: 25px"
                                           href="https://www.instagram.com/shikobacoffee/" role="button" target="_blank"
                                        ><i class="fab fa-instagram"></i
                                            ></a>

                                    </section>
                                    <!-- Section: Social media -->
                                </div>
                            </div>
                            <!-- End-->

                            <!-- Team item-->
                            <div class="col-xl-3 col-sm-6 mb-5">
                                <div class="bg-dark rounded shadow-sm py-5 px-4"><img
                                            src="https://media-exp1.licdn.com/dms/image/C5603AQGmPYrIA_5u3w/profile-displayphoto-shrink_800_800/0/1641818792549?e=1647475200&v=beta&t=aK951a7tY92ogxqh--H8P9Eb1i3N7SSkDgQDJZSpukY" alt=""
                                            width="100"
                                            class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                    <h5 class="mb-0 text-light">Ali Karadeniz</h5><span
                                            class="small text-uppercase text-warning">CEO - Founder</span>
                                    <section class="mb-4">
                                        <!-- Facebook -->
                                        <a class="btn btn-outline-light btn-floating m-1" style="border-radius: 25px"
                                           href="https://www.facebook.com/ShikobaCoffee/" role="button" target="_blank"
                                        ><i class="fab fa-facebook-f"></i
                                            ></a>

                                        <!-- Twitter -->
                                        <a class="btn btn-outline-light btn-floating m-1" style="border-radius: 25px"
                                           href="#!"
                                           role="button"
                                        ><i class="fab fa-twitter"></i
                                            ></a>
                                        <!-- Instagram -->
                                        <a class="btn btn-outline-light btn-floating m-1" style="border-radius: 25px"
                                           href="https://www.instagram.com/shikobacoffee/" role="button" target="_blank"
                                        ><i class="fab fa-instagram"></i
                                            ></a>

                                    </section>
                                    <!-- Section: Social media -->
                                </div>
                            </div>
                            <!-- End-->

                            <!-- Team item-->
                            <div class="col-xl-3 col-sm-6 mb-5">
                                <div class="bg-dark rounded shadow-sm py-5 px-4"><img
                                            src="https://akademik.ahievran.edu.tr/profil/uicjbh.jpg" alt=""
                                            width="100"
                                            class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                    <h5 class="mb-0 text-light">Mustafa Yağcı</h5><span
                                            class="small text-uppercase text-warning">CEO - Founder</span>
                                    <section class="mb-4">
                                        <!-- Facebook -->
                                        <a class="btn btn-outline-light btn-floating m-1" style="border-radius: 25px"
                                           href="https://www.facebook.com/ShikobaCoffee/" role="button" target="_blank"
                                        ><i class="fab fa-facebook-f"></i
                                            ></a>

                                        <!-- Twitter -->
                                        <a class="btn btn-outline-light btn-floating m-1" style="border-radius: 25px"
                                           href="#!"
                                           role="button"
                                        ><i class="fab fa-twitter"></i
                                            ></a>
                                        <!-- Instagram -->
                                        <a class="btn btn-outline-light btn-floating m-1" style="border-radius: 25px"
                                           href="https://www.instagram.com/shikobacoffee/" role="button" target="_blank"
                                        ><i class="fab fa-instagram"></i
                                            ></a>

                                    </section>
                                    <!-- Section: Social media -->
                                </div>
                            </div>
                            <!-- End-->

                            <!-- Team item-->
                            <div class="col-xl-3 col-sm-6 mb-5">
                                <div class="bg-dark rounded shadow-sm py-5 px-4"><img
                                            src="https://images.mubicdn.net/images/cast_member/1264/cache-85925-1528261523/image-w856.jpg?size=800x" alt=""
                                            width="100"
                                            class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                    <h5 class="mb-0 text-light">Quentin Tarantino</h5><span
                                            class="small text-uppercase text-warning">CEO - Founder</span>
                                    <section class="mb-4">
                                        <!-- Facebook -->
                                        <a class="btn btn-outline-light btn-floating m-1" style="border-radius: 25px"
                                           href="https://www.facebook.com/ShikobaCoffee/" role="button" target="_blank"
                                        ><i class="fab fa-facebook-f"></i
                                            ></a>

                                        <!-- Twitter -->
                                        <a class="btn btn-outline-light btn-floating m-1" style="border-radius: 25px"
                                           href="#!"
                                           role="button"
                                        ><i class="fab fa-twitter"></i
                                            ></a>
                                        <!-- Instagram -->
                                        <a class="btn btn-outline-light btn-floating m-1" style="border-radius: 25px"
                                           href="https://www.instagram.com/shikobacoffee/" role="button" target="_blank"
                                        ><i class="fab fa-instagram"></i
                                            ></a>

                                    </section>
                                    <!-- Section: Social media -->
                                </div>
                            </div>
                            <!-- End-->

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
                   role="button" target="_blank"
                ><i class="fab fa-facebook-f"></i
                    ></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fab fa-twitter"></i
                    ></a>
                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/shikobacoffee/"
                   role="button" target="_blank"
                ><i class="fab fa-instagram"></i
                    ></a>

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