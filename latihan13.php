<?php
//contoh fungsi bawaan dari PHP
$str = 'Belajar PHP di kampus merdeka';
echo $str;

echo '<br>';

$str = strtoupper($str); //huruf kapital semua
echo $str;

echo '<br>';

$str = strtolower($str); //huruf kecil semua
echo $str;

// ucfirst 
// ucwords

echo '<br>';

$ar_buah = ['pepaya', 'mangga', 'pisang', 'jambu', 'apel'];
sort($ar_buah); //A-Z, Z-A = arsort
foreach ($ar_buah as $buah){
    echo "$buah <br>"; 
}

echo '<hr>';

//1. fungsi tanpa parameter/argumen (?)
function salam(){
    echo "Selamat Pagi Semuanya..";    
}
salam(); //cetak function

echo '<br>';

// 2. fungsi dengan parameter/argumen (...)
function sapa($kawan){
    echo "Selamat Pagi $kawan";
}
sapa("Rozir"); // cetak 1
echo '<br>';
$nama = 'Jamal';
sapa($nama); // cetak 2

echo '<br>';

// 3.fungsi dengan parameter/argumen beserta isinya
function kabar($kawan='Sabardi', $kawan2='Dono'){
    echo "Hai Apa Kabar $kawan $kawan2";
}
kabar(); // cetak 1
echo '<br>';
kabar("ahmad"); // cetak 2
echo '<br>';
$siswa = 'Budi';
kabar($siswa); // cetak 3

echo '<br>';

//fungsi dengan void (tidak mengembalikkan nilai)
function hitung($x, $y){
    $z = $x + $y;
    echo $z;
}
hitung(50,30);

echo '<br>';

//fungsi dengan return (mengembalikkan nilai)
function tambah($a, $b){
    $c = $a + $b;
    return $c;
}
echo tambah(50,30);

echo '<hr>';
//buat fungsi hitung umur
function hitungUmur($thn_lahir) {
    $thn_sekarang = 2024;
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
echo hitungUmur(2001);
echo '<br>';
echo 'Umur Saya Sekarang ' . hitungUmur(2003) . ' Tahun.' ;



?>