<?php
    $a1 = ['nama'=>'Achmad Zakiyudin','nim'=>'1111', 'nilai'=>95];
    $a2 = ['nama'=>'Dimas Kurniawan','nim'=>'2222', 'nilai'=>85];
    $a3 = ['nama'=>'Zidan Rifqi','nim'=>'3333', 'nilai'=>90];
    $a4 = ['nama'=>'Ilham Syabana','nim'=>'4444', 'nilai'=>80];
    $a5 = ['nama'=>'Muhammad Bahrudin','nim'=>'5555', 'nilai'=>60];
    $a6 = ['nama'=>'Sarah Fitriani','nim'=>'6666', 'nilai'=>75];
    $a7 = ['nama'=>'Rizky Fauzan','nim'=>'7777', 'nilai'=>60];
    $a8 = ['nama'=>'Nadia Putri','nim'=>'8888', 'nilai'=>55];
    $a9 = ['nama'=>'Andre Wijaya','nim'=>'9999', 'nilai'=>30];
    $a10 = ['nama'=>'Diana Nurul','nim'=>'1010', 'nilai'=>72];
    $a11 = ['nama'=>'Budi Santoso','nim'=>'1212', 'nilai'=>88];
    $a12 = ['nama'=>'Siti Rahmawati','nim'=>'1313', 'nilai'=>78];
    $a13 = ['nama'=>'Dewi Kusumawati','nim'=>'1414', 'nilai'=>60];
    $a14 = ['nama'=>'Agus Setiawan','nim'=>'1515', 'nilai'=>77];
    $a15 = ['nama'=>'Ani Susanti','nim'=>'1616', 'nilai'=>82];

    $ar_mahasiswa = [$a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9,$a10,$a11,$a12,$a13,$a14,$a15];

//deklarasikan nama2 Judul pada tabel header menggunakan looping array
    $ar_judul = ['No', 'Nama', 'NIM', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];

    $totalNilai = 0;
    $nilaiTertinggi = PHP_INT_MIN;
    $nilaiTerendah = PHP_INT_MAX;
    $jumlahmahasiswa = count($ar_mahasiswa);

foreach ($ar_mahasiswa as $mahasiswa) {

    $totalNilai += $mahasiswa['nilai'];
    $nilaiTertinggi = max($nilaiTertinggi, $mahasiswa['nilai']);
    $nilaiTerendah = min($nilaiTerendah, $mahasiswa['nilai']);
}

$nilaiRataRata = $totalNilai / $jumlahmahasiswa;
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Nilai Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: white;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tfoot {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h3 align="center">Daftar Nilai Mahasiswa</h3>
    <table border="1" cellpadding="10" cellspacing="2" width="100%">
        <thead>
            <tr>
                <?php foreach($ar_judul as $judul){ ?>
                <th><?= $judul ?></th>
                    
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach ($ar_mahasiswa as $mahasiswa){
            //ternary
            $ket = ($mahasiswa['nilai'] >=65) ? 'Lulus' : 'Gagal' ;

            //if
            if ($mahasiswa['nilai'] >=90 && $mahasiswa['nilai'] <=100) $grade= 'A';
            else if ($mahasiswa['nilai'] >=75 && $mahasiswa['nilai'] <=90) $grade= 'B';
            else if ($mahasiswa['nilai'] >=65 && $mahasiswa['nilai'] <=75) $grade= 'C';
            else if ($mahasiswa['nilai'] >=35 && $mahasiswa['nilai'] <=65) $grade= 'D';
            else $grade='E';
            
            switch ($grade) {
                case 'A':
                    $predikat = 'Memuaskan';
                    break;
                case 'B':
                    $predikat = 'Bagus';
                    break;
                case 'C':
                    $predikat = 'Cukup';
                    break;
                case 'D':
                    $predikat = 'Kurang';
                    break;
                case 'E':
                    $predikat = 'Kurang Sekali';
                    break;
                default:
                    $predikat = '';
            }
            
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $mahasiswa['nama'] ?></td>
                <td><?= $mahasiswa['nim'] ?></td>
                <td><?= $mahasiswa['nilai'] ?></td>
                <td><?= $ket ?></td>
                <td><?= $grade ?></td>
                <td><?= $predikat ?></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
        <tr>
                <td colspan="4">Nilai Tertinggi</td>
                <td colspan="3"><?= $nilaiTertinggi ?></td>
            </tr>
            <tr>
                <td colspan="4">Nilai Terendah</td>
                <td colspan="3"><?= $nilaiTerendah ?></td>
            </tr>
            <tr>
                <td colspan="4">Nilai Rata-rata</td>
                <td colspan="3"><?= number_format($nilaiRataRata, 2) ?></td>
            </tr>
            <tr>
                <td colspan="4">Jumlah Mahasiswa</td>
                <td colspan="3"><?= $jumlahmahasiswa ?><br></td>
            </tr>
            <tr>
                <td colspan="4">Jumlah Keseluruhan Nilai</td>
                <td colspan="3"><?= $totalNilai ?></td>
            </tr>
            <tr>
                <td colspan="7">&copy; Achmad Zakiyudin 2024</td>
            </tr>
        </tfoot>
    </table>
    </table>
</body>
</html>