<?php
$severname = "localhost";
$username = "root";
$password = "";
$database = "shoeslandshop";
$connect = new mysqli($severname, $username, $password, $database);
$connect->set_charset("utf8mb4");
if (mysqli_connect_errno()) {
    echo "loi ket noi" . mysqli_connect_error();
    exit();
}
