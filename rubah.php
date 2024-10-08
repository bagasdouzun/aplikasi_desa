<?php
include 'koneksi.php';

$NIK=$_POST["NIK"];
$NAMA=$_POST["NAMA"];
$ALAMAT=$_POST["ALAMAT"];

$cek_kode=mysqli_query(mysql: $koneksi, query: "select * from warga where NIK='$NIK'");

$cek=mysqli_num_rows(result: $cek_kode);

if($cek>0) {
    $input=mysqli_query(mysql: $koneksi, query: "UPDATE warga SET NAMA='$NAMA', ALAMAT='$ALAMAT' WHERE NIK='$NIK' ");
echo "data berhasil diupdate";
}
else{
echo "data tidak ditemukan";}

?>