<?php
session_start();
error_reporting(0);
include("mysql/baglan.php");

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
        </div>
    </header>
    <!--Header End-->
    <style>
        table, th, tr {
            text-align: center;
            color: #ffffff;
        }

        .title2 {
            text-align: center;
            color: #ffc107;

            padding: 2%;
        }

        h2 {
            text-align: center;
            color: #ffc107;
            background-color: #efefef;
            padding: 2%;
        }

        table th {
            background-color: #ffffff;
            color: #ffc107;
        }

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

        .btn-primary {
            color: #000000;
            background-color: #ffc107;
            border-color: #ffc107;
        }
    </style>
</head>

<div class="container-fluid">
    <div class="container" style="width: 65%">
        <div style="clear: both"></div>
        <h3 class="title2">Alışveriş Sepeti</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th width="30%">Ürün Adı</th>
                    <th width="10%">Adet</th>
                    <th width="13%">Fiyat</th>
                    <th width="10%">Toplam Fiyat</th>
                    <th width="17%">Ürünü Sil</th>
                </tr>

                <?php



                $id = $_SESSION['id'];
                $sql = "SELECT * FROM cart WHERE user_id=$id";
                $result = $conn->query($sql);

                $sql1 = "SELECT SUM(Quantity*price) AS total FROM cart where user_id=$id";
                $result1 = $conn->query($sql1);
                while ($row = $result->fetch_assoc()){
                $total = 0;
                $productid=$row["id"];


                ?>

                <tr>
                    <td><?php echo $row["pname"]; ?></td>
                    <td><?php echo $row["quantity"]; ?></td>
                    <td><?php echo $row["price"]; ?> TL</td>
                    <td>
                        <?php echo $row["quantity"] * $row["price"]; ?>
                        TL
                    </td>
                    <td><a href="cart.php?action=delete&id=<?php echo $row["id"]; ?>"><span
                                    class="text-danger" >Ürünü Sil</span></a></td>
                    <?php
                    }
                    ?>
                </tr>
                <?php while ($row1 = $result1->fetch_assoc()){ ?>
                <tr>
                    <td colspan="3" align="right">Toplam</td>
                    <th align="right"><?php echo $row1["total"]; }?> TL</th>
                    <td></td>

                </tr>

            </table>
            <?php
            if (isset($_GET["action"])) {
                if ($_GET["action"] == "delete") {
                    $sql2="DELETE FROM `cart` WHERE id=$productid";
                    $result2=$conn->query($sql2);
                    echo '<script>window.location="cart.php"</script>';
                }
            }
            ?>

            <div class="text-end">
                <a href="order.php" type="button" class="btn btn-warning">Sepeti Onayla</a>
            </div>
        </div>
    </div>
</div>
</div>
</div>

</main>

