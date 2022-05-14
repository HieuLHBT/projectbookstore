<?php
require "connect.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $ma = $_POST['ma'];
    $query = "DELETE FROM `sanpham` WHERE `ma`='$ma'";
    if (mysqli_query($connect, $query)) {
        echo "Success";
    }
    else {
        echo "Erorr";
    }
}
?>