<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            width: 300px;
            margin: 0 auto;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Nilai Ujian</h2>
        <form action="objMahasiswa.php" method="POST">
            <label for="nim">NIM:</label><br>
            <input type="text" id="nim" name="nim"><br>
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama"><br>
            <label for="kuliah">Kuliah:</label><br>
            <input type="text" id="kuliah" name="kuliah"><br>
            <label for="matakuliah">Mata Kuliah:</label><br>
            <input type="text" id="matakuliah" name="matakuliah"><br>
            <label for="nilai">Nilai:</label><br>
            <input type="text" id="nilai" name="nilai"><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>

<?php
require_once 'Mahasiswa.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data dari form
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kuliah = $_POST['kuliah'];
    $matakuliah = $_POST['matakuliah'];
    $nilai = $_POST['nilai'];

    // Buat objek Mahasiswa
    $mahasiswa = new Mahasiswa($nim, $nama, $kuliah, $matakuliah, $nilai);

    // Cetak hasil dengan tabel
    echo '<div class="container">';
    echo '<h2>Daftar Nilai Ujian Mahasiswa</h2>';
    echo '<table border="1" style="width: 100%; border-collapse: collapse;">';
    echo '<tr>';
    echo '<th>NIM</th>';
    echo '<th>Nama</th>';
    echo '<th>Kuliah</th>';
    echo '<th>Mata Kuliah</th>';
    echo '<th>Nilai</th>';
    echo '<th>Grade</th>';
    echo '<th>Predikat</th>';
    echo '<th>Status</th>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>'.$mahasiswa->nim.'</td>';
    echo '<td>'.$mahasiswa->nama.'</td>';
    echo '<td>'.$mahasiswa->kuliah.'</td>';
    echo '<td>'.$mahasiswa->matakuliah.'</td>';
    echo '<td>'.$mahasiswa->nilai.'</td>';
    echo '<td>'.$mahasiswa->grade.'</td>';
    echo '<td>'.$mahasiswa->predikat.'</td>';
    echo '<td>'.$mahasiswa->status.'</td>';
    echo '</tr>';
    echo '</table>';
    echo '</div>';
}
?>