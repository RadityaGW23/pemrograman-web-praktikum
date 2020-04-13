<?php
require 'php/functions.php';
$pakaian = query("SELECT * FROM pakaian")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    
</head>
<body>
<table border="2" cellspacing="0" cellpadding="10">
    <tr>
        <th><h3>No</h3></th>
        <th><h3>Gambar</h3></th>
        <th><h3>Ukuran</h3></th>
        <th><h3>Warna</h3></th>
        <th><h3>Keterangan</h3></th>
        <th><h3>Harga</h3></th>
    </tr>
    <?php $i = 1 ?>
    <?php foreach ($pakaian as $apparel) : ?>
        <tr>
            <td><?= $i ?></td>
            <td><img src="assets/img/<?=$apparel["gambar"]; ?>"></td>
            <td><?= $apparel ["ukuran"]; ?></td>
            <td><?= $apparel ["warna"]; ?></td>
            <td><?= $apparel ["keterangan"]; ?></td>
            <td><?= $apparel ["harga"]; ?></td>
        </tr>
        <?php $i++ ?>
    <?php endforeach; ?>

    </table>
</body>
</html>