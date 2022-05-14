<?php 
    $Servername="localhost";
    $UserName="root";
    $PassWord="root";
    $DataBase="app";
    $connect= new mysqli($Servername, $UserName, $PassWord, $DataBase);
    if ($connect->connect_error) {
        printf("Connect failed: %\n", $connect->connect_error);
        exit();
    }
?>