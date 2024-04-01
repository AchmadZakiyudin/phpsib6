<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori - Toko Buku</title>
</head>
<body>
    <h2>Kategori Buku</h2>
        
    <div class="category">
        <h3>Romantis</h3>
        <ul>
            <li>Buku Romantis 1</li>
            <li>Buku Romantis 2</li>
            <li>Buku Romantis 3</li>
        </ul>
    </div>
        
    <div class="category">
        <h3>Fiksi Ilmiah</h3>
        <ul>
            <li>Buku Fiksi Ilmiah 1</li>
            <li>Buku Fiksi Ilmiah 2</li>
            <li>Buku Fiksi Ilmiah 3</li>
        </ul>
    </div>
</body>
</html>

<style>
    body {
    background-color: lightblue;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
nav ul {
    list-style-type: none;
    padding: 0;
    text-align: center;
    background-color: #444;
    margin: 0;
}

nav ul li {
    display: inline;
}

nav ul li a {
    text-decoration: none;
    color: #fff;
    padding: 10px 20px;
    display: inline-block;
}

main {
    padding: 20px;
}

.category {
    margin-bottom: 30px;
}

.category h3 {
    background-color: #333;
    color: #fff;
    padding: 10px;
    margin: 0;
}

.category ul {
    list-style-type: none;
    padding: 0;
}

.category ul li {
    padding: 5px 0;
}

.back-btn {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
}

.back-btn:hover {
    background-color: #444;
}

</style>

