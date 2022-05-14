<?php
require "connect.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $ten = $_POST['ten'];
    $giatien = $_POST['giatien'];
    $query = "INSERT INTO `sanpham`(`ten`, `giatien`) VALUES ('$ten', '$giatien')";
    if (mysqli_query($connect, $query)) {
        echo "Success";
    }
    else {
        echo "Erorr";
    }
}
?>