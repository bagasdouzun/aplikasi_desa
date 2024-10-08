<?php
include 'koneksi.php';


$data=mysqli_query($koneksi,"select * from warga ");


while($result=mysqli_fetch_array($data)){
echo $result["NIK"];
echo"\n";
echo $result["NAMA"];
echo"\n";
echo $result["ALAMAT"];
echo"||";
}
?>
