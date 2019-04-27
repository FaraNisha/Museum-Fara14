<?php

$host = "localhost";
$db = "db_museum";
$uname = "root";
$pass = "";

$connect = mysqli_connect($host,$uname,$pass,$db);

if(! $connect){
    echo "Koneksi Gagal :" . mysqli_connect_error();
}

?>
