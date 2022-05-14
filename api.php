<?php
require "connect.php";
$query = "SELECT * FROM sanpham";
$resouter = mysqli_query($connect, $query);
$temparray = array();
$total_records = mysqli_num_rows($resouter);
if ($total_records >= 1) {
    while ($row = mysqli_fetch_assoc($resouter)) {
        $temparray[] = $row;
    }
}
// $resouter->close();
echo json_encode($temparray);
?>