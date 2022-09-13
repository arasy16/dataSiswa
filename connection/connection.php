<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "sekolah";

$connection = mysqli_connect($server, $user, $password, $database);

if (!$connection) {
    echo "Koneksi Gagal :" . mysqli_connect_error();
}
