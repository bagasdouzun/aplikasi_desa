<?php
include 'koneksi.php';

$NIK=$_POST["NIK"];

$cek_kode=mysqli_query(mysql: $koneksi,query: "select * from warga where NIK='$NIK");

$cek=mysqli_num_rows(result: $cek_kode);

if($cek>0){
    $input=mysqli_query(mysql: $koneksi, query: "DELETE FROM warga WHERE NIK='$NIK' ");
echo "data berhasil didelete";
}
else{
echo "data tidak ditemukan";
}
?>