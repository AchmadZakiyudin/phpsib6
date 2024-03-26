<?php
// variabel

//cetak
echo 'Belajar PHP <br>';
echo 'Saya Senang Belajar "PHP" <br>';
print "Belajar MySQL";
echo '<hr>';

//Variabel User
$nama="Achmad Zakiyudin"; //data String
$alamat="Jawa Timur"; //data String
$umur=21; //data integer
$berat=59.5; //data float
$_pekerjaan="Karyawan";

//cetak User di PHP
echo $nama;
echo $alamat;
echo $umur;
echo $berat;
echo "<br>";
echo "nama saya $nama alamat $alamat <br>";
echo 'nama saya ' .$nama. ' alamat di '.$alamat. '<br>';
echo "Umur saya: $umur<br>";
echo "berat saya: $berat<br>";
echo 'Pekerjaan Saya: ' .$_pekerjaan. '<br>';
echo '<hr>';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel User</title>
</head>
<body>
    <h2>Nama Saya : <?php echo $nama ?></h2>
    <h2>Saya Berumur : <?= $umur ?> Tahun</h2>
    <hr>
</body>
</html>

<?php
// variabel system
echo $_SERVER['SERVER_ADMIN'];
echo "<br>";
echo $_SERVER['SERVER_PORT'];
echo "<hr>";

//variabel konstanta
//define : untuk memangil variabel konstanta
define('PELAJARAN','PHP Dasar');
echo "Ini Matakuliah: ".PELAJARAN;

echo "<hr>";

//operator aritmatika
$a=5;
$b=2;
echo $a+$b. '<br>';
echo $a-$b. '<br>';
echo $a*$b. '<br>';
echo $a/$b. '<br>';
echo $a%$b. '<br>'; //modulus(%), sisa pembagian
echo $a**$b. '<br>'; //pangkat
echo pow($a,$b). '<br>'; //pangkat
echo pow(2,3); //pangkat

echo "<hr>";

//SOAL:
// Diketahui jari-jarinya 15, maka berapa luas lingkaran dan keliling lingkaran dengan jari-jari tersebut?
// jika jari2: 15
// rumus phi: 3.14
// rumus luas: phi*(jari2*jari2)
// rumus keliling: 2*phi*jari2

define('PHI',3.14);
$jari2=15;
$luas=PHI*($jari2*$jari2);
$keliling=2*PHI*$jari2;

//cetak di dalam php
echo $jari2;
echo '<br>';
echo $luas;
echo '<br>';
echo $keliling;
echo '<br>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <!-- cetak di dalam html -->
    <p>Jari - jarinya adalah: <?= $jari2 ?></p>
    <hr>
</body>
</html>

<?php
//tipe data string
$itungstring="Belajar PHP di Kampus Merdeka";
var_dump($itungstring);
echo "<br>";

//mengetahui tipe variabel
$huruf="Zaki";
$hasil=gettype($huruf);
echo $hasil;
echo "<br>";

$bil=100;
$hasil=gettype($bil);
echo $hasil;
echo "<br>";

$bil2=7.50;
$hasil=gettype($bil2);
echo $hasil;
echo "<br>";

//buat nama lengkap dan alamat, cetak dengan menggunakan style css (style warna) menggunakan echo
?>

<hr>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        /* CSS Style */
        .nama {
            color: blue;
        }
        
        .alamat {
            color: green;
        }
    </style>
</head>
<body>
    <?php
        // Cetak dengan echo dan gaya CSS
        echo "<h2>Nama Lengkap: <span style='color: blue;'>$nama</span></h2>";
        echo "<h2>Alamat: <span style='color: green;'>$alamat</span></h2>";
    ?>
</body>
</html>