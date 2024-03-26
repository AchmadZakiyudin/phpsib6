<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Profile</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body bgcolor="lightgrey">

    <?php
    //variabel
    $nama = "Achmad Zakiyudin";
    $TTL = "Pasuruan, 30 April 2003";
    $email = "achmadzakiyudin27@gmail.com";
    $nomor_telepon = "089699607426";
    $alamat = "Jl. Kolursari Mendalan Kolursari Bangil Pasuruan Jawa Timur 67153";
    $kampus = "Universitas Yudharta Pasuruan";

    $hobi = "Mendengarkan Musik";
    $hobi1 = "Mendaki Gunung";
    $hobi2 = "Bermain Game";

    $style = "
    <style>
    p{
        color: rgb(39, 73, 210);
        text-align: center;
        font-family: 'Courier New', Courier, monospace;
        font-size: 12pt;
    }
    img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 250px;
        height: 250px;
        border-radius: 50%;
    }
    h2{
        text-align: center;
        font-size: 20pt;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    ul, li{
        color: rgb(39, 73, 210);
        text-align: center;
        font-family: 'Courier New', Courier, monospace;
        font-size: 12pt;
        text-decoration: none; 
        list-style-position: inside;
        padding: 2px 3px;
}
    <style>
    ";
    ?>

    <h1 align="center">
        <marquee behavior="alternate" scrollamount="20">
            Biodata Profile
        </marquee>
    </h1>
    <!-- <marquee behavior="alternate" scrollamount="20">Biodata Profile</marquee> -->
    <h2>Informasi Pribadi</h2>
    <img src="https://jogja.disway.id/upload/73074943dea10b010fffd766cdc66741.jpg" width="200" height="200">
    
    <!-- pemanggilan variabel / cetak variabel -->
    <p>Nama: <?php echo $nama ?> </p>
    <p>Tempat Tanggal Lahir: <?php echo $TTL ?></p>
    <p>Alamat: <?php echo $alamat ?></p>
    <p>Kampus : <?php echo $kampus ?></p>
    <p>Email : <?php echo $email ?></p>
    <p>Nomor Hp: <?php echo $nomor_telepon ?></p>

    <h2>Minat dan Hobi</h2>
    <ul>
        <li><?php echo $hobi ?></li>
        <li><?php echo $hobi1 ?></li>
        <li><?php echo $hobi2 ?></li>
    </ul>

    <?php echo $style; // Menampilkan CSS inline ?>
</body>
</html>