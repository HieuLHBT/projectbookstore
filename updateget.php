<?php
require "connect.php";
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    // Lưu ý: http://localhost/api/apisanphamget.php?ma=1&ten=sach&giatien=123
    $ma = $_GET["ma"];
    $ten = $_GET["ten"];
    $giatien = $_GET['giatien'];
    $query = "UPDATE `sanpham` SET `ten`='$ten',`giatien`='$giatien' WHERE `ma`='$ma'";
    if (mysqli_query($connect, $query)) {
        echo "Success";
    }
    else {
        echo "Erorr";
    }
}
?>