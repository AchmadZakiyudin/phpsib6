<?php
//Loping FOR
// Hitung penggulangan 1 s.d 10
for($x=1; $x<=10; $x=$x+2){
    echo "Saya Sedang belajar PHP Cuy <br>";
}

echo "<hr>";

//Hitung penggulangan 10 s.d 1
for($y=10; $y>=1; $y--){
    echo "$y <br>";
}

echo "<hr>";

//Loping While
// Hitung penggulangan 1 s.d 10
$j=1;
while($j<=10){
    echo "$j <br>";
    $j++;
}

echo "<hr>";

//Loping While
// Hitung penggulangan 1 s.d 10
$h=10;
while($h>=1){
    echo "$h <br>";
    $h--;
}



?>

<form action="">
    Jumlah Siswa:
    <?php
        for($z=1; $z<=10; $z=$z+1){
           echo '<input type="radio" name="jk" value="$z">'.$z;
        }
    ?>
</form>