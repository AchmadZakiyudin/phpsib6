<?php
    $Mahasiswa = 'Achmad Zakiyudin';
    $matakuliah = 'PHP';
    $nilai =15; //input nilai

    //ternary
    $ket = ($nilai >=60) ? 'Lulus' : 'Gagal' ;

    //if
    if ($nilai >=85 && $nilai <=100) $grade= 'A';
    else if ($nilai >=75 && $nilai <=85) $grade= 'B';
    else if ($nilai >=60 && $nilai <=75) $grade= 'C';
    else if ($nilai >=35 && $nilai <=60) $grade= 'D';
    else $grade='E';

    //switchcase
    switch($grade){
        case 'A':
            $predikat='Memuaskan';
            break;
        case 'B':
            $predikat='Bagus';
        case 'C':
            $predikat='Cukup';
        case 'D':
            $predikat='Kurang';
        case 'E':
            $predikat='Kurang Sekali';
            break;
        default;
        $predikat = '';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Nama Mahasiswa : <?php echo $Mahasiswa ?></h2>
    <h2>Mata Kuliah : <?php echo $matakuliah ?></h2>
    <h2>Nilai : <?php echo $nilai ?></h2>
    <h2>Keterangan : <?php echo $ket ?></h2>
    <h2>Grade : <?php echo $grade ?></h2>
    <h2>Predikat : <?php echo $predikat ?></h2>

</body>
</html>

<!-- Nama Mahasiswa : Achmad Zakiyudin => variabel
Mata Kuliah : PHP => variabel
Nilai : 80 => input nilai
Keterangan : Lulus => Ternary
Grade : B => IF/Else
Predikat : Bangus => Switch/Case 
--> 