<?php
//fungsi IF
//jika umur lebih dari 20 tahun maka anda dapat mengendarai mobil
//jika umur lebih 17 tahun maka anda dapat mengendarai motor
//jika umur lebih 10 tahun maka anda dapat mengendarai sepeda
//selain itu tidak boleh
$umur=18; //ubah umurnya(input umur)
if ($umur > 20) {
    echo "Selamat Kamu Dapat Mengendarai Mobil";
} 
elseif ($umur > 17){
    echo "Selamat Kamu Dapat Mengendarai Motor";
}
elseif ($umur > 10) {
    echo "Selamat Kamu Dapat Mengendarai Sepeda";
}
else {
    echo "Kamu Dilarang Mengendarai Apapun";
}

echo '<hr>';

$nama= "Zaki";
$umur= 20;
$ket= "";

if ($umur <40 && $umur >=17) {
    $ket = "Kamu Sudah Dewasa";
}
elseif ($umur <17 && $umur >=9) {
    $ket = "Kamu Sudah Remaja";
}
elseif ($umur <9 && $umur >5) {
    $ket = "Kamu Masih Anak - Anak";
}
elseif ($umur <5 && $umur >0) {
    $ket = "Kamu Masih Balita";
}
else {
    $ket = "Kamu Tua";
}

echo "Nama Saya $nama Umur Saya $umur , $ket";

echo "<hr>";

//Cara if
$nilai=8;
if ($nilai >6) {
    echo "Baik";
}
else {
    echo "Buruk";
}

echo "<hr>";

//cara ternary
echo $nilai >6 ? "Baik" : "Buruk";

?>