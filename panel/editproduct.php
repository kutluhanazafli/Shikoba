<?php
include('conn.php');

$id = $_GET['product'];

$pname = $_POST['pname'];
$pdescription = $_POST['pdescription'];
$category = $_POST['category'];
$price = $_POST['price'];

$sql = "select * from product where id='$id'";
$query = $conn->query($sql);
$row = $query->fetch_array();

$fileinfo = PATHINFO($_FILES["image"]["name"]);

if (empty($fileinfo['filename'])) {
    $location = $row['image'];
} else {
    $newFilename = $fileinfo['filename'] . "." . $fileinfo['extension'];
    move_uploaded_file($_FILES["image"]["tmp_name"], "../../Shikoba/images/urunler/" . $newFilename);
    $location = "../../Shikoba/images/urunler/" . $newFilename;
}

$sql="update product set pname='$pname',pdescription='$pdescription', categoryid='$category', price='$price', image='$location' where id='$id'";
$conn->query($sql);

header('location:product.php');
?>