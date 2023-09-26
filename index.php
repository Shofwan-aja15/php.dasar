<?php
include 'variabel.php';

// Gunakan variabel yang didefinisikan di variable.php
echo "Nama: " . $Nama . "<br>";
echo "Umur: " . $umur . "<br>";

// Gunakan operator pada variabel
$UmurSetahunLalu = $umur - 1;
echo "Umur satu tahun lalu: " . $UmurSetahunLalu . " tahun<br>";

$umurTahunDepan = $umur + 1;
echo "Umur tahun depan: " . $umurTahunDepan . " tahun<br>";

?>