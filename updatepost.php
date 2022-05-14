<?php
require "connect.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $ma = $_POST['ma'];
    $ten = $_POST['ten'];
    $giatien = $_POST['giatien'];
    $query = "UPDATE `sanpham` SET `ten`='$ten',`giatien`='$giatien' WHERE `ma`='$ma'";
    if (mysqli_query($connect, $query)) {
        echo "Success";
    }
    else {
        echo "Erorr";
    }
}
?>