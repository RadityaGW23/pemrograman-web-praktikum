<?php
require 'functions.php';
$pakaian = query("SELECT * FROM pakaian");

if (isset($_GET['cari'])){
    $keyword = $_GET['keyword'];
    $pakaian = query("SELECT * FROM pakaian WHERE 
                ukuran LIKE '%keyword%' OR
                warna LIKE '%keyword%' OR
                keterangan LIKE '%keyword%' OR
                harga LIKE '%keyword%' ");
}else{
    $pakaian = query("SELECT * FROM pakaian");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="add">
        <a href="tambah.php"><button type="button" class="btn btn-primary btn-sm">Tambah Data</button></a><br>
    </div>
    <br>
    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari</button>
    </form>
    <br>
    <table border="1" cellpadding="13" cellsapcing="0">
        <tr>
            <th>#</th>
            <th>opsi</th>
            <th>Gambar</th>
            <th>Ukuran</th>
            <th>Warna</th>
            <th>Keterangan</th>
            <th>Harga</th>
        </tr>

        <?php if (empty($pakaian)) : ?>
            <tr>
                <td colspan="7">
                    <h1>Tidak Ditemukan</h1>
                </td>
            </tr>
        <?php else : ?>
            <?php $i = 1; ?>
                <?php foreach ($pakaian as $apparel) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td>
                            <div class="update"><a href="ubah.php?id=<?= $apparel['id'] ?>"><Ubah type="button" class="btn btn-primary btn-sm">Ubah</button></a></div>
                            <div class="delete"><a href="hapus.php?id=<?= $apparel['id'] ?>" onclick="return confirm('Hapus Data?')"><button type="button" class="btn btn-primary btn-sm">Hapus</button></a></div>
                        </td>
                        <td><img src="../assets/img/<?= $apparel["gambar"]; ?>" alt=""></td>
                        <td><?= $apparel ["ukuran"]; ?></td>
                        <td><?= $apparel ["warna"]; ?></td>
                        <td><?= $apparel ["keterangan"]; ?></td>
                        <td>Rp <?= $apparel ["harga"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
        <?php endif; ?>
</table>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>