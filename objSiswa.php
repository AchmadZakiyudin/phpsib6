<?php
//sertakan file classnya
require_once 'Siswa.php';

//ciptakan objek
$ns1 = new Siswa('Zaki', 90, 'PHP');
$ns2 = new Siswa('Dono', 45, 'HTML');
$ns3 = new Siswa('Tina', 70, 'LARAVEL');

$ar_siswa = [$ns1,$ns2,$ns3];

//cetak
foreach ($ar_siswa as $sis){
    echo $sis->nama.'<br>';
    echo $sis->nilai.'<br>';
    echo $sis->pelajaran.'<br>';
}

//ciptakan objek
// $ns1 = new Siswa();
// $ns1->nama = "Zaki";
// $ns1->nilai = 90;
// $ns1->pelajaran = "PHP";

//Cetak
// echo $ns1->nama;
// echo $ns1->nilai;
// echo $ns1->pelajaran;
// echo $ns1->gethasil();


?>

<h2 align="center">Daftar Nilai Siswa</h2>
<table border="1" width="50%" align="center">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nilai</th>
            <th>Pelajaran</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $no=1;
        foreach ($ar_siswa as $sis){
            echo '<tr>';
            echo '<td>'. $no . '</td>';
            echo '<td>'. $sis->nama . '</td>';
            echo '<td>'. $sis->nilai . '</td>';
            echo '<td>'. $sis->pelajaran . '</td>';
            echo '<td>'. $sis->gethasil() . '</td>';
            echo '</tr>';
        $no++;
        }



    ?>
    </tbody>
</table>