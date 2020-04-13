<?php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}
require 'functions.php';
$id = $_GET['id'];
$pakaian = query("SELECT * FROM pakaian WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $pakaian["gambar"]; ?>" alt="">
        </div>  
        <div class="keterangan"> 
            <p><?= $pakaian ["ukuran"]; ?></p>
            <p><?= $pakaian ["warna"]; ?></p>
            <p><?= $pakaian ["keterangan"]; ?></p>
            <p><?= $pakaian ["harga"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>