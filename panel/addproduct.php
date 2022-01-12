<?php
include('conn.php');

$pname = $_POST['pname'];
$pdescription = $_POST['pdescription'];
$price = $_POST['price'];
$category = $_POST['category'];

$fileinfo = PATHINFO($_FILES["image"]["name"]);

if (empty($fileinfo['filename'])) {
    $location = "";
} else {
    $newFilename = $fileinfo['filename'] . "." . $fileinfo['extension'];
    move_uploaded_file($_FILES["image"]["tmp_name"], "../../Shikoba/images/urunler/" . $newFilename);
    $location = "../../Shikoba/images/urunler/" . $newFilename;
}

$sql = "insert into product (pname,pdescription,categoryid, price, image) values ('$pname','$pdescription','$category', '$price', '$location')";
$conn->query($sql);

header('location:product.php');

?>