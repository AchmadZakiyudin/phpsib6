<?php
//array adalah sekumpulan data
//array numerik dan array asosiatif

// 1. Array numerik
$ar_buah = ['Pepaya', 'Mangga', 'Pisang', 'Anggur', 'Jeruk'];

//cetak index ke ?
echo $ar_buah[4];
echo "<hr>";

//Tampilkan jumlah total pada buah
$jumlah = count($ar_buah);
echo $jumlah;
echo "<hr>";

//lihat hasil data buah dengan foreach
foreach ($ar_buah as $value){
    echo "$value <br>";
}
echo "<hr>";

// 2. Array Asosiatif
$ar_hewan = [10=>'Babi Ngepet', 20=>'Bebek', 'Kucing', 30=>'Putri Duyung', 'Anjing Galaxy'];
echo $ar_hewan[10];
echo "<hr>";

//lihat hasil data hewan dengan foreach
foreach ($ar_hewan as $id => $nama){
    echo "$id $nama <br>";
}
echo "<hr>";

// 3. Array Multidimensi (Array dalam array)
$daftar_tahanan = [
    ["nama" => "Budi", "Alamat" => "Depok", "Telp"=>12432, "Status" => "Jomblo"],
    ["nama" => "Alif", "Alamat" => "Bogor", "Telp"=>14332, "Status" => "Duda"],
    ["nama" => "Jamal", "Alamat" => "Mars", "Telp"=>19632, "Status" => "Jomblo Pirang"]
];

foreach ($daftar_tahanan as $namax){
    echo "$namax[nama] <br>";
    
}
echo "<hr>";

//3. ARRAY MULTIDIMENSI (ARRAY DALAM ARRAY)
//CARA 2:
$a1=["nama"=>"Budi", "Alamat"=>"Depok", "Telp"=>212345, "status"=>"Jomblo"];
$a2=["nama"=>"Alif", "Alamat"=>"Bogor", "Telp"=>898123, "status"=>"Duda"];
$a3=["nama"=>"Jamal", "Alamat"=>"Mars", "Telp"=>743863, "status"=>"Jomblo Gatel"];
$daftar_siswa = [$a1,$a2,$a3];
foreach ($daftar_siswa as $namaxx) {
    echo "$namaxx[nama] <br>";
}

?>