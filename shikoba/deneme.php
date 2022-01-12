<?php
session_start();
include("mysql/baglan.php");
include("mysql/islem.php");

if (isset($_POST["add"])) {
    if (isset($_SESSION["cart"])) {
        $item_array_id = array_column($_SESSION["cart"], "product_id");
        if (!in_array($_GET["id"], $item_array_id)) {
            $count = count($_SESSION["cart"]);
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][$count] = $item_array;
            echo '<script>window.location="Cart.php"</script>';
        }
    } else {
        $item_array = array(
            'product_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'product_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"],
        );
        $_SESSION["cart"][0] = $item_array;
    }
}

if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["cart"] as $keys => $value) {
            if ($value["product_id"] == $_GET["id"]) {
                unset($_SESSION["cart"][$keys]);
            }
        }
    }
}
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
                <img src="images/logo.png" width="60px"/>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.php" class="nav-link px-2 text-white">Anasayfa</a></li>
                    <li><a href="menu/menu.php" class="nav-link px-2 text-white">Menü</a></li>
                    <li><a href="urunler.php" class="nav-link px-2 text-secondary">Ürünler</a></li>
                    <li><a href="kendinyap.php" class="nav-link px-2 text-white">Kendin Yap</a></li>
                    <li><a href="hakkimizda.php" class="nav-link px-2 text-white">Hakkımızda</a></li>
                </ul>
                <div class="text-end">
                    <a class="btn btn-outline-light btn-floating m-1" href="cart.php" role="button"><i
                                class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>
    </header>
    <!--Header End-->
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
        body {
            font-family: -apple-system, ".SFNSText-Regular", 'Helvetica Neue', sans-serif;
            line-height: 1.5;
            color: $ grey;
            align-items: center;
            justify-content: center;
            background-color: $ background;
        / / -webkit-filter: hue-rotate(- 90 deg);
            position: relative;
        }

        img {
            max-width: 100%;
            height: auto;
            vertical-align: top;
        }


        a {
            text-decoration: none;
            color: inherit;
        }


        &
        :last-child {
            margin-bottom: 0;
        }

        }

        .btn {
            display: inline-block;
            color: $ white;
            text-align: center;
            padding: 1.75em 3.5em;
            white-space: nowrap;
            border-radius: 5px;

        }

        .product {
            position: relative;
            border-radius: 12px;
            background-color: $ white;
            transition: box-shadow $ time $ easing;
            border: 1px solid #939090;
            margin: 50px 25px 10px -1px;
            padding: 10px;
            text-align: center;

        }

        .product__image {
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
        }

        .product__title {
            font-size: 30px;
            color: #ffffff;
            margin: 0 0 0.5em 0;
            line-height: 1.1;
        }

        p {
            margin: 0 0 10px;
            color: #ffffff;
        }

        .product__price {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            top: -30px;
            left: -30px;
            width: 100px;
            height: 100px;
            background-color: #ffc107;
            color: rgba(0, 0, 0, 0.95);
            border-radius: 50%;

        }

        .product__btn {
            position: absolute;
            bottom: -30px;
            right: 30px;
            background-color: #ffc107;
            transition: background-color $ time $ easing, box-shadow $ time $ easing;


        &
        /*:hover {*/
        /*    @include shadow-dark;*/
        /*    background-color: mix($ accent, $ black, 95%);*/
        /*}*/

        }
        .nav-tabs a{
            color: #ffffff;
        }
        .nav-tabs{
            border-bottom: 5px solid #ffc107;

        }
        .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
            color: #ffc107;
            cursor: default;
            background-color: transparent;
            border: 5px solid #ffc107;
            border-bottom-color: transparent;
        }
        .nav > li > a:hover, .nav > li > a:focus {
            background-color: transparent;
            text-decoration: none;
            border-color: transparent;
        }
    </style>


    <main class="site-wrapper">

        <div class="pt-table desktop-768">
            <div class="pt-tablecell page-home relative" style="background-image: url(https://scontent.fesb3-2.fna.fbcdn.net/v/t1.6435-9/37904225_688725644825738_6160377175833837568_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=e3f864&_nc_ohc=mmYcEQ-g-N4AX9lbi4P&_nc_ht=scontent.fesb3-2.fna&oh=00_AT9iEiiSnIY863LcnCZ-Mg5islvP-jmzDMbr1QG03OxayQ&oe=620128D6);
    background-position: center;
    background-size: cover;">
                <div class="overlay"></div>
                    <div class="container" style="margin-bottom: 50px" >
                        <br>
                    <ul class="nav nav-tabs">
                        <?php
                        $sql = "select * from category order by categoryid asc limit 1";
                        $fquery = $conn->query($sql);
                        $frow = $fquery->fetch_array();
                        ?>
                        <li class="active"><a data-toggle="tab"
                                              href="#<?php echo $frow['catname'] ?>"><?php echo $frow['catname'] ?></a>
                        </li>
                        <?php

                        $sql = "select * from category order by categoryid asc";
                        $nquery = $conn->query($sql);
                        $num = $nquery->num_rows - 1;

                        $sql = "select * from category order by categoryid asc limit 1, $num";
                        $query = $conn->query($sql);
                        while ($row = $query->fetch_array()) {
                            ?>
                            <li><a data-toggle="tab"
                                   href="#<?php echo $row['catname'] ?>"><?php echo $row['catname'] ?></a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>

                    <div class="tab-content">
                        <?php
                        $sql = "select * from category order by categoryid asc limit 1";
                        $fquery = $conn->query($sql);
                        $ftrow = $fquery->fetch_array();
                        ?>
                        <div id="<?php echo $ftrow['catname']; ?>" class="tab-pane fade in active"
                             style="margin-top:20px;">
                            <?php

                            $sql = "select * from product where categoryid='" . $ftrow['categoryid'] . "'";
                            $pfquery = $conn->query($sql);
                            $inc = 4;
                            while ($pfrow = $pfquery->fetch_array()) {
                                $inc = ($inc == 4) ? 1 : $inc + 1;
                                if ($inc == 1) echo "<div class='row'>";
                                ?>
                                <div class="col-md-3" >
                                    <div class="row">

                                        <form method="post" action="Cart.php?action=add&id=<?php echo $pfrow["id"]; ?>">
                                            <div class="col-6 col-md-12 product">

                                                <span class="product__price"><?php echo $pfrow["price"]; ?> TL</span>
                                                <img class="product__image" src="<?php echo $pfrow["image"]; ?>">
                                                <h1 class="product__title"><?php echo $pfrow["pname"]; ?></h1>
                                                <p><?php echo $pfrow["pdescription"]; ?></p>
                                                <input type="text" name="quantity" class="form-control" value="1">
                                                <input type="hidden" name="hidden_name"
                                                       value="<?php echo $pfrow["pname"]; ?>">
                                                <input type="hidden" name="hidden_price"
                                                       value="<?php echo $pfrow["price"]; ?>">
                                                <input href="" type="submit" name="add" class="product__btn btn"
                                                       value="Sepete Ekle" </input>

                                                <br>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <?php
                                if ($inc == 4) echo "</div>";
                            }
                            if ($inc == 1) echo "<div class='col-md-3'></div><div class='col-md-3'></div><div class='col-md-3'></div></div>";
                            if ($inc == 2) echo "<div class='col-md-3'></div><div class='col-md-3'></div></div>";
                            if ($inc == 3) echo "<div class='col-md-3'></div></div>";
                            ?>
                        </div>
                        <?php

                        $sql = "select * from category order by categoryid asc";
                        $tquery = $conn->query($sql);
                        $tnum = $tquery->num_rows - 1;

                        $sql = "select * from category order by categoryid asc limit 1, $tnum";
                        $cquery = $conn->query($sql);
                        while ($trow = $cquery->fetch_array()) {
                            ?>
                            <div id="<?php echo $trow['catname']; ?>" class="tab-pane fade" style="margin-top:20px;">
                                <?php

                                $sql = "select * from product where categoryid='" . $trow['categoryid'] . "'";
                                $pquery = $conn->query($sql);
                                $inc = 4;
                                while ($prow = $pquery->fetch_array()) {
                                    $inc = ($inc == 4) ? 1 : $inc + 1;
                                    if ($inc == 1) echo "<div class='row'>";
                                    ?>
                                    <div class="col-md-3">
                                        <div class="row">

                                            <form method="post"
                                                  action="Cart.php?action=add&id=<?php echo $prow["id"]; ?>">
                                                <div class="col-6 col-md-12 product">

                                                    <span class="product__price"><?php echo $prow["price"]; ?> TL</span>
                                                    <img class="product__image" src="<?php echo $prow["image"]; ?>">
                                                    <h1 class="product__title"><?php echo $prow["pname"]; ?></h1>
                                                    <p><?php echo $prow["pdescription"]; ?></p>
                                                    <input type="text" name="quantity" class="form-control" value="1">
                                                    <input type="hidden" name="hidden_name"
                                                           value="<?php echo $prow["pname"]; ?>">
                                                    <input type="hidden" name="hidden_price"
                                                           value="<?php echo $prow["price"]; ?>">
                                                    <input href="" type="submit" name="add" class="product__btn btn"
                                                           value="Sepete Ekle" </input>


                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <?php
                                    if ($inc == 4) echo "</div>";
                                }
                                if ($inc == 1) echo "<div class='col-md-3'></div><div class='col-md-3'></div><div class='col-md-3'></div></div>";
                                if ($inc == 2) echo "<div class='col-md-3'></div><div class='col-md-3'></div></div>";
                                if ($inc == 3) echo "<div class='col-md-3'></div></div>";
                                ?>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

    </main>

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
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-twitter"></i></a>
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

