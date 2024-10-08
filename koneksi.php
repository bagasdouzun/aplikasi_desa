<?php
$hostname = "localhost";
$user = "root";
$password = "";
$database = "kelurahan";


$koneksi=mysqli_connect($hostname,$user,$password,$database);


if ($koneksi->connect_error) {
    die('Database Not Connect. Error : ' . $koneksi->connect_error);
}