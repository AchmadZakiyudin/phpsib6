<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<h1>Form Input Nilai</h1>
<form action="latihan5.php" method="POST">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="">--- Pilihan Mata Kuliah ----</option>
        <option value="html">Html Dan Css</option>
        <option value="UI/UX">UI/UX</option>
        <option value="PHP">PHP</option>
        <option value="Laravel">Laravel</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Submit</button>
      <button name="unproses" type="reset" class="btn btn-success">Batal</button>
    </div>
  </div>
</form>

<?php
    $nama = $_POST['nama'];
    $matakuliah = $_POST['matkul'];
    $nilai = $_POST['nilai']; //input nilai
    $proses = $_POST['proses'];

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
    if(isset($proses)){ //sebagai pencegah error heandling

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Nama Mahasiswa : <?php echo $nama ?></h3>
    <h4>Mata Kuliah : <?php echo $matakuliah ?></h4>
    <h4>Nilai : <?php echo $nilai ?></h4>
    <h4>Keterangan : <?php echo $ket ?></h4>
    <h4>Grade : <?php echo $grade ?></h4>
    <h4>Predikat : <?php echo $predikat ?></h4>
    <?php } ?>
</body>
</html>

<!-- Nama Mahasiswa : Achmad Zakiyudin => variabel
Mata Kuliah : PHP => variabel
Nilai : 80 => input nilai
Keterangan : Lulus => Ternary
Grade : B => IF/Else
Predikat : Bangus => Switch/Case 
--> 