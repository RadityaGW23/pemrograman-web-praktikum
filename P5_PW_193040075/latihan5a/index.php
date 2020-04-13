<?php
$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
mysqli_select_db($conn, "tubes_193040075") or die("Database Salah!");
$result = mysqli_query($conn, "SELECT * FROM pakaian");
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
        <td><h3>No</h3></td>
        <td><h3>Gambar</h3></td>
        <td><h3>Ukuran</h3></h3></td>
        <td><h3>Warna</h3></h3></td>
        <td><h3>Keterangan</h3></td>
        <td><h3>Harga</h3></td>
    </tr>
    <?php $i = 1 ?>
    <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i ?></td>
            <td><img src="assets/img/<?=$row ["gambar"]?>"></td>
            <td><?= $row ["ukuran"]; ?></td>
            <td><?= $row ["warna"]; ?></td>
            <td><?= $row ["keterangan"]; ?></td>
            <td><?= $row ["harga"]; ?></td>
        </tr>
        <?php $i++ ?>
    <?php endwhile; ?>

    </table>
</body>
</html>