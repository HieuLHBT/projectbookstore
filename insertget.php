<?php
require "connect.php";
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    // Lưu ý: http://localhost/api/apisanphamget.php?ma=1&ten=sach&giatien=123
    $ten = $_GET["ten"];
    $giatien = $_GET['giatien'];
    $query = "INSERT INTO `sanpham`(`ten`, `giatien`) VALUES ('$ten', '$giatien')";
    if (mysqli_query($connect, $query)) {
        echo "Success";
    } else {
        echo "Erorr";
    }
}
