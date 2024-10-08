<?php
include 'koneksi.php';

$NIK=$_POST["NIK"];
$NAMA=$_POST["NAMA"];
$ALAMAT=$_POST["ALAMAT"];

$cek_kode=mysqli_query(mysql: $koneksi, query: "select * from warga where NIK='$NIK'");

$cek=mysqli_num_rows(result: $cek_kode);
if($cek>0) {
    echo "Data sudah ada";
    }
else{
    $input=mysqli_query(mysql: $koneksi, query: "insert into warga (NIK, NAMA, ALAMAT) values ('$NIK', '$NAMA', '$ALAMAT')");
    if($input) {
        echo"Data berhasil disimpan";
        }
    }
?>