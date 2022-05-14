<?php
require "connect.php";
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    // Lưu ý: http://localhost/api/apisanphamget.php?ten=sach&giatien=123
    $ma = $_GET['ma'];
    $query = "DELETE FROM `sanpham` WHERE `ma`='$ma'";
    if (mysqli_query($connect, $query)) {
        echo "Success";
    }
    else {
        echo "Erorr";
    }
}
?>